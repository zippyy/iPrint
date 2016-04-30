<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PRINT.OUT</title>	
		<!-- Bootstrap -->
		<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo site_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
		
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
			<div class="container">
				<div class="col-md-12">
						<div class="dataTable_wrapper">
							<button style="margin-buttom:1em;" id="news"><span class="glyphicon glyphicon-plus"></span> New Shop</button>
                           	<hr />
                            <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" id="users_table">
                               <thead>
                                <th>Job Id</th>
                                <th>Action</th>
                                <th>Date Send</th>
                                <th>File Name</th>
                                <th>Sender</th>
                                <th>Sender Contact #:</th>
                                <th>Owner First name</th>
                                <th>Owner Last name</th>
                                <th>Lat</th>
                                <th>Long</th>
                               </thead>
                            </table>
                        </div>
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
	        $('#users_table').DataTable({
	            "responsive": true,
	            "processing": true,
	            "serverSide": false,
	            "ajax": "<?php echo site_url('Api/data'); ?>",
	            "aoColumns": [
	                { "data": "attr_jb_id" },
	           	    {
	                    "sWidth": "5%",
	                    "data": null,
	                    "className": "center",
	                    "defaultContent": ' <button class="btn btn-info" onclick="cmdDelete();"> <i class="glyphicon glyphicon-folder-open"> </i> View </button>'
	                },
	                { "data": "attr_jb_date" },
	                { "data": "attr_fl_attch_nm" },
	                { "data": "null",
					  "mRender": function (data, type, row) {
					    return row.attr_cstmr_fname +', '+ row.attr_cstmr_lname;
					  }

	                },
	                { "data": "attr_cstmr_cntct_no" },
	                { "data": "attr_cstmr_addrss" },
	                { "data": "attr_cstmr_cntct_no"  },
	                { "data": "attr_cstmr_usrnm" },
	                { "data": "attr_cstmr_usrnm" }
	            ]
		     });
		});

	    function cmdDelete(){
	        var table = $('table.table').DataTable();
	        $('table.table tbody').on( 'click', 'tr', function (){
	            s = table.row(this).data().attr_fl_attch_nm;
	        });

	        window.open('<?php echo site_url("uploads/iPrint 2 Shop/'+ s +'"); ?>', '_blank');
	    }

		</script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/dataTables.responsive.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dataTables.bootstrap.min.css">
  		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dataTables.responsive.css">
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
	</body>
</html>