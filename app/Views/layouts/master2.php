<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.ninjateam.org/html/my-admin/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jun 2020 11:56:04 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home - PeekABook</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/styles/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/styles/custom.css">
	
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/fonts/material-design/css/materialdesignicons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/plugin/sweet-alert/sweetalert.css">
	
	<!-- Morris Chart -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/plugin/chart/morris/morris.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/plugin/fullcalendar/fullcalendar.print.css" media='print'>


	<!-- TinyMCE -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/plugin/tinymce/skins/lightgray/skin.min.css">
	<!-- Must include this script FIRST -->
	<script src="<?php echo base_url();?>/public/assets2/plugin/tinymce/tinymce.min.js"></script>

	<!-- Data Tables -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/plugin/datatables/media/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets2/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">

<style>

.preloader {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   z-index: 9999;
   background-image: url('Infinity-1s-200px.gif');
   background-repeat: no-repeat; 
   background-color: #FFF;
   background-position: center;
}

</style>


</head>

<body>
<div class="preloader"></div>
<div class="main-menu">
	<header class="header">
		<a href="<?php echo site_url();?>dashboard" class="logo"><i class="ico mdi mdi-cube-outline"></i>PeekABook</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><span class="fa fa-user-circle fa-5x text-dark"></span><span class="status online"></span></a>
			<h5 class="name"><?php echo session()->firstname . ' ' . session()->firstname; ?> </h5>
			<!-- <h5 class="position"></h5> -->
			<!-- /.name -->
			<div class="control-wrap js__drop_down">
				<i class="fa fa-caret-down js__drop_down_button"></i>
				<div class="control-list">
					<!-- <div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
					<div class="control-item"><a href="#"><i class="fas fa-cog"></i> Settings</a></div> -->
					<div class="control-item"><a href="<?php echo site_url(); ?>logout" onclick="return confirm('Are you sure you want to log out?')"><i class="fas fa-sign-out-alt"></i> Log out</a></div>
				</div>
				<!-- /.control-list -->
			</div>
			<!-- /.control-wrap -->
		</div>
		<!-- /.user -->
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title">Navigation</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="<?php echo site_url();?>dashboard"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-email-outline"></i><span>Messages</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="<?php echo site_url();?>dashboard/messages/inbox">All Messages</a></li>
						
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<?php if(session()->has_book){?>
					<li>
						<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-book-open-page-variant"></i><span>Books For Me</span><span class="menu-arrow fa fa-angle-down"></span></a>
						<ul class="sub-menu js__content">
							<li><a href="<?php echo site_url();?>dashboard/books">All Books</a></li>
							
						</ul>
						<!-- /.sub-menu js__content -->
					</li>
				<?php } ?>
			</ul>
	
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="float-left">
		<button type="button" class="menu-mobile-button fas fa-bars js__menu_mobile"></button>
		<h1 class="page-title"><a href="<?php echo site_url();?>" class="text-white"> Back To Home Page</a></h1>
		<!-- /.page-title -->
	</div>
	<!-- /.float-left -->
	<div class="float-right">
		<!-- <div class="ico-item">
			<a href="#" class="ico-item mdi mdi-magnify js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="mdi mdi-magnify button-search" type="submit"></button></form>
			<!-- /.searchform 
		</div>
		<!-- /.ico-item -->
		<!-- <a href="#" class="ico-item mdi mdi-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item pulse"><span class="ico-item mdi mdi-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a> --> 
		<a href="<?php echo site_url()?>logout" class="ico-item mdi mdi-logout" onclick="return confirm('Are you sure you want to log out?')"></a>
	</div>
	<!-- /.float-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Your Notifications</h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-1.jpg" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-2.jpg" alt=""></span>
					<span class="name">Anna William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-warning"><i class="fas fa-exclamation-triangle"></i></span>
					<span class="name">Update Status</span>
					<span class="desc">Failed to get available update data. To ensure the please contact us.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-1.jpg" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-6.jpg" alt=""></span>
					<span class="name">Michael Zenaty</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">50 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-4.jpg" alt=""></span>
					<span class="name">Simon</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">1 hour</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
					<span class="name">Account Contact Change</span>
					<span class="desc">A contact detail associated with your account has been changed.</span>
					<span class="time">2 hours</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-7.jpg" alt=""></span>
					<span class="name">Helen 987</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">Yesterday</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-2.jpg" alt=""></span>
					<span class="name">Denise Jenny</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">Oct, 28</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-8.jpg" alt=""></span>
					<span class="name">Thomas William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">Oct, 27</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Recent Messages<a href="#" class="float-right text-danger">New message</a></h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-1.jpg" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-3.jpg" alt=""></span>
					<span class="name">Harry Halen</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-4.jpg" alt=""></span>
					<span class="name">Thomas Taylor</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-1.jpg" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-5.jpg" alt=""></span>
					<span class="name">Helen Candy</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-2.jpg" alt=""></span>
					<span class="name">Anna Cavan</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 hour ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-success"><i class="fa fa-user"></i></span>
					<span class="name">Jenny Betty</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 day ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-5.jpg" alt=""></span>
					<span class="name">Denise Peterson</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 year ago</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">

	<!-- ==Dynamic content -->

	<?= $this->renderSection('content') ?>

	<!-- ==Dynamic content -->

		<!-- /.row -->		
		<footer class="footer">
			<ul class="list-inline">
				<li>2020 © PeekABook.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url();?>/public/assets2/scripts/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/scripts/modernizr.min.js"></script>
<!-- <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
	<script src="<?php echo base_url();?>/public/assets2/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/nprogress/nprogress.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/waves/waves.min.js"></script>

	<!-- Morris Chart -->
	<script src="<?php echo base_url();?>/public/assets2/plugin/chart/morris/morris.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/chart/morris/raphael-min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/scripts/chart.morris.init.min.js"></script>

	<!-- Flot Chart -->
	<script src="<?php echo base_url();?>/public/assets2/plugin/chart/plot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/chart/plot/jquery.flot.tooltip.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/chart/plot/jquery.flot.categories.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/chart/plot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/chart/plot/jquery.flot.stack.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/scripts/chart.flot.init.min.js"></script>

	<!-- Sparkline Chart -->
	<script src="<?php echo base_url();?>/public/assets2/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/scripts/chart.sparkline.init.min.js"></script>

	<!-- FullCalendar -->
	<script src="<?php echo base_url();?>/public/assets2/plugin/moment/moment.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/scripts/fullcalendar.init.js"></script>


	<!-- Data Tables -->
	<script src="<?php echo base_url();?>/public/assets2/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/datatables/media/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets2/scripts/datatables.demo.min.js"></script>


	<script src="<?php echo base_url();?>/public/assets2/scripts/main.min.js"></script>
<script src="<?php echo base_url();?>/public/assets2/scripts/mycommon.js"></script>

<!-- Summernote -->
<script src="<?php echo base_url();?>/public/plugins/summernote/summernote-bs4.min.js"></script>


<script>

  $("#subject").bind('input', function () {
        var stt = $(this).val();
        str = stt.replace(/\s+/g, '-');
        $("#subject_slug").val(str.toLowerCase());
        });

</script>


<script>

	//$('.textarea').summernote();

</script>


<script>

	$('.datatable').datatable();

</script>




</body>




</html>