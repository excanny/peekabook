<?php namespace App\Controllers;

use App\Models\BookTemplateModel;

use App\Models\AvatarSkinModel;

use App\Models\AvatarHairModel;

use App\Models\PageModel;

use App\Models\BookCoverModel;

use App\Models\UserModel;

use App\Models\AdminModel;

class Adm extends BaseController
{

	public function dashboard()
	{
		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		return view('adm/index');
	}

	public function createbook()
	{
		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		return view('adm/createbook');
	}

	public function createbookAction()
	{

		$fsd = $this->request->getFile('book_poster');
		$ndff = $fsd->getRandomName();
		$imageDimensions = getimagesize($fsd);
		$width = $imageDimensions[0];
		$height = $imageDimensions[1];
		

		// if($width != "285" || $height != "285")
		// {
		// 	$response = [
		// 		'success' => false,
		// 		'data' => '',
		// 		'msg' => "Image dimensions should be 285x285 pixels"
		// 	];
		// }
		// else
		// {

			if (! $this->validate([
				'book_poster' => [
					'uploaded[book_poster]',
					'mime_in[book_poster,image/jpg,image/jpeg,image/gif,image/png]',
					'max_size[book_poster,4096]',
				],

				'book_title' => "required|trim",
				'book_slug'  => 'required|trim',
				'book_description' => "required|trim",
				'ageInput'  => 'required|trim',
				'about_book' => "required|trim",
				'about_character'  => 'required|trim',
				'how_book' => "required|trim",
				'format_size'  => 'required|trim',
				'book_price' => "required|trim",
		
			]))
			{
				session()->setFlashdata('error', $this->validator->getErrors());
				return redirect()->to(base_url('adm/createbook'));
				
			}

			$partner_email = $this->request->getPost('partner_email');
			
			$PATH = getcwd();
				$fsd->move( $PATH .'\public\book_posters', $ndff);
			
			$data = [
				'ftitle' => $this->request->getPost('book_title'),
				'fbook_slug'  => $this->request->getPost('book_slug'),
				'fdescription'  => $this->request->getPost('book_description'),
				'fage_group'  => $this->request->getPost('ageInput'),
				'fabout_book'  => $this->request->getPost('about_book'),
				'fabout_character'  => $this->request->getPost('about_character'),
				'fhow_book'  => $this->request->getPost('how_book'),
				'fformat_size'  => $this->request->getPost('format_size'),
				'fprice'  => $this->request->getPost('book_price'),
				'fposter_image' => $ndff,
				'fpartner_email'  => $partner_email,

				];

			//var_dump($data);
				

			if(!empty($partner_email))
			{

				$data2 = [
					'femail'  => $partner_email,
					'fpass_word'  => $this->request->getPost('partner_psssd2'),
					'ffirst_name'  => $this->request->getPost('partner_firstname'),
					'flast_name'  => $this->request->getPost('partner_lastname'),
					'ftoken'  => 1,
				];

				$model2 = new UserModel();
				$model2->insert($data2);
			}
	
			//var_dump($data);
			$model = new BookTemplateModel();

			$model->insert($data);
			$inserted = $model->affectedRows();
			if($inserted > 0)
			{
				session()->setFlashdata('success', 'Book created successfully. Now you can add book covers');
				return redirect()->to(base_url('adm/avatars/'. $this->request->getPost('book_slug')));
			}
			
	}


	public function updatebooktemplate($slug)
	{

		

			
			$partner_email = $this->request->getPost('partner_email');
			

		
			$id = $this->request->getPost('id');

			if(empty($this->request->getFile('book_poster')))
			{

				if (! $this->validate([
	
					'title' => "required|trim",
					'description' => "required|trim",
					'ageInput'  => 'required|trim',
					'about_book' => "required|trim",
					'about_character'  => 'required|trim',
					'how_book' => "required|trim",
					'format_size'  => 'required|trim',
					'price' => "required|trim",
			
				]))
				{
					session()->setFlashdata('error', $this->validator->getErrors());
					return redirect()->to(base_url('adm/singlebooktemplate/'.$slug));
					
				}

	

				$data = [
				
					'ftitle' => $this->request->getPost('title'),
					'fbook_slug'  => $this->request->getPost('slug'),
					'fdescription'  => $this->request->getPost('description'),
					'fage_group'  => $this->request->getPost('ageInput'),
					'fabout_book'  => $this->request->getPost('about_book'),
					'fabout_character'  => $this->request->getPost('about_character'),
					'fhow_book'  => $this->request->getPost('how_book'),
					'fformat_size'  => $this->request->getPost('format_size'),
					'fprice'  => $this->request->getPost('price'),
					'fpartner_email'  => $this->request->getPost('partner_email'),

					];

			}
			else
			{
				
				if (! $this->validate([
					'book_poster' => [
						'uploaded[book_poster]',
						'mime_in[book_poster,image/jpg,image/jpeg,image/gif,image/png]',
						'max_size[book_poster,4096]',
					],
	
					'title' => "required|trim",
					'description' => "required|trim",
					'ageInput'  => 'required|trim',
					'about_book' => "required|trim",
					'about_character'  => 'required|trim',
					'how_book' => "required|trim",
					'format_size'  => 'required|trim',
					'price' => "required|trim",
			
				]))
				{
					session()->setFlashdata('error', $this->validator->getErrors());
					return redirect()->to(base_url('adm/singlebooktemplate/'.$slug));
					
				}
	

				$fsd = $this->request->getFile('book_poster');
				$ndff = $fsd->getRandomName();
				$imageDimensions = getimagesize($fsd);
				$width = $imageDimensions[0];
				$height = $imageDimensions[1];


				$PATH = getcwd();
				$fsd->move( $PATH .'\public\foldx', $ndff);

				
				$data = [
				
					'ftitle' => $this->request->getPost('title'),
					'fbook_slug' => $this->request->getPost('slug'),
					'fdescription' => $this->request->getPost('description'),
					'fage_group' => $this->request->getPost('ageInput'),
					'fabout_book' => $this->request->getPost('about_book'),
					'fabout_character'  => $this->request->getPost('about_character'),
					'fhow_book' => $this->request->getPost('how_book'),
					'fformat_size' => $this->request->getPost('format_size'),
					'fprice' => $this->request->getPost('price'),
					'fpartner_email' => $this->request->getPost('partner_email'),
					'fposter_image' => $ndff,
		
					];
			}

			//var_dump($data);

		$bookTemplateModel = new BookTemplateModel();
		$updated = $bookTemplateModel->update($id, $data);
		if($updated > 0)
		{
			$old_partner_email = $this->request->getPost('old_partner_email');
			if(!empty($old_partner_email))
			{
				$usermodel = new UserModel();
				$partner_email = $usermodel->where('femail', $old_partner_email)->first();
				
				$data = [
				
					'femail' => $this->request->getPost('partner_email'),
				];

				$usermodel->update($partner_email['frecno'], $data);
			}
			
			
			session()->setFlashdata('success', 'Book template updated successfully');
			return redirect()->to(base_url('adm/singlebooktemplate/'. $slug));
		}


	}

	public function deletebooktemplate($slug)
	{

		$bookTemplateModel = new BookTemplateModel();
		$bookTemplateModel->where('fbook_slug', $slug)->delete();
		$deleted = $bookTemplateModel->affectedRows();
		if($deleted > 0)
		{
			session()->setFlashdata('success', 'Book template deleted successfully');
			return redirect()->to(base_url('adm/allbooktemplates/'));
		}

	}


	public function allbooktemplates()
	{
		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		$bookTemplateModel = new BookTemplateModel();
		$data['book_templates'] = $bookTemplateModel->orderBy('frecno', 'desc')->findAll();
		//var_dump($bookTemplates);
		return view('adm/allbooktemplates', $data);
	}

	public function singlebooktemplate($slug)
	{
		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		$bookTemplateModel = new BookTemplateModel();
		$avatar_skin = new AvatarSkinModel();
		
		$data['slug'] = $slug;
		$avatar_skin = $avatar_skin->where('fbook_slug', $slug)->findAll();
		


		$page = new PageModel();

		$data['BoyF2CCB7'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "F2CCB7")->orderBy('fpage_no', 'asc')->findAll();
		$data['BoyDE8A78'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "DE8A78")->orderBy('fpage_no', 'asc')->findAll();
		$data['BoyFBC787'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "FBC787")->orderBy('fpage_no', 'asc')->findAll();
		$data['Boy8E583E'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "8E583E")->orderBy('fpage_no', 'asc')->findAll();
		$data['Boy312529'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "312529")->orderBy('fpage_no', 'asc')->findAll();

		$data['GirlF2CCB7'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "F2CCB7")->orderBy('fpage_no', 'asc')->findAll();
		$data['GirlDE8A78'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "DE8A78")->orderBy('fpage_no', 'asc')->findAll();
		$data['GirlFBC787'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "FBC787")->orderBy('fpage_no', 'asc')->findAll();
		$data['Girl8E583E'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "8E583E")->orderBy('fpage_no', 'asc')->findAll();
		$data['Girl312529'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "312529")->orderBy('fpage_no', 'asc')->findAll();
		
		$data['single_template'] = $bookTemplateModel->where('fbook_slug', $slug)->findAll();
		//var_dump($merged_array);
		return view('adm/singlebooktemplate', $data);
	}

	public function previewavatars($slug)
	{

		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		$avatar_skin = new AvatarSkinModel();
		$avatar_hair = new AvatarHairModel();
		$data['slug'] = $slug;
		$bookTemplateModel = new BookTemplateModel();
		$book = $bookTemplateModel->where('fbook_slug', $slug)->findAll();
		$data['active'] = $book[0]['active'];
		$data['avatar_skins'] = $avatar_skin->where('fbook_slug', $slug)->findAll();
		$data['avatar_hairs'] = $avatar_hair->where('fbook_slug', $slug)->findAll();

		return view('adm/previewbooktemplate', $data);
		//var_dump($data['active']);
	}

	public function flipbook($slug)
	{

		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		$bookcover = new BookCoverModel();
		$data['boyfrontcovers'] = $bookcover->where('fbook_slug', $slug)->where('fis_front', 1)->where('fgender', "Boy")->findAll();
		$data['boybackcovers'] = $bookcover->where('fbook_slug', $slug)->where('fis_front', 0)->where('fgender', "Boy")->findAll();
		$data['girlfrontcovers'] = $bookcover->where('fbook_slug', $slug)->where('fis_front', 1)->where('fgender', "Girl")->findAll();
		$data['girlbackcovers'] = $bookcover->where('fbook_slug', $slug)->where('fis_front', 0)->where('fgender', "Girl")->findAll();

		$page = new PageModel();
		$data['pages'] = $page->where('fbook_slug', $slug)->orderBy('fpage_no', 'asc')->findAll();
		//var_dump($data['boyfrontcovers']);
		return view('adm/flipbook', $data);
	}


	public function publishbook()
	{
		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		$slug = $this->request->getPost('slug');
		$bookTemplateModel = new BookTemplateModel();
		$book = $bookTemplateModel->where('fbook_slug', $slug)->findAll();
		$frecno = $book[0]['frecno'];

		$frecno2 = (object)$frecno;

		$data = [
			
			'active' =>  1,
			
		];

		$bookTemplateModel2 = new BookTemplateModel();
		$updated = $bookTemplateModel2->update($frecno, $data);
		if($updated)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Book published successfully"
			];
			
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Book not published"
			];
		}

		//var_dump($updated);

		return $this->response->setJSON($response);
	}


	public function deactivatebook()
	{
		$slug = $this->request->getPost('slug');
		$bookTemplateModel = new BookTemplateModel();
		$book = $bookTemplateModel->where('fbook_slug', $slug)->findAll();
		$frecno = $book[0]['frecno'];

		$frecno2 = (object)$frecno;

		$data = [
			
			'active' =>  0,
			
		];

		$bookTemplateModel2 = new BookTemplateModel();
		$updated = $bookTemplateModel2->update($frecno, $data);
		if($updated)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Book deactivated successfully"
			];
			
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Book not deactivated"
			];
		}

		//var_dump($updated);

		return $this->response->setJSON($response);
	}


	public function avatars($slug)
	{
		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		} 

		$data['slug'] = $slug;
		$avatar_skin = new AvatarSkinModel();

		$data['skin_features_boyF2CCB7'] = $avatar_skin->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "F2CCB7")->orderBy('frecno', 'desc')->findAll();
		$data['skin_features_boyDE8A78'] = $avatar_skin->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "DE8A78")->orderBy('frecno', 'desc')->findAll();
		$data['skin_features_boyFBC787'] = $avatar_skin->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "FBC787")->orderBy('frecno', 'desc')->findAll();
		$data['skin_features_boy8E583E'] = $avatar_skin->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "8E583E")->orderBy('frecno', 'desc')->findAll();
		$data['skin_features_boy312529'] = $avatar_skin->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "312529")->orderBy('frecno', 'desc')->findAll();

		$data['skin_features_girlF2CCB7'] = $avatar_skin->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "F2CCB7")->orderBy('frecno', 'desc')->findAll();
		$data['skin_features_girlDE8A78'] = $avatar_skin->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "DE8A78")->orderBy('frecno', 'desc')->findAll();
		$data['skin_features_girlFBC787'] = $avatar_skin->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "FBC787")->orderBy('frecno', 'desc')->findAll();
		$data['skin_features_girl8E583E'] = $avatar_skin->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "8E583E")->orderBy('frecno', 'desc')->findAll();
		$data['skin_features_girl312529'] = $avatar_skin->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "312529")->orderBy('frecno', 'desc')->findAll();
	
		//var_dump($data['skin_features']);
		return view('adm/avatars', $data);
	}

	public function uploadavatarskin()
	{
		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		$fil = $this->request->getFile('avt');
		$ndff = $fil->getRandomName();
		$imageDimensions = getimagesize($fil);
		$width = $imageDimensions[0];
		$height = $imageDimensions[1];


		// if($width != "285" || $height != "285")
		// {
		// 	$response = [
		// 		'success' => false,
		// 		'data' => '',
		// 		'msg' => "Image dimensions should be 285x285 pixels"
		// 	];
		// }
		// else
		// {

				$validated = $this->validate([
					'avt' => [
						'uploaded[avt]',
						'mime_in[avt,image/jpg,image/jpeg,image/gif,image/png]',
						'max_size[avt,4096]',
					],
				]);


				if(!$validated)
				{
					$response = [
						'success' => false,
						'data' => '',
						'msg' => "Image not uploaded"
					];
				}
				else
				{
					
					$PATH = getcwd();
					$fil->move( $PATH .'\public\foldx', $ndff);
					
					$data = [
						'fimage_id' => $this->request->getPost('skin_colour'),
						'fbook_slug' => $this->request->getPost('slug'),
						'fskin_colour' => $this->request->getPost('skin_colour'),
						'fgender' => $this->request->getPost('gender'),
						'fimage_name' =>  $ndff,
						
					];
					
					//var_dump($imageDimensions);

					$db  = \Config\Database::connect();
					$db->table('tavatars_skin')->insert($data);
					$inserted = $db->affectedRows();
					if($inserted > 0)
					{
						$response = [
							'success' => true,
							'data' => 'saved',
							'msg' => "Avatar uploaded successfully"
						];
						
					}
					else
					{
							$response = [
								'success' => false,
								'data' => 'failed',
								'msg' => "Avatar not uploaded"
							];
					}
				}

		//}
	
		  return $this->response->setJSON($response);
		  
	}



	public function deleteavatarskin()
	{
		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		$image_id = $this->request->getPost('id');
		$image_name = $this->request->getPost('image_name');
		$avatar = new AvatarSkinModel();
		$avatar->where('fimage_id', $image_id)->delete();
		$deleted = $avatar->affectedRows();
		if($deleted > 0)
		{
			$PATH = getcwd();
			unlink($PATH .'\public\foldx\\'.$image_name);
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Book Cover deleted"
			];
		}

		return $this->response->setJSON($response);

	}


	public function pages($slug)
	{
		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		$data['slug'] = $slug;

		$page = new PageModel();
		
		$data['BoyF2CCB7'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "F2CCB7")->orderBy('fpage_no', 'asc')->findAll();
		$data['BoyDE8A78'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "DE8A78")->orderBy('fpage_no', 'asc')->findAll();
		$data['BoyFBC787'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "FBC787")->orderBy('fpage_no', 'asc')->findAll();
		$data['Boy8E583E'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "8E583E")->orderBy('fpage_no', 'asc')->findAll();
		$data['Boy312529'] = $page->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "312529")->orderBy('fpage_no', 'asc')->findAll();

		$data['GirlF2CCB7'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "F2CCB7")->orderBy('fpage_no', 'asc')->findAll();
		$data['GirlDE8A78'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "DE8A78")->orderBy('fpage_no', 'asc')->findAll();
		$data['GirlFBC787'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "FBC787")->orderBy('fpage_no', 'asc')->findAll();
		$data['Girl8E583E'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "8E583E")->orderBy('fpage_no', 'asc')->findAll();
		$data['Girl312529'] = $page->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "312529")->orderBy('fpage_no', 'asc')->findAll();
		
		
		//var_dump($data);

		return view('adm/pages', $data);
	}

	public function pagesaction()
	{
		// var_dump($this->request->getPost());
		$slug = $this->request->getPost('slug');

		if (! $this->validate([
			'gender' => "required|trim",
			'skin_colour' => "required|trim",
			'book_slug' => "required|trim",
			'bgpic' => [
                'uploaded[bgpic]',
                'mime_in[bgpic,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[bgpic,4096]',
            ],
	
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('adm/pages/'. $slug));
			
		}

		$filh = $this->request->getFile('bgpic');
		$ndfgf = $filh->getRandomName();
		$PATH = getcwd();
		$filh->move($PATH .'\public\pagespics', $ndfgf);

	
		$page = new PageModel();
		$page_nos = $page->where('fbook_slug', $this->request->getPost('book_slug'))->where('fgender', $this->request->getPost('gender'))->where('fskin_colour', $this->request->getPost('skin_colour'))->findColumn('fpage_no');
		if($page_nos == null)
		{
			$page_no = 1;
		}
		else
		{
			$last_page_no = max($page_nos);
			$page_no = $last_page_no + 1;
		}


		$data = [
			'fgender' => $this->request->getPost('gender'),
			'fskin_colour' => $this->request->getPost('skin_colour'),
			'fpage_no' => $page_no,
			'fbook_slug' => $this->request->getPost('book_slug'),
			'fpage_background_pic' => $ndfgf
		];

		//var_dump($data);

		 $page->insert($data);
		 $inserted = $page->affectedRows();
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Page added successfully');
			return redirect()->to(base_url('adm/pages/'. $slug));
		}
		else
		{
			session()->setFlashdata('error', 'Page not added');
			return redirect()->to(base_url('adm/pages/'. $slug));
		}

		//return $this->response->setJSON($response);	
	}


	public function updatepage()
	{
		$slug = $this->request->getPost('book_slug');

		$frec = $this->request->getPost('pagerecid');
		
		$data = [

			'fcontent'  => $this->request->getPost('page_content'),
			
			'fpage_no'  => $this->request->getPost('page_no')

			];

		$page = new PageModel();
		$updated = $page->update($frec, $data);
		if($updated > 0)
		{
			session()->setFlashdata('success', 'Page updated successfully');
			return redirect()->to(base_url('adm/pages/'. $slug));
		}
		else
		{
			session()->setFlashdata('error', 'Page not updated');
			return redirect()->to(base_url('adm/pages/'. $slug));
		}


	}


	public function deletepage()
	{
		$pageid = $this->request->getPost('id');
		$slug = $this->request->getPost('slug');
		$model = new PageModel();
		$model->where('frecno', $pageid)->delete();
		$deleted = $model->affectedRows();

		if($deleted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'done',
				'msg' => "Page deleted succesfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Page not deleted"
			];
		}

		//var_dump($deleted);

		return $this->response->setJSON($response);

	}


	public function countpages($slug)
	{
		$page = new PageModel();
		$all = $page->where('fbook_slug', $slug)->findAll();

		echo count($all);
	}


	public function bookcovers($slug)
	{
		if(!session()->admin_email)
		{
			return redirect()->to(base_url('adm/login'));	
		}

		$data['slug'] = $slug;

		$bookcover = new BookCoverModel();

		$data['BoyF2CCB7'] = $bookcover->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "F2CCB7")->orderBy('fis_front', 'desc')->findAll();
		$data['BoyDE8A78'] = $bookcover->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "DE8A78")->orderBy('fis_front', 'desc')->findAll();
		$data['BoyFBC787'] = $bookcover->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "FBC787")->orderBy('fis_front', 'desc')->findAll();
		$data['Boy8E583E'] = $bookcover->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "8E583E")->orderBy('fis_front', 'desc')->findAll();
		$data['Boy312529'] = $bookcover->where('fbook_slug', $slug)->where('fgender', "Boy")->where('fskin_colour', "312529")->orderBy('fis_front', 'desc')->findAll();


		$data['GirlF2CCB7'] = $bookcover->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "F2CCB7")->orderBy('fis_front', 'desc')->findAll();
		$data['GirlDE8A78'] = $bookcover->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "DE8A78")->orderBy('fis_front', 'desc')->findAll();
		$data['GirlFBC787'] = $bookcover->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "FBC787")->orderBy('fis_front', 'desc')->findAll();
		$data['Girl8E583E'] = $bookcover->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "8E583E")->orderBy('fis_front', 'desc')->findAll();
		$data['Girl312529'] = $bookcover->where('fbook_slug', $slug)->where('fgender', "Girl")->where('fskin_colour', "312529")->orderBy('fis_front', 'desc')->findAll();
		
		//var_dump($data);

		return view('adm/bookcovers', $data);
	}


	public function bookcoversaction()
	{

		$slug = $this->request->getPost('slug');

		if (! $this->validate([
			'front' => "required|trim",
			'coverpic' => [
                'uploaded[coverpic]',
                'mime_in[coverpic,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[coverpic,4096]',
            ],
	
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('adm/bookcovers/'. $slug));
			
		}


		$filh = $this->request->getFile('coverpic');
		$ndfgf = $filh->getRandomName();
		$PATH = getcwd();
		$filh->move($PATH .'\public\coverpics', $ndfgf);

	
		$bookcover = new BookCoverModel();

		$data = [
			'fbook_slug' => $this->request->getPost('book_slug'),
			'fis_front' => $this->request->getPost('front'),
			'fgender' => $this->request->getPost('gender'),
			'fskin_colour' => $this->request->getPost('skin_colour'),
			'fpage_background_pic' => $ndfgf,
		];

		//var_dump($data);

		

		//$bookcover->errors();

		try
		{
			$bookcover->save($data);	
			$inserted = $bookcover->affectedRows();

			if($inserted > 0)
			{
				session()->setFlashdata('success', 'Book Cover added successfully.');
				return redirect()->to(base_url('adm/bookcovers/'. $slug));
			}
			else
			{
				session()->setFlashdata('error', 'Book Cover not added! Try Again.');
				return redirect()->to(base_url('adm/bookcovers/'. $slug));
			}
		}
		catch (\Exception $e)
		{
			//die($e->getMessage());
			session()->setFlashdata('error', $e->getMessage());
			return redirect()->to(base_url('adm/bookcovers/'. $slug));
		}

	}

	public function updatebookcover()
	{

	    $slug = $this->request->getPost('slug');

		if (! $this->validate([
			'coverpic' => [
                'uploaded[coverpic]',
                'mime_in[coverpic,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[coverpic,4096]',
            ],
	
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('adm/bookcovers/'. $slug));
			
		}


		$filh = $this->request->getFile('coverpic');
		$ndfgf = $filh->getRandomName();
		$PATH = getcwd();
		$filh->move($PATH .'\public\coverpics', $ndfgf);

	
		$frecno = $this->request->getPost('pagerecid');

		$oldpic = $this->request->getPost('oldpic');

		

		$data = [
			
			'fpage_background_pic' => $ndfgf,
		];

		//var_dump($data);

		$bookcover = new BookCoverModel();

		$updated = $bookcover->update($frecno, $data);

		if($updated > 0)
		{
			unlink($PATH .'\public\coverpics\\'.$oldpic);
			session()->setFlashdata('success', 'Book Cover updated successfully.');
			return redirect()->to(base_url('adm/bookcovers/'. $slug));
		}
		else
		{
			session()->setFlashdata('error', 'Book Cover not updated! Try Again.');
			return redirect()->to(base_url('adm/bookcovers/'. $slug));
		}

	}


	public function deletebookcover()
	{
		$id = $this->request->getPost('id');
		$oldpic = $this->request->getPost('oldpic');
		$bookcover = new BookCoverModel();
		$bookcover->where('frecno', $id)->delete();
		$deleted = $bookcover->affectedRows();
		if($deleted > 0)
		{
			$PATH = getcwd();
			unlink($PATH .'\public\coverpics\\'.$oldpic);
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Book Cover deleted"
			];
		}

		return $this->response->setJSON($response);

	}




	public function searchemail()
	{
		$email = $this->request->getPost('email');
		//$id = 'Toyota';
		$user = new UserModel();
		$request = $user->where('femail', $email)->first();
		
	    //$request = $this->City_model->GetAllLandmarks($id);
		//echo $request->farea_name;
		//return $request; 
		 //var_dump($request);
		 return json_encode($request);
	}
	

	public function login()
	{
		return view('adm/login');
	}

	public function adminloginaction()
	{
		if (! $this->validate([

			'email' => 'required|trim|valid_email',
			'pxcd'  => 'required|trim',
    
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('adm/login'));
		}

		$email  = $this->request->getPost('email');
		$pass_word  = $this->request->getPost('pxcd');

		//check credentials
		$admin = new AdminModel();
		$admin_details = $admin->where('femail', $email)->first();

		//var_dump($admin_details);
		
		if(!empty($admin_details))
		{
			
				$validate = password_verify($pass_word, $admin_details['fpass_word']);
				//var_dump($validate);
				if($validate)
				{
					$sessiondata = [
						'admin_firstname' => $admin_details['ffirst_name'],
						'admin_lasstname' => $admin_details['flast_name'],
						'admin_email' =>   $admin_details['femail'],
					];

					session()->set($sessiondata);

					return redirect()->to(base_url('adm/dashboard'));

				}
				else
				{
					session()->setFlashdata('error', "Wrong Password");
					return redirect()->to(base_url('adm/login'));
				}

		}
		else
		{
			session()->setFlashdata('error', "The email provided does not exist in the system");
			return redirect()->to(base_url('adm/login'));
		}

		
	}


}
