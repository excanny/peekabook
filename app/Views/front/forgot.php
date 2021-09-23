<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>

<div class="w3-container mx-auto" style="margin: 6rem 0 5rem 0; width: 50%">


       
    <form action="<?php echo site_url();?>front/forgetpasswordaction" method="post" class="w3-container w3-card-4 w3-light-gray w3-margin w3-padding w3-text-blue" style=" padding: 5rem">
     <?= csrf_field() ?>
<br>
        <h4 class="w3-center w3-text-black">Reset your PeekABook password</h4>
        <div class="px-2 text-center">
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
                    <?php echo session()->getFlashdata('error');?>
                </div>
            <?php } ?>
        </div>


        <div class="w3-row w3-section px-3 pt-2">

            <div class="w3-col" style='width:10%'>
                <i class="w3-xxlarge fa fa-envelope"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input" type="email" name="email" id="" placeholder="Enter your email" required>
            </div>

        </div>

        <small><a href="<?php echo site_url();?>register">Register</a> | <a href="<?php echo site_url();?>login">Login</a></small>
        <button class="w3-button w3-section w3-ripple w3-padding w3-blue float-right" id="submit">Reset</button>

    </form>

</div>

<?= $this->endSection() ?>