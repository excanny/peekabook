<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>

 <!-- Start main-content -->
 <div class="main-content">

<!-- Divider: Contact -->
<section class="divider">
  <div class="container">
    <div class="row pt-30">

    <?php if(!empty(session()->getFlashdata('success'))){ ?>

      <div class="alert alert-success text-center">
          <?php echo session()->getFlashdata('success');?>
      </div>
          
      <?php } ?>
      <?php if(!empty(session()->getFlashdata('error'))){ ?>

          <div class="alert alert-danger text-center">
                <?php echo session()->getFlashdata('error'); ?>       
          </div>

      <?php } ?>
     
      <div class="col-md-8 col-md-offset-2">
        <h3 class="line-bottom mt-0 mb-30">Login Into Your PeekABook Account</h3>
       
          <br>

        <!-- Contact Form -->
        <form  action="<?php echo site_url();?>front/loginaction" method="post">

       
            
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Email <small>*</small></label>
                <input name="email" class="form-control" type="email" placeholder="Enter Email Address" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Password<small>*</small></label>
                <input name="psd1" id="psd1" class="form-control" type="password" placeholder="Enter Password" required>
              </div>
            </div>
            
          </div>

         
          <div class="form-group">
          <a href="<?php echo site_url();?>register"><small>Register</small> </a>
            <button type="submit" id="submit" class="btn btn-dark btn-theme-color-sky btn-flat pull-right">Login</button>
  
          </div>
        </form>

      </div>
    </div>
  </div>
</section>
</div>
<!-- end main-content -->




<?= $this->endSection() ?>