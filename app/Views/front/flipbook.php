<?= $this->extend('layouts/masterb2') ?>

<?= $this->section('content') ?>
<br>
<br>
<div class="main-content">

	<div class="text-center" style="">
		<div class="container">
			<div class="flipbook">
				<div style="background-image:url(<?php echo base_url('/public/coverpics/'. $frontcover[0]['fpage_background_pic']);?>); background-position: center;background-repeat: no-repeat;background-size: cover;border:4px solid black;">
					<p class="text-white" style="padding-top: 8rem;">	Welcome, <?php echo $child_name;?> </p>
				</div>
				
				<div style="background: lightgray;">
					<p class="" style="padding-top: 8rem;">This is a story about the good virtues of <?php echo $child_name;?> </p>
				</div>

				<div style="background: lightgray;">
					<p  class="" style="padding-top: 8rem;"> <?php echo $child_name;?> and his friends went out to the woods</p>
				</div>
				
				<div style="background: lightgray;"> 
				
					<h1 style="padding-top: 8rem;">THE END</h1>

				</div>
			</div>
		</div>
	</div>

</div>

<br>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<form action="<?php echo site_url();?>addtocart" method="post">
				<input type="hidden" name="book_slug" value="<?php echo $book_slug; ?>">
				<!-- <input type="hidden" name="book_title" value="<?php //echo $title; ?>"> -->
				<input type="hidden" name="gender" value="<?php echo $gender; ?>">
				<input type="hidden" name="skin_colour" value="<?php echo $skin_colour; ?>">
				<p style="padding-right:10rem;"><button type="submit">ADD TO CART</button></p>
			</form>
			
		</div>
	</div>
</div>

<br>

<?= $this->endSection() ?>


