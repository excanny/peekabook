<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Page Title -->
<title>PeekABook</title>

<!-- Favicon and Touch Icons -->
<!-- <link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144"> -->

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
<!-- CSS | For Dark Layout -->
<link href="<?php echo base_url();?>/public/assets2/css/style-main-dark.css" rel="stylesheet" type="text/css">
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
<script type="text/javascript" src="<?php echo base_url();?>/public/turnjs/extras/modernizr.2.5.3.min.js"></script>

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
      <div class="container" style="height:40px">
        <div class="row" style="height:40px">
          <div class="col-md-4" style="height:40px">
            <div class="widget no-border m-0">
              <ul class="list-inline font-13 sm-text-center mt-5">
                <li>
                  <a class="text-white" href="#">Register</a>
                </li>
                <li class="text-white">|</li>
          
                <li>
                  <a class="text-white" href="#">Login</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-8" style="height:40px">
            <div class="widget m-0 pull-right sm-pull-none sm-text-center">
              <ul class="list-inline pull-right">
                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-cart-link has-dropdown text-white text-hover-theme-colored"><i class="fa fa-shopping-cart font-13"></i> (0)</a>
                    <ul class="dropdown">
                      <li>
                        <!-- dropdown cart -->
                        <div class="dropdown-cart">
                          <table class="table cart-table-list table-responsive">
                            <tbody>
                              <tr>
                                <td><a href="#"><img alt="" src="<?php echo base_url();?>/public/assets2/images/products/sm1.jpg"></a></td>
                                <td><a href="#"> Product Title</a></td>
                                <td>X3</td>
                                <td>$ 100.00</td>
                                <td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
                              </tr>
                              <tr>
                                <td><a href="#"><img alt="" src="<?php echo base_url();?>/public/assets2/images/products/sm2.jpg"></a></td>
                                <td><a href="#"> Product Title</a></td>
                                <td>X2</td>
                                <td>$ 70.00</td>
                                <td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="total-cart text-right">
                            <table class="table table-responsive">
                              <tbody>
                                <tr>
                                  <td>Cart Subtotal</td>
                                  <td>$170.00</td>
                                </tr>
                                <tr>
                                  <td>Shipping and Handling</td>
                                  <td>$20.00</td>
                                </tr>
                                <tr>
                                  <td>Order Total</td>
                                  <td>$190.00</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="cart-btn text-right">
                              <a class="btn btn-theme-color-sky btn-xs" href="shop-cart.html"> View cart</a>
                              <a class="btn btn-dark btn-xs" href="shop-checkout.html"> Checkout</a>
                          </div>
                        </div>
                        <!-- dropdown cart ends -->
                      </li>
                    </ul>
                  </div>
                </li>
                <!-- <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                    <ul class="dropdown">
                      <li>
                        <div class="search-form-wrapper">
                          <form method="get" class="mt-10">
                            <input type="text" onfocus="if(this.value =='Enter your search') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter your search'; }" value="Enter your search" id="searchinput" name="s" class="">
                            <label><input type="submit" name="submit" value=""></label>
                          </form>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li> -->
              </ul>
            </div>
            <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
              <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle bg-lightest xs-text-center" >
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15 text-white" href="javascript:void(0)">
                <!-- <img src="images/logo-wide.png" alt=""> -->
                <!-- <h1 style="font-size: 22px;"> -->
                  <span class="text-primary px-0">Peek</span><span class="text-success mx-0">A</span><span class="text-warning mx-0">Book</span>
                <!-- </h1> -->
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4" style="height:69px">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-color-sky font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-uppercase">Call us today!</a>
                  <h5 class="font-14 text-theme-color-sky m-0"> +(012) 345 6789</h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-3" style="height:69px">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o text-theme-color-red font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-uppercase">We are open!</a>
                  <h5 class="font-13 text-theme-color-red m-0"> Mon-Fri 8:00-16:00</h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-color-red border-bottom-theme-color-sky-2px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu">
              <li class="active"><a href="#home">Home</a>
            
              </li>
              <li><a href="#">All Books</a>
            
              </li>
              <li><a href="#">About Us</a>
                <ul class="dropdown">
                  <li><a href="">Our Story</a></li>
                </ul>
              </li>
              
            </ul>
            
            <!-- <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div> -->
          </nav>
        </div>
      </div>
    </div>
  </header>

  <?= $this->renderSection('content') ?>

  <!-- Footer -->
  <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="images/bg/bg8.jpg">
    <div class="container">
      <div class="row border-bottom">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <!-- <img class="mt-5 mb-20" alt="" src="images/logo-white-footer.png"> -->
            <h4>PEEKABOOK</h4>
            <p>UAE.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-red mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-lemon mr-5"></i> <a class="text-gray" href="#">contact@peekabook.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-orange mr-5"></i> <a class="text-gray" href="#">www.peekabook.com</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Other Links</h4>
            <ul class="list angle-double-right list-border">
              <li><a href="">About Us</a></li>            
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Twitter Feed</h4>
            <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
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
               1234 5678 <br>
               1234 5678
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-bordered icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
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
           
          
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2020 PeekABook. All Rights Reserved</p>
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
                  <a href="#">Support</a>
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

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo base_url();?>/public/plugins/jquery/jquery.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<!-- <script type="text/javascript" src="<?php //echo base_url();?>/public/assets2/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url();?>/public/assets2/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url();?>/public/assets2/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url();?>/public/assets2/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url();?>/public/assets2/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url();?>/public/assets2/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url();?>/public/assets2/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url();?>/public/assets2/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url();?>/public/assets2/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script> -->


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

  function loadApp() {

    // Create the flipbook

    $('.flipbook').turn({
        // Width

        width:962,
        
        // Height

        height:270,

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

  </script>

</body>


</html>