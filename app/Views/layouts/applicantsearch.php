<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
    
    
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Company%20Profile/Company%20Info.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Company%20Profile/Events.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Company%20Profile/Gallery.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Company%20Profile/Profile.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">
     
    
    
     <link rel="shortcut icon" href="<?php echo base_url();?>/public/employerassets/Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css">
 

<style>
    .cursor{
          cursor:pointer;
        }

        .repeat-remove{
            float:right;
            color: #FF0000;
        }

        #test_field_id[test_sub1][1]{
            display:none;
        }

        /* The container <div> - needed to position the dropdown content */
.dropdown {
position: relative;
display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
display: none;
position: absolute;
left:-136px;
top: 29px;
/* right: 0; */
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;

width: 300px;
}

/* Links inside the dropdown */
.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

/* Change color of dropdown links on hover */
/* .dropdown-content a:hover {background-color: #f1f1f1} */

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
background-color: #3e8e41;
}

.dropdown-divider {
    height: 0;
    margin: .5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef;
}

.text-white{
    color: #fff !important;
}

.cursor{
  cursor:pointer;
}


body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}

.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding-top: .2rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}


</style>


    
    
</head>
    
    <header class="header-class" style="max-height:100px;">
           
             <div style="float: left">
            <a href="<?php echo site_url(); ?>">
            <img class="logo" src="<?php echo base_url();?>/public/employerassets/Images/Header%20and%20Footer/Logo.png"></a>
                </div>
        
        
          <div class="topnav">
            <a href="<?php echo site_url(); ?>logout">Logout</a>
          </div> 


         
       
    </header>
    
    <body style="margin: 0px; background-color: #f5f5f5">
     
       <!--COMPANY PROFILE-->
        
       <section class="company-info-banner-containerf ">
           
                <div class="w3-col s12">
                    <div class="dropdown w3-right">
                    <i class="fa fa-bars w3-text-black cursor w3-right mr-4" style="font-size: 30px !important;"></i>&nbsp;&nbsp;
                        <div class="dropdown-content">
                            <a href="<?php echo site_url();?>company/dashboard">Dashboard</a>
                            <a href="<?php echo site_url();?>company/search">Search</a>
                            <a href="<?php echo site_url();?>company/messages/inbox" >Messages</a>
                            <a href="<?php echo site_url();?>company/jobdash" >JobDash</a>
                            <a href="<?php echo site_url();?>company/jobs">Jobs Board</a>
                            <a href="<?php echo site_url();?>company/settings">Settings</a>
                            <a href="<?php echo site_url();?>company/logout">Logout</a>
                           
                        </div>
                    </div>
                </div>    
           
    </section>
        
   
        
        
    <div class="">
        <h2 class="company-profile-headerd text-center">
            Candidates Search Results
        </h2>
             
                
    
        </div>


        <section id="CompanyProfile" class="company-profile mt-5">


            
       
        
           
            
<div class="company-profile-container">

  
            <div class="row">
                <div class="col">
                    <h1> Select Candidates</h1>
                </div>
            </div>
            <br>
            
            
            <?php if(empty($results)){ ?>

                <p>No matched candidates found for job query</p>

            <?php } else { ?>
            
                <div id="search-results">
                <form action="<?php echo site_url(); ?>company/jobinviteaction" method="post">
                    <input type="hidden" name="employer_id" value="<?php echo $employer_details['femployer_id']; ?>">
                    <input type="hidden" name="employer_name" value="<?php echo $employer_details['fcompany_name']; ?>">
                    <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
                    <input type="hidden" name="job_title" value="<?php echo $job_title; ?>">

                        <div class="applicants_checkboxes">
                        
                            <?php foreach ($results as $result) {?>

                                <p>  <input type="checkbox" name="applicant_id[]" value="<?php echo $result->fapplicant_id; ?>" class="w3-check"> <label for=""> <a href="javascript:void" class="candidate_name" data-applicant_id="<?php echo $result->fapplicant_id; ?>"> <?php echo $result->ffirst_name . ' '. $result->flast_name; ?> </a> </label></p>

                            <?php }  ?>
                    
                        </div>


                        <div class="row">
                            <div class="col-lg-12 text-center">
                                
                                     <button type="submit" class="w3-button w3-blue">INVITE TO APPLY</button>
                                
                            </div>
                        </div>
                    </form>
                </div>

            <?php }  ?>

</div>

            
    
</div>  


</section>



            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                   
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    

                    <div class="container">
                            <div class="main-body">
                            
                            
                                <div class="row gutters-sm">
                                    <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="100">
                                            <div class="">
                                            
                                            <p class="text-secondary mb-1 profession"></p>
                                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                            
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card mt-3">
                                        <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                            <span class="text-secondary">https://bootdey.com</span>
                                        </li>
                                       
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                            <span class="text-secondary">@bootdey</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                            <span class="text-secondary">bootdey</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                            <span class="text-secondary">bootdey</span>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="row py-0 my-0">
                                            <div class="col-sm-3 ">
                                                <h6 class="mb-1">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            <span id="first_name"></span>  <span id="last_name"></span>
                                            </div>
                                        </div>
                                        <hr style="margin:7px;">
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-1">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            fip@jukmuh.al
                                            </div>
                                        </div>
                                        <hr style="margin:7px;">
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-1">Phone</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            (239) 816-9029
                                            </div>
                                        </div>
                                        <hr style="margin:7px;">
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            Bay Area, San Francisco, CA
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row gutters-sm">
                                        <div class="col-sm-6 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Preferences</h6>
                                           
                                            <div style="border-bottom:1px solid black;">
                                                <!-- <div class="" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> -->
                                               <p> Employment Type <strong class="float-right"> Remote</strong></p>
                                            </div>
                                            
                                            
                                            <div class="" >
                                                Mininum Salary Expected
                                            </div>
                                           
                                            <div class="mb-2" >
                                            One Page
                                            </div>
                                           
                                            <div class="mb-2" >
                                            Mobile Template
                                            </div>
                                            
                                            <div class="mb-2" >
                                            Backend API
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Skills</h6>
                                           
                                            <div class="" >
                                                <!-- <div class="" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> -->
                                                Educational Qualification Remote
                                            </div>
                                            
                                            <div class="mb-2" >
                                                Languages
                                            </div>
                                           
                                            <div class="mb-2" >
                                            One Page
                                            </div>
                                           
                                            <div class="mb-2" >
                                            Mobile Template
                                            </div>
                                            
                                            <div class="mb-2" >
                                            Backend API
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>


                    </div>
                    
                   
                    
                </div>
                </div>
            </div>
        
     
    
        
        <footer class="" style="background:#0991FF; position:absolute: bottom:0;width: 100%;">

        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-3">
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-instagram"></a>
                    <a href="" class="fa fa-twitter"></a>
                    <a href="" class="fa fa-google"></a>
                </div>
                <div class="col-lg-4 pt-3">
                <p align="center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kokoruns.com </p>
                </div>
                <div class="col-lg-5 pt-3 ">
                    <a style="text-decoration: none; color:darkblue" href="">Help and Support</a> |
                    <a style="text-decoration: none; color:darkblue" href="<?php echo site_url();?>privacy">Privacy Policy</a> |
                    <a style="text-decoration: none; color:darkblue" href="<?php echo site_url();?>terms">Terms Of Service</a>
                </div>
            </div>
        </div>

        </footer>
   
      
        
    </body>
    
  



<script src="<?php echo base_url();?>/public/assets/jquery.min.js"></script>
<script src="<?php echo base_url();?>/public/assets/isia-form-repeater.min.js"></script>
<script src="<?php echo base_url();?>/public/assets/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>


$("#edit-profile-form").submit(function(){
    

    var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>employer/updateprofileaction',
        type: "POST",
        data: querystring,
        dataType: "json",
        success: function(response) {
            //code to execute
            //console.log(response);
            if(response.success == true)
            {
                //alert(response.success);
                //CancelExperience();
                //  $("#id02").hide();
                // $("#add_education-form").reset();
                $("#CompanyProfileForm").hide();
                loadcompanyprofile();
              toastr.success('<p>Profile updated successfully</p>', {timeOut: 1000});
            }
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

    return false;
});


</script>


<script>

    function loadcompanyprofile()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>employer/loadcompanyprofile",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
           
            //$('#other_skills').html(data.other_skills);

            //alert(data.employer_profile);

            $('#company-profile-container').html(data.employer_profile);
            
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            //alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      loadcompanyprofile();

</script>


<script>


$("#add-event-form").submit(function(){
    

    var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>employer/createeventaction',
        type: "POST",
        data: querystring,
        dataType: "json",
        success: function(response) {
            //code to execute
            //alert(response);
            if(response.success == true)
            {
                //alert(response);
                //CancelExperience();
                //  $("#id02").hide();
                // $("#add_education-form").reset();
              toastr.success('<p>event created successfully</p>', {timeOut: 1000});
            }
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

    return false;
});


</script>



<script>


    $("body").on('submit' ,'#update-event-form', function(e){
    
        e.preventDefault();

    var querystring = $(this).serialize();
    
    //alert(querystring);

        $.ajax({
            url: '<?php echo site_url(); ?>employer/updateeventaction',
            type: "POST",
            data: querystring,
            dataType: "json",
            success: function(response) {
                //code to execute
                //alert(response.success);
               
                if(response.success == true)
                {
                    //CancelExperience();
                   // $("#id01").hide();
                   
                //    load_experiences();
                $(".close-edit-event").hide();
                 toastr.success('<p>Event updated successfully</p>', {timeOut: 1000});
                   
                //     $(".update-experience-form").trigger("reset");
                    // $(".experience_box").load(location.href + " .experience_box");
                   
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },
            });

        return false;
    });

</script>


<script>

  
        $("body").on('click' ,'.event-delete', function(e){
            e.preventDefault();

            var event_id = $(this).data('event_id');
           
            //alert(event_id);

            $.ajax({
                url: '<?php echo site_url();?>company/deleteeventaction',
                method:"POST",
                dataType: "json",
                data: {event_id:event_id},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                },
                success: function(response){
                    
                    if(response.success == true)
                    {
                        loadcompanyevents();
                        toastr.success('<p>Event deleted successfully</p>', {timeOut: 1000});
                    } 
                    

                },
                error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },

            });

            
        });


</script>


<script>

    function loadcompanyevents()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>employer/loadcompanyevents",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
           
            //$('#other_skills').html(data.other_skills);

            //alert(data.employer_events);

            $('#posted-event-container').html(data.employer_events);
            
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            //alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      loadcompanyevents();

</script>


<script>

$('#image_upload_form').submit(function(e) 
 {

            e.preventDefault();

            var form_data = new FormData();
            
            var files = $('#fileid')[0].files[0];

            
            
            form_data.append('fileid',files);

            var employer_id = $('#employer_id').val();

            //alert(employer_id);

            form_data.append('employer_id', employer_id);


            // console.log(form_data);

                $.ajax({
                    url: '<?php echo site_url();?>company/uploadgalleryaction',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(response){
                        alert(response);
                        // $("#image_upload_form").trigger("reset");
                        // $(".porfolio-container-imagesc").load(location.href + " .porfolio-container-imagesc"); 
                        // toastr.success('<p>Portfolio Image uploaded successfully</p>', {timeOut: 1000});

                    },
                    error: function(xhr, textStatus, errorThrown) {
                        //code to execute
                        //alert(xhr.responseText);
                        //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                    },

                });

        });

</script>


        <script>
            $('#state').change(function(){
                    var state = $('#state').val();
                    //alert(state);
                    if(state != '')
                    {
                        //alert("Hi");
                        $.ajax({
                            url:"<?php echo site_url(); ?>front/getAllLGAs",
                            method:"POST",
                            data:{state:state},
                            success:function(data)
                            {
                                //alert(data);
                                $('#lga').html(data);
                            },
                            error: function(xhr, textStatus, errorThrown) {
                            //code to execute
                                //alert(xhr.responseText);
                            //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                            },
                        });
                        
                    }
                    else
                    {
                        // $('#state').html('<option value="">Select State</option>');
                        // $('#city').html('<option value="">Select City</option>');
                    }
                });
        </script>



<script>

$("#add-btn1").click(function(){
    var i = Math.floor(Math.random() * 10000000);
    $("#input-area1").append('<input type="text" name="locations[]" class="form-locations-input extra'+i+'" id="extra'+i+'" style="width:85%;"> <button class="add-tag-button remove-input extra'+i+'" style="padding-top: 0;padding-bottom: 1px; height: 26px;">- Remove </button><br>');
   
  });

</script>

<script>

$("#add-btn2").click(function(){
    var i = Math.floor(Math.random() * 10000000);
    $("#input-area2").append('<input type="text" name="socials[]" class="form-locations-input extra'+i+'" id="extra'+i+'" style="width:85%;"> <button class="add-tag-button remove-input extra'+i+'" style="padding-top: 0;padding-bottom: 1px; height: 26px;">- Remove </button><br>');
   
  });

</script>





<script>

$(".remove-input").click(function (e) { 
    e.preventDefault();

this
    
});

</script>


<script>

    function openfile(a) {
    $(a).trigger('click');
    //alert("hi");
    }

</script>


<script>

    $('.datatable').DataTable();

</script>


<script>

$("#work_time").change(function() {
  if(this.checked) {
   alert("checked ");
    //get the values of the filled fields

    $("#work_time_start").val();
    $("#work_time_end").val();
 

  }

});

</script>



<script>

$(".candidate_name").click(function (e) { 
    e.preventDefault();

    var applicant_id = $(this).data('applicant_id');

    //alert(applicant_id);


    $.ajax({
          url:"<?php echo site_url(); ?>applicant/getapplicantdetails",
          method:"POST",
          dataType:"json",
          data:{applicant_id:applicant_id},
          success:function(data)
          {
           
            $('.profession').text(data.applicant_details.fprofession);
            $('#first_name').text(data.applicant_details.ffirst_name);
            $('#last_name').text(data.applicant_details.flast_name);

            //console.log(data.applicant_details.frecno);

            //$('#posted-event-container').html(data.employer_events);
            $("#myModal").modal();
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            //alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });


    
    
});

</script>

    
</html>
