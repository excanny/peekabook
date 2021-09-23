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
                <ul style="">
                    <?php foreach (session()->getFlashdata('error') as $error) { ?>
                        <li><?php echo $error ?></li>
                    <?php } ?> 
                </ul>
            </div>

        <?php } ?>
       
        <div class="col-md-8 col-md-offset-2">
          <h3 class="line-bottom mt-0 mb-30">Sign Up for A PeekABook Account</h3>
         
            <br>

          <!-- Contact Form -->
          <form  action="<?php echo site_url();?>front/registeraction" method="post">

          <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>First name<small>*</small></label>
                  <input name="firstname" class="form-control" type="text" placeholder="Enter First Name" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Last Name<small>*</small></label>
                  <input name="lastname" class="form-control" type="text" placeholder="Enter Last Name" required>
                </div>
              </div>
            </div>
              
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Email <small>*</small></label>
                  <input name="email" class="form-control" type="email" placeholder="Enter Email Address" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Password<small>*</small></label>
                  <input name="psd1" id="psd1" class="form-control" type="password" placeholder="Enter Password" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Confirm Password<small>*</small></label>
                  <input name="psd2" id="psd2" class="form-control" type="password" placeholder="Enter Confirm Password" required>
                  <p class="no_match text-danger text-center" style="display:none">* Sorry, passwords don't match!</p>
                </div>
              </div>
            </div>

           
            <div class="form-group">
                <a href="<?php echo site_url();?>login"><small>Login</small> </a>
              <button type="submit" id="submit" class="btn btn-dark btn-theme-color-sky btn-flat pull-right">Register</button>
    
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->


<?= $this->endSection() ?>