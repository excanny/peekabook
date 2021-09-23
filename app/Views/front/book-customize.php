<?= $this->extend('layouts/masterb1') ?>

<?= $this->section('content') ?>

<br>

    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row" >
          <div class="col-md-2">
            
          </div>
          <div class="col-md-4 w3-card-2" style="padding: 10px 35px 10px 35px; border:4px solid lightblue;">
            <div class="">
               
                    <h4 class="widget-title line-bottom">Personalize an avatar for <span class="text-primary"><?php echo ucwords($child_name); ?></span></h4>
                
            </div>

            <form action="<?php echo site_url('preview/'.$slug);?>" method="post">

            <input type="hidden" name="child_name" value="<?php echo $child_name; ?>">
            
            <h5 class="text-primary">  Gender</h5>
            <div class="row ">
                <div class="col-sm-6 text-center">
                    <span>Boy</span><br>
                    <input type="radio" class="book_customize radio1 w3-radio" name="gender" value="Boy"  <?php if($book_cover[0]['fgender'] == "Boy"){ echo "checked";} ?>>
                </div>
                <div class="col-sm-6 text-center">
                    <span>Girl</span><br>
                    <input type="radio"  class="book_customize radio1 w3-radio" name="gender" value="Girl" <?php if($book_cover[0]['fgender'] == "Girl"){ echo "checked";} ?>>
                </div>
            </div>
<br>
       

            <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success btn-sm">PREVIEW BOOK</button>
                </div>
            </div>
            

          </div>
          <div class="col-md-5 ml-3">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                          <h4>Select Avatar</h4>
                        </div>
                    </div>
                  <!-- <div class="post-thumb thumb"> <img src="<?php echo base_url();?>/public/assets2/images/bg/bg1.jpg" alt="" class="img-responsive img-fullwidth"> </div> -->
                    <div class="row text-center" id="BoyAvatars">               
                      <div class="col border">               
                             <img src="<?php echo base_url(); ?>/public/avatars/wb.png" alt="">
                             <input type="radio" class="w3-radio" name="boy_avatar" id="">
                      </div>
                      <div class="col border">               
                            <img src="<?php echo base_url(); ?>/public/avatars/rb.png" alt="">
                            <input type="radio" class="w3-radio" name="boy_avatar" id="">
                      </div>
                      <div class="col border">               
                              <img src="<?php echo base_url(); ?>/public/avatars/tb.png" alt="">
                              <input type="radio" class="w3-radio" name="boy_avatar" id="">
                      </div>
                      <div class="col border">               
                            <img src="<?php echo base_url(); ?>/public/avatars/ob.png" alt="">
                            <input type="radio" class="w3-radio" name="boy_avatar" id="">
                      </div>
                      <div class="col border">               
                            <img src="<?php echo base_url(); ?>/public/avatars/bb.png" alt="">
                            <input type="radio" class="w3-radio" name="boy_avatar" id="">
                      </div>
                    </div>


                    <div class="row text-center" id="GirlAvatars" style="display:none;">               
                      <div class="col border">               
                             <img src="<?php echo base_url(); ?>/public/avatars/wg.png" alt="">
                             <input type="radio" class="w3-radio" name="boy_avatar" id="" required>
                      </div>
                      <div class="col border">               
                            <img src="<?php echo base_url(); ?>/public/avatars/rg.png" alt="">
                            <input type="radio" class="w3-radio" name="boy_avatar" id="">
                      </div>
                      <div class="col border">               
                              <img src="<?php echo base_url(); ?>/public/avatars/tg.png" alt="">
                              <input type="radio" class="w3-radio" name="boy_avatar" id="">
                      </div>
                      <div class="col border">               
                            <img src="<?php echo base_url(); ?>/public/avatars/og.png" alt="">
                            <input type="radio" class="w3-radio" name="boy_avatar" id="">
                      </div>
                      <div class="col border">               
                            <img src="<?php echo base_url(); ?>/public/avatars/bg.png" alt="">
                            <input type="radio" class="w3-radio" name="boy_avatar" id="">
                      </div>
                    </div>

                </div>

                </form>
            
              </article>

            </div>
          </div>
        </div>

      


      </div>
    </section>
  <br>
  <!-- end main-content -->


<?= $this->endSection() ?>