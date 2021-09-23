<?php namespace App\Controllers;

use App\Models\UserModel;

use App\Models\BookTemplateModel;

use App\Models\AvatarSkinModel;

use App\Models\AvatarHairModel;

use App\Models\PageModel;

use App\Models\AvatarModel;

use App\Models\BookCoverModel;

use App\Models\CartModel;

use App\Models\MessageModel;

class Front extends BaseController
{
	
	public function __construct()
    {
       // Site cookie
        if(empty($_COOKIE["_xhv"]))
	    {
	   
    	  $GUID = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));;
    	  $cookie_name = "_xhv";
          $cookie_value = $GUID;
          setcookie($cookie_name, $cookie_value, time() + (10 * 365 * 24 * 60 * 60), "/");
	    }

    }

	public function index()
	{

		$bookTemplateModel = new BookTemplateModel();
		$data['featured1'] = $bookTemplateModel->where('ffeatured', 1)->where('active', 1)->first();
		$data['featured2'] = $bookTemplateModel->where('ffeatured', 2)->where('active', 1)->first();
		$data['featured3'] = $bookTemplateModel->where('ffeatured', 3)->where('active', 1)->first();
		//var_dump($data['featured2']);
		return view('front/index', $data);
	
	}

	public function register()
	{
		
		return view('front/register');
	}

	public function registeraction()
	{
		if (! $this->validate([
			'firstname' => "required|trim|alpha",
			'lastname' => "required|trim|alpha",
			'email' => [
				'rules' => 'required|trim|is_unique[tcustomers.femail]|valid_email',
				'errors' => [
						'required' => 'Please input email or phone. Email or Phone is required!',
						'is_unique' => 'Email Address already in use. Use a different one.',
						'valid_email' => 'Invalid Email format'
				]
			],
			'psd1' => [
						'label'  => 'Password',
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Password field is required!',
							]
						],
        	'psd2' => [
				'rules' => 'required|matches[psd1]',
				'errors' => [
						'required' => 'Confirm Password field is required!',
						'matches' => 'The Confirm Password field does not match the Password field.',
				]
			],
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('/register'));
		}

		$token2 = openssl_random_pseudo_bytes(16);
		$token = bin2hex($token2);

		$model = new UserModel();

		$data = [
            'ffirst_name' => $this->request->getPost('firstname'),
            'flast_name'  => $this->request->getPost('lastname'),
			'femail'  => $this->request->getPost('email'),
			'fpass_word'  => password_hash($this->request->getPost('psd1'),PASSWORD_DEFAULT),
			'ftoken'  => $token,
			];

		//var_dump($data);
		$model->insert($data);
		$inserted = $model->affectedRows();
		if($inserted > 0)
		{

			$email = \Config\Services::email();

			$email->setFrom('your@example.com', 'Your Name');
			$email->setTo($this->request->getPost('email'));

			$email->setSubject('Email Test');
			$email->setMessage('Testing the email class.');

			
			if ($email->send()) 
			{
				session()->setFlashdata('success', 'Verification Email sent to your email. Check to activate account');
				return redirect()->to(base_url('/'));
			} 
			else 
			{
				session()->setFlashdata('error', 'Error in sending verification email. Click Resend button to retry');
				return redirect()->to(base_url('/'));
			}

		}
	}

	
	public function login()
	{
		return view('front/login');
	}

	public function loginaction()
	{
		if (! $this->validate([

			'email' => 'required|trim|valid_email',
			'psd1'  => 'required|trim',
    
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('/login'));
		}

		$email  = $this->request->getPost('email');
		$pass_word  = $this->request->getPost('psd1');

		//check credentials
		$user = new UserModel();
		$user_details = $user->where('femail', $email)->first();
		
		if(!empty($user_details))
		{
			$authorized = $user->where('femail', $email)->where('factive', 1)->first();

			if(!empty($authorized))
			{

				$validate = password_verify($pass_word, $authorized['fpass_word']);
				//var_dump($validate);
				if($validate)
				{
					$book = new BookTemplateModel();
					$has_book = $book->where('fpartner_email', $email)->findAll();
					$count = count($has_book);

					if($count > 0)
					{
						session()->set('has_book', 'yes');
					}


					$sessiondata = [
						'firstname' => $user_details['ffirst_name'],
						'lastname' => $user_details['flast_name'],
						'email' =>   $user_details['femail'],
					];

					session()->set($sessiondata);

					return redirect()->to(base_url('/'));

				}
				else
				{
					session()->setFlashdata('error', "Wrong Password");
					return redirect()->to(base_url('/login'));
				}

			}
			else
			{
				session()->setFlashdata('error', "Your account is not yet activated. Check the verification mail sent to your email");
				return redirect()->to(base_url('/'));
			}

		}
		else
		{
			session()->setFlashdata('error', "The email provided does not exist in the system");
			return redirect()->to(base_url('/login'));
		}

		
	}


	public function forgot()
	{
		return view('front/forgot');
	}

	public function forgetpasswordaction()
	{
	    if (! $this->validate([

			'email' => 'required|trim|valid_email'
			
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('/forgot'));
		}
	    
			$email  = $this->request->getPost('email');
    	    $user = new UserModel();
			$user_details2 = $user->where('femail', $email)->first();
			$user_details = (object)$user_details2;
			//var_dump($user_details);
    	    if(is_null($user_details2))
    	    {
				
				session()->setFlashdata('error', 'Sorry! Email not registered in the system.');
				return redirect()->to(base_url('/forgot'));
    	    }
    	    else
    	    {
    	        $token2 = openssl_random_pseudo_bytes(16);
                $token = bin2hex($token2);
                $email = $user_details->femail;
				 
				 $data = [
					'ftoken' => $token,
					'femail'  => $email,
					];
                
				  $db  = \Config\Database::connect();
				  $db->table('tpass_word_resets')->insert($data);
				  $inserted = $db->affectedRows();
				
    	        if($inserted > 0)
    	        {
    	            // $email = \Config\Services::email();
					// $email->setFrom('your@example.com', 'Your Name');
					// $email->setTo('excanny@yahoo.com');
					// $email->setCC('another@another-example.com');
					// $email->setBCC('them@their-example.com');

					// $email->setSubject('Email Test');
					// $email->setMessage('Testing the email class.');

					// $email->send();

					// $email->printDebugger(['headers']);

					session()->setFlashdata('success', 'Reset link sent successfully. Check your email folders.');
					return redirect()->to(base_url('/forgot'));
        		    
				}
				else
				{
					session()->setFlashdata('error', 'Error occurred. Try again');
					return redirect()->to(base_url('/forgot'));
				}
    	    }
       
	}

	public function verifytoken()
	{
	//    $email = $this->uri->segment(3);
	//    $token = $this->uri->segment(4);
	//    $row = $this->User_model->VerifyToken($email, $token);
	//    //var_dump($row);
	//    if(!empty($row))
	//    {
	// 	  $this->session->set_userdata('create_password', 'ok');
	//       $this->session->set_userdata('recover_email', $email);
	//       redirect('w/CreatePassword');
	//    }
	//    else
	//    {
	// 	  $this->session->set_flashdata('error', 'Wrong or invalid token. Resend verification or reclick reset link in your email'); 
    // 	   redirect('w/ForgotPassword');
	//    }
	}
	
	public function createpassword()
	{
	    // if (!$this->session->userdata('create_password'))
		// {
		//     $this->session->set_flashdata('error', 'Wrong or invalid token.');  
		// 	redirect('w/ForgotPassword'); // the user is not logged in, redirect them!
		// }

		
	    // $this->load->view('main/create_password');
	}

	public function CreatePasswordAction()
	{
	    // $this->form_validation->set_rules('pssd', 'Password', 'trim|required');
        // $this->form_validation->set_rules('pssd2', 'Retype Password', 'trim|required|matches[pssd]');
        // if ($this->form_validation->run() == FALSE)
        // {
		// 	$this->session->set_flashdata('error', validation_errors());
		// 	redirect('w/CreatePassword');
			
        // }
        // else
        // {
        //     $email = $this->session->userdata('recover_email');
        //     $new_password = password_hash($this->input->post('pssd2'),PASSWORD_DEFAULT);
        //     $updated = $this->User_model->UpdatePassword($email, $new_password);
        //     if($updated > 0)
		// 	{
		// 		$this->session->set_flashdata('success', 'Password changed successfully. You can login now');
		// 		redirect('w/login');
		// 	}
		// 	else
		// 	{
		// 		$this->session->set_flashdata('error', 'Error occured. Retry.');
		// 			redirect('w/createpassword');
		// 	}
        // }
	}

	public function dashboard()
	{
		if(!session()->email)
		{
			return redirect()->to(base_url('/login'));
		}

		return view('user/index');
		
	}

	public function compose()
	{
		$message_model = new MessageModel();

		$data['inbox'] = $message_model->where('fto', session()->email)->groupBy('fmessage_id')->orderBy('created_at', 'desc')->findAll();
		$data['inbox_count'] = count($data['inbox']);

		$data['sent'] = $message_model->where('ffrom', session()->email)->groupBy('fmessage_id')->orderBy('created_at', 'desc')->findAll();
		$data['sent_count'] = count($data['sent']);

		return view('user/messages_compose', $data);
		
	}

	public function addmessageaction()
	{
		//var_dump($this->request->getPost());
		if (! $this->validate([
			
			'subject' => [
						'label'  => 'Subject',
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Subject field is required!',
							]
						],
        	'message' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Message field is required!',
				]
			],
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('dashboard/messages'));
		}


		$message_model = new MessageModel();

		$data = [

			'fsubject' => $this->request->getPost('subject'),
			'fsubject_slug' => $this->request->getPost('subject_slug'),
			'fsubject_id'  => time(),
			'fmessage'  => $this->request->getPost('message'),
			'ffrom'  => $this->request->getPost('from'),
			'fto'  => $this->request->getPost('to'),
			'fshopper_email'  => $this->request->getPost('from'),
			'fshopper_name'  => $this->request->getPost('shopper_name'),

			];

		//var_dump($data);

		$message_model->insert($data);
		$inserted = $message_model->affectedRows();
		if($inserted > 0)
		{

			session()->setFlashdata('success', 'Message sent successfully');
			return redirect()->to(base_url('dashboard/messages'));
		}

	}

	public function messagesinbox()
	{
		if(!session()->email)
		{
			return redirect()->to(base_url('/login'));
		}

		$message_model = new MessageModel();

		$data['inbox'] = $message_model->where('fto', session()->email)->groupBy('fmessage_id')->where('fdeleted', null)->orderBy('created_at', 'desc')->findAll();
		$data['inbox_count'] = count($data['inbox']);

		$data['sent'] = $message_model->where('ffrom', session()->email)->groupBy('fmessage_id')->where('fdeleted', null)->orderBy('created_at', 'desc')->findAll();
		$data['sent_count'] = count($data['sent']);


		$data['trash'] = $message_model->where('fshopper_email', session()->email)->groupBy('fmessage_id')->where('fdeleted', '!=', null)->orderBy('created_at', 'desc')->findAll();


		//var_dump($data['trash']);

		return view('user/messages_inbox', $data);
		
	}

	public function messagessent()
	{
		if(!session()->email)
		{
			return redirect()->to(base_url('/login'));
		}

		$message_model = new MessageModel();

		$data['inbox'] = $message_model->where('fto', session()->email)->groupBy('fmessage_id')->orderBy('created_at', 'desc')->findAll();
		$data['inbox_count'] = count($data['inbox']);

		$data['sent'] = $message_model->where('ffrom', session()->email)->groupBy('fmessage_id')->orderBy('created_at', 'desc')->findAll();
		$data['sent_count'] = count($data['sent']);

		$data['trash'] = $message_model->where('fshopper_email', session()->email)->groupBy('fmessage_id')->where('fdeleted', '!=', null)->orderBy('created_at', 'desc')->findAll();
		//var_dump($data['inbox']);

		return view('user/messages_sent', $data);
		
	}

	public function messagesdrafts()
	{
		if(!session()->email)
		{
			return redirect()->to(base_url('/login'));
		}

		$message_model = new MessageModel();

		$data['inbox'] = $message_model->where('fto', session()->email)->groupBy('fmessage_id')->orderBy('created_at', 'desc')->findAll();
		$data['inbox_count'] = count($data['inbox']);

		$data['sent'] = $message_model->where('ffrom', session()->email)->groupBy('fmessage_id')->orderBy('created_at', 'desc')->findAll();
		$data['sent_count'] = count($data['sent']);

		$data['trash'] = $message_model->where('fshopper_email', session()->email)->groupBy('fmessage_id')->where('fdeleted', '!=', null)->orderBy('created_at', 'desc')->findAll();
		//var_dump($data['inbox']);

		return view('user/messages_drafts', $data);
		
	}

	public function messagestrash()
	{
		if(!session()->email)
		{
			return redirect()->to(base_url('/login'));
		}

		$message_model = new MessageModel();

		$data['inbox'] = $message_model->where('fto', session()->email)->where('fdeleted', null)->groupBy('fmessage_id')->orderBy('created_at', 'desc')->findAll();
		$data['inbox_count'] = count($data['inbox']);

		$data['sent'] = $message_model->where('ffrom', session()->email)->where('fdeleted', null)->groupBy('fmessage_id')->orderBy('created_at', 'desc')->findAll();
		$data['sent_count'] = count($data['sent']);

		$data['trash'] = $message_model->where('fshopper_email', session()->email)->groupBy('fmessage_id')->where('fdeleted', '!=', null)->orderBy('created_at', 'desc')->findAll();
		//var_dump($data['inbox']);

		return view('user/messages_trash', $data);
		
	}

	public function messageread($msg_id)
	{
		if(!session()->email)
		{
			return redirect()->to(base_url('/login'));
		}

		$message_model = new MessageModel();

		$data['inbox'] = $message_model->where('fto', session()->email)->where('fdeleted', null)->groupBy('fmessage_id')->orderBy('created_at', 'desc')->findAll();
		$data['inbox_count'] = count($data['inbox']);

		$data['sent'] = $message_model->where('ffrom', session()->email)->where('fdeleted', null)->groupBy('fmessage_id')->orderBy('created_at', 'desc')->findAll();
		$data['sent_count'] = count($data['sent']);

		$data['trash'] = $message_model->where('fshopper_email', session()->email)->groupBy('fmessage_id')->where('fdeleted', '!=', null)->orderBy('created_at', 'desc')->findAll();
		

		$data['subject_messages'] = $message_model->where('fsubject_id', $msg_id)->orderBy('created_at', 'desc')->findAll();
		//var_dump($data['subject_messages']);

		return view('user/message_read', $data);
		
	}

	public function orders()
	{
		return view('user/orders');
		
	}

	public function partnerbooks()
	{
		if(!session()->has_book)
		{
			return redirect()->to(base_url('dashboard'));
		}

		$bookTemplateModel = new BookTemplateModel();
		$data['my_books'] = $bookTemplateModel->where('fpartner_email', session()->email)->orderBy('frecno', 'desc')->findAll();

		return view('user/partner-books', $data);
	}

	public function partnerbook($book_slug)
	{
		if(!session()->email)
		{
			return redirect()->to(base_url('/login'));
		}

		$bookTemplateModel = new BookTemplateModel();
		$data['partnerbook'] = $bookTemplateModel->where('fbook_slug', $book_slug)->first();

		//var_dump($data);
		return view('user/partner-book', $data);
	}

	public function personalize($slug)
	{
		// $model = new PageModel();
		// $data['pages'] = $model->where('fbook_slug', $slug)->orderBy('fpage_no', 'asc')->findAll();

		 $bookTemplateModel = new BookTemplateModel();
		 $data['book_details'] = $bookTemplateModel->where('fbook_slug', $slug)->first();
		// //var_dump($data['single_template']);
		 return view('front/book', $data);
	}

	public function personalizeaction($slug)
	{
		
		if (! $this->validate([
			'child_name' => "required|trim|alpha",
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('personalize/'.$slug));
		}


		$data = [
			'child_name' => $this->request->getPost('child_name'),
		];

		session()->set('child_name', $this->request->getPost('child_name'));
		session()->set('price', $this->request->getPost('price'));
		session()->set('book_title', $this->request->getPost('book_title'));

		$book_cover = new BookCoverModel();
		$data['book_cover'] = $book_cover->where('fbook_slug', $slug)->where('fis_front', 1)->findAll();

		$data['slug'] = $slug;
	
		//var_dump($data);

		return view('front/book-customize', $data);

	}

	public function preview($slug)
	{
		//var_dump($this->request->getPost());
		$gender  = $this->request->getPost('gender');

		$skin_colour  = $this->request->getPost('skin_colour');


		$data = [
			'book_slug' => $slug,
			'gender' => $gender,
			'skin_colour' => $skin_colour,
			'child_name' => $this->request->getPost('child_name'),
			
		];

		 $bookcover = new BookCoverModel();

		if($gender == "Boy")
		{
			$data['frontcover'] = $bookcover->where('fbook_slug', $slug)->where('fis_front', 1)->where('fgender', "Boy")->where('fskin_colour', $skin_colour)->findAll();
			$data['backcover'] = $bookcover->where('fbook_slug', $slug)->where('fis_front', 0)->where('fgender', "Boy")->where('fskin_colour', $skin_colour)->findAll();
		}
		else if($gender == "Girl")
		{
			$data['frontcover'] = $bookcover->where('fbook_slug', $slug)->where('fis_front', 1)->where('fgender', "Girl")->where('fskin_colour', $skin_colour)->findAll();
			$data['backcover'] = $bookcover->where('fbook_slug', $slug)->where('fis_front', 0)->where('fgender', "Girl")->where('fskin_colour', $skin_colour)->findAll();
		}
		
		$page = new PageModel();

		if($gender == "Boy")
		{
			$data['innerpages'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', $skin_colour)->orderBy('fpage_no', 'asc')->findAll();
			
		}
		else if($gender == "Girl")
		{
			$data['innerpages'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', $skin_colour)->orderBy('fpage_no', 'asc')->findAll();
			
		}
		
		//var_dump($data);
		return view('front/flipbook', $data);
	}

	public function addtocart()
	{
		//var_dump($this->request->getPost());

		$bookModel = new BookTemplateModel();

		$image = $bookModel->where('fbook_slug', $this->request->getPost('book_slug'))->first();
		
		// If shopper is logged in
		if(session()->email)
		{
			$shopper_first_name  = session()->first_name;
			$shopper_last_name  =  session()->last_name;
			$shopper_email  =  session()->email;
		}
		else	
		{
			$shopper_first_name  = '';
			$shopper_last_name  =  '';
			$shopper_email  =  '';
		}

		$data = [
			'fbook_slug' => $this->request->getPost('book_slug'),
			'fbook_title' => session()->book_title,
			'fposter_image' => $image['fposter_image'],
            'fgender'  => $this->request->getPost('gender'),
			'fskin_colour'  => $this->request->getPost('skin_colour'),
			'fquantity'  => 1,
			'fprice'  => session()->price,
			'fchild_first_name'  => session()->child_name,
			'fshopper_first_name'  => $shopper_first_name,
			'fshopper_last_name'  => $shopper_last_name,
			'fcustomer_email'  => $shopper_email,
			'fcustomer_cookie' => $_COOKIE["_xhv"]
			];

			$cart = new CartModel();

			$cart_exists = $cart->where('fbook_slug', $this->request->getPost('book_slug'))->where('fcustomer_cookie', $_COOKIE["_xhv"])->findAll();

			
			
			if(empty($cart_exists))
			{
				$inserted = $cart->insert($data);
				if($inserted > 0)
				{
					session()->setFlashdata('success', 'Added to cart successfully');
					return redirect()->to(base_url('cart'));
				}
				else
				{
					session()->setFlashdata('error', 'Cart not updated');
					return redirect()->to(base_url('preview/'. $this->request->getPost('book_slug')));
				}
			}
			else
			{
				$cart_details = $cart->where('fbook_slug', $this->request->getPost('book_slug'))->where('fcustomer_cookie', $_COOKIE["_xhv"])->first();
				$quantity = intval($cart_details['fquantity']);
				$quantity2 = $quantity + 1;
				//var_dump($cart_details['frecno']);

				$updated = $cart->update($cart_details['frecno'], ['fquantity' => $quantity2]);
				if($updated > 0)
				{
					session()->setFlashdata('success', 'Added to cart successfully');
					return redirect()->to(base_url('cart'));
				}
				else
				{
					session()->setFlashdata('error', 'Cart not updated');
					return redirect()->to(base_url('preview/'. $this->request->getPost('book_slug')));
				}
	
			}
	}

	public function cart()
	{
		$cart = new CartModel();
		$data['cart_details'] = $cart->where('fcustomer_cookie', $_COOKIE["_xhv"])->findAll();

		//var_dump($cart_details);
		return view('front/cart', $data);
	}


	public function cartdetails()
	{
		$cart = new CartModel();
		$cart_details = $cart->where('fcustomer_cookie', $_COOKIE["_xhv"])->findAll();

		$output = "";
		$total_item = 0;
		$url = site_url();

		if(empty($cart_details))
		{
			$output .= '
				<div class="section-content">
					<div class="row">
							<div class="col-md-12">
								<div class="table-responsive" >
								<table class="table table-striped table-bordered tbl-shopping-cart">
								<thead>
									<tr>
									<th></th>
									<th>Photo</th>
									<th>Book Name</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
									</tr>
								</thead>
								<tbody >
						<tr>
							
							<td colspan="6" class="text-center">Your cart is empty</td>
						</tr>

						</tbody>
					</table>
					</div>
					</div>
				</div>
				</div>
						
					';
		}
		else
		{
			$output .= ' 
			<div class="section-content">
					<div class="row">
							<div class="col-md-12">
								<div class="table-responsive" >
								<table class="table table-striped table-bordered tbl-shopping-cart">
								<thead>
									<tr>
									<th></th>
									<th>Photo</th>
									<th>Book Name</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
									</tr>
								</thead>
								<tbody >';

			foreach($cart_details as $cart)
			{
				$total_item = $total_item + 1;

				$sub_total = $cart['fquantity'] * $cart['fprice'];

				$shipping = 2000;

				$grand_total = $sub_total + $shipping;
				
				$output .= '
				
					<tr class="cart_item">
					<td class="product-remove"><a title="Remove this item" class="remove text-danger cursor" data-cart_item_id="'.$cart['frecno'].'">×</a></td>
					<td class="product-thumbnail"><a href="#"><img alt="member" src="'.$url. 'public/book_posters/'.  $cart['fposter_image'].'"></a></td>
					<td class="product-name"><a href="#">'.$cart['fbook_title'].'</a>
						<ul class="variation">
						<li class="variation-size">Color: <span>Black</span></li>
						</ul></td>
					<td class="product-price"><span class="amount">$'.number_format($cart['fprice'], 2).'</span></td>
					<td class="product-quantity"><div class="quantity buttons_added">
						<input type="button" class="minus" value="-" data-book_slug="'.$cart['fbook_slug'].'">
						<input type="number" size="4" class="input-text qty text" title="Qty" value="'.$cart['fquantity'].'" name="quantity" min="1" step="1" >
						<input type="button" class="plus" value="+" data-book_slug="'.$cart['fbook_slug'].'">
						</div></td>
					<td class="product-subtotal"><span class="amount">$'.number_format(($cart['fquantity'] * $cart['fprice']), 2).'</span></td>
					</tr>
					
				';
			}

			$output .='
						</tbody>
					</table>
					</div>
					</div>
					<div class="col-md-12 mt-30">
					<div class="row">
						<div class="col-md-6">
						<h4>Calculate Shipping</h4>
						
							<table class="table no-border">
							<tbody>
								<tr>
								<td><select class="form-control">
									<option>Select Country</option>
									<option>Australia</option>
									<option>UK</option>
									<option>USA</option>
									</select></td>
								</tr>
								<tr>
								<td><input type="text" class="form-control" placeholder="State/country" value=""></td>
								</tr>
								
							</tbody>
							</table>
						</form>
						</div>
						<div class="col-md-6">
						<h4>Cart Totals</h4>
						<table class="table table-bordered">
							<tbody>
							<tr>
								<td>Cart Subtotal</td>
								<td>$'.number_format(($cart['fquantity'] * $cart['fprice']), 2).'</td>
							</tr>
							<tr>
								<td>Shipping and Handling</td>
								<td>$'.number_format($shipping, 2).'</td>
							</tr>
							<tr>
								<td>Order Total</td>
								<td>$'.number_format($grand_total, 2).'</td>
							</tr>
							</tbody>
						</table>
						<a class="btn btn-primary">Continue Shopping</a>
						<button form="myform" type="submit" class="btn btn-success pull-right">PAY</button>
						<form id="myform" class="form-inline" action="'.$url. 'front/pay'.'" >
							
						</form>
						
						
						</div>
					</div>
					</div>
				</div>
				</div>';

		}

		$data = array(
			'cart_details' =>	$output,
			'total_item'		=>	"(" . $total_item . ")",
		);	

		return $this->response->setJSON($data);
	}


	public function cartdetailsmodal()
	{
		$cart = new CartModel();
		$cart_details = $cart->where('fcustomer_cookie', $_COOKIE["_xhv"])->findAll();
		$output = "";
		$total_item = 0;

		$url = site_url();

		if(empty($cart_details))
		{
			$output .= '
						<tr>
							
							<td>Your cart is empty</td>
						</tr>
						
					';
		}
		else
		{
			
			$output .='
				<table class="table cart-table-list table-responsive">
				<tbody>
			';

			foreach($cart_details as $cart)
			{
				$total_item = $total_item + 1;
				
				$output .= '
			
					<tr>
						<td><a href="#"><img alt="" src="<?php echo base_url();?>/public/assets2/images/products/sm1.jpg"></a></td>
						<td><a href="#">'.$cart['fbook_title'].'</a></td>
						<td>X'.$cart['fquantity'].'</td>
						<td>$'.number_format(($cart['fquantity'] * $cart['fprice']), 2).'</td>
						<td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
					</tr>
					
				';
			}

			$output .='
						</tbody>
						</table>
					<div class="total-cart text-right">
						<table class="table table-responsive">
						<tbody>
							<tr>
							<td>Cart Subtotal</td>
							<td>$100.00</td>
							</tr>
							<tr>
							<td>Shipping and Handling</td>
							<td>$20.00</td>
							</tr>
							<tr>
							<td>Order Total</td>
							<td>$120.00</td>
							</tr>
						</tbody>
						</table>
					</div>
					<div class="cart-btn text-right">
						<a class="btn btn-theme-color-sky btn-xs" href="'.$url.'cart"> View cart</a>
						<a class="btn btn-dark btn-xs" href="#"> Checkout</a>
					</div>
			';

		}

		// $output .='';

		$data = array(
			'cart_details_modal' =>	$output,
			'total_item'		=>	"(" . $total_item . ")",
		);	

		return $this->response->setJSON($data);
	}



	public function updatecart()
	{
		$book_slug = $this->request->getPost('book_slug');
		$quantity = $this->request->getPost('quantity');
		$cart = new CartModel();
		$cart_details = $cart->where('fbook_slug', $book_slug)->where('fcustomer_cookie', $_COOKIE["_xhv"])->findAll();
		$frecno = $cart_details[0]['frecno'];
		//var_dump($frecno);

		$updated = $cart->update($frecno, ['fquantity' => $quantity]);
		if($updated)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Cart updated successfully"
			];
			
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Cart not updated"
			];
		}

		return $this->response->setJSON($response);
	}


	public function deletecart()
    {
		$cart_item_id = $this->request->getPost('cart_item_id');
        $cart_model = new CartModel();
        $cart_model->where('frecno', $cart_item_id)->delete();
        $deleted = $cart_model->affectedRows();
		if($deleted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Cart deleted successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Cart not deleted"
			];
		}

		return $this->response->setJSON($response);
	}
	

	public function pay()
	{
		return view('front/pay');
	}



	public function about()
	{
		return view('front/about');
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/'));
	}

}
