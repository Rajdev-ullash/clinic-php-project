<?php
 session_start();
 include('databases.php');
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
		<meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
		<meta name="author" content="PIXINVENT">
		<title>Project Dashboard - Robust Free Bootstrap Admin Template</title>
		<link rel="apple-touch-icon" sizes="60x60" href="app-assets/images/ico/apple-icon-60.png">
		<link rel="apple-touch-icon" sizes="76x76" href="app-assets/images/ico/apple-icon-76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="app-assets/images/ico/apple-icon-120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="app-assets/images/ico/apple-icon-152.png">
		<link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
		<link rel="shortcut icon" type="image/png" href="app-assets/images/ico/favicon-32.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<!-- BEGIN VENDOR CSS-->

		<link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
		
		<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="DataTables/Responsive/css/responsive.dataTables.min.css">
		<!-- font icons-->
		<link rel="stylesheet" type="text/css" href="app-assets/fonts/icomoon.css">
		<link rel="stylesheet" type="text/css" href="app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
		<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/pace.css">
		<!-- END VENDOR CSS-->
		<!-- BEGIN ROBUST CSS-->
		<link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
		<link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
		<link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
		<!-- END ROBUST CSS-->
		<!-- BEGIN Page Level CSS-->
		<link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
		<link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
		<link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
		<!-- END Page Level CSS-->
		<!-- BEGIN Custom CSS-->
		<link rel="stylesheet" type="text/css" href="app-assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="app-assets/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="app-assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/nab-tab.css">
		<!-- END Custom CSS-->
		<!-- Begin TagInput Custom CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
		
		<!-- End TagInput Custom CSS-->
		
		  <script src='https://cdn.tiny.cloud/1/ok68ia67ihy3d6b4t1m7f5dvytyyyeqh69dihjiuctlx8hzb/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>
  
	</head>
	<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
		<!-- navbar-fixed-top-->
		<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
			<div class="navbar-wrapper">
				<div class="navbar-header">
					<ul class="nav navbar-nav">
						<li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
						<li class="nav-item"><a href="home.php" class="navbar-brand nav-link"><img alt="branding logo" src="app-assets/images/logo/robust-logo-light.png" data-expand="app-assets/images/logo/robust-logo-light.png" data-collapse="app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
						<li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
					</ul>
				</div>
				<div class="navbar-container content container-fluid">
					<div id="navbar-mobile" class="collapse navbar-toggleable-sm">
						<ul class="nav navbar-nav">
							<li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
							<li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
							
						</ul>
						<ul class="nav navbar-nav float-xs-right">
							<li class="dropdown dropdown-language nav-item"><a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link"><i class="flag-icon flag-icon-gb"></i><span class="selected-language">English</span></a>
							<div aria-labelledby="dropdown-flag" class="dropdown-menu"><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-gb"></i> English</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-fr"></i> French</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-de"></i> German</a></div>
						</li>
						<li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
						<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
							<li class="dropdown-menu-header">
								<h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
							</li>
							<li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
								<div class="media">
									<div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
									<div class="media-body">
										<h6 class="media-heading">You have new order!</h6>
										<p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
										<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
									</div>
								</div></a><a href="javascript:void(0)" class="list-group-item">
								<div class="media">
									<div class="media-left valign-middle"><i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
									<div class="media-body">
										<h6 class="media-heading red darken-1">99% Server load</h6>
										<p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
										<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
									</div>
								</div></a><a href="javascript:void(0)" class="list-group-item">
								<div class="media">
									<div class="media-left valign-middle"><i class="icon-server2 icon-bg-circle bg-yellow bg-darken-3"></i></div>
									<div class="media-body">
										<h6 class="media-heading yellow darken-3">Warning notifixation</h6>
										<p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
										<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
									</div>
								</div></a><a href="javascript:void(0)" class="list-group-item">
								<div class="media">
									<div class="media-left valign-middle"><i class="icon-check2 icon-bg-circle bg-green bg-accent-3"></i></div>
									<div class="media-body">
										<h6 class="media-heading">Complete the task</h6><small>
										<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>
									</div>
								</div></a><a href="javascript:void(0)" class="list-group-item">
								<div class="media">
									<div class="media-left valign-middle"><i class="icon-bar-graph-2 icon-bg-circle bg-teal"></i></div>
									<div class="media-body">
										<h6 class="media-heading">Generate monthly report</h6><small>
										<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>
									</div>
								</div></a></li>
								<li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
						<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
							<li class="dropdown-menu-header">
								<h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
							</li>
							<li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
								<div class="media">
									<div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
									<div class="media-body">
										<h6 class="media-heading">Margaret Govan</h6>
										<p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
										<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
									</div>
								</div></a><a href="javascript:void(0)" class="list-group-item">
								<div class="media">
									<div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
									<div class="media-body">
										<h6 class="media-heading">Bret Lezama</h6>
										<p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
										<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
									</div>
								</div></a><a href="javascript:void(0)" class="list-group-item">
								<div class="media">
									<div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
									<div class="media-body">
										<h6 class="media-heading">Carie Berra</h6>
										<p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
										<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
									</div>
								</div></a><a href="javascript:void(0)" class="list-group-item">
								<div class="media">
									<div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
									<div class="media-body">
										<h6 class="media-heading">Eric Alsobrook</h6>
										<p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
										<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
									</div>
								</div></a></li>
								<li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
							</ul>
						</li>
						<li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link" ><span class="user-name" id="u_name"><p style="margin-bottom: 0px;margin-top: 6px;" ><?php echo 'User: '.$_SESSION['user']; ?></p></span></a>
						<div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a><a href="#" class="dropdown-item"><i class="icon-mail6"></i> My Inbox</a><a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> Task</a><a href="#" class="dropdown-item"><i class="icon-calendar5"></i> Calender</a>
						<div class="dropdown-divider"></div><a href="logout.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</nav>