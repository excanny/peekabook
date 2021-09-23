<?= $this->extend('layouts/masterb2') ?>

<?= $this->section('content') ?>
<br>
<br>
<div class="main-content">


	<!-- <div class="text-center" style="">
		<div class="container">
			<div class="flipbook">
				<div style="background-image:url(<?php //echo base_url('/public/coverpics/'. $frontcover[0]['fpage_background_pic']);?>); background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
					<?php //foreach ($innerpages as $page) { ?>
						<div style="background-image:url(<?php //echo base_url('/public/pagespics/'. $page['fpage_background_pic']);?>); background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
					<?php //} ?> 
				<div style="background-image:url(<?php //echo base_url('/public/coverpics/'. $backcover[0]['fpage_background_pic']);?>); background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
			</div>
		</div>
	</div> -->


	<div class='book_container'>
		<div id="book">
			<div style="background-image: url('https://images.pexels.com/photos/5074815/pexels-photo-5074815.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');">Cover</div>
			<div>inside cover</div>
			<div>page 1</div>
			<div data-double='true'>I'm a double page, page 2 and page 3</div>
			<div>page 4</div>
			<div>inside back cover</div>
			<div>back cover</div>
		</div>
    </div>



</div>

<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<form action="<?php echo site_url();?>addtocart" method="post">
				<input type="hidden" name="book_slug" value="<?php echo $book_slug; ?>">
				<!-- <input type="hidden" name="book_title" value="<?php //echo $title; ?>"> -->
				<input type="hidden" name="gender" value="<?php echo $gender; ?>">
				<input type="hidden" name="skin_colour" value="<?php echo $skin_colour; ?>">
				<p style="text-align:center"><button type="submit">ADD TO CART</button></p>
			</form>
			
		</div>
	</div>
</div>

<br>

<?= $this->endSection() ?>


