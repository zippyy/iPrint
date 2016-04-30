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
						<form role="form" id="form">
						  <div class="form-group">
						    <label for="text">First Name:</label>
						    <input type="text" class="form-control" name="profile_data_fnm" id="fn">
						  </div>
						  <div class="form-group">
						    <label for="pwd">Last Name:</label>
						    <input type="text" class="form-control" name="profile_data_lnm" id="ln">
						  </div>
						  <div class="form-group">
						    <label for="text">Address:</label>
						    <input type="text" class="form-control" name="profile_data_add" id="ad">
						  </div>
						  <div class="form-group">
						    <label for="text">Contact No:</label>
						    <input type="text" class="form-control" name="profile_data_cn" id="cn">
						  </div>			  
						  <button type="submit" class="btn btn-default" id="save" disabled="">Save</button>
						  <button id="edit" class="btn btn-primary">Edit</button>
						</form>
					</div>
					<div class="col-md-8">
						<div class="dataTable_wrapper">
							<button style="margin-buttom:1em;" id="news"><span class="glyphicon glyphicon-plus"></span> New Shop</button>
                           	<hr />
                            <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" id="users_table">
                               <thead>
                                <th>Id</th>
                                <th>Shop name</th>
                                <th>Address</th>
                                <th>Contact #</th>
                                <th>Edit</th>
                                <th>Delete</th>
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

	<div id="nshop" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <h4 class="modal-title alert alert-success"><center><strong id="title">New Shop</strong></center></h4>
	      <div class="modal-body">
	            <form id="InsertShop" name="InsertShop">
	                <div class="form-group">
	                 <div class="input-group">                               
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                    <input id="device_id_insert" type="text" class="form-control" placeholder="Shop name" name="shop_name" required />
	                 </div>
	                </div>
	                <div class="form-group">
	                 <div class="input-group">                               
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                    <input id="user_Id_insert" type="text" class="form-control" placeholder="Shop Address" name="shop_Address" required />
	                 </div>
	                </div>
	                <div class="form-group">
	                 <div class="input-group">                               
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
	                    <input id="email_insert" type="text" class="form-control" placeholder="Shop Contact no" name="shop_cn" required />
	                 </div>
	                </div>
	                <div class="form-group">
	                 <div class="input-group">                               
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
	                    <input id="email_insert" type="text" class="form-control" placeholder="Shop longitude" name="shop_longitude" required />
	                 </div>
	                </div>    
	                <div class="form-group">
	                 <div class="input-group">                               
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
	                    <input id="email_insert" type="text" class="form-control" placeholder="Shop latitude" name="shop_latitude" required />
	                 </div>
	                </div>   
	                </div>   	                	                       
	              <div class="modal-footer">
	                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
	                <button type="submit" class="btn btn-primary"  id="mobileIsert">Insert</button>
	              </div>
	           </form>
	      </div>
	    </div>
	  </div>
	</div>

	<div id="dshop" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-sm">
	        <div class="modal-content">
	          <div class="modal-body aler alert-danger">
	          	<center>
	             <form id="DeleteShop" name="DeleteShop">
	                    <div class="form-group">
	                     <div class="input-group">                     
	                          <input type="text" id="d_shop_id" name="d_shop_id" hidden readonly="true" />
	                          <center><strong>Deleting: Shop</strong></center>
	                          <br />
	                          <center> <span id="fullname" name="fullname"/></span> </center>
	                          <br />
	                          <span class="alert-warning " style="font-size:11px;"><i>Please Click Delete button for confirmation.</i></span>  
	                     </div>
	                    </div>
	                  <div class="modal-footer">
	                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
	                    <button type="submit" class="btn btn-danger"  id="MobileDelete" >Delete</button>
	                  </div>
	             </form>
	            </center>
	          </div>
	        </div>
	    </div>
	</div>

	<div id="eshop" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <h4 class="modal-title alert alert-success"><center><strong id="title">Update Shop</strong></center></h4>
	      <div class="modal-body">
	            <form id="UpdateShop" name="UpdateShop">
	                <div class="form-group">
	                 <div class="input-group">                               
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                    <input id="device_id_insert" type="text" name="e_shop_id" required hidden/>
	                    <input id="device_id_insert" type="text" class="form-control" placeholder="Shop name" name="e_shop_name" required />
	                 </div>
	                </div>
	                <div class="form-group">
	                 <div class="input-group">                               
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                    <input id="user_Id_insert" type="text" class="form-control" placeholder="Shop Address" name="e_shop_Address" required />
	                 </div>
	                </div>
	                <div class="form-group">
	                 <div class="input-group">                               
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
	                    <input id="email_insert" type="text" class="form-control" placeholder="Shop Contact no" name="e_shop_cn" required />
	                 </div>  
	                </div> 
	                <div class="form-group">
	                 <div class="input-group">                               
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
	                    <input id="email_insert" type="text" class="form-control" placeholder="Shop longitude" name="e_shop_longitude" required />
	                 </div>
	                </div> 
	                <div class="form-group">
	                 <div class="input-group">                               
	                    <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
	                    <input id="email_insert" type="text" class="form-control" placeholder="Shop latitude" name="e_shop_latitude" required />
	                 </div>
	                </div>   
	                </div>   	                	                       
	              <div class="modal-footer">
	                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
	                <button type="submit" class="btn btn-primary"  id="mobileIsert">Update</button>
	              </div>
	           </form>
	      </div>
	    </div>
	  </div>
	</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo site_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>

		<script type="text/javascript">
		$(document).ready(function(){

			$('#news').click(function(){
				$('#nshop').modal('show');
			})

	        $('#users_table').DataTable({
	            "responsive": true,
	            "processing": true,
	            "serverSide": false,
	            "ajax": "<?php echo site_url('Api/getPrnShp'); ?>",
	            "aoColumns": [
	                { "data": "attr_prn_shp_id" },
	                { "data": "attr_prntng_shp_name" },
	                { "data": "attr_prntng_shp_addrss" },
	                { "data": "attr_ps_contact" },
	                {
	                    "sWidth": "5%",
	                    "data": null,
	                    "className": "center",
	                    "defaultContent": '<button class="btn btn-success" onclick="cmdEdit();"><i class="glyphicon glyphicon-cog"></i> Edit</button>'
	                },  
	                {
	                    "sWidth": "5%",
	                    "data": null,
	                    "className": "center",
	                    "defaultContent": ' <button class="btn btn-danger" onclick="cmdDelete();"><i class="glyphicon glyphicon-trash"></i> Delete</button>'
	                },
	                { "data": "attr_ownr_fname"},
	                { "data": "attr_ownr_lname"},
	                { "data": "attr_ps_lat" },
	                { "data": "attr_ps_long" }
	            ]
		     });	
		});

	    function cmdDelete(){
	        var table = $('table.table').DataTable();
	        $('table.table tbody').on( 'click', 'tr', function (){
	            $('#d_shop_id').val(table.row(this).data().attr_prn_shp_id); 
	                if($('#d_shop_id').val() == null){
	                    $('#delete').prop("disabled", true);
	                }else{
	                    $('#delete').prop("disabled", false);
	                }
	            $('#fullname').text(table.row(this).data().attr_prntng_shp_name);
	        });

	        $('#dshop').modal('show');
	    }

	    function cmdEdit(){
	        var table = $('table.table').DataTable();
	        $('table.table tbody').on( 'click', 'tr', function (){
	        	$('input[name=e_shop_id]').val(table.row(this).data().attr_prn_shp_id); 
	            $('input[name=e_shop_name]').val(table.row(this).data().attr_prntng_shp_name); 
	            $('input[name=e_shop_Address]').val(table.row(this).data().attr_prntng_shp_addrss); 
	            $('input[name=e_shop_cn]').val(table.row(this).data().attr_ps_contact);
	            $('input[name=e_shop_latitude]').val(table.row(this).data().attr_ps_lat);
	            $('input[name=e_shop_longitude]').val(table.row(this).data().attr_ps_long);
	        });
	        $('#eshop').modal('show');
	    }  

	    $('#DeleteShop').submit(function (e){
	    	e.preventDefault();
	    	$.post('<?php echo site_url("api/delete_shop") ?>', $(this).serialize()).success(function(data){
	    		if(data == "success"){
	    			var table = $('table.table').DataTable();
					table.ajax.reload();
					$('#dshop').modal('hide');
					alert(data);	    			
	    		}else{
	    			$('#dshop').modal('hide');
					alert(data);	
	    		}
	    	}).fail(function(jqXHR, textStatus, errorThrown){
	    		alert(jqXHR+" "+textStatus+" "+errorThrown)
	    	});
	    })

	    $('#UpdateShop').submit(function (e){
	    	e.preventDefault();
	    	$.post('<?php echo site_url("api/update_shop") ?>', $(this).serialize()).success(function(data){
	    		if(data == "success"){
	    			var table = $('table.table').DataTable();
					table.ajax.reload();
					$('#eshop').modal('hide');
					alert(data);
	    		}else{
	    			$('#eshop').modal('hide');
	    			alert(data);
	    		}
	    	}).fail(function(jqXHR, textStatus, errorThrown){
	    		alert(jqXHR+" "+textStatus+" "+errorThrown);
	    	})
	    });

		$('#InsertShop').submit(function (e){
			e.preventDefault();
			$.post('<?php echo site_url("api/insert_new_shop") ?>', $(this).serialize()).success(function(data){
				if(data == 'success'){
					 var table = $('table.table').DataTable();
					 table.ajax.reload();
					 $('#nshop').modal('hide');
					 alert(data);
				}else{
					$('#nshop').modal('hide');
					alert(data);
				}
			}).fail(function(jqXHR, textStatus, errorThrown){
				alert(jqXHR+" "+textStatus+" "+errorThrown);
			});
		});

		$('#form').submit(function (e){
			e.preventDefault();
			$.post('<?php echo site_url("api/update_user"); ?>', $(this).serialize() ).success(function(data){
				if(data = "success"){
					alert(data);
					location.reload();
				}else{
					alert(data);
				}
			}).fail(function(jqXHR, textStatus, errorThrown){
				alert(jqXHR+" "+textStatus+" "+errorThrown);
			});
		});

		$(function(){
			$.post('<?php echo site_url("api/current_user"); ?>', { email: "<?php echo $this->session->userdata('email'); ?>" } ).success(function(data){
				$('#fn').val(data[0].fname);
				$('#ln').val(data[0].lname);
				$('#ad').val(data[0].address);
				$('#cn').val(data[0].contact_no);
				$('#form > div > input').attr('disabled', 'true');
			}).fail(function(jqXHR, textStatus, errorThrown){
				alert(jqXHR+textStatus+errorThrown);
			});
		});

		$('#edit').click(function (e){
			e.preventDefault();
			$('#save').removeAttr('disabled');
			$('#form > div > input').removeAttr('disabled');
			
		});

		</script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/dataTables.responsive.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dataTables.bootstrap.min.css">
  		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dataTables.responsive.css">
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
	</body>
</html>