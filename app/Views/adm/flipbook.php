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
                <h3 class="card-title"><strong> Book Preview </strong></h3>
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

            
                    <div class="card-body">

					
							
							<div class="text-center" style="">
								<div class="container">
									<div class="flipbook">
										<div style="background-image:url(<?php echo base_url('/public/coverpics/'. $pages[0]['fpage_background_pic']);?>); background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
											<?php foreach ($pages as $page) { ?>
												<div style="background-image:url(<?php echo base_url('/public/pagespics/'. $page['fpage_background_pic']);?>); background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
											<?php } ?>
										<div style="background-image:url(<?php echo base_url();?>/public/turnjs/pages/12.jpg)"></div>
									</div>
								</div>
							</div>

				
					</div>
                <!-- /.card-body -->

             
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