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
            <h5 class="text-primary">  Race  </h5>
                    
            <div class="" style="display: flex; justify-content: space-around;">
                
                <div class="text-center">
                    <span class="fa fa-circle fa-3x" style="color:#F2CCB7;" data-toggle="tooltip" title="white"></span><br>
                    <input type="radio" class="radio1 w3-radio cursor" name="skin_colour" value="F2CCB7" checked <?php if($book_cover[0]['fskin_colour'] == "F2CCB7"){ echo "checked";} ?> >
                </div>
                <div class=" text-center">
                    <span class="fa fa-circle fa-3x" style="color:#DE8A78" data-toggle="tooltip" title="red"></span><br>
                    <input type="radio" class="radio1 w3-radio cursor" name="skin_colour" value="DE8A78" <?php if($book_cover[0]['fskin_colour'] == "DE8A78"){ echo "checked";} ?> >
                </div>
                <div class=" text-center">
                    <span class="fa fa-circle fa-3x" style="color:#FBC787" data-toggle="tooltip" title="tan"></span><br>
                    <input type="radio" class="radio1 w3-radio cursor" name="skin_colour" value="FBC787" <?php if($book_cover[0]['fskin_colour'] == "FBC787"){ echo "checked";} ?>>
                </div>
                <div class=" text-center">
                    <span class="fa fa-circle fa-3x" style="color:#8E583E" data-toggle="tooltip" title="oceanian"></span><br>
                    <input type="radio" class="radio1 w3-radio cursor" name="skin_colour" value="8E583E" <?php if($book_cover[0]['fskin_colour'] == "8E583E"){ echo "checked";} ?>>
                </div>
                <div class="text-center">
                    <span class="fa fa-circle fa-3x" style="color:#312529" data-toggle="tooltip" title="black"></span><br>
                    <input type="radio" class="radio1 w3-radio cursor" name="skin_colour" value="312529" <?php if($book_cover[0]['fskin_colour'] == "312529"){ echo "checked";} ?>>
                </div>
            </div>


            <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success btn-sm">PREVIEW BOOK</button>
                </div>
            </div>
            </form>

          </div>
          <div class="col-md-5">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <!-- <div class="post-thumb thumb"> <img src="<?php echo base_url();?>/public/assets2/images/bg/bg1.jpg" alt="" class="img-responsive img-fullwidth"> </div> -->
                  <div style="">
                        
        
                    
                            <!-- <img src="<?php //echo site_url('');?>public/foldx/<?php //echo $avatar['fimage_name'];?>"   width="100%" id="<?php //echo $avatar['fimage_id'];?>" style="display: <?php //echo $display; ?>; position:absolute; top:-5px;right:2px; z-index: 1"> --> 
                    

                        <?php foreach ($book_cover as $key => $avatar) { ?>

                        <?php 
                            if($key == 0)
                            {
                                $display = 'block';
                            }
                            else
                            {
                                 $display = 'none';
                            }
                            

                        ?>
                            <img src="<?php echo site_url();?>public/coverpics/<?php echo $avatar['fpage_background_pic'];?>" id="<?php echo $avatar['fgender'];?><?php echo $avatar['fskin_colour'];?>"  width="100%" style="display: <?php echo $display; ?>; height:400px;">
                        <?php } ?>

                        
                    </div>
                </div>
            
              </article>

            </div>
          </div>
        </div>

      


      </div>
    </section>
  <br>
  <!-- end main-content -->


<?= $this->endSection() ?>