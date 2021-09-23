
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
      
              <form action="<?php echo site_url('adm/updatebooktemplate/'. $slug);?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-6">
                  <h4>Book Title</h4>
                  <input type="text" name="title" id="book_title" class="form-control" value="<?php echo $single_template[0]['ftitle']; ?>" required>
                </div>
                <div class="col-sm-6">
                  <h4>New Slug</h4>
                  <input type="text" name="slug" id="book_slug" class="form-control" value="<?php echo $single_template[0]['fbook_slug']; ?>" readonly>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-6">
                  <h4>Short Description</h4>
                  <input type="hidden" name="id" value="<?php echo $single_template[0]['frecno']; ?>">
                  <input type="hidden" name="slug" value="<?php echo $slug; ?>">
                  <textarea name="description" id="" class="textarea"><?php echo $single_template[0]['fdescription']; ?></textarea>
                </div>
                <div class="col-sm-6">
                  <h4>About Book</h4>
                  <textarea name="about_book" id="" class="textarea"><?php echo $single_template[0]['fabout_book']; ?></textarea>
                 
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-6">
                <h4 class="mt-3">About Character </h4>
                <textarea name="about_character" id="" class="textarea"><?php echo $single_template[0]['fabout_character']; ?></textarea>
               
                </div>
                <div class="col-sm-6">
                  <h4 class="mt-3">How To Personalize </h4>
                  <textarea name="how_book" id="" class="textarea"><?php echo $single_template[0]['fhow_book']; ?></textarea>
                  
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <h4 class="mt-3">Format & Size</h4>
                  <textarea name="format_size" id="" class="textarea"><?php echo $single_template[0]['fformat_size']; ?></textarea>
                  <br>
                  <h4 class="mt-3">Age Group</h4>
                  <input class="form-control" type="text" name="ageInput" id="" value="<?php echo $single_template[0]['fage_group']; ?>">
                  <div class="bg-gray py-2 px-3 mt-4">
                    <h3 class="mb-0">
                        Price: $<input type="text" name="price" value="<?php echo $single_template[0]['fprice']; ?>">
                    </h3>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="row">
                      <div class="col-sm-6">
                        <h4 class="col-sm-12 control-label">Change Book Poster</h4>
                        <input type="file" name="book_poster"  class="input-id" data-browse-on-zone-click="true" accept="image/*">
                      </div>
                      <div class="col-sm-6">
                        <h4>Current Poster Image</h4>
                        <img src="<?php echo site_url('public/foldx/'.  $single_template[0]['fposter_image']);?>" alt="" width="100%">
                      </div>
                  </div>
                </div>
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

          <br>
         
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