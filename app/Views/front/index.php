<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>  
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg1.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <div class="bg-video">
        <div class="twp-video-background">
          <div class="twp-video-foreground">
           <video autoplay muted loop id="myVideo">
            <source src="<?php echo base_url();?>/public/assets/images/c-video.mp4" type="video/mp4">
           </video>
         </div>
         <div class="twp-video-layer"></div>
      </div>
      </div>
             <div class="display-table">
        <div class="display-table-cell">
          <div class="container pt-200 pb-200">
            <div class="row">
              <div class="col-md-12 text-center">
                <h1 class="text-white text-uppercase font-60 mb-0">Peek<span class="text-theme-colored">ABook</span></h1>
                <h4 class="text-black-777 font-weight-400 mt-0">Every day we bring hope to help millions of children in the world <br>enjoy the beauty of reading and learning from customized books.</h4>
                <a class="btn btn-colored btn-theme-color-orange btn-flat smooth-scroll-to-target mt-20" href="http://lovegardens.com.ng/personalize/come-play-with-us">Purchase Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
              </li>

              </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
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
      </div>
    </section>

    <!-- Section: home-box -->
    <section>
      <div class="container pb-0">
        <div class="section-content">
          <div class="row"  data-margin-top="-150px">
            <div class="col-md-4">
              <div class="icon-box iconbox-border bg-theme-color-yellow text-center p-40 mb-sm-50">
                <a class="icon icon-lg icon-top bg-theme-color-orange icon-rounded icon-border-effect effect-rounded" href="#">
                  <i class="fa fa-book text-white"></i>
                </a>
                <h4 class="icon-box-title mt-50 text-white">Quality lessons</h4>
                <p class="text-black-777 mb-30">We make books that are not just for entertainment but also include educative content in our books.</p>
                  <a class="btn btn-default" href="#">Read More</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box iconbox-border bg-theme-color-sky text-center p-40 mb-sm-50">
                <a class="icon icon-lg icon-top bg-theme-color-cream icon-rounded icon-border-effect effect-rounded" href="#">
                  <i class="fa fa-heart text-white"></i>
                </a>
                <h4 class="icon-box-title mt-50 text-white">Experience Yourself</h4>
                <p class="text-white mb-30">All our books can be customized for a specific child, with their gender and skin colour.</p>
                  <a class="btn btn-default" href="#">Read More</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box iconbox-border bg-theme-color-orange text-center p-40 mb-sm-50">
                <a class="icon icon-lg icon-top bg-theme-color-blue icon-rounded icon-border-effect effect-rounded" href="#">
                  <i class="fa fa-user text-white"></i>
                </a>
                <h4 class="icon-box-title mt-50 text-white">Interactive Entertainment</h4>
                <p class="text-black-777 mb-30">Children need their dose of visual entertainment and we make sure to provide that in our books.</p>
                  <a class="btn btn-default" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section:about-->
    <section id="about">
      <div class="container pt-0">
        <div class="section-content" data-margin-top="90px">
          <div class="row">
            <div class="col-md-8">
              <div class="meet-doctors">
                <h2 class="mt-0 line-height-1 text-theme-color-sky">Welcome To Peek A Book</h2>
                <h3 class="letter-space-2 line-bottom text-theme-color-orange title">We make World class customizable children books</h3>
                <p>sample text that will be replaced. sample text that will be replaced. sample text that will be replaced. sample text that will be replaced. sample text that will be replaced. sample text that will be replaced.</p>
              </div>
              <div class="row mb-sm-30">
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-20">
                   <a class="icon bg-theme-color-red icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                    <i class="pe-7s-scissors text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-10 letter-space-2 mb-10">Active Learning</h5>
                    <p class="text-gray">sample text that will be replaced. sample text that will be replaced.</p>
                   </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-20">
                   <a class="icon bg-theme-color-lemon icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                    <i class="pe-7s-pen text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-10 letter-space-2 mb-10">Funny and Happy</h5>
                    <p class="text-gray">sample text that will be replaced. sample text that will be replaced.</p>
                   </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box p-0">
                   <a class="icon bg-theme-color-blue icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                    <i class="pe-7s-phone text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-10 letter-space-2 mb-10">Captivating stories</h5>
                    <p class="text-gray">sample text that will be replaced.sample text that will be replaced.</p>
                   </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box p-0">
                   <a class="icon bg-theme-color-orange icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                    <i class="pe-7s-light text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-10 letter-space-2 mb-10">Expert Illustrations</h5>
                    <p class="text-gray">sample text that will be replaced.sample text that will be replaced.</p>
                   </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <img src="<?php echo base_url();?>/public/assets/images/about/a1.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div> 
          <img alt="" src="<?php echo base_url();?>/public/assets/images/bg/f2.png" class="img-responsive img-fullwidth">
      </div>
    </section>

    <!-- Section: Activities -->
  <section id="book">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="line-bottom-center mt-0">Our <span class="text-theme-color-orange">Book</span></h2>
              <div class="title-flaticon">
                <i class="flaticon-charity-alms"></i>
              </div>
              <p>Peek A Book currently has released one book but will be releasing other<br> books that will contain content including:</p>
              </div>
              </div>
            </div>
        <div class="section-centent">
          <div class="row">
            <div class="col-md-12">
              <div class="services-tab border-3px bg-white">
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="tab11">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="thumb">
                          <img class="img-fullwidth" src="<?php echo base_url();?>/public/assets/images/services/1e.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="service-content ml-20 ml-sm-0">
                          <h2 class="font-36 text-theme-color-orange mt-0">Ali & Simbi by Peek A Book</h2>
                          <p class="lead">One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid molestias.</p>
                          <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                          <a class="btn btn-lg btn-dark btn-theme-color-orange" href="<?php echo site_url('personalize/'. $featured3['fbook_slug']);?>">Personalize Book</a>
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
    </section>

    <!-- Section: Our Features -->
    <section id="features" class="" data-bg-img="images/bg/p2.jpg">
      <div class="container pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-color-orange">Features</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-red border-radius-15px media p-20 pr-15 pl-15"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-graduation-cap text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-black-777 mb-10">Qualified Writers</h4>
                  <p class="text-black-777">Lorem ipsum dolor sit aetcons ect adipsicing elium consecte sit ullam perspi</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-lemon border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-book text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-black-777 mb-10">Educative Ideas</h4>
                  <p class="text-black-777">Lorem ipsum dolor sit aetcons ect adipsicing elium consecte sit ullam perspiciatis</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-sky border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-clock-o text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-black-777 mb-10">Bed Night Stories</h4>
                  <p class="text-black-777">Lorem ipsum dolor sit aetcons ect adipsicing elium consecte sit ullam perspiciatis</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-green border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-comments text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-black-777 mb-10">Creative Ideas</h4>
                  <p class="text-black-777">Lorem ipsum dolor sit aetcons ect adipsicing elium consecte sit ullam perspiciatis</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-blue border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-globe text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-black-777 mb-10">Geographical Content</h4>
                  <p class="text-black-777">Lorem ipsum dolor sit aetcons ect adipsicing elium consecte sit ullam perspiciatis</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-yellow border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-trophy text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-black-777 mb-10">Award Wining</h4>
                  <p class="text-black-777">Lorem ipsum dolor sit aetcons ect adipsicing elium consecte sit ullam perspiciatis</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div> 
          <img alt="" src="<?php echo base_url();?>/public/assets/images/bg/f2.png" class="img-responsive img-fullwidth">
      </div>
      </section>
    
    <!-- Section: Client Say -->
    <section id="testimonials">
     <section class="divider" data-margin-bottom="40px">
      <div class="container">
        <div class="section-title">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="line-bottom-center text-theme-color-orange mt-0 mb-30">Happy Parent's Say</h2>
            </div>
          </div>
        </div>

        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel-2col testimonial style2 dots-white" data-dots="false">
              <div class="item">
                <div class="testimonial-wrapper">                  
                  <div class="content bg-theme-color-orange p-30 pb-40">
                    <p class="font-15 text-white font-weight-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                    <i class="fa fa-quote-right mt-10 text-white"></i>
                    <h4 class="author text-white mt-20 mb-0">Catherine Grace</h4>
                    <h6 class="title text-white mt-0 mb-15">Designer</h6>
                    <div class="thumb mt-20"><img class="img-circle" alt="" src="<?php echo base_url();?>/public/assets/images/testimonials/1.jpg"></div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper">                  
                  <div class="content bg-theme-color-lemon p-30 pb-40">
                    <p class="font-15 text-white font-weight-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                    <i class="fa fa-quote-right mt-10 text-white"></i>
                    <h4 class="author text-white mt-20 mb-0">Catherine Grace</h4>
                    <h6 class="title text-white mt-0 mb-15">Designer</h6>
                    <div class="thumb mt-20"><img class="img-circle" alt="" src="<?php echo base_url();?>/public/assets/images/testimonials/2.jpg"></div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper">                  
                  <div class="content bg-theme-color-sky p-30 pb-40">
                    <p class="font-15 text-white font-weight-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                    <i class="fa fa-quote-right mt-10 text-white"></i>
                    <h4 class="author text-white mt-20 mb-0">Catherine Grace</h4>
                    <h6 class="title text-white mt-0 mb-15">Designer</h6>
                    <div class="thumb mt-20"><img class="img-circle" alt="" src="<?php echo base_url();?>/public/assets/images/testimonials/3.jpg"></div>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Divider: Contact -->
    <section id="contact" class="divider" data-bg-img="images/bg/p2.jpg">
      <div class="container pt-60 pb-60">   
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0">Contact <span class="text-theme-color-red">Us</span></h2>
              <div class="title-flaticon">
                <i class="fa fa-graduation-cap"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row pt-10">
          <div class="col-md-10 col-md-offset-1">
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="http://html.kodesolution.live/s/kidspro/v2.1/demo/includes/sendmail.php" method="post">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group text-center">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-flat btn-theme-color-sky text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-flat btn-theme-color-sky text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Call To Action -->
    <section class="bg-theme-color-sky">
      <div class="container pt-10 pb-20">
        <div class="row">
          <div class="call-to-action">
            <div class="col-md-6">
              <h3 class="mt-5 mb-5 text-white vertical-align-middle"><i class="pe-7s-mail mr-10 font-48 vertical-align-middle"></i> SUBSCRIBE TO OUR NEWSLETTER</h3>
            </div>
            <div class="col-md-6">
              <!-- Mailchimp Subscription Form Starts Here -->
              <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                <div class="input-group">
                  <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-call">
                  <span class="input-group-btn">
                    <button data-height="45px" class="btn bg-theme-color-red text-white btn-xs m-0 font-14" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
              <!-- Mailchimp Subscription Form Validation-->
              <script type="text/javascript">
                $('#mailchimp-subscription-form').ajaxChimp({
                    callback: mailChimpCallBack,
                    url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                });

                function mailChimpCallBack(resp) {
                    // Hide any previous response text
                    var $mailchimpform = $('#mailchimp-subscription-form'),
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
    </section>
    
  <!-- end main-content -->
  </div>


  <?= $this->endSection() ?>