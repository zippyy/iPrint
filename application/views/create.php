<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PRINT.OUT</title>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,400italic,600,300italic,300|Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/bootsnip.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/owl.carousel.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/owl.theme.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/owl.transitions.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/style.css'); ?>" rel="stylesheet">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

<body>

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px;">
	<div class="logo">Register</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left">
			<div class="login-form-main-message" ></div>
			<div class="main-login-form"  style=" background-color:#fd2231;border:0.5px #3f3f3f;">
				<div class="login-group">
					<div class="form-group">
						<span id="error"></span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="reg_username" name="reg_firstname" placeholder="First Name"  required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="reg_password" name="reg_lastname" placeholder="Last Name"  required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="reg_email" name="reg_email" placeholder="Email"  required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="Password"  required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="reg_fullname" name="reg_address" placeholder="Address"  required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="reg_fullname" name="reg_contact_no" placeholder="Contact no."  required>
					</div>
					<div class="form-group login-group-checkbox">
						<input type="radio" class="" name="status" value="0"  id="cstmr"  required>
						<label for="cstmr">Customer</label>
						
						<input type="radio" class="" name="status" value="1" id="prntshpwnr" required>
						<label for="prntshpwnr">Print Shop Owner</label>
							<div id="subscript"></div>
					</div>	
					<div class="form-group login-group-checkbox">
						<input type="checkbox" class="" id="reg_agree" name="reg_agree" required>
						<label for="reg_agree">i agree with <a href="#">terms</a></label>
					</div>

				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="<?php echo site_url('/'); ?>">login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo site_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('input[name=status]').change(function (e){
					if($(this).val() == 1){
						$('#subscript').html('<h1>Subscription Offer</h1>');
					}else{
						$('#subscript').html('');
					}
				});

				$('#register-form').submit(function (e){
					e.preventDefault();
					$.post('<?php echo site_url("api/register"); ?>', $(this).serialize() ).success(function(data){
						if(data == 'success'){
							window.location = '<?php echo site_url("/welcome/index?email='+ $('#reg_email').val() +'"); ?>';
						}else if(data == 'Email is Used.'){
							$('#error').attr('class','alert-warning');
							$('#error').text(data);
						}else{
							alert(data);
						}
					}).fail(function(jqXHR, textStatus, errorThrown){
						alert(jqXHR+textStatus+errorThrown);
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