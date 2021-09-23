
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
                <strong>Sorry!</strong> <?php echo session()->getFlashdata("error"); ?>
            </div>
        <?php } ?>

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-12">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
               <h4>Preview Avatar for <?php $slug; ?>
               
                   <small >
                      <a href="<?php echo site_url('adm/avatars/');?>" class="text-right">
                          <?php if(empty($avatars))
                            {
                              echo "Add Book Cover";
                            }
                          ?>
                      </a>
                  </small>
               
               </h4>
              </div>
              <br>
             
              <div class="row">

                    <div class="col-sm-6">
                        
                    
                            

                                <h5 class="text-primary">  <u>Skin Colour </u> </h5>
                                
                                <div class="row text-center">
                                    <div class="col-sm-3">
                                        <span class="fa fa-circle fa-2x" style="color:#F2CCB7" data-toggle="tooltip" title="white"></span><br>
                                        
                                        <input type="radio" class="radio1" name="skin_colour" value="F2CCB7" checked <?php if($avatar_skins[0]['fskin_colour'] == "F2CCB7"){ echo "checked";} ?> >
                                    </div>
                                    <div class="col-sm-3 ">
                                        <span class="fa fa-circle fa-2x" style="color:#FBC787" data-toggle="tooltip" title="tan"></span><br>
                                        <input type="radio" class="radio1" name="skin_colour" value="FBC787" <?php if($avatar_skins[0]['fskin_colour'] == "FBC787"){ echo "checked";} ?> >
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="fa fa-circle fa-2x" style="color:#8E583E" data-toggle="tooltip" title="brown"></span><br>
                                        <input type="radio" class="radio1" name="skin_colour" value="8E583E" <?php if($avatar_skins[0]['fskin_colour'] == "8E583E"){ echo "checked";} ?>>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="fa fa-circle fa-2x" style="color:#312529" data-toggle="tooltip" title="black"></span><br>
                                        <input type="radio" class="radio1" name="skin_colour" value="312529" <?php if($avatar_skins[0]['fskin_colour'] == "312529"){ echo "checked";} ?>>
                                    </div>
                                </div>
                                <hr>

                                <h5 class="text-primary"> <u> Gender </u></h5>
                                <div class="row ">
                                    <div class="col-sm-6 text-center">
                                    <span>Boy</span><br>
                                    <input type="radio" class="book_customize radio2" name="gender" value="Boy"  <?php if($avatar_hairs[0]['fgender'] == "Boy"){ echo "checked";} ?>>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span>Girl</span><br>
                                        <input type="radio"  class="book_customize radio2" name="gender" value="Girl" <?php if($avatar_hairs[0]['fgender'] == "Girl"){ echo "checked";} ?>>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="text-primary">  <u>Hair Colour </u> </h5>
                                <div class="row text-center">
                                    <div class="col-sm-3">
                                        <span class="fa fa-circle fa-2x" style="color:#EBD985" data-toggle="tooltip" title="blonde"></span><br>
                                        <input type="radio" class="radio2" name="hair_colour" value="EBD985"  <?php if($avatar_hairs[0]['fhair_colour'] == "EBD985"){ echo "checked";} ?>>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="fa fa-circle fa-2x" style="color:#CF735A" data-toggle="tooltip" title="red"></span><br>
                                        <input type="radio" class="radio2" name="hair_colour" value="CF735A" <?php if($avatar_hairs[0]['fhair_colour'] == "CF735A"){ echo "checked";} ?>>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="fa fa-circle fa-2x" style="color:#8E583E" data-toggle="tooltip" title="brown"></span><br>
                                        <input type="radio" class="radio2" name="hair_colour" value="8E583E" <?php if($avatar_hairs[0]['fhair_colour'] == "4F250C"){ echo "checked";} ?>>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="fa fa-circle fa-2x" style="color:#262931" data-toggle="tooltip" title="black"></span><br>
                                        <input type="radio" class="radio2" name="hair_colour" value="262931" <?php if($avatar_hairs[0]['fhair_colour'] == "262931"){ echo "checked";} ?>>
                                         
                                    </div>
                                </div>




                          
                    
                    </div>



                    <div class="col-sm-6 portfolio-info">
                    <div>
                        <?php foreach ($avatar_hairs as $key => $avatar) { ?>

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
                            <img src="<?php echo site_url('');?>public/foldx/<?php echo $avatar['fimage_name'];?>"   width="100%" id="<?php echo $avatar['fimage_id'];?>" style="display: <?php echo $display; ?>; position:absolute; top:-5px;right:2px; z-index: 1">
                        <?php } ?>

                        <?php foreach ($avatar_skins as $key => $avatar) { ?>

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
                            <img src="<?php echo site_url('');?>public/foldx/<?php echo $avatar['fimage_name'];?>"   width="100%" id="<?php echo $avatar['fimage_id'];?>" style="display: <?php echo $display; ?>; ">
                        <?php } ?>

                        
                    </div>
                    
                    </div>

                </div>

                
      
              


             
            </div>
           <br>
            
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <br>
      <br>
      <div id="publishbtnx">
        <div class="row ">
            <div class="col-12 col-sm-12 text-center">
                <?php if($active == 0){?>
                    <form id="publish_btn" method="post">
                        <input type="hidden" id="slug" name="slug" value="<?php echo $slug;?>"> 
                        <button type="submit" class="btn btn-success">Publish</button>
                    </form>
                <?php } else {?>
                    <form id="deactivate_btn" method="post">
                        <input type="hidden" id="slug" name="slug" value="<?php echo $slug;?>"> 
                        <button type="submit" class="btn btn-danger">Deactivate</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
     
    </section>
    <!-- /.content -->



  </div>

  <?= $this->endSection() ?>