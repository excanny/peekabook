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

		<div class="row">
			<div class="col-lg-3 col-12">
			<a href="<?php echo site_url(); ?>front/compose" class="btn btn-danger btn-mail-main btn-block margin-bottom-20 waves-effect waves-light">COMPOSE</a>
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
						<h3 class="box-title">Read Mail</h3>
						<div class="box-tools float-right">
							<a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
							<a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<div class="mailbox-read-info">
							<h3><?php echo $subject_messages[0]['fsubject']; ?></h3>
							<h5>From: <a href="https://demo.ninjateam.org/cdn-cgi/l/email-protection" class="__cf_email__" >PeekABook Admin</a>
								<span class="mailbox-read-time float-right">15 Feb. 2016 11:03 PM <?php echo date('j M Y H:i A', strtotime($subject_messages[0]['created_at'])); ?></span>
							</h5>
						</div>
						<!-- /.mailbox-read-info -->
						<div class="mailbox-controls with-border text-center">
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-toggle="tooltip" data-container="body" title="Delete"><i class="fa fa-trash"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-toggle="tooltip" data-container="body" title="Reply"><i class="fa fa-reply"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-toggle="tooltip" data-container="body" title="Forward"><i class="fa fa-share"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></button>
						</div>
						<!-- /.mailbox-controls -->
						<div class="mailbox-read-message">
							<?php echo $subject_messages[0]['fmessage']; ?>
						</div>
						<!-- /.mailbox-read-message -->
					</div>
					<!-- /.box-body -->
					<hr>
				
					<!-- /.box-footer -->
					<div class="box-footer">
						<div class="float-right">
							<button type="button" class="btn btn-default waves-effect waves-light"><i class="fa fa-reply"></i> Reply</button>
							<button type="button" class="btn btn-default waves-effect waves-light"><i class="fa fa-share"></i> Forward</button>
						</div>
						
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /. box -->
			</div>
			<!-- /.col-lg-9 col-12 -->
		</div>

<?= $this->endSection() ?>