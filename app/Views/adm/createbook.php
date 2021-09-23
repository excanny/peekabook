<?= $this->extend('layouts/master3') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title"><strong> Create Book </strong></h3>
              </div>
              <?php if(!empty(session()->getFlashdata('success'))){ ?>

                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('success');?>
                </div>
                    
                <?php } ?>
                <?php if(!empty(session()->getFlashdata('error'))){ ?>

                <div class="alert alert-danger">
                    <!-- <ul>
                        <?php //foreach (session()->getFlashdata('error')as $error) : ?>
                            <li><?php //echo $error;?></li>
                        <?php //endforeach ?>
                    </ul> -->
                    <?php var_dump(session()->getFlashdata('error'));?>
                </div>
                <?php } ?>

                <form class="form-horizontal" action="<?php echo site_url();?>adm/createbookaction" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="book_title" id="book_title"  required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Slug</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control bg-light" name="book_slug" id="book_slug" required readonly>
                                </div>
                            </div>
                        </div>
                 
                  
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inp-type-5" class="col-sm-12 control-label">Short Description</label>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" name="book_description"></textarea>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <label for="" class="col-sm-12 control-label">Book Poster</label>
                                <input type="file" name="book_poster"  class="input-id" data-browse-on-zone-click="true" accept="image/*" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inp-type-5" class="col-sm-12 control-label">About Book</label>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" name="about_book"></textarea>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                    <label for="inp-type-5" class="col-sm-12 control-label">About Character</label>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" name="about_character"></textarea>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inp-type-5" class="col-sm-12 control-label">How to Personalize</label>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" name="how_book"></textarea>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inp-type-5" class="col-sm-12 control-label">Format & Size</label>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" name="format_size"></textarea>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="col-sm-12 control-label">Age Range</label>
                                    
                                    <select name="ageInput" id=""  class="form-control">
                                        <option value="">Select one</option>
                                        <option value="0-3">0-3</option>
                                        <option value="3-6">3-6</option>
                                        <option value="6+">6+</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inp-type-5" class="col-sm-12 control-label">Price</label>
                                        <!-- /.input-group -->
                                        <div class="input-group">
                                            <div class="input-group-btn"><label for="ig-3" class="btn btn-default"><i class="fa fa-money"></i></label></div>
                                            <!-- /.input-group-btn -->
                                            <input id="ig-3" type="number" name="book_price" class="form-control" required>
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                </div>
                        </div>
                        <div class="margin-bottom-20">
                            <input type="checkbox" id="partnerbook"><label for="chk-1"> &nbsp; Check if book is for a partner</label> 
                        </div>
                            <br>
                            <div class="row" id="partner_create" style="display:none">
                                <div class="col-xl-12 col-12">
                                    <div class="card p-3">
                                        <h4 class="box-title">Partner Email</h4>
                                        <!-- /.box-title -->
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label><small><span id="email-error" class="signup-error"></span></small>
                                                            <input type="email" class="form-control" name="partner_email" id="partner_email" placeholder="Enter partner email" style="cursor:text">
                                                            <p id="#processing1" style="display:none">Checking if email exists <span class="spinner-grow text-muted"></span></p>
                                                        </div>
                                                </div>
                                            </div>     
                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.box-content -->
                                </div>
                                <!-- /.col-xl-6 col-12 -->
                            </div>


                <div class="row" id="partner_more_details" style="display:none">
                    <div class="col-xl-12 col-12">
                        <div class="card p-3">
                            <h4 class="">Complete Partner New Registration</h4>
                            <!-- /.box-title -->
                            <div class="">
    
                                    <div id="partner_not_registered">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" class="form-control" name="partner_psssd1" id="partner_psssd1" placeholder="Enter partner password" style="cursor:text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Confirm Password</label>
                                                <input type="password" class="form-control" name="partner_psssd2" id="partner_psssd2" placeholder="Confirm partner password" style="cursor:text">
                                            </div>
                                            <p class="no_match text-danger text-center" style="display:none">* Sorry, passwords don't match!</p>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input type="text" class="form-control" name="partner_firstname"  placeholder="Enter partner first name" style="cursor:text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input type="text" class="form-control" name="partner_lastname" placeholder="Enter partner last name" style="cursor:text">
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                    
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content -->
                    </div>
                    <!-- /.col-xl-6 col-12 -->
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" id="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
     
        </div>
        <!-- /.row -->
     
    </section>
    </div>

<?= $this->endSection() ?>