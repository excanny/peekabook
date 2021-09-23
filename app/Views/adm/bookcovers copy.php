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
                <h3 class="card-title p-3">Book covers for <?php echo $slug;?></h3>
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
                        
                               <?php echo session()->getFlashdata('error');?>
        
                    </div>
                    
                    <?php } ?>



                <div class="card p-3">

                  <div class="row">
                    
                    <div class="col-sm-12">
                    
                        <div class="row">
                            <div class="col-sm-6">
                            
                              <form method="POST" action="<?php echo base_url('adm/bookcoversaction/'); ?>" enctype="multipart/form-data">
                                  <input type="hidden" name="slug" value="<?php echo $slug;?>">
                                  <div class="row">
                                      <div class="col-sm-12">
                                        <h5>Book Cover:</h5>
                                        <input type="file" name="coverpic"  class="input-id" data-browse-on-zone-click="true" accept="image/*" required>
                                          <br>
                                          <input type="hidden" name="book_slug" value="<?php echo $slug;?>">
                                          
                                      </div>
                          
                                  </div>

                                  
                              

                            </div>
                            <div class="col-sm-6 text-center">
                           
                                <h5><strong> Avatar Specs</strong></h5>
                                <p>Select the body type that best describes to the avatar you are uploading</p>
                                 
                                    <h5 class="text-primary"> <u> Order </u></h5>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <span>Front</span><br>
                                                <input type="radio" name="front" value="1" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <span>Back</span><br>
                                                <input type="radio" name="front" value="0">
                                            </div>
                                        </div>
                                        

                                        <h5 class="text-primary"> <u> Gender </u></h5>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <span>Boy</span><br>
                                                <input type="radio" name="gender" value="Boy" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <span>Girl</span><br>
                                                <input type="radio" name="gender" value="Girl">
                                            </div>
                                        </div>
                                      
                                
                                       
                                <h5 class="text-primary">  <u>Race</u> </h5>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <span class="fa fa-circle fa-2x" style="color:#F2CCB7" data-toggle="tooltip" title="European"></span><br>
                                        <input type="radio" name="skin_colour" value="F2CCB7"  required>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="fa fa-circle fa-2x" style="color:#DE8A78" data-toggle="tooltip" title="Native American"></span><br>
                                        <input type="radio" name="skin_colour" value="DE8A78"  required>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="fa fa-circle fa-2x" style="color:#FBC787" data-toggle="tooltip" title="tan"></span><br>
                                        <input type="radio" name="skin_colour" value="FBC787" >
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="fa fa-circle fa-2x" style="color:#8E583E" data-toggle="tooltip" title="brown"></span><br>
                                        <input type="radio" name="skin_colour" value="8E583E">
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="fa fa-circle fa-2x" style="color:#312529" data-toggle="tooltip" title="black"></span><br>
                                        <input type="radio" name="skin_colour" value="312529">
                                        
                                    </div>
                                </div>
                                
                                
                                        <h5 class="text-primary">  <u>Hair Colour </u> </h5>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <span class="fa fa-circle fa-2x" style="color:#EBD985" data-toggle="tooltip" title="blonde"></span><br>
                                                <input type="radio" name="hair_colour" value="EBD985" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <span class="fa fa-circle fa-2x" style="color:#CF735A" data-toggle="tooltip" title="red"></span><br>
                                                <input type="radio" name="hair_colour" value="CF735A">
                                            </div>
                                            <div class="col-sm-3">
                                                <span class="fa fa-circle fa-2x" style="color:#8E583E" data-toggle="tooltip" title="brown"></span><br>
                                                <input type="radio" name="hair_colour" value="8E583E">
                                            </div>
                                            <div class="col-sm-3">
                                                <span class="fa fa-circle fa-2x" style="color:#262931" data-toggle="tooltip" title="black"></span><br>
                                                <input type="radio" name="hair_colour" value="262931">
                                                <input type="hidden" name="slug" value="<?php echo $slug;?>">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mt-4">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" id="add_page" class="btn btn-success btn-sm">Add Book Cover</button>
                                    </div>
                                </div>
                         </form>

                    </div>
                    </div>

                    <hr>

                    <h1>BOY </h1>
                    <hr>

                    <div class="row">
                       <div class="col-sm-12">
                        
                                    <div class="" id="added_pages">
                                      
                                    <div class="row">

                                        <!-- <p><span style="color:blue">Boy</span> - <span style="color:#F2CCB7">White</span> - <span style="color:#EBD985">Blond Hair</span></p> -->
                                   
                                        <div class="col-sm-12">
                                                <h5><span style="color:blue">Boy</span> - <span style="color:#F2CCB7">White</span> - <span style="color:#EBD985">Blond Hair </span></h5>
                                        </div>


                                        <?php foreach($BoyF2CCB7EBD985 as $cover) {?>
                                            
                        
                                          <div class="col-sm-6">
                                         
                                              <h5 class=""> 
                                              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
                                             
                                              </h5>
                                           <div class="card pages">
                                             <div class="card-header" style="padding: 0">
                                             <div class="row p-1">
                                                <div class="col-sm-8">
                                                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                                                    
                                                </div>
                            
                                                <div class="col-sm-4">
                                                    <span class="float-right">
                                                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                                        </span>
                                                        <span>
                                                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                             </div>
                                             
                                             
                                                
                                             </div>
                                           
                                              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px; width:100%;">
                                                  
                                              </div>
                                           </div>

                                            </div>


                                           

                                        <?php }?>
                                            
                                        </div>
                                    
                                    
                                  <!-- /.card -->
                                  </div>
                        </div>

                    </div>



           <hr style="border: 3px solid #000;">

            <div class="row">
                <div class="col-sm-12">

    
                <div class="" id="added_pages">
                  
                <div class="row">

                    <div class="col-sm-12">
                            <h5><span style="color:blue">Boy</span> - <span style="color:#F2CCB7">White</span> - <span style="color:#CF735A">Red Hair </span></h5>
                    </div>
               
                    <?php foreach($BoyF2CCB7CF735A as $cover) {?>
                        
                       
                           
                      <div class="col-sm-6">
                          <h5 class=""> 
                                <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
                          </h5>
                       <div class="card pages">
                         <div class="card-header" style="padding: 0">
                         <div class="row p-1">
                            <div class="col-sm-8">
                               <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                                
                            </div>
        
                            <div class="col-sm-4">
                                <span class="float-right">
                                    <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                                        <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                    </span>
                                    <span>
                                        <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                    </span>
                                </span>
                            </div>
                         </div>
                         
                         
                            
                         </div>
                       
                          <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                              
                          </div>
                       </div>

                        </div>


                       

                    <?php }?>
                        
                    </div>
                
                
              <!-- /.card -->
              </div>
    </div>

</div>


            
           <hr style="border: 3px solid #000;">

            <div class="row">
                <div class="col-sm-12">

    
                <div class="" id="added_pages">
                  
                <div class="row">

                <div class="col-sm-12">
                        <h5><span style="color:blue">Boy</span> - <span style="color:#F2CCB7">White</span> - <span style="color:#8E583E">Brown Hair </span></h5>
                </div>
               
                    <?php foreach($BoyF2CCB78E583E as $cover) {?>
                        
                       
                           
                      <div class="col-sm-6">
                          <h5 class=""> 
                          <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
                          
                          </h5>
                       <div class="card pages">
                         <div class="card-header" style="padding: 0">
                         <div class="row p-1">
                            <div class="col-sm-8">
                               <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                                
                            </div>
        
                            <div class="col-sm-4">
                                <span class="float-right">
                                    <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                                        <i class="fa fa-edit" style="cursor:pointer;"></i>      
                                    </span>
                                    <span>
                                        <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                                    </span>
                                </span>
                            </div>
                         </div>
                         
                         
                            
                         </div>
                       
                          <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                              
                          </div>
                       </div>

                        </div>


                       

                    <?php }?>
                        
                    </div>
                
                
              <!-- /.card -->
              </div>
    </div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                        <h5><span style="color:blue">Boy</span> - <span style="color:#F2CCB7">White</span> - <span style="color:#262931">Black Hair </span></h5>
                </div>
   
        <?php foreach($BoyF2CCB7262931 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

        
        <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#FBC787">Tan</span> - <span style="color:#EBD985">Blond Hair </span></h5>
        </div>

        <?php foreach($BoyFBC787EBD985 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>



<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

        <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#FBC787">Tan</span> - <span style="color:#CF735A">Red Hair </span></h5>
        </div>
   
        <?php foreach($BoyFBC787CF735A as $cover) {?>
        
               
          <div class="col-sm-6">
              <h5 class=""> 
                    <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#FBC787">Tan</span> - <span style="color:#8E583E">Brown Hair </span></h5>
        </div>
   
        <?php foreach($BoyFBC7878E583E as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#FBC787">Tan</span> - <span style="color:#262931">Black Hair </span></h5>
        </div>
   
        <?php foreach($BoyFBC787262931 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
             
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#8E583E">Brown</span> - <span style="color:#EBD985">Blond Hair </span></h5>
        </div>
   
        <?php foreach($Boy8E583EEBD985 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
             
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#8E583E">Brown</span> - <span style="color:#CF735A">Red Hair </span></h5>
        </div>
   
        <?php foreach($Boy8E583ECF735A as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
             
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#8E583E">Brown</span> - <span style="color:#8E583E">Brown Hair </span></h5>
        </div>
   
        <?php foreach($Boy8E583E8E583E as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
             
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>



<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#8E583E">Brown</span> - <span style="color:#262931">Black Hair </span></h5>
        </div>
   
        <?php foreach($Boy8E583E262931 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
             
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#312529">Black</span> - <span style="color:#EBD985">Blond Hair </span></h5>
        </div>
   
        <?php foreach($Boy312529EBD985 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>



<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

         <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#312529">Black</span> - <span style="color:#CF735A">Red Hair </span></h5>
        </div>
   
        <?php foreach($Boy312529CF735A as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

        <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#312529">Black</span> - <span style="color:#8E583E">Brown Hair </span></h5>
        </div>
   
        <?php foreach($Boy3125298E583E as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>



<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:blue">Boy</span> - <span style="color:#312529">Black</span> - <span style="color:#262931">Black Hair </span></h5>
        </div>
   
        <?php foreach($Boy312529262931 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr>

<h1>GIRL</h1> 

<hr>

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#F2CCB7">White</span> - <span style="color:#EBD985">Blonde Hair </span></h5>
        </div>
   
        <?php foreach($GirlF2CCB7EBD985 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>



<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#F2CCB7">White</span> - <span style="color:#CF735A">Red Hair </span></h5>
        </div>
   
        <?php foreach($GirlF2CCB7CF735A as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#F2CCB7">White</span> - <span style="color:#8E583E">Brown Hair </span></h5>
        </div>
   
        <?php foreach($GirlF2CCB78E583E as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#F2CCB7">White</span> - <span style="color:#262931">Black Hair </span></h5>
        </div>
   
        <?php foreach($GirlF2CCB7262931 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#FBC787">Tan</span> - <span style="color:#EBD985">Blonde Hair </span></h5>
        </div>
   
        <?php foreach($GirlFBC787EBD985 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#FBC787">Tan</span> - <span style="color:#CF735A">Red Hair </span></h5>
        </div>
   
        <?php foreach($GirlFBC787CF735A as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#FBC787">Tan</span> - <span style="color:#8E583E">Brown Hair </span></h5>
        </div>
   
        <?php foreach($GirlFBC7878E583E as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
             
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#FBC787">Tan</span> - <span style="color:#262931">Black Hair </span></h5>
        </div>
   
        <?php foreach($GirlFBC787262931 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
             
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#8E583E">Brown</span> - <span style="color:#EBD985">Blonde Hair </span></h5>
        </div>
   
        <?php foreach($Girl8E583EBD985 as $cover) {?>
            
            
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
             
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#8E583E">Brown</span> - <span style="color:#CF735A">Red Hair </span></h5>
        </div>
   
        <?php foreach($Girl8E583ECF735A as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>



<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#8E583E">Brown</span> - <span style="color:#8E583E">Brown Hair </span></h5>
        </div>
   
        <?php foreach($Girl8E583E8E583E as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#8E583E">Brown</span> - <span style="color:#262931">Black Hair </span></h5>
        </div>
   
        <?php foreach($Girl8E583E262931 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
             
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#312529">Black</span> - <span style="color:#EBD985">Blonde Hair </span></h5>
        </div>
   
        <?php foreach($Girl312529EBD985 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#312529">Black</span> - <span style="color:#CF735A">Red Hair </span></h5>
        </div>
   
        <?php foreach($Girl312529CF735A as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>


<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#312529">Black</span> - <span style="color:#8E583E">Brown Hair </span></h5>
        </div>
   
        <?php foreach($Girl3125298E583E as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
              <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
             
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
  </div>
</div>

</div>



<hr style="border: 3px solid #000;">

<div class="row">
    <div class="col-sm-12">


    <div class="" id="added_pages">
      
    <div class="row">

    <div class="col-sm-12">
                <h5><span style="color:pink">Girl</span> - <span style="color:#312529">Black</span> - <span style="color:#262931">Black Hair </span></h5>
        </div>
   
        <?php foreach($Girl312529262931 as $cover) {?>
            
           
               
          <div class="col-sm-6">
              <h5 class=""> 
                <?php if($cover['fis_front'] == 0){ echo "Back"; }else{ echo "Front";} ?> 
              </h5>
           <div class="card pages">
             <div class="card-header" style="padding: 0">
             <div class="row p-1">
                <div class="col-sm-8">
                   <small style="font-size: .69rem;"> <span> <span>Skin Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fskin_colour']; ?>"></i></span> <span>Hair Colour: <i class="fa fa-circle" style="color: #<?php echo $cover['fhair_colour']; ?>"></i></span> </span></small>
                    
                </div>

                <div class="col-sm-4">
                    <span class="float-right">
                        <span class="edit_page_id" data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" data-pageno="<?php echo $cover['fis_front'];?>" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit" style="cursor:pointer;"></i>      
                        </span>
                        <span>
                            <i data-id="<?php echo $cover['frecno'];?>" data-oldpic="<?php echo $cover['fpage_background_pic'];?>" class="fa fa-trash deletebookcover" data-toggle="tooltip" title="Delete" style="cursor:pointer;"></i>
                        </span>
                    </span>
                </div>
             </div>
             
             
                
             </div>
           
              <div id="page_<?php echo $cover['frecno'];?>" class="page_area" style="background:url(<?php echo base_url();?>/public/coverpics/<?php echo $cover['fpage_background_pic']; ?>);background-position: center;background-repeat: no-repeat;background-size: cover; height: 300px;">
                  
              </div>
           </div>

            </div>


           

        <?php }?>
            
        </div>
    
    
  <!-- /.card -->
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
              <h4 class="modal-title">Edit Book Cover </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form id="page_add_form" action="<?php echo site_url();?>adm/updatebookcover" method="post" enctype="multipart/form-data">
                  <input type="hidden" id="oldpagerecid" name="pagerecid">
                  <input type="hidden" id="oldpic" name="oldpic">
                  <input type="hidden" name="slug" value="<?php echo $slug;?>">
                  <input type="file" name="coverpic"  class="input-id" data-browse-on-zone-click="true" accept="image/*" required>
                
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success float-right">Change</button> 
                </div>
              </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<?= $this->endSection() ?>