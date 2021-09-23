<?= $this->extend('layouts/master2') ?>

<?= $this->section('content') ?>


<?php if (session()->has('success') <> '') { ?>
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-check"></i>&nbsp; <?php echo session()->getFlashdata("success"); ?>
            </div>
        <?php } ?>

        <?php if (session()->has('error') <> '') { ?>

            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Sorry!</strong> <?php var_dump(session()->getFlashdata("error")); ?>
            </div>
        <?php } ?>

		<div class="row small-spacing">
			<div class="col-xl-12 col-12">
				<button class="btn btn-primary btn-sm">Compose</button>
			</div>	
		</div>
		<br>
        <div class="row small-spacing">
			<div class="col-xl-12 col-12">
				<div class="box-content card white">
					<h4 class="box-title">Send Message To Admin</h4>

          
					<!-- /.box-title -->
					<div class="card-content">
						<form action="<?php echo site_url();?>front/addmessageaction" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">Subject</label>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" required>
                                <input type="hidden"  id="subject_slug" name="subject_slug">
                                <input type="hidden" name="to" value="admin_id">
								<input type="hidden" name="from" value="<?php echo session()->email; ?>">
								<input type="hidden" name="shopper_name" value="<?php echo session()->firstname . ' ' . session()->lastname; ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Message</label>
								<textarea class="form-control" name="message" placeholder="Write your message" required></textarea>
							</div>
							
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light float-right">Submit</button>

						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xl-6 col-12 -->

		</div>



        <div class="row small-spacing">
				<div class="col-12">
					<div class="box-content">
						<h4 class="box-title">Default</h4>
						<!-- /.box-title -->
						<div class="dropdown js__drop_down">
							<a href="#" class="dropdown-icon fas fa-ellipsis-v js__drop_down_button"></a>
							<ul class="sub-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else there</a></li>
								<li class="split"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
							<!-- /.sub-menu -->
						</div>
						<!-- /.dropdown js__dropdown -->
						<table id="example-row-grouping" class="table table-striped table-bordered display" style="width:100%">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</tfoot>
							<tbody>
                            
                            <?php foreach ($messages as $message) { ?>
                              
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
								</tr>

                            <?php }  ?>

							</tbody>
						</table>
					</div>
					<!-- /.box-content -->
				</div>

				<!-- /.col-12 -->
			</div>


<?= $this->endSection() ?>