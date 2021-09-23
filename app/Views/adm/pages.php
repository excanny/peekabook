<?= $this->extend('layouts/master3') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   
<!-- /#message-popup -->
<br>
       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row mb-0">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card card-primary card-outline">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Inner pages for <?php echo $slug;?></h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                  <?php if(!empty(session()->getFlashdata('success'))){ ?>

                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                        <?php echo session()->getFlashdata('success');?>
                    </div>
                        
                    <?php } ?>
                    <?php if(!empty(session()->getFlashdata('error'))){ ?>

                    <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                        <!-- <ul>
                            <?php //foreach (session()->getFlashdata('error')as $error) : ?>
                                <li><?php //echo $error;?></li>
                            <?php //endforeach ?>
                        </ul> -->
                        <?php var_dump(session()->getFlashdata('error'));?>
                    </div>
                    
                    <?php } ?>

                <div class="card p-3">
                
                       
                        <div class="row">
                            <div class="col-sm-6">
                            
                              <form method="POST" action="<?php echo base_url('adm/pagesaction/'); ?>" enctype="multipart/form-data">
                                  <input type="hidden" name="slug" value="<?php echo $slug;?>">
                                  <div class="row">
                                      <div class="col-sm-12">
                                        <h5>Inner Page Upload:</h5>
                                        <input type="file" name="bgpic"  class="input-id" data-browse-on-zone-click="true" accept="image/*" required>
                                          <br>
                                          <input type="hidden" name="book_slug" value="<?php echo $slug;?>">
                                      </div>
                          
                                  </div>

                                  
                            </div>

                            <div class="col-sm-6 text-center">
                           
                                <h5><strong> Inner Pages Avatar(s) Specs</strong></h5>
                                <p>Select the colour types that best describes the avatar(s) you are uploading</p>
                                 
                                
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
                                        <span class="fa fa-circle fa-2x" style="color:#F2CCB7" data-toggle="tooltip" title="white"></span><br>
                                        <input type="radio" name="skin_colour" value="F2CCB7" class="w3-radio cursor"  required>
                                    </div>
                                    <div class="col">
                                        <span class="fa fa-circle fa-2x" style="color:#DE8A78" data-toggle="tooltip" title="red"></span><br>
                                        <input type="radio" name="skin_colour" value="DE8A78" class="w3-radio cursor" >
                                    </div>
                                    <div class="col">
                                        <span class="fa fa-circle fa-2x" style="color:#FBC787" data-toggle="tooltip" title="tan"></span><br>
                                        <input type="radio" name="skin_colour" value="FBC787" class="w3-radio cursor">
                                    </div>
                                    <div class="col">
                                        <span class="fa fa-circle fa-2x" style="color:#8E583E" data-toggle="tooltip" title="oceanian"></span><br>
                                        <input type="radio" name="skin_colour" value="8E583E" class="w3-radio cursor">
                                        
                                    </div>
                                    <div class="col">
                                        <span class="fa fa-circle fa-2x" style="color:#312529" data-toggle="tooltip" title="black"></span><br>
                                        <input type="radio" name="skin_colour" value="312529" class="w3-radio cursor">
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>


                        <div class="row mt-4">
                            <div class="col-sm-12 text-center">
                                <button type="submit" id="add_page" class="btn btn-success">Add New Page</button>
                            </div>
                        </div>


                    </form>


                        <br>

                        <hr>
                              <h1><span style="color:blue">Boy</span></h1>
                        <hr>
                        
                        <div class="row">
                         
                            <div class="col-sm-12">
                            <h5 class=""> <span style="color:blue">Boy</span> - <span style="color:#F2CCB7">White</span> </h5>
                           
                          
                                    
                            
                                    <div class="" id="added_pages">

                                    <div class="row">
                                          
                                        <?php foreach($BoyF2CCB7 as $page) {?>


                                        

                                        <div class="col-sm-2">


                                           
                                           <div class="card pages">
                                             <div class="card-header">
                                             <span class="float-left">Page <?php echo $page['fpage_no'];?></span>
                                             <span class="float-right">
                                                <span class="edit_page_id" data-id="<?php echo $page['frecno'];?>" data-pageno="<?php echo $page['fpage_no'];?>" data-toggle="tooltip" title="Edit">
                                                  <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                </span>
                                                <span>
                                                    <i data-id="<?php echo $page['frecno'];?>" class="fa fa-trash deletepage" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                </span>
                                             </span>
                                             </div>
                                           
                                              <div id="page_<?php echo $page['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;">
                                                
                                              </div>
                                           </div>
                                            <br>


                                            </div>
                                    
                                    



                                        <?php }?>
                                            
                                       
                                        </div>   <!-- /.card -->
                


                            </div>
                                    
                                
                            </div>
                            
                        </div>
                          

                        
                      
                        <hr style="border: 3px solid #000;">
                        
                        <div class="row">
                         
                            <div class="col-sm-12">
                            <h5 class=""> <span style="color:blue">Boy</span> - <span style="color:#DE8A78">Red</span> </h5>
                           
                          
                                    
                            
                                    <div class="" id="added_pages">

                                    <div class="row">
                                          
                                        <?php foreach($BoyDE8A78 as $page) {?>


                                        

                                        <div class="col-sm-2">


                                           
                                           <div class="card pages">
                                             <div class="card-header">
                                             <span class="float-left">Page <?php echo $page['fpage_no'];?></span>
                                             <span class="float-right">
                                                <span class="edit_page_id" data-id="<?php echo $page['frecno'];?>" data-pageno="<?php echo $page['fpage_no'];?>" data-toggle="tooltip" title="Edit">
                                                  <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                </span>
                                                <span>
                                                    <i data-id="<?php echo $page['frecno'];?>" class="fa fa-trash deletepage" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                </span>
                                             </span>
                                             </div>
                                           
                                              <div id="page_<?php echo $page['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;">
                                                
                                              </div>
                                           </div>
                                            <br>


                                            </div>
                                    
                                    



                                        <?php }?>
                                            
                                       
                                        </div>   <!-- /.card -->
                


                            </div>
                                    
                                
                            </div>
                            
                        </div>
                        
                        
                        <hr style="border: 3px solid #000;">
                        
                        <div class="row">
                         
                            <div class="col-sm-12">
                            <h5 class=""> <span style="color:blue">Boy</span> - <span style="color:#FBC787">Tan</span></h5>
                           
                          
                                    
                            
                                    <div class="" id="added_pages">

                                    <div class="row">
                                          
                                        <?php foreach($BoyFBC787 as $page) {?>


                                        

                                        <div class="col-sm-2">


                                           
                                           <div class="card pages">
                                             <div class="card-header">
                                             <span class="float-left">Page <?php echo $page['fpage_no'];?></span>
                                             <span class="float-right">
                                                <span class="edit_page_id" data-id="<?php echo $page['frecno'];?>" data-pageno="<?php echo $page['fpage_no'];?>" data-toggle="tooltip" title="Edit">
                                                  <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                </span>
                                                <span>
                                                    <i data-id="<?php echo $page['frecno'];?>" class="fa fa-trash deletepage" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                </span>
                                             </span>
                                             </div>
                                           
                                              <div id="page_<?php echo $page['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;">
                                                
                                              </div>
                                           </div>
                                            <br>


                                            </div>
                                    
                                    



                                        <?php }?>
                                            
                                       
                                        </div>   <!-- /.card -->
                


                            </div>
                                    
                                
                            </div>
                            
                        </div>

                        <hr style="border: 3px solid #000;">
                        
                        <div class="row">
                         
                            <div class="col-sm-12">
                            <h5 class=""> <span style="color:blue">Boy</span> - <span style="color:#8E583E">Oceanian</span> </h5>
                           
                          
                                    
                            
                                    <div class="" id="added_pages">

                                    <div class="row">
                                          
                                        <?php foreach($Boy8E583E as $page) {?>


                                        

                                        <div class="col-sm-2">


                                           
                                           <div class="card pages">
                                             <div class="card-header">
                                             <span class="float-left">Page <?php echo $page['fpage_no'];?></span>
                                             <span class="float-right">
                                                <span class="edit_page_id" data-id="<?php echo $page['frecno'];?>" data-pageno="<?php echo $page['fpage_no'];?>" data-toggle="tooltip" title="Edit">
                                                  <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                </span>
                                                <span>
                                                    <i data-id="<?php echo $page['frecno'];?>" class="fa fa-trash deletepage" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                </span>
                                             </span>
                                             </div>
                                           
                                              <div id="page_<?php echo $page['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;">
                                                
                                              </div>
                                           </div>
                                            <br>


                                            </div>
                                    
                                    



                                        <?php }?>
                                            
                                       
                                        </div>   <!-- /.card -->
                


                            </div>
                                    
                                
                            </div>
                            
                        </div>
                        

                        <hr style="border: 3px solid #000;">
                        
                        <div class="row">
                         
                            <div class="col-sm-12">
                            <h5 class=""> <span style="color:blue">Boy</span> - <span style="color:#312529">Black</span> </h5>
                           
                            
                                <div class="" id="added_pages">

                                    <div class="row">

                                          
                                      <?php foreach($Boy312529 as $page) {?>


                                
                                        <div class="col-sm-2">


                                           
                                           <div class="card pages">
                                             <div class="card-header">
                                             <span class="float-left">Page <?php echo $page['fpage_no'];?></span>
                                             <span class="float-right">
                                                <span class="edit_page_id" data-id="<?php echo $page['frecno'];?>" data-pageno="<?php echo $page['fpage_no'];?>" data-toggle="tooltip" title="Edit">
                                                  <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                </span>
                                                <span>
                                                    <i data-id="<?php echo $page['frecno'];?>" class="fa fa-trash deletepage" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                </span>
                                             </span>
                                             </div>
                                           
                                              <div id="page_<?php echo $page['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;">
                                                
                                              </div>
                                           </div>
                                            <br>


                                      </div>
                                    
                                  
                                    <?php }?>
                                            
                                       
                                </div>   <!-- /.card -->
                

                            </div>
                                    
                                
                            </div>
                            
                        </div>







                        <hr>
                              <h1><span style="color:pink">Girl</span></h1>
                        <hr>
                        
                        <div class="row">
                         
                            <div class="col-sm-12">
                            <h5 class=""> <span style="color:pink">Girl</span> - <span style="color:#F2CCB7">White</span> </h5>
                           
                          
                                    
                            
                                    <div class="" id="added_pages">

                                    <div class="row">
                                          
                                        <?php foreach($GirlF2CCB7 as $page) {?>


                                        

                                        <div class="col-sm-2">


                                           
                                           <div class="card pages">
                                             <div class="card-header">
                                             <span class="float-left">Page <?php echo $page['fpage_no'];?></span>
                                             <span class="float-right">
                                                <span class="edit_page_id" data-id="<?php echo $page['frecno'];?>" data-pageno="<?php echo $page['fpage_no'];?>" data-toggle="tooltip" title="Edit">
                                                  <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                </span>
                                                <span>
                                                    <i data-id="<?php echo $page['frecno'];?>" class="fa fa-trash deletepage" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                </span>
                                             </span>
                                             </div>
                                           
                                              <div id="page_<?php echo $page['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;">
                                                
                                              </div>
                                           </div>
                                            <br>


                                            </div>
                                    
                                    



                                        <?php }?>
                                            
                                       
                                        </div>   <!-- /.card -->
                


                            </div>
                                    
                                
                            </div>
                            
                        </div>
                          

                        
                      
                        <hr style="border: 3px solid #000;">
                        
                        <div class="row">
                         
                            <div class="col-sm-12">
                            <h5 class=""> <span style="color:pink">Girl</span> - <span style="color:#DE8A78">Red</span> </h5>
                           
                          
                                    
                            
                                    <div class="" id="added_pages">

                                    <div class="row">
                                          
                                        <?php foreach($GirlDE8A78 as $page) {?>


                                        

                                        <div class="col-sm-2">


                                           
                                           <div class="card pages">
                                             <div class="card-header">
                                             <span class="float-left">Page <?php echo $page['fpage_no'];?></span>
                                             <span class="float-right">
                                                <span class="edit_page_id" data-id="<?php echo $page['frecno'];?>" data-pageno="<?php echo $page['fpage_no'];?>" data-toggle="tooltip" title="Edit">
                                                  <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                </span>
                                                <span>
                                                    <i data-id="<?php echo $page['frecno'];?>" class="fa fa-trash deletepage" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                </span>
                                             </span>
                                             </div>
                                           
                                              <div id="page_<?php echo $page['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;">
                                                
                                              </div>
                                           </div>
                                            <br>


                                            </div>
                                    
                                    



                                        <?php }?>
                                            
                                       
                                        </div>   <!-- /.card -->
                


                            </div>
                                    
                                
                            </div>
                            
                        </div>
                        
                        
                        <hr style="border: 3px solid #000;">
                        
                        <div class="row">
                         
                            <div class="col-sm-12">
                            <h5 class=""> <span style="color:pink">Girl</span> - <span style="color:#FBC787">Tan</span></h5>
                           
                          
                                    
                            
                                    <div class="" id="added_pages">

                                    <div class="row">
                                          
                                        <?php foreach($GirlFBC787 as $page) {?>


                                        

                                        <div class="col-sm-2">


                                           
                                           <div class="card pages">
                                             <div class="card-header">
                                             <span class="float-left">Page <?php echo $page['fpage_no'];?></span>
                                             <span class="float-right">
                                                <span class="edit_page_id" data-id="<?php echo $page['frecno'];?>" data-pageno="<?php echo $page['fpage_no'];?>" data-toggle="tooltip" title="Edit">
                                                  <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                </span>
                                                <span>
                                                    <i data-id="<?php echo $page['frecno'];?>" class="fa fa-trash deletepage" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                </span>
                                             </span>
                                             </div>
                                           
                                              <div id="page_<?php echo $page['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;">
                                                
                                              </div>
                                           </div>
                                            <br>


                                            </div>
                                    
                                    



                                        <?php }?>
                                            
                                       
                                        </div>   <!-- /.card -->
                


                            </div>
                                    
                                
                            </div>
                            
                        </div>

                        <hr style="border: 3px solid #000;">
                        
                        <div class="row">
                         
                            <div class="col-sm-12">
                            <h5 class=""> <span style="color:pink">Girl</span> - <span style="color:#8E583E">Oceanian</span> </h5>
                           
                          
                                    
                            
                                    <div class="" id="added_pages">

                                    <div class="row">
                                          
                                        <?php foreach($Girl8E583E as $page) {?>


                                        

                                        <div class="col-sm-2">


                                           
                                           <div class="card pages">
                                             <div class="card-header">
                                             <span class="float-left">Page <?php echo $page['fpage_no'];?></span>
                                             <span class="float-right">
                                                <span class="edit_page_id" data-id="<?php echo $page['frecno'];?>" data-pageno="<?php echo $page['fpage_no'];?>" data-toggle="tooltip" title="Edit">
                                                  <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                </span>
                                                <span>
                                                    <i data-id="<?php echo $page['frecno'];?>" class="fa fa-trash deletepage" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                </span>
                                             </span>
                                             </div>
                                           
                                              <div id="page_<?php echo $page['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;">
                                                
                                              </div>
                                           </div>
                                            <br>


                                            </div>
                                    
                                    



                                        <?php }?>
                                            
                                       
                                        </div>   <!-- /.card -->
                


                            </div>
                                    
                                
                            </div>
                            
                        </div>
                        

                        <hr style="border: 3px solid #000;">
                        
                        <div class="row">
                         
                            <div class="col-sm-12">
                            <h5 class=""> <span style="color:pink">Girl</span> - <span style="color:#312529">Black</span> </h5>
                           
                            
                                <div class="" id="added_pages">

                                    <div class="row">

                                          
                                      <?php foreach($Girl312529 as $page) {?>


                                
                                        <div class="col-sm-2">


                                           
                                           <div class="card pages">
                                             <div class="card-header">
                                             <span class="float-left">Page <?php echo $page['fpage_no'];?></span>
                                             <span class="float-right">
                                                <span class="edit_page_id" data-id="<?php echo $page['frecno'];?>" data-pageno="<?php echo $page['fpage_no'];?>" data-toggle="tooltip" title="Edit">
                                                  <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                </span>
                                                <span>
                                                    <i data-id="<?php echo $page['frecno'];?>" class="fa fa-trash deletepage" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                </span>
                                             </span>
                                             </div>
                                           
                                              <div id="page_<?php echo $page['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/pagespics/<?php echo $page['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 100px;">
                                                
                                              </div>
                                           </div>
                                            <br>


                                      </div>
                                    
                                  
                                    <?php }?>
                                            
                                       
                                </div>   <!-- /.card -->
                

                            </div>
                                    
                                
                            </div>
                            
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


    <div class="modal fade" id="EditPage">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Page Number</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form id="page_add_form" action="<?php echo site_url();?>adm/updatepage" method="post">
                <input type="hidden" name="book_slug" value="<?php echo $slug;?>">
                <h5>Page No.</h5>
                <input type="text" name="page_no"  class="pageno form-control">
                <input type="hidden" id="oldpagerecid" name="pagerecid">
                <input type="hidden" name="book_slug" value="<?php echo $slug;?>">
                 
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success float-right">Save changes</button> 
                </div>
              </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<?= $this->endSection() ?>