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
		


		<link href="<?php echo site_url('assets/css/owl.carousel.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/owl.theme.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/owl.transitions.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/bootsnip.css'); ?>" rel="stylesheet">

		<link href="<?php echo site_url('assets/css/style.css'); ?>" rel="stylesheet">
		
		<!-- Icon -->
		<link rel="stylesheet" href="<?php echo site_url('assets/css/indexcon.min.css'); ?>" type="text/css">
		
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
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#pricing">Pricing</a></li>
							<li><a href="#contact">Contact Us</a></li>
						</ul>
							
					</div>
				</div>	
			</nav>
		</header>
		
		<section class="home" id="home" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="st-home-unit">
							<div class="hero-txt">
						<div class="row mb90">
							<div class="col-md-6">
								<p class="hero-work">Upload - Search - Print</p>
								<h2 class="hero-title">PRINT.OUT</h2>
								<!-- <p class="hero-sub-title">We Provide Hight Quality Bootstrap Template</p> -->
								<!-- <a href="#" class="btn btn-default btn-lg left-btn">Purchase Now</a> -->
								<a href="#about" class="btn btn-main btn-lg">Find Out More</a>
							</div>
									
							<div class="col-md-6">
							<!-- LOGIN FORM -->
							<div style="padding:50px 0">
							<div class="logo">Sign Up</div>
							<!-- Main Form -->
							<div class="login-form-1">
							<form id="login-form" class="text-left">
								<div class="login-form-main-message"></div>
								<div class="main-login-form">
								<div class="login-group">
								<span id="error"></span>
								<div class="form-group">
									<label for="lg_username" class="sr-only">Username</label>
									<input type="text" class="form-control" id="lg_username" name="lg_email" <?php if(isset($_GET['email'])){ ?> value="<?php echo $_GET['email']; ?>" <?php }else{ ?> placeholder="Email" <?php } ?> >
								</div>
								<div class="form-group">
									<label for="lg_password" class="sr-only">Password</label>
									<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
								</div>
								<div class="form-group login-group-checkbox">
									<input type="checkbox" id="lg_remember" name="lg_remember">
									<label for="lg_remember">remember</label>
								</div>
								</div>
								<button type="submit" class="login-button" >&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></button>
								</div>
								<div class="etc-login-form">
									<p>new user? <a href="<?php echo site_url('welcome/register') ?>">create new account</a></p>
								</div>
							</form>
							</div>
							<!-- end:Main Form -->
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
		<section class="about" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Welcome to Print.out</h3>
							<p>Print online</p>
						</div>
						<div class="row mb90">
								<p>The study will provide a web and mobile based application via online printing service. This system becomes the link between the client and the printing shop owner. Printout provides both web and mobile platforms whose main purpose is to serve as an information portal for customers. The system will be developed using PHP and Android as its development tools. Moreover, the system will contain the following modules as its scope.</p>
						</div>	
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="pricing" id="pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Our Packages</h3>
							<p>Printing Shops</p>
						</div>
					</div>
				
				<div class="row">
					<div class="col-md-4">
						<div class="pricing-table">
							<div class="pricing-header">
								<div class="pt-price">$0<small>/m</small></div>
								<div class="pt-name">Free</div>
							</div>
							<div class="pricing-body">
								<ul>
									<li><i class="fa fa-check"></i> Free </li>
									<li><i class="fa fa-times"></i> Free </li>
									<li><i class="fa fa-times"></i> Free </li>
									
								</ul>
							</div>
							<div class="pricing-footer">
								<a href="#" class="btn btn-main">Purchase</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="pricing-table">
							<div class="pricing-header">
								<div class="pt-price">$45<small>/m</small></div>
								<div class="pt-name">Silver</div>
							</div>
							<div class="pricing-body">
								<ul>
									<li><i class="fa fa-check"></i> 3 Months</li>
									<li><i class="fa fa-check"></i> 3 Months</li>
									<li><i class="fa fa-check"></i> 3 Months</li>
									
								</ul>
							</div>
							<div class="pricing-footer">
								<a href="#" class="btn btn-main">Purchase</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="pricing-table featured">
							<div class="pricing-header">
								<div class="pt-price">$60<small>/m</small></div>
								<div class="pt-name">Gold</div>
								<div class="featured-text">Unlimited</div>
							</div>
							<div class="pricing-body">
								<ul>
									<li><i class="fa fa-check"></i> 1 Year</li>
									<li><i class="fa fa-check"></i> 1 Year</li>
									<li><i class="fa fa-check"></i> 1 Year</li>
									
								</ul>
							</div>
							<div class="pricing-footer">
								<a href="#" class="btn btn-main">Purchase</a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
		

		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Contact Us</h3>
							<p>Get in Touch with Us</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p>printout242016@gmail.com</p>
                </div>
				<center>
				<div class="col-lg-12">
                    <ul class="social-network social-circle">
                        <li><a href="https://www.facebook.com/eform.ph" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/formph" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/" target="_blank" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="https://instagram.com/eform.ph/" target="_blank" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>				
				</div>
				</center>
			</div>
		</section>

		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; <a>Print.Out</a> 2016.
						<!-- Don't Remove/Edit this. If you remove this you don't have permission to use this template. -->
						Designed by <a>Print.out</a>
						<!-- So Please don't remove this -->
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo site_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#login-form').submit(function (e){
					e.preventDefault();
					$.post('<?php echo site_url("api/login"); ?>', $(this).serialize() ).success(function(data){
						if(data == 'success'){
							window.location = "<?php echo site_url('profile/datalist'); ?>";
						}else{
							alert(data)
							$('#error').attr('class', 'alert-warning');
							$('#error').text('Invalid Password / Username .');
						}
					}).fail(function(jqXHR, textStatus, errorThrown){
						alert('failed2')
					});
				});
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