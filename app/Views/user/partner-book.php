<?= $this->extend('layouts/master2') ?>

<?= $this->section('content') ?>


        <div class="row small-spacing">
			<div class="col-lg-3 col-12">
				<div class="box-content bordered primary margin-bottom-20">
					<div class="profile-avatar">
					<img src="" alt="">
						<!-- <img src="<?php //echo site_url('public/book_posters/'. $partnerbook['fposter_image']); ?>" alt=""> -->
                        <!-- <img src="<?php //echo site_url('public/book_posters/'. $partnerbook['fposter_image']); ?>" alt=""> -->
						<!-- <a href="#" class="btn btn-block btn-friend"><i class="fa fa-check-circle"></i> Friends</a>
						<a href="#" class="btn btn-block btn-inbox"><i class="fa fa-envelope"></i> Send Messages</a> -->
						<h3><strong><?php echo $partnerbook['ftitle']; ?></strong></h3>
						
					</div>
					<!-- .profile-avatar -->
					<table class="table table-hover no-margin">
						<tbody>
							<tr>
								<td>Pages</td>
								<td><span class="notice notice-danger">20</span></td>
							</tr>
							<tr>
								<td>Age Group</td>
								<td><span class="badge badge-success">2-4</span></td>
							</tr>
							<tr>
								<td>Published</td>
								<td><span class="badge badge-info">Jan 07, 2014</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-content bordered -->

			</div>
			<!-- /.col-lg-3 col-12 -->
			<div class="col-lg-9 col-12">
				<div class="row">
					<div class="col-12">
						<div class="box-content card">
							<h4 class="box-title"><i class="fa fa-user ico"></i>About Book</h4>
							<!-- /.box-title -->
							
							<!-- /.dropdown js__dropdown -->
							<div class="card-content">
								<div class="row">
									<div class="col-lg-6">
										gxfdcfy 
									</div>
									
									<!-- /.col-lg-6 -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.card-content -->
						</div>
						<!-- /.box-content card -->
					</div>
					<!-- /.col-lg-12 -->
					<div class="col-lg-6 col-12">
						<div class="box-content card">
							<h4 class="box-title"><i class="fa fa-file-text ico"></i> Description</h4>
							<!-- /.box-title -->
							
							<!-- /.dropdown js__dropdown -->
							<div class="card-content">
								<p>jkkgjku</p>
							</div>
							<!-- /.card-content -->
						</div>
						<!-- /.box-content card -->
					</div>
					<!-- /.col-lg-6 -->
					<div class="col-lg-6 col-12">
						<div class="box-content card">
							<h4 class="box-title"><i class="fa fa-trophy ico"></i> About Book Character</h4>
							
							<!-- /.dropdown js__dropdown -->
							<div class="card-content">
							
							</div>
							<!-- /.card-content -->
						</div>
						<!-- /.box-content card -->
					</div>
					<!-- /.col-lg-6 -->
				</div>
			
				<!-- /.row -->
			</div>
			<!-- /.col-lg-9 col-12 -->
		</div>


<?= $this->endSection() ?>