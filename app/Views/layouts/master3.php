<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PeekABook | Admin Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/plugins/fontawesome-free/css/all.min.css">
  
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.css" integrity="sha512-KuSX+43gVS5MEIJD2ewtrFPOHqC1PJnL8o2f5ciggPC0JUZ8XV0QXlfArO1mSzKkVFdRjsBDfrTU96C5SuRfqQ==" crossorigin="anonymous" />
  <link href="<?php echo base_url();?>/public/holdonjs/HoldOn.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <style>
    .sp-replacer 
    {
      margin: 0;
      overflow: hidden;
      cursor: pointer;
      padding: 0;
      display: inline-block;
      border: 1px solid #000;
      background: #fff !important;
      color: #333;
      /* vertical-align: middle; */
    }
    .sp-preview 
    {
      position: relative;
      width: 14px;
      height: 16px;
      border: none;
      margin-right: 5px;
      float: left;
      z-index: 0;
    }

    .cursor{
      cursor:pointer;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
  
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
      <a  href="<?php echo site_url();?>logout"><i class="fa fa-power-off" onclick="return confirm('Are you sure you want to sign out?')"></i></a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url();?>adm/dashboard" class="brand-link">
      <img src="<?php echo base_url();?>/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PeekABook</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url();?>adm/allbooktemplates" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               Book Templates
  
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url();?>adm/allbooktemplates" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
            </ul> -->
          </li>
       
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



	<?= $this->renderSection('content') ?>


  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 PeekABook. All rights reserved.
  
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->








<!-- jQuery -->
<script src="<?php echo base_url();?>/public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>/public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>/public/plugins/sparklines/sparkline.js"></script>

<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>/public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>/public/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/public/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>/public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/public/dist/js/demo.js"></script>

<!-- Summernote -->
<script src="<?php echo base_url();?>/public/plugins/summernote/summernote-bs4.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/piexif.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
	This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for 
	HTML files. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/purify.min.js" type="text/javascript"></script>
<!-- popper.min.js below is needed if you use bootstrap 4.x (for popover and tooltips). You can also use the bootstrap js 
3.3.x versions without popper.min.js. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
	dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>-->
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/fileinput.min.js"></script>
<!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/themes/fas/theme.min.js"></script>
<!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/locales/LANG.js"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>/public/turnjs/extras/modernizr.2.5.3.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.js" integrity="sha512-1aNp9qKP+hKU/VJwCtYqJP9tdZWbMDN5pEEXXoXT0pTAxZq1HHZhNBR/dtTNSrHO4U1FsFGGILbqG1O9nl8Mdg==" crossorigin="anonymous"></script>


  <script src="<?php echo base_url();?>/public/holdonjs/HoldOn.min.js"></script>

<script>
		$(document).ready(function () {
        //Get Shop Slug ID
        $("#book_title").bind('input', function () {
        var stt = $(this).val();
        str = stt.replace(/\s+/g, '-');
        $("#book_slug").val(str.toLowerCase());
        });



		$("#partnerbook").click(function () {

			if ($(this).is(":checked")) {
				$("#partner_create").show();
				//alert("Hi");
			} 
			else 
			{
        $("#partner_create").hide();
				$("#alternate_address").hide(); 
			}

		});

		function validate() {
		var output = true;
			// $(".signup-error").html('');
			
			if(!($("#partner_email").val())) {
				output = false;
				$("#email-error").html("Email required!");
			}	
			if(!$("#partner_email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
				$("#email-error").html("Invalid Email!");
				output = false;
			}
			return output;
		}

		var delay = (function(){
			var timer = 0;
			return function(callback, ms){
			clearTimeout (timer);
			timer = setTimeout(callback, ms);
			};
		})();


		$("#partner_email").keyup(function(){
			
			
				delay(function(){

				var output = validate();
				if(output) {
					$('#email-error').text('');
					var email = $('#partner_email').val();
					//alert(email);

					if(email != '')
					{
						//alert("Hi");
						$.ajax({
							url:"<?php echo site_url(); ?>adm/SearchEmail",
							method:"POST",
							data:{email:email},
							dataType:"json",
							beforeSend: function(){
								$("#processing1").show();
							},
							success:function(data)
							{
								//alert(data.femail);
								if(data == null)
								{
									$('#partner_more_details').show();
									//alert("yea");
								}
								
							},
							error: function(xhr, textStatus, errorThrown) {
							//code to execut
							alert(xhr.responseText);
							//$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
							},
						});
						
					}

				}

				}, 1500 );
		
		});



		$('#partner_psssd2').keyup(function(){
            if ($("#partner_psssd1").val() != $("#partner_psssd2").val()) {
                $(".no_match").fadeIn('slow');
        	 //alert('the passwords didn\'t match!');
            $("#partner_psssd1").css("border", "1px solid #A94442");
            $("#partner_psssd2").css("border", "1px solid #A94442");
            $("#submit").prop("disabled",true);

        }
        else 
        {
            $(".no_match").fadeOut('slow');
            $("#partner_psssd1").css("border", "1px solid #3C763D");
            $("#partner_psssd1").css("border", "1px solid #3C763D");
            $("#submit").prop("disabled",false);
        }
    });

	
	
	 $('.datatable').DataTable(); // ID From dataTable 

	$('.textarea').summernote();
	  
		// with plugin options
		$(".input-id").fileinput({

			showUpload : false,
			allowedFileExtensions: ["jpg","jpeg","gif", "png"],

		});





	$('#upload_avatar_skin').on('submit', function(e){  

		e.preventDefault();  
		if($('#avt').val() == '')  
		{  
			alert("Please Select the File"); 
			$('.btn-success').html('Upload');
			$('.btn-success').prop('enabled'); 
		}  
		else  
		{  
			$.ajax({  
				url:"<?php echo site_url(); ?>adm/uploadavatarskin",   
				method:"POST",  
				data:new FormData(this),  
				contentType: false,  
				cache: false,  
				processData:false, 
				dataType: "json",
        beforeSend: function(){
          var options = {
          theme:"sk-circle",
          backgroundColor:"#000",
          textColor:"white"
          };

          //HoldOn.open(options);
				},
				success:function(response)  
				{  

          //alert(response.msg);
            //HoldOn.close();
					  if(response.success == true){
					
						// $("#img_preview").load(location.href + " #img_preview");
						// $("#features1").load(location.href + " #features1");
						// $("#features2").load(location.href + " #features2");
						// $('.btn-success').html('Upload');
            // $('.btn-success').prop('enabled'); 
            $("#images1").load(location.href + " #images1");
            
            toastr.success('<p> Avatar uploaded successfully</p>', {timeOut: 1000})
						document.getElementById("upload_avatar_skin").reset();   
					}
					else if(response.success == false){
						$('#responsemsg').html(response.msg); 
						$('#errmsg').show();
					}
	
					
				},
				error: function(xhr, textStatus, errorThrown) {
					//code to execute
					//alert(xhr.responseText);
          //alert("No");
					toastr.warning('<p>Error! Avatar already uploaded</p>', {timeOut: 1000})
            $("#img_preview").load(location.href + " #img_preview");
						$("#features1").load(location.href + " #features1");
						$("#features2").load(location.href + " #features2");
						$('.btn-success').html('Upload');
						$('.btn-success').prop('enabled'); 
					 document.getElementById("upload_form_skin").reset();    
					
				}, 
			});  
		}  
	});  



$('body').on('click', '.delete_image_id', function (){
			
      //event.preventDefault(); 
      var image_id = $(this).data('id');
      var image_name = $(this).data('image_name');
      var slug = $(this).data('slug');
     
      //alert(image_name);
    
      $.ajax({
        url:"<?php echo site_url();?>/adm/deleteavatarskin",
        method:"POST",
        data: {id: image_id, image_name : image_name},
        dataType: "json",
        beforeSend:function(){
          return confirm("Are you sure you want to delete this record?");
        },
        success:function(response)
        {
           //alert(response.msg);
           toastr.success('<p>Avatar deleted</p>', {timeOut: 1000});
          $("#images1").load(location.href + " #images1");
          $("#features2").load(location.href + " #features2");
          
        },
        error: function(xhr, textStatus, errorThrown) {
           //code to execute
            alert(xhr.responseText);
        //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
        },
       });
      
    return false;
      
  });




	$('body').on('click', '.image_id2', function (){
			
		    //event.preventDefault(); 
			  var image_id = $(this).data('id');
        var image_name = $(this).data('image_name');
			  var slug = $(this).data('slug');
			 
			  //alert(image_name);
			
				$.ajax({
					url:"<?php echo site_url();?>/adm/deleteavatarhair",
					method:"POST",
          data: {id: image_id, image_name : image_name},
          dataType: "json",
					beforeSend:function(){
						return confirm("Are you sure you want to delete this record?");
          },
					success:function(response)
					{
						 //alert(response.msg);
						$("#features3").load(location.href + " #features3");
            $("#features4").load(location.href + " #features4");
            toastr.success('<p>Avatar deleted successfully</p>', {timeOut: 1000})
					},
					error: function(xhr, textStatus, errorThrown) {
					   //code to execute
					    alert(xhr.responseText);
					//$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
					},
				});
				
			return false;
				
		});



		$('.deletepage').on('click', function(e){  
			
			
      var page_id = $(this).data('id');
        //alert(page_id);

			e.preventDefault(); 

				$.ajax({  
					url:"<?php echo site_url(); ?>adm/deletepage",   
					method:"POST",  
					data:{id: page_id},   
					dataType: "json",
          beforeSend:function(){
              var options = {
              theme:"sk-circle",
              backgroundColor:"#000",
              textColor:"white"
              };

              HoldOn.open(options);
            },
					success:function(response)  
					{  
						//alert(response.msg);
						
						if(response.success == true)
            {
							
							//toastr.success('<p>Page deleted successfully</p>', {timeOut: 1000});
               
							// $(".pages").load(location.href + " .pages");
							// $(".full").load(location.href + " .full");
							// $('.btn-success').html('Upload');
							// $('.btn-success').prop('enabled'); 
           

              window.location.reload();


						
						}
						else if(response.success == false)
            {
						
						}
						
					},
					error: function(xhr, textStatus, errorThrown) {
						//code to execute
						alert(xhr.responseText);
						// toastr.warning('<p>Error! Page already uploaded</p>', {timeOut: 1000})
						// document.getElementById("add_page").reset();    
						//$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
					}, 
				});  
			  
		});  


     // Page Edit Modal
		$('.edit_page_id').click(function(){
            //get id
			  var page_id = $(this).data('id');
        //
        var pageno = $(this).data('pageno');
        var oldpic = $(this).data('oldpic');
        //alert(oldpic);
         $('#oldpagerecid').val(page_id);
         $('.pageno').val(pageno);
			   $('#pageno').text(pageno);
         $('#oldpic').val(oldpic);
         $("#EditPage").modal('show');
    });



    $('.deletebookcover').on('click', function(e){  
			
			
      var id = $(this).data('id');
      var oldpic = $(this).data('oldpic');
       // alert(oldpic);

			// e.preventDefault(); 

				$.ajax({  
					url:"<?php echo site_url(); ?>adm/deletebookcover",   
					method:"POST",  
					data:{id: id, oldpic: oldpic},   
					dataType: "json",
          beforeSend:function(){
              var options = {
              theme:"sk-circle",
              backgroundColor:"#000",
              textColor:"white"
              };

              HoldOn.open(options);
            },
					success:function(response)  
					{  
						//alert(response);
						
						if(response.success == true)
            {
							
							//toastr.success('<p>Page deleted successfully</p>', {timeOut: 1000});
               
							// $(".pages").load(location.href + " .pages");
							// $(".full").load(location.href + " .full");
							// $('.btn-success').html('Upload');
							// $('.btn-success').prop('enabled'); 
        
              window.location.reload();

						}
						else if(response.success == false)
            {
                window.location.reload();
						}
						
					},
					error: function(xhr, textStatus, errorThrown) {
						//code to execute
						alert(xhr.responseText);
						// toastr.warning('<p>Error! Page already uploaded</p>', {timeOut: 1000})
						// document.getElementById("add_page").reset();    
						//$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
					}, 
				});  
			  
		});  





    $(".radio2").click(function(){

      
          var skin_colour =  $("input[name='skin_colour']:checked").val();
        

          var imageid = skin_colour;

          //alert(imageid);

          if(imageid == "8E583E")
          {
            $('#FBC787').hide();
            $('#F2CCB7').hide();
            $('#312529').hide();
            $('#8E583E').show();
            
          }
          else if(imageid == "312529")
          {
            //
            $('#FBC787').hide();
            $('#F2CCB7').hide();
            $('#8E583E').hide();
            $('#312529').show();
            
          }
          else if(imageid == "F2CCB7")
          {
              
              $('#8E583E').hide();
              $('#312529').hide();
              $('#FBC787').hide();
              $('#F2CCB7').show();
          }
          else if(imageid == "FBC787")
          {
              $('#8E583E').hide();
              $('#312529').hide();
              $('#F2CCB7').hide();
              $('#FBC787').show();
          }
          
          });


          
      $(".radio1").click(function(){

      var gender =  $("input[name='gender']:checked").val();
  
      var imageid = gender;

        alert(gender);

          if(imageid == "Boy8E583E")
          {
            $('#GirlEBD985').hide();
            $('#GirlCF735A').hide();
            $('#Girl262931').hide();
            $('#Girl8E583E').hide();
            $('#BoyEBD985').hide();
            $('#BoyCF735A').hide();
            $('#Boy262931').hide();
            $('#Boy8E583E').show();
            
          }
          else if(imageid == "Boy262931")
          {
            $('#GirlEBD985').hide();
            $('#GirlCF735A').hide();
            $('#Girl262931').hide();
            $('#Girl8E583E').hide();
            $('#BoyEBD985').hide();
            $('#BoyCF735A').hide();
            $('#Boy8E583E').hide();
            $('#Boy262931').show();
            
           }
          else if(imageid == "BoyCF735A")
          {
            $('#GirlEBD985').hide();
            $('#GirlCF735A').hide();
            $('#Girl262931').hide();
            $('#Girl8E583E').hide();
             $('#BoyEBD985').hide();
             $('#Boy8E583E').hide();
             $('#Boy262931').hide();
             $('#BoyCF735A').show();
          }
          else if(imageid == "BoyEBD985")
          {
            $('#GirlEBD985').hide();
            $('#GirlCF735A').hide();
            $('#Girl262931').hide();
            $('#Girl8E583E').hide();
              $('#Boy8E583E').hide();
             $('#Boy262931').hide();
             $('#BoyCF735A').hide();
              $('#BoyEBD985').show();
          }
          else if(imageid == "Girl8E583E")
          {
            $('#Boy8E583E').hide();
            $('#Boy262931').hide();
            $('#BoyCF735A').hide();
            $('#BoyEBD985').hide();
            $('#GirlEBD985').hide();
            $('#GirlCF735A').hide();
            $('#Girl262931').hide();
            $('#Girl8E583E').show();
            
          }
          else if(imageid == "Girl262931")
          {
            $('#Boy8E583E').hide();
            $('#Boy262931').hide();
            $('#BoyCF735A').hide();
            $('#BoyEBD985').hide();
            $('#GirlEBD985').hide();
            $('#GirlCF735A').hide();
            $('#Girl8E583E').hide();
            $('#Girl262931').show();
            
           }
          else if(imageid == "GirlCF735A")
          {
            $('#Boy8E583E').hide();
            $('#Boy262931').hide();
            $('#BoyCF735A').hide();
            $('#BoyEBD985').hide();
             $('#GirlEBD985').hide();
             $('#Girl8E583E').hide();
             $('#Girl262931').hide();
             $('#GirlCF735A').show();
          }
          else if(imageid == "GirlEBD985")
          {
             $('#Boy8E583E').hide();
             $('#Boy262931').hide();
             $('#BoyCF735A').hide();
             $('#BoyEBD985').hide();
             $('#Girl8E583E').hide();
             $('#Girl262931').hide();
             $('#GirlCF735A').hide();
             $('#GirlEBD985').show();
          }

      });


      $('body').on('click', '#publish_btn', function (){
			
          //event.preventDefault(); 
          var $slug = $('#slug').val();
        
         //alert($slug);
        
          $.ajax({
            url:"<?php echo site_url();?>/adm/publishbook",
            method:"POST",
            data: {slug: $slug},
            dataType: "json",
            beforeSend:function(){
              return confirm("Are you sure you want to publish this book?");
            },
            success:function(response)
            {
              //alert(response.msg);
              toastr.success('<p>Book Activated Successfilly</p>', {timeOut: 1000});
              $("#publishbtnx").load(location.href + " #publishbtnx"); 
              
            },
            error: function(xhr, textStatus, errorThrown) {
              //code to execute
                alert(xhr.responseText);
            //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
          });
          
        return false;
          
      });


      
      $('body').on('click', '#deactivate_btn', function (){
			
      //event.preventDefault(); 
            var $slug = $('#slug').val();
          
          //alert($slug);
          
            $.ajax({
              url:"<?php echo site_url();?>/adm/deactivatebook",
              method:"POST",
              data: {slug: $slug},
              dataType: "json",
              beforeSend:function(){
                return confirm("Are you sure you want to deactivate this book?");
              },
              success:function(response)
              {
                //alert(response.msg);
                toastr.success('<p>Book Deactivated Successfilly</p>', {timeOut: 1000});
                $("#publishbtnx").load(location.href + " #publishbtnx");  
                
              },
              error: function(xhr, textStatus, errorThrown) {
                //code to execute
                  alert(xhr.responseText);
              //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
              },
            });
            
          return false;
            
        });




      $('[data-toggle="tooltip"]').tooltip();


    });//End of doc ready

    </script>



<script>
  if($('.textarea').summernote('isEmpty'))
  {
    $('.textarea').val('');
  }
</script>

<script>
 
  $('body').on('submit', '#add_page', function (){

    var options = {
    theme:"sk-circle",
    backgroundColor:"#000",
    textColor:"white"
    };

    HoldOn.open(options);
    
  });

</script>


  <!-- <script type="text/javascript">

  function loadApp() {

    // Create the flipbook

    $('.flipbook').turn({
        // Width

        width:962,
        
        // Height

        height:400,

        // Elevation

        elevation: 50,
        
        // Enable gradients

        gradients: true,
        
        // Auto center this flipbook

        autoCenter: true

    });
  }

  // Load the HTML4 version if there's not CSS transform

  yepnope({
    test : Modernizr.csstransforms,
    yep: ['<?php echo base_url();?>/public/turnjs/lib/turn.js'],
    nope: ['<?php echo base_url();?>/public/turnjs>/lib/turn.html4.min.js'],
    both: ['<?php echo base_url();?>/public/turnjs/css/basic.css'],
    complete: loadApp
  });

  </script> -->


</body>
</html>
