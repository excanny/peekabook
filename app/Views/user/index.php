<?= $this->extend('layouts/master2') ?>

<?= $this->section('content') ?>


		<div class="row small-spacing">
			<div class="col-xl-3 col-lg-6 col-12">
				<div class="box-content bg-success text-white">
					<div class="statistics-box with-icon">
						<i class="ico small far fa-shopping-cart"></i>
						<p class="text text-white">MY CART</p>
						<h2 class="counter">3</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xl-3 col-lg-6 col-12 -->
			<div class="col-xl-3 col-lg-6 col-12">
				<div class="box-content bg-info text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-download"></i>
						<p class="text text-white">MY WISHLISTS</p>
						<h2 class="counter">6</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xl-3 col-lg-6 col-12 -->
			<div class="col-xl-3 col-lg-6 col-12">
				<div class="box-content bg-danger text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-bug"></i>
						<p class="text text-white">MY ORDERS</p>
						<h2 class="counter">6</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xl-3 col-lg-6 col-12 -->
			<div class="col-xl-3 col-lg-6 col-12">
				<div class="box-content bg-warning text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-dollar-sign"></i>
						<p class="text text-white">MY PURCHASES</p>
						<h2 class="counter">6</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xl-3 col-lg-6 col-12 -->
		</div>
		<!-- .row -->

		<div class="row small-spacing">
			<div class="col-xl-6 col-12">
				<div class="box-content">
					<div id="calendar-widget"></div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xl-6 col-12 -->
			<div class="col-xl-6 col-12">
				<div class="box-content">
					<h4 class="box-title">Cart</h4>
					<!-- /.box-title -->
				
					<!-- /.dropdown js__dropdown -->
					<div class="table-responsive table-purchases">
						<table class="table table-striped margin-bottom-10">
							<thead>
								<tr>
									<th style="width:40%;">Product</th>
									<th>Price</th>
									<th>Date</th>
									<th>State</th>
									<th style="width:5%;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Amaza Themes</td>
									<td>$71</td>
									<td>Nov 12,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Macbook</td>
									<td>$142</td>
									<td>Nov 10,2016</td>
									<td class="text-danger">Cancelled</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Samsung TV</td>
									<td>$200</td>
									<td>Nov 01,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Ninja Admin</td>
									<td>$200</td>
									<td>Oct 28,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Galaxy Note 5</td>
									<td>$200</td>
									<td>Oct 28,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>CleanUp Themes</td>
									<td>$71</td>
									<td>Oct 22,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Facebook WP Plugin</td>
									<td>$10</td>
									<td>Oct 15,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Iphone 7</td>
									<td>$100</td>
									<td>Oct 12,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Nova House</td>
									<td>$100</td>
									<td>Oct 12,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Repair Cars</td>
									<td>$35</td>
									<td>Oct 12,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
							</tbody>
						</table>
						<!-- /.table -->
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xl-6 col-12 -->
		</div>


		<div class="row small-spacing">
			
			<!-- /.col-xl-6 col-12 -->
			<div class="col-xl-6 col-12">
				<div class="box-content">
					<h4 class="box-title">Wishlists</h4>
					<!-- /.box-title -->
					<!-- /.dropdown js__dropdown -->
					<div class="table-responsive table-purchases">
						<table class="table table-striped margin-bottom-10">
							<thead>
								<tr>
									<th style="width:40%;">Product</th>
									<th>Price</th>
									<th>Date</th>
									<th>State</th>
									<th style="width:5%;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Amaza Themes</td>
									<td>$71</td>
									<td>Nov 12,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Macbook</td>
									<td>$142</td>
									<td>Nov 10,2016</td>
									<td class="text-danger">Cancelled</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Samsung TV</td>
									<td>$200</td>
									<td>Nov 01,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Ninja Admin</td>
									<td>$200</td>
									<td>Oct 28,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Galaxy Note 5</td>
									<td>$200</td>
									<td>Oct 28,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>CleanUp Themes</td>
									<td>$71</td>
									<td>Oct 22,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Facebook WP Plugin</td>
									<td>$10</td>
									<td>Oct 15,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Iphone 7</td>
									<td>$100</td>
									<td>Oct 12,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Nova House</td>
									<td>$100</td>
									<td>Oct 12,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Repair Cars</td>
									<td>$35</td>
									<td>Oct 12,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
							</tbody>
						</table>
						<!-- /.table -->
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xl-6 col-12 -->
			<div class="col-xl-6 col-12">
				<div class="box-content">
					<h4 class="box-title">Purchases</h4>
					<!-- /.box-title -->
				
					<!-- /.dropdown js__dropdown -->
					<div class="table-responsive table-purchases">
						<table class="table table-striped margin-bottom-10">
							<thead>
								<tr>
									<th style="width:40%;">Product</th>
									<th>Price</th>
									<th>Date</th>
									<th>State</th>
									<th style="width:5%;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Amaza Themes</td>
									<td>$71</td>
									<td>Nov 12,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Macbook</td>
									<td>$142</td>
									<td>Nov 10,2016</td>
									<td class="text-danger">Cancelled</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Samsung TV</td>
									<td>$200</td>
									<td>Nov 01,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Ninja Admin</td>
									<td>$200</td>
									<td>Oct 28,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Galaxy Note 5</td>
									<td>$200</td>
									<td>Oct 28,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>CleanUp Themes</td>
									<td>$71</td>
									<td>Oct 22,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Facebook WP Plugin</td>
									<td>$10</td>
									<td>Oct 15,2016</td>
									<td class="text-success">Completed</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Iphone 7</td>
									<td>$100</td>
									<td>Oct 12,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Nova House</td>
									<td>$100</td>
									<td>Oct 12,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
								<tr>
									<td>Repair Cars</td>
									<td>$35</td>
									<td>Oct 12,2016</td>
									<td class="text-warning">Pending</td>
									<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
								</tr>
							</tbody>
						</table>
						<!-- /.table -->
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.box-content -->
			</div>
		</div>

   

<?= $this->endSection() ?>