<?= $this->extend('layouts/master2') ?>

<?= $this->section('content') ?>



<div class="row">
			<div class="col-lg-3 col-12">
				<a href="<?php echo site_url(); ?>front/messages" class="btn btn-primary btn-mail-main btn-block margin-bottom-20 waves-effect waves-light">Back to inbox</a>
				<div class="box box-solid">
					<div class="box-body">
						<ul class="nav nav-pills nav-stacked">
						    <li class="active"><a href="<?php echo site_url(); ?>dashboard/messages/inbox"><i class="fa fa-inbox"></i> Inbox
								<span class="label-text-right float-right"><?php echo $inbox_count; ?></span></a>
							</li>
							<li><a href="<?php echo site_url(); ?>dashboard/messages/sent"><i class="fa fa-envelope"></i> Sent
									<span class="label-text-right float-right"><?php echo $inbox_count; ?></span></a>
							</li>
							<li><a href="<?php echo site_url(); ?>dashboard/messages/drafts"><i class="fa fa-file-alt"></i> Drafts
								<span class="label-text-right float-right"></span></a>
							</li>
						
							<li><a href="<?php echo site_url(); ?>dashboard/messages/trash"><i class="fa fa-trash"></i> Trash</a></li>
						</ul>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /. box -->
			
				<!-- /.box -->
			</div>
			<!-- /.col-lg-3 col-12 -->
			<div class="col-lg-9 col-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Compose New Message</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="form-group margin-top-20">
						</div>
						<form action="<?php echo site_url();?>front/addmessageaction" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="To Admin" readonly>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" required>
							</div>
							
							<input type="hidden"  id="subject_slug" name="subject_slug">
							<input type="hidden" name="to" value="admin_id">
							<input type="hidden" name="from" value="<?php echo session()->email; ?>">
							<input type="hidden" name="shopper_name" value="<?php echo session()->firstname . ' ' . session()->lastname; ?>">
							<textarea class="textarea" name="message" placeholder="Enter Message"></textarea>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<div class="float-right">
							
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-envelope-o"></i> Send</button>
						</form>

						</div>
						<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-times"></i> Discard</button>
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /. box -->
			</div>
			<!-- /.col-lg-9 col-12 -->
		</div>




<?= $this->endSection() ?>