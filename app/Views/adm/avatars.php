<?= $this->extend('layouts/master3') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   
<!-- /#message-popup -->
<br>
       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php if (session()->has('success') <> '') { ?>
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="ti ti-check"></i>&nbsp; <?php echo session()->getFlashdata("success"); ?>
            </div>
        <?php } ?>

        <?php if (session()->has('error') <> '') { ?>

            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Sorry!</strong> <?php echo session()->getFlashdata("error"); ?>
            </div>
        <?php } ?>
        <div class="row mb-0">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card card-primary card-outline">
              <div class="card-header">
              <div class="row">
                <div class="col-sm-6">
                <h6 class=""><span>  Avatars for <?php echo $slug;?></span></h6>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="<?php echo site_url('adm/allbooktemplates');?>" class="-right">All Books</a>
                    <a href="<?php echo site_url('adm/pages/'. $slug);?>" class="-right">Add Pages</a>
                </div>
              </div>
                  
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="card p-3">
                    
                        
                        <form method="post" id="upload_avatar_skin" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <small><p class="text-danger text-center"><strong> Note:</strong> Only image dimensions 285 x 285 allowed</p></small>
                                        <input type="file" name="avt"  class="input-id" data-browse-on-zone-click="true" accept="image/*" required>
                                    </div>
                                    <div class="col-sm-6 text-center">


                                        <h5><strong> Avatar Race</strong></h5>
                                        <p>Select the body type that best describes to the avatar you are uploading</p>
                                         
                                        
                                        <hr>

                                        <h5 class="text-primary"> <u> Gender </u></h5>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <span>Boy</span><br>
                                                <input type="radio" name="gender" class="w3-radio cursor" value="Boy" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <span>Girl</span><br>
                                                <input type="radio" name="gender" class="w3-radio cursor" value="Girl">
                                            </div>
                                        </div>


                                        <h5 class="text-primary">  <u>Race </u> </h5>
                                        <div class="row">
                                            <div class="col">
                                                <span class="fa fa-circle fa-3x" style="color:#F2CCB7" data-toggle="tooltip" title="white"></span><br>
                                                <input type="radio" name="skin_colour" value="F2CCB7" class="w3-radio cursor"  required>
                                            </div>
                                            <div class="col">
                                                <span class="fa fa-circle fa-3x" style="color:#DE8A78" data-toggle="tooltip" title="red"></span><br>
                                                <input type="radio" name="skin_colour" value="DE8A78" class="w3-radio cursor">
                                            </div>
                                            <div class="col">
                                                <span class="fa fa-circle fa-3x" style="color:#FBC787" data-toggle="tooltip" title="tan"></span><br>
                                                <input type="radio" name="skin_colour" value="FBC787" class="w3-radio cursor">
                                            </div>
                                            <div class="col">
                                                <span class="fa fa-circle fa-3x" style="color:#8E583E" data-toggle="tooltip" title="oceanian"></span><br>
                                                <input type="radio" name="skin_colour" value="8E583E" class="w3-radio cursor">
                                            </div>
                                            <div class="col">
                                                <span class="fa fa-circle fa-3x" style="color:#312529" data-toggle="tooltip" title="black"></span><br>
                                                <input type="radio" name="skin_colour" value="312529" class="w3-radio cursor">
                                                <input type="hidden" name="slug" value="<?php echo $slug;?>">
                                            </div>
                                        </div>
                                      
                                    
                                    </div>
                                </div>
                                </form>

                                <br>
                                
                                <div class="row mt-4">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-success">Upload</button>
                                    </div>
                                </div>
                                <br>
                                

                            </div>
                            
                        </div>
                       


                        



                    </div>
              </div><!-- /.card-body -->


              <div class="card-body">
                <div class="card p-3" id="images1">
                    
              
                            <h5 class=""> Uploaded Avatars </h5>
                             <div class="row" >

                                <div class="col-sm-6">
                            
                                    <div class="row" >

                                    <div class="col-sm-12">
                                                <h5><span style="color:blue">Boy</span> - <span style="color:#F2CCB7">White</span></h5>
                                        </div>
                                          
                                        <?php foreach($skin_features_boyF2CCB7 as $skin) {?>
                                            <div class="col-sm-12">
                                                <div class="img-thumbnail">
                                                    <div class="">   
                                                                
                                                            
                                                            <img src="<?php echo site_url('public/foldx/'. $skin['fimage_name']);?>" width="100%" class="">
                                                                
                                                    </div>
                                                    <div class="card-footer p-1 bg-white text-right">
                                                         
                                                        <span class="edit_page_id" data-id="<?php echo $skin['frecno'];?>" data-oldpic="<?php  echo $skin['fimage_name'];?>" data-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                        </span>

                                                        <span>
                                                            <i data-slug="<?php echo $slug;?>" data-image_name="<?php echo $skin['fimage_name']; ?>" data-id="<?php echo $skin['fimage_id']; ?>" class="fa fa-trash delete_image_id" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                        </span>

                                                            
                                                    </div> 
                                                </div>
                                            </div>
                                            <br>

                                            <?php } ?>
                                            
                                       
                                    </div>
                                    
                                </div>   <!-- /.card -->

                                
                                <div class="col-sm-6">
                            
                                    <div class="row">

                                    <div class="col-sm-12">
                                                <h5><span style="color:pink">Girl</span> - <span style="color:#F2CCB7">White</span></h5>
                                        </div>
                                          
                                        <?php foreach($skin_features_girlF2CCB7 as $skin) {?>
                                            <div class="col-sm-12">
                                                <div class="img-thumbnail">
                                                    <div class="">   
                                                                
                                                            
                                                            <img src="<?php echo site_url('public/foldx/'. $skin['fimage_name']);?>" width="100%" class="">
                                                                
                                                    </div>
                                                    <div class="card-footer p-1 bg-white text-right">
                                                         
                                                      
                                                        <span class="edit_page_id" data-id="<?php echo $skin['frecno'];?>" data-oldpic="<?php  echo $skin['fimage_name'];?>" data-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                        </span>

                                                        <span>
                                                            <i data-slug="<?php echo $slug;?>" data-image_name="<?php echo $skin['fimage_name']; ?>" data-id="<?php echo $skin['fimage_id']; ?>" class="fa fa-trash delete_image_id" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                        </span>

                                                            
                                                    </div> 
                                                </div>
                                            </div>
                                            <br>

                                            <?php } ?>
                                            
                                       
                                    </div>
                                    
                                </div>
                                
                            </div>

     <hr style="border: 3px solid #000;">

<div class="row images">

<div class="col-sm-6">

    <div class="row images">

    <div class="col-sm-12 images">
                <h5><span style="color:blue">Boy</span> - <span style="color:#DE8A78">Red</span></h5>
        </div>
          
        <?php foreach($skin_features_boyDE8A78 as $skin) {?>
            <div class="col-sm-12">
                <div class="img-thumbnail">
                    <div class="">   
                                
                            
                            <img src="<?php echo site_url('public/foldx/'. $skin['fimage_name']);?>" width="100%" class="">
                                
                    </div>
                    <div class="card-footer p-1 bg-white text-right">
                         
                        
                        <span class="edit_page_id" data-id="<?php echo $skin['frecno'];?>" data-oldpic="<?php  echo $skin['fimage_name'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>

                        <span>
                            <i data-slug="<?php echo $slug;?>" data-image_name="<?php echo $skin['fimage_name']; ?>" data-id="<?php echo $skin['fimage_id']; ?>" class="fa fa-trash image_id" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>

                            
                    </div> 
                </div>
            </div>
            <br>

            <?php } ?>
            
       
    </div>
    
</div>   <!-- /.card -->


<div class="col-sm-6">

    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#DE8A78">Red</span></h5>
        </div>
          
        <?php foreach($skin_features_girlDE8A78 as $skin) {?>
            <div class="col-sm-12">
                <div class="img-thumbnail">
                    <div class="">   
                                
                            
                            <img src="<?php echo site_url('public/foldx/'. $skin['fimage_name']);?>" width="100%" class="">
                                
                    </div>
                    <div class="card-footer p-1 bg-white text-right">
                         
                        <span class="edit_page_id" data-id="<?php echo $skin['frecno'];?>" data-oldpic="<?php  echo $skin['fimage_name'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>

                        <span>
                            <i data-slug="<?php echo $slug;?>" data-image_name="<?php echo $skin['fimage_name']; ?>" data-id="<?php echo $skin['fimage_id']; ?>" class="fa fa-trash delete_image_id" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>

                            
                    </div> 
                </div>
            </div>
            <br>

            <?php } ?>
            
       
    </div>
    
</div>

</div>



<hr style="border: 3px solid #000;">


<div class="row images">

<div class="col-sm-6">

    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#FBC787">Tan</span></h5>
        </div>
          
        <?php foreach($skin_features_boyFBC787 as $skin) {?>
            <div class="col-sm-12">
                <div class="img-thumbnail">
                    <div class="">   
                                
                            
                            <img src="<?php echo site_url('public/foldx/'. $skin['fimage_name']);?>" width="100%" class="">
                                
                    </div>
                    <div class="card-footer p-1 bg-white text-right">
                         

                        <span class="edit_page_id" data-id="<?php echo $skin['frecno'];?>" data-oldpic="<?php  echo $skin['fimage_name'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>

                        <span>
                            <i data-slug="<?php echo $slug;?>" data-image_name="<?php echo $skin['fimage_name']; ?>" data-id="<?php echo $skin['fimage_id']; ?>" class="fa fa-trash delete_image_id" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>

                            
                    </div> 
                </div>
            </div>
            <br>

            <?php } ?>
            
       
    </div>
    
</div>   <!-- /.card -->


<div class="col-sm-6">

    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#FBC787">Tan</span></h5>
        </div>
          
        <?php foreach($skin_features_girlFBC787 as $skin) {?>
            <div class="col-sm-12">
                <div class="img-thumbnail">
                    <div class="">   
                                
                            
                            <img src="<?php echo site_url('public/foldx/'. $skin['fimage_name']);?>" width="100%" class="">
                                
                    </div>
                    <div class="card-footer p-1 bg-white text-right">
                         
                        <span class="edit_page_id" data-id="<?php echo $skin['frecno'];?>" data-oldpic="<?php  echo $skin['fimage_name'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>

                        <span>
                            <i data-slug="<?php echo $slug;?>" data-image_name="<?php echo $skin['fimage_name']; ?>" data-id="<?php echo $skin['fimage_id']; ?>" class="fa fa-trash delete_image_id" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>

                            
                    </div> 
                </div>
            </div>
            <br>

            <?php } ?>
            
       
    </div>
    
</div>

</div>

<hr style="border: 3px solid #000;">

<div class="row images">

<div class="col-sm-6">

    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#8E583E">Oceanian</span></h5>
        </div>
          
        <?php foreach($skin_features_boy8E583E as $skin) {?>
            <div class="col-sm-12">
                <div class="img-thumbnail">
                    <div class="">   
                                
                            
                            <img src="<?php echo site_url('public/foldx/'. $skin['fimage_name']);?>" width="100%" class="">
                                
                    </div>
                    <div class="card-footer p-1 bg-white text-right">
                         
                       
                        <span class="edit_page_id" data-id="<?php echo $skin['frecno'];?>" data-oldpic="<?php  echo $skin['fimage_name'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>

                        <span>
                            <i data-slug="<?php echo $slug;?>" data-image_name="<?php echo $skin['fimage_name']; ?>" data-id="<?php echo $skin['fimage_id']; ?>" class="fa fa-trash delete_image_id" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>

                            
                    </div> 
                </div>
            </div>
            <br>

            <?php } ?>
            
       
    </div>
    
</div>   <!-- /.card -->


<div class="col-sm-6">

    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#8E583E">Oceanian</span></h5>
        </div>
          
        <?php foreach($skin_features_girl8E583E as $skin) {?>
            <div class="col-sm-12">
                <div class="img-thumbnail">
                    <div class="">   
                                
                            
                            <img src="<?php echo site_url('public/foldx/'. $skin['fimage_name']);?>" width="100%" class="">
                                
                    </div>
                    <div class="card-footer p-1 bg-white text-right">
                         
                      
                        <span class="edit_page_id" data-id="<?php echo $skin['frecno'];?>" data-oldpic="<?php  echo $skin['fimage_name'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>

                        <span>
                            <i data-slug="<?php echo $slug;?>" data-image_name="<?php echo $skin['fimage_name']; ?>" data-id="<?php echo $skin['fimage_id']; ?>" class="fa fa-trash delete_image_id" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>

                            
                    </div> 
                </div>
            </div>
            <br>

            <?php } ?>
            
       
    </div>
    
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row images">

<div class="col-sm-6">

    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#312529">Black</span></h5>
        </div>
          
        <?php foreach($skin_features_boy312529 as $skin) {?>
            <div class="col-sm-12">
                <div class="img-thumbnail">
                    <div class="">   
                                
                            
                            <img src="<?php echo site_url('public/foldx/'. $skin['fimage_name']);?>" width="100%" class="">
                                
                    </div>
                    <div class="card-footer p-1 bg-white text-right">
                         
                        <span class="edit_page_id" data-id="<?php echo $skin['frecno'];?>" data-oldpic="<?php  echo $skin['fimage_name'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>

                        <span>
                            <i data-slug="<?php echo $slug;?>" data-image_name="<?php echo $skin['fimage_name']; ?>" data-id="<?php echo $skin['fimage_id']; ?>" class="fa fa-trash delete_image_id" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>

                            
                    </div> 
                </div>
            </div>
            <br>

            <?php } ?>
            
       
    </div>
    
</div>   <!-- /.card -->


<div class="col-sm-6">

    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#312529">Black</span></h5>
        </div>
          
        <?php foreach($skin_features_girl312529 as $skin) {?>
            <div class="col-sm-12">
                <div class="img-thumbnail">
                    <div class="">   
                                
                            
                            <img src="<?php echo site_url('public/foldx/'. $skin['fimage_name']);?>" width="100%" class="">
                                
                    </div>
                    <div class="card-footer p-1 bg-white text-right">
                         
                        <span class="edit_page_id" data-id="<?php echo $skin['frecno'];?>" data-oldpic="<?php  echo $skin['fimage_name'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>

                        <span>
                            <i data-slug="<?php echo $slug;?>" data-image_name="<?php echo $skin['fimage_name']; ?>" data-id="<?php echo $skin['fimage_id']; ?>" class="fa fa-trash delete_image_id" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>

                            
                    </div> 
                </div>
            </div>
            <br>

            <?php } ?>
            
       
    </div>
    
</div>

</div>
                                    
                                
                </div>


              </div><!-- /.card-body -->

              

            </div>
            <!-- ./card -->
            
          </div>
          <!-- /.col -->
        </div>

        
        <!-- /.row -->
        <!-- END TYPOGRAPHY -->
      </div><!-- /.container-fluid -->
    </section>

<?= $this->endSection() ?>