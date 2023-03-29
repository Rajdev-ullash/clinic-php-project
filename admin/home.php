<?php
include_once('header.php');
?>
<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
	<!-- main menu header-->
	<div class="main-menu-header">
		<input type="text" placeholder="Search" class="menu-search form-control round"/>
	</div>
	<!-- / main menu header-->
	<!-- main menu content-->
	<?php
	include('sideber.php');
	?>
	<!-- /main menu content-->
	<!-- main menu footer-->
	<!-- include includes/menu-footer-->
	<!-- main menu footer-->
</div>
<!-- / main menu-->
<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
		</div>
		<div class="content-body"><!-- stats -->
		<div class="row">
			<div class="col-xl-3 col-lg-6 col-xs-12">
				<div class="card">
					<div class="card-body">
						<div class="card-block">
							<div class="media">
								<div class="media-body text-xs-left">
									<h3 class="pink">278</h3>
									<span>New Projects</span>
								</div>
								<div class="media-right media-middle">
									<i class="icon-bag2 pink font-large-2 float-xs-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-xs-12">
				<div class="card">
					<div class="card-body">
						<div class="card-block">
							<div class="media">
								<div class="media-body text-xs-left">
									<h3 class="teal">156</h3>
									<span>New Clients</span>
								</div>
								<div class="media-right media-middle">
									<i class="icon-user1 teal font-large-2 float-xs-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-xs-12">
				<div class="card">
					<div class="card-body">
						<div class="card-block">
							<div class="media">
								<div class="media-body text-xs-left">
									<h3 class="deep-orange">64.89 %</h3>
									<span>Conversion Rate</span>
								</div>
								<div class="media-right media-middle">
									<i class="icon-diagram deep-orange font-large-2 float-xs-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-xs-12">
				<div class="card">
					<div class="card-body">
						<div class="card-block">
							<div class="media">
								<div class="media-body text-xs-left">
									<h3 class="cyan">423</h3>
									<span>Support Tickets</span>
								</div>
								<div class="media-right media-middle">
									<i class="icon-ios-help-outline cyan font-large-2 float-xs-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ stats -->
		<!--/ project charts -->
		<div class="row">
			<div class="col-xl-8 col-lg-12">
				<div class="card">
					<div class="card-body">
						<ul class="list-inline text-xs-center pt-2 m-0">
							<li class="mr-1">
								<h6><i class="icon-circle warning"></i> <span class="grey darken-1">Remaining</span></h6>
							</li>
							<li class="mr-1">
								<h6><i class="icon-circle success"></i> <span class="grey darken-1">Completed</span></h6>
							</li>
						</ul>
						<div class="chartjs height-250">
							<canvas id="line-stacked-area" height="250"></canvas>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-xs-3 text-xs-center">
								<span class="text-muted">Total Projects</span>
								<h2 class="block font-weight-normal">18</h2>
							<progress class="progress progress-xs mt-2 progress-success" value="70" max="100"></progress>
						</div>
						<div class="col-xs-3 text-xs-center">
							<span class="text-muted">Total Task</span>
							<h2 class="block font-weight-normal">125</h2>
						<progress class="progress progress-xs mt-2 progress-success" value="40" max="100"></progress>
					</div>
					<div class="col-xs-3 text-xs-center">
						<span class="text-muted">Completed Task</span>
						<h2 class="block font-weight-normal">242</h2>
					<progress class="progress progress-xs mt-2 progress-success" value="60" max="100"></progress>
				</div>
				<div class="col-xs-3 text-xs-center">
					<span class="text-muted">Total Revenue</span>
					<h2 class="block font-weight-normal">$11,582</h2>
				<progress class="progress progress-xs mt-2 progress-success" value="90" max="100"></progress>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-4 col-lg-12">
<div class="card card-inverse bg-info">
	<div class="card-body">
		<div class="position-relative">
			<div class="chart-title position-absolute mt-2 ml-2 white">
				<h1 class="display-4">84%</h1>
				<span>Employees Satisfied</span>
			</div>
			<canvas id="emp-satisfaction" class="height-400 block"></canvas>
			<div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
				<a href="#" class="btn bg-info bg-darken-3 mr-1 white">Statistics <i class="icon-stats-bars"></i></a> for the last year.
			</div>
		</div>
	</div>
</div>
</div>
</div>
<!--/ project charts -->

<!-- Recent invoice with Statistics -->
</div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php
include('footer.php');
?>