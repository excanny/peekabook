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
		
			</div>
			<!-- /.col-lg-3 col-12 -->
			<div class="col-lg-9 col-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Inbox</h3>
						<div class="box-tools">
							<div class="has-feedback">
								<input type="text" class="form-control input-sm" placeholder="Search Mail">
								<span class="fas fa-search form-control-feedback"></span>
							</div>
						</div>
						<!-- /.box-tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<div class="mailbox-controls">
							<!-- Check all button -->
							<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-trash"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-exclamation-circle"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fas fa-sync-alt"></i></button>
							<div class="float-right">
								<span class="inbox-text">1-50/200</span>
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-left"></i></button>
									<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-right"></i></button>
								</div>
								<!-- /.btn-group -->
							</div>
							<!-- /.float-right -->
						</div>
						<div class="table-responsive mailbox-messages">
							<table class="table table-hover table-striped">
								<tbody>
								<?php if(empty($inbox)){?>
										
										<tr class="unread">
										
											<td class="mailbox-name text-center"><a>No inbox mails</a></td>
											
											</td>
											
										</tr>
									<?php foreach ($inbox as $message) {?>
										
								
										<tr class="unread">
											<td><input type="checkbox"></td>
											<td class="mailbox-star"><a href="#"><i class="fa fa-star text-warning"></i></a></td>
											<td class="mailbox-name"><a href="<?php echo site_url('message/read/'. $message['fmessage_id']);?>">PeekABook Admin</a></td>
											<td class="mailbox-subject"><span class="mailbox-subject-title"><?php echo $message['fsubject']; ?></span> - <?php echo $message['fmessage']; ?>
											</td>
											<td class="mailbox-attachment"></td>
											<td class="mailbox-date"><?php 
											$date = new DateTime(); 
											echo $message['created_at']; ?></td>
										</tr>

									<?php } } ?>

								</tbody>
							</table>
							<!-- /.table -->
						</div>
						<!-- /.mail-box-messages -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer no-padding">
						<div class="mailbox-controls">
							<!-- Check all button -->
							<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-trash"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-exclamation-circle"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fas fa-sync-alt"></i></button>
							<div class="float-right">
								<span class="inbox-text">1-50/200</span>
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-left"></i></button>
									<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-right"></i></button>
								</div>
								<!-- /.btn-group -->
							</div>
							<!-- /.float-right -->
						</div>
					</div>
				</div>
				<!-- /. box -->
			</div>
			<!-- /.col-lg-9 col-12 -->
		</div>

<?= $this->endSection() ?>