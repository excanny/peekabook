
<?= $this->extend('layouts/master3') ?>

<?= $this->section('content') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper p-2">
  <br>

    <!-- Main content -->
    <section class="content">

    <?php if (session()->has('success') <> '') { ?>
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-check"></i>&nbsp; <?php echo session()->getFlashdata("success"); ?>
            </div>
        <?php } ?>

        <?php if (session()->has('error') <> '') { ?>

            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Sorry!</strong> <?php var_dump(session()->getFlashdata("error")); ?>
            </div>
        <?php } ?>

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
               <h4>Book Covers
               
                   <small >
                      <a href="<?php echo site_url('adm/avatars/'. $slug);?>" class="text-right">
                          <?php //if(empty($avatars))
                            // {
                            //   echo "Add Book Cover";
                            // }
                          ?>
                      </a>
                  </small>
               
               </h4>
              </div>
              <div class="col-12 product-image-thumbs">

                  <?php //foreach($avatars as $avatar){ ?>
                    <div class="product-image-thumb text-center" >
                        <img src="<?php //echo site_url('public/foldx/'. $avatar['fimage_name']);?>" alt="Product Image">
                    </div>
                  <?php //} ?>
              </div>
              <br>
              <br>
                  <div class="row">
             
                      <div class="col-sm-12">
                          <h5>Pages  
                              <small >
                                  <a href="<?php echo site_url('adm/pages/'. $slug);?>" class="text-right">
                                    Add/Edit Pages
                                  </a>
                              </small>
                          </h5>
                      </div>
                    
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                              <h5><span style="color:blue">Boy</span> - <span style="color:#F2CCB7">White</span></h5>
                      </div>
                        <?php foreach($BoyF2CCB7 as $page) {?>
                          <div class="col-lg-4">                
                            <div class="card">
                                <span >Page <?php echo $page['fpage_no'];?></span>
                              
                                <div style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;width:100%;">
                                  
                                </div>
                              </div>
                            </div>


                        <?php }?>

                    </div>

                    <hr>

                    <div class="row">
                      <div class="col-sm-12">
                              <h5><span style="color:blue">Boy</span> - <span style="color:#DE8A78">Red</span></h5>
                      </div>
                        <?php foreach($BoyDE8A78 as $page) {?>
                          <div class="col-lg-4">                
                            <div class="card">
                                <span >Page <?php echo $page['fpage_no'];?></span>
                              
                                <div style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;width:100%;">
                                  
                                </div>
                              </div>
                            </div>


                        <?php }?>

                    </div>

                    <hr>

                    <div class="row">
                      <div class="col-sm-12">
                              <h5><span style="color:blue">Boy</span> - <span style="color:#FBC787">Tan</span></h5>
                      </div>
                        <?php foreach($BoyFBC787 as $page) {?>
                          <div class="col-lg-4">                
                            <div class="card">
                                <span >Page <?php echo $page['fpage_no'];?></span>
                              
                                <div style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;width:100%;">
                                  
                                </div>
                              </div>
                            </div>


                        <?php }?>

                    </div>

                    <hr>

                    <div class="row">
                      <div class="col-sm-12">
                              <h5><span style="color:blue">Boy</span> - <span style="color:#FBC787">Oceanian</span></h5>
                      </div>
                        <?php foreach($BoyFBC787 as $page) {?>
                          <div class="col-lg-4">                
                            <div class="card">
                                <span >Page <?php echo $page['fpage_no'];?></span>
                              
                                <div style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;width:100%;">
                                  
                                </div>
                              </div>
                            </div>


                        <?php }?>

                    </div>

                    <hr>

                    <div class="row">
                      <div class="col-sm-12">
                              <h5><span style="color:blue">Boy</span> - <span style="color:#312529">Black</span></h5>
                      </div>
                        <?php foreach($Boy312529 as $page) {?>
                          <div class="col-lg-4">                
                            <div class="card">
                                <span >Page <?php echo $page['fpage_no'];?></span>
                              
                                <div style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;width:100%;">
                                  
                                </div>
                              </div>
                            </div>


                        <?php }?>

                    </div>

                    <hr>


              </div>
              
           
            <div class="col-sm-6">
              <form action="<?php echo site_url('adm/updatebooktemplate/'. $slug);?>" method="post">
              <h4>Book Title</h4>
              <input type="text" name="title" id="book_title" class="form-control" value="<?php echo $single_template[0]['ftitle']; ?>" required>
              <h4>New Slug</h4>
              <input type="text" name="slug" id="book_slug" class="form-control" value="<?php echo $single_template[0]['ftitle']; ?>" readonly>
              <hr>
              <h4>Short Description</h4>
              <input type="hidden" name="id" value="<?php echo $single_template[0]['frecno']; ?>">
              <input type="hidden" name="slug" value="<?php echo $slug; ?>">
              <textarea name="description" id="" class="textarea"><?php echo $single_template[0]['fdescription']; ?></textarea>
              <hr>
              <h4>About Book</h4>
              <textarea name="about_book" id="" class="textarea"><?php echo $single_template[0]['fabout_book']; ?></textarea>
              <hr>
              <h4 class="mt-3">About Character </h4>
              <textarea name="about_character" id="" class="textarea"><?php echo $single_template[0]['fabout_character']; ?></textarea>
              <hr>
              <h4 class="mt-3">How To Personalize </h4>
              <textarea name="how_book" id="" class="textarea"><?php echo $single_template[0]['fhow_book']; ?></textarea>
              <hr>
              <h4 class="mt-3">Format & Size</h4>
              <textarea name="format_size" id="" class="textarea"><?php echo $single_template[0]['fformat_size']; ?></textarea>
              <hr>
              <h4 class="mt-3">Age Group</h4>
              <input type="text" name="ageInput" id="" value="<?php echo $single_template[0]['fage_group']; ?>">
              <div class="bg-gray py-2 px-3 mt-4">
                <h3 class="mb-0">
                  Price: $<input type="text" name="price" value="<?php echo $single_template[0]['fprice']; ?>">
                </h3>
              </div>


              <?php if(!empty($single_template[0]['fpartner_email'])){?>
                  <div class="mt-4">

                    <div class="btn btn-default btn-lg btn-flat">
                      <i class="fas fa-heart fa-lg mr-2"></i>
                      Partner Email: <input type="text" name="partner_email" value="<?php echo $single_template[0]['fpartner_email'];?>" required>    
                      <input type="hidden" name="old_partner_email" value="<?php echo $single_template[0]['fpartner_email'];?>">
                    </div>
                      
                  </div>
              <?php } ?>
            </div>
          </div>

         <br>
         <br>
          <div class="row">
            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
         
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
     
    </section>
    <!-- /.content -->


<!-- 
<section>
  <div class="row" >
              <div class="col-sm-12">
                   <div class="flipbook-viewport">
                      <div class="container">
                        <div class="flipbook">
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/1.jpg)">d</div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/2.jpg)"></div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/3.jpg)"></div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/4.jpg)"></div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/5.jpg)"></div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/6.jpg)"></div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/7.jpg)"></div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/8.jpg)"></div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/9.jpg)"></div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/10.jpg)"></div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/11.jpg)"></div>
                          <div style="background-image:url(<?php //echo base_url();?>/public/turnjs/pages/12.jpg)"></div>
                        </div>
                      </div>
                    </div>
              </div>
          </div>
  </section> -->




  </div>

  <?= $this->endSection() ?>