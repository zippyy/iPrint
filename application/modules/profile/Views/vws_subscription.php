<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PRINT.OUT</title>	
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,400italic,600,300italic,300|Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
		<script src="http://maps.googleapis.com/maps/api/js"></script>


		<!-- <link href="<?php echo site_url('assets/css/style.css'); ?>" rel="stylesheet"> -->
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body data-spy="scroll" data-target=".main-nav">
		<header class="st-navbar">
			<nav class="navbar navbar-default navbar-fixed-top clearfix" role="navigation">
				<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sept-main-nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand page-scroll" name="top" href="header">PRINT.OUT</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse main-nav" id="sept-main-nav">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo site_url('Profile/datalist'); ?>">View Map<i class="icon-search icon-white"></i></a></li>
							<li><a href="<?php echo site_url('Profile/after_log'); ?>">File Receiver</a></li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('email'); ?>&nbsp;&nbsp;<span class="glyphicon glyphicon-user pull-right"></span></a>
							<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('Profile/Profile_sets'); ?>"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Profile</a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Subscription Status</a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="badge"> 42 </span>&nbsp;&nbsp;Messages </a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Forms</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo site_url('api/sign_out'); ?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
						  </ul>
						</li>
						</ul>	
					</div>
				</div>		
			</nav>
		</header>
		<section class="row" style="padding-top:5em;">
				<div class="col-md-12">
					<div class="col-md-4">
						<form role="form">
						  <div class="form-group">
						    <label for="text">First Name:</label>
						    <input type="text" class="form-control" id="fn">
						  </div>
						  <div class="form-group">
						    <label for="pwd">Last Name:</label>
						    <input type="text" class="form-control" id="ln">
						  </div>
						  <div class="form-group">
						    <label for="text">Address:</label>
						    <input type="text" class="form-control" id="ad">
						  </div>
						  <div class="form-group">
						    <label for="text">Contact No:</label>
						    <input type="text" class="form-control" id="cn">
						  </div>			  
						  <button type="submit" class="btn btn-default">Save</button>
						  <button id="edit" class="btn btn-primary">Edit</button>
						</form>
					</div>
				</div>
		</section>
		<footer class="site-footer" style="padding-top:2em;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<center>
						&copy; <a href="https://www.cantothemes.com">CantoThemes</a> 2015.
						<!-- Don't Remove/Edit this. If you remove this you don't have permission to use this template. -->
						Designed by <a href="https://www.cantothemes.com">CantoThemes</a>
						<!-- So Please don't remove this -->
						</center>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo site_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>

		<script type="text/javascript">
		$(function(){

		});

		$('#edit').click(function (e){

		});

		</script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.easing.min.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.stellar.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.appear.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.nicescroll.min.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.countTo.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.shuffle.modernizr.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.shuffle.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/owl.carousel.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.ajaxchimp.min.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/script.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/bootship.js'); ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
	</body>
</html>