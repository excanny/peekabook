<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="PeekABook - Creating Interactive Children Books" />
<meta name="keywords" content="kindergarten,children,kid books,school books,baby books,children books,academy,course,child education,wonderbly" />
<meta name="PeekABook" content="Children interactive books in UAE" />

<!-- Page Title -->
<title>PeekABook - Kids Education & Children Book Company</title>

<!-- Favicon and Touch Icons -->
<link href="<?php echo base_url();?>/public/assets2/images/favicona.png" rel="shortcut icon" type="image/png">
<link href="<?php echo base_url();?>/public/assets2/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?php echo base_url();?>/public/assets2/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?php echo base_url();?>/public/assets2/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?php echo base_url();?>/public/assets2/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?php echo base_url();?>/public/assets2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/public/assets2/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/public/assets2/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/public/assets2/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?php echo base_url();?>/public/assets2/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php echo base_url();?>/public/assets2/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?php echo base_url();?>/public/assets2/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo base_url();?>/public/assets2/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php echo base_url();?>/public/assets2/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?php echo base_url();?>/public/assets2/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url();?>/public/assets2/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url();?>/public/assets2/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?php echo base_url();?>/public/assets2/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?php echo base_url();?>/public/assets2/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url();?>/public/assets2/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>/public/assets2/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo base_url();?>/public/assets2/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?php echo base_url();?>/public/assets2/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url();?>/public/assets2/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <!-- <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm"></div>
  </div>  -->
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-sky sm-text-center p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline font-13 sm-text-center mt-5">
              <?php if(!session()->email) {?>
                <li>
                  <a class="text-white" href="<?php echo site_url();?>register">Register</a>
                </li>
                <li class="text-white">|</li>
          
                <li>
                  <a class="text-white" href="<?php echo site_url();?>login">Login</a>
                </li>
              <?php }else{?>

                <li class="text-white">
                  Welcome,  <?php echo session()->firstname; ?>
                </li>

                <li class="text-white">|</li>

                <li>
                  <a class="text-white" href="<?php echo site_url();?>logout">Logout</a>
                </li>

                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget m-0 pull-right sm-pull-none sm-text-center">
              <ul class="list-inline pull-right">
                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-cart-link has-dropdown text-white text-hover-theme-colored"><i class="fa fa-shopping-cart font-13"></i> (1)</a>
                    <ul class="dropdown">
                      <li>
                        <!-- dropdown cart -->
                        <div class="dropdown-cart">
                          <table class="table cart-table-list table-responsive">
                              <tbody id="cart_details_modal">
                                
                                
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
                              <a class="btn btn-theme-color-sky btn-xs" href="<?php echo site_url();?>cart"> View cart</a>
                              <a class="btn btn-dark btn-xs" href="javascript:void;"> Checkout</a>
                          </div>
                        </div>
                        <!-- dropdown cart ends -->
                      </li>
                    </ul>
                  </div>
                </li>
                
              </ul>
            </div>
            <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
              <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="mailto:hr@peekabook.com"><i class="fa fa-envelope-o text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="<?php echo site_url();?>"><img src="<?php echo base_url();?>/public/assets2/images/logo-wide.png" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-color-sky font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-black text-uppercase">Call us today!</a>
                  <h5 class="font-14 text-theme-color-blue m-0"> +(971) 345 6789</h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o text-theme-color-sky font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-black text-uppercase">Customer Relations</a>
                  <h5 class="font-13 text-theme-color-blue m-0"> Mon-Fri 8:00-16:00</h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-color-red border-bottom-theme-color-blue-2px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu onepage-nav">
              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#courses">Books</a></li>
              <li><a href="#activities">Activities</a></li>
              <li><a href="#testimonials">Testimonials</a></li>
             </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>
                <!-- Modal: Book Now Starts -->
                <a class="btn btn-colored btn-flat bg-theme-color-sky text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" data-toggle="modal" data-target="#BSParentModal" href="http://lovegardens.com.ng/personalize/come-play-with-us">Purchase Now</a>
                <!-- Modal: Book Now End -->
              </li>
            </ul>
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <?= $this->renderSection('content') ?>

  <!-- Footer -->
  <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="<?php echo base_url();?>/public/assets2/images/bg/bg8.jpg">
    <div class="container">
      <div class="row border-bottom">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="<?php echo base_url();?>/public/assets2/images/logo-wide-copy.png">
            <p>203, peeky Labs, Behind Alis Steet, dubai, UAE.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-red mr-5"></i> <a class="text-gray" href="#">+971 23-456-789</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-lemon mr-5"></i> <a class="text-gray" href="#">contact@peekabook.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-orange mr-5"></i> <a class="text-gray" href="#">www.peekabook.com</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Useful Links</h4>
            <ul class="list angle-double-right list-border">
              <li><a href="">About Us</a></li>
              <li><a href="">Our Books</a></li>
              <li><a href="">Pricing</a></li>
              <li><a href="">Shop</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Twitter Feed</h4>
            <div class="twitter-feed list-border clearfix" data-username="peekabook" data-count="2"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-30">
        <div class="col-md-2">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Call Us Now</h5>
            <div class="text-gray">
              +971 3 1234 5678 <br>
              +971 3 1234 5678
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-bordered icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
          </div>
        </div>
        <div class="col-md-5 col-md-offset-2">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe Us</h5>
            <!-- Mailchimp Subscription Form Starts Here -->
            <form id="mailchimp-subscription-form-footer" class="newsletter-form">
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
                <span class="input-group-btn">
                  <button data-height="45px" class="btn bg-theme-color-sky text-white btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
            <!-- Mailchimp Subscription Form Ends Here -->
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2020 Peek A Book. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                <a href="<?php echo site_url();?>adm/login">Admin Login</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<script src="<?php echo base_url();?>/public/assets2/js/jquery-3.3.1.min.js"></script>


<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo base_url();?>/public/assets2/js/custom.js"></script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script>
      $(document).ready(function(e) {
        $(".rev_slider_default").revolution({
          sliderType:"standard",
          sliderLayout: "auto",
          dottedOverlay: "none",
          delay: 5000,
          navigation: {
              keyboardNavigation: "off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              onHoverStop: "off",
              touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
              },
            arrows: {
              style: "gyges",
              enable: true,
              hide_onmobile: false,
              hide_onleave: true,
              hide_delay: 200,
              hide_delay_mobile: 1200,
              tmp: '',
              left: {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 0,
                  v_offset: 0
              },
              right: {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 0,
                  v_offset: 0
              }
            },
            bullets: {
              enable: true,
              hide_onmobile: true,
              hide_under: 800,
              style: "hebe",
              hide_onleave: false,
              direction: "horizontal",
              h_align: "center",
              v_align: "bottom",
              h_offset: 0,
              v_offset: 30,
              space: 5,
              tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
            }
          },
          responsiveLevels: [1240, 1024, 778],
          visibilityLevels: [1240, 1024, 778],
          gridwidth: [1170, 1024, 778, 480],
          gridheight: [640, 768, 960, 720],
          lazyType: "none",
          parallax: {
              origo: "slidercenter",
              speed: 1000,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
              type: "scroll"
          },
          shadow: 0,
          spinner: "off",
          stopLoop: "on",
          stopAfterLoops: 0,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "0",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
          }
        });
      });
    </script>
    <!-- Slider Revolution Ends -->

<script>
  $(document).ready(function(){

      $('#psd2').keyup(function(){
            if ($("#psd1").val() != $("#psd2").val()) {
                $(".no_match").fadeIn('slow');
            // alert('the passwords didn\'t match!');
            $("#psd1").css("border", "1px solid #A94442");
            $("#psd2").css("border", "1px solid #A94442");
            $("#submit").prop("disabled",true);

        }
        else 
        {
            $(".no_match").fadeOut('slow');
            $("#psd1").css("border", "1px solid #3C763D");
            $("#psd2").css("border", "1px solid #3C763D");
            $("#submit").prop("disabled",false);
        }
    });


    $(".radio1").click(function(){

    // var gender =  $("input[name='gender']:checked").val();
    var skin_colour =  $("input[name='skin_colour']:checked").val();
    // var hair_colour =  $("input[name='hair_colour']:checked").val();

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



    $(".radio2").click(function(){

    var gender =  $("input[name='gender']:checked").val();
    var hair_colour =  $("input[name='hair_colour']:checked").val();

    var imageid = gender+hair_colour;

    //alert(imageid);

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




  });

</script>

<script type="text/javascript">

/* ---------------------------------------------------------------------- */
  /* ------------------------------ Shop Plus Minus ----------------------- */
  /* ---------------------------------------------------------------------- */
      $('body').on('click', '.quantity .plus', function(e) {
          var book_slug = $(this).data('book_slug');
          //alert(book_slug);
          var currentVal = parseInt($(this).parent().children(".qty").val(), 10);
          if (!isNaN(currentVal)) {
             $(this).parent().children(".qty").val(currentVal + 1);
             var quantity = currentVal + 1;
          //      //alert(quantity);

              $.ajax({
                    url:"<?php echo site_url(); ?>front/updatecart",
                    method:"POST",
                    dataType:"json",
                    data: {book_slug: book_slug, quantity:quantity},
                    success:function(data)
                    {
                       //alert(data);
                        load_cart_details();
                        load_cart_details_modal();
                      // load_wishlist_data();
                      // $('#cart_extra').show();
                      // toastr.success('<p class="text-white">Cart Successfully Updated </p>', {timeOut: 0})
                
                    },
                    error: function(xhr, textStatus, errorThrown) {
                      //code to execute
                        alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                    },
				        });
          }
          return false;

      });

      $('body').on('click', '.quantity .minus', function(e) {
        var book_slug = $(this).data('book_slug');
          var currentVal = parseInt($(this).parent().children(".qty").val(), 10);
          if (!isNaN(currentVal) && currentVal > 0) {
              $(this).parent().children(".qty").val(currentVal - 1);
              var quantity = currentVal - 1;

              $.ajax({
                    url:"<?php echo site_url(); ?>front/updatecart",
                    method:"POST",
                    dataType:"json",
                    data: {book_slug: book_slug, quantity:quantity},
                    success:function(data)
                    {
                       //alert(data);
                        load_cart_details();
                        load_cart_details_modal();
                      // load_wishlist_data();
                      // $('#cart_extra').show();
                      // toastr.success('<p class="text-white">Cart Successfully Updated </p>', {timeOut: 0})
                
                    },
                    error: function(xhr, textStatus, errorThrown) {
                      //code to execute
                        alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                    },
				        });

          }
          return false;
      });

</script>


<script>

    function load_cart_details()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>front/cartdetails",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
              //alert(data.total_item);
            $('#cart_details').html(data.cart_details);
            // // $('.total_price').text(formatter.format(data.total_price));
            $('#total_item').html(data.total_item);
            // $('.badge').html(data.total_item);
            // if(data.total_item == '0')
            // {
            //   $('#cart_extra').hide();
            // }
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            //alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      load_cart_details();

</script>

<script>

    function load_cart_details_modal()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>front/cartdetailsmodal",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
              //alert(data.cart_details_modal);
            $('#cart_details_modal').html(data.cart_details_modal);
            // // // $('.total_price').text(formatter.format(data.total_price));
            // $('#total_item').html(data.total_item);
           
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      load_cart_details_modal();

</script>




</body>

<!-- Developed by kophy tech Sun, 30 Aug 2020 10:25:47 GMT -->
</html>