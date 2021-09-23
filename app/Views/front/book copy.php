<?= $this->extend('layouts/masterb1') ?>

<?= $this->section('content') ?>
<br>
<br>
<br>
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: Experts Details -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-7">
              <div class="thumb">
                <img src="<?php echo site_url();?>public/book_posters/<?php echo $book_details['fposter_image'];?>" alt="" class="img-thumbnail">
              </div>
            </div>
            <div class="col-md-5">
              <h3 class="name font-24 mt-0 mb-0"><?php echo $book_details['ftitle']; ?></h3>
              <h5 class="mt-5 text-theme-color-red">  <?php echo '$'. number_format($book_details['fprice'], 2); ?></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero expedita fugiat illo quasi doloremque, in unde omnis sint assumenda! Quaerat in, reprehenderit corporis voluptatum natus sequi reiciendis ullam. Quam eaque dolorum voluptates cupiditate explicabo.</p>
              <p>For Ages: <?php echo $book_details['fage_group']; ?></p>
              <p>Ships within: <?php echo $book_details['fdelivery_period']; ?></p>
              <p>Number of Pages: <?php echo $book_details['fnumber_of_pages']; ?></p>
            </div>
          </div>
          <br>
          <div class="row mt-30">
            <div class="col-md-12">
              <h3 class="line-bottom">About Book:</h3>
              <div class="volunteer-address">
                <ul>
                  <li>
                    <div class="bg-theme-color-red media border-bottom p-15 mb-20 text-white" style="padding:10px;">
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Character:</h5>
                        <p class="text-white"><?php echo $book_details['fabout_character']; ?> </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-theme-color-sky media border-bottom p-15 mb-20 text-white" style="padding:10px;">
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Format & Size:</h5>
                        <p class="text-white"><?php echo $book_details['fformat_size']; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-theme-color-green media border-bottom p-15 text-white" style="padding:10px;">
                      
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">How To Personalize Book:</h5>
                        <p class="text-white"><?php echo $book_details['fhow_book']; ?></p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<hr>

    <section>
      <div class="container">
        <div class="row">
    
          <div class="col-md-12">
            <div class="clearfix">
              <h3 class="line-bottom">Create Your Own Book:</h3>
            </div>

            <form action="<?php echo site_url('personalize-book/'.$book_details['fbook_slug']);?>" method="post">

              <div class="row">
                <div class="col-sm-3 col-sm-offset-3">
                  <label for="">Child's Name</label><br>
                  <div class="form-group">
                    <input type="text" placeholder="Enter First Name" id="child_name" name="child_name" class="form-control" required="" style="height:53px;width:100%; border-radius: 5px;">
                    <input type="hidden" name="price" value="<?php echo $book_details['fprice']; ?>">
                    <input type="hidden" name="book_title" value="<?php echo $book_details['ftitle']; ?>">
                    <input type="hidden" name="book_poster" value="<?php echo $book_details['ftitle']; ?>">
                  </div>
                </div>
          
                <div class="col-sm-3" style="padding-top:30px;">
                
                  <div class="form-group">
                    <button class="btn btn-dark btn-theme-color-red mt-5" type="submit" style="height:53px; width:100%;">START</button>
                  </div>

              </div>
              </div>
              

            </form>
          </div>
          
        </div>
      </div>
    </section>

    <hr>

  </div>
  <!-- end main-content -->


<?= $this->endSection() ?>