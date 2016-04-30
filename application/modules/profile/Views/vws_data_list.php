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
		<script src="http://maps.googleapis.com/maps/api/js"></script>


		
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
				<div class="col-md-5">
				 	<div class="col-md-12">
					    <div id="map" class="top" style="height:580px;border: 1px solid #3f3f3f;"></div>
				    </div>
				</div>
				<div class="col-md-7">
					<div class="col-md-6">					
						<form role="form">
						  <div class="form-group">
						    <label for="text">Printing Shop Name: </label>
						    <span  class="form-control" id="psn" ></span>
						  </div>
						  <div class="form-group">
						    <label for="pwd">Owner : </label>
						    <span  class="form-control" id="o" ></span>
						  </div>
						  <div class="form-group">
						    <label for="text">Address:</label>
						    <span  class="form-control" id="ad" ></span>
						  </div>
						  <div class="form-group">
						    <label for="text">Contact No:</label>
						    <span  class="form-control" id="cn" ></span>
						     <input type="number"   id="id" hidden required />
						  </div>			  
						</form>
						<br />
						<form id="upfile">
							<div class="form-group">
							    <label for="text">File to be Print.</label>
							    <input type="file" name="file"/>
							  </div>
							  <div class="form-group">
							    <button  type="submit" class="btn btn-primary" id="upload">Upload</button>
							  </div>
						    </div>
					    </form>
					<div class="col-md-6">					
						<form role="form">
						  <div class="form-group">
						    <label for="text">Note: </label>
						    <br />
						    <span style="font-size:11px;">After you upload your file it will generate some info about the transaction so you can claim it after printed.</span>
						    <br />
						    <div style="margin-top:1em;">
						    	<div  style="border:1px solid #000;border-radius:5px;padding:1em;" id="reciet" ></div>
						    </div>
						  </div>			  
						</form>						
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
			$(document).ready(function(){
				var filepath = null;
				var print_id = 0;
				$('#upload').attr('disabled', true);
				if (navigator.geolocation) {
				     navigator.geolocation.getCurrentPosition(showPosition);
				     $('#upfile').submit(function (e){
			        	e.preventDefault();
			            var inputFile = $('input[name=file]');

			            var fileToUpload = inputFile[0].files[0];

			            if(fileToUpload != 'undefined'){
			                var formData = new FormData();
			                formData.append("file", fileToUpload);
			                formData.append("path", $('#psn').text());
			                formData.append('prntng_shp_id', $('#id').val());

			                $.ajax({
			                    url:"<?php echo site_url('Api/ChangeProfilePic'); ?>",
			                    type: "POST",
			                    data: formData,
			                    processData: false,
			                    contentType: false,
			                    success: function(dataResponse){
			                    	alert(dataResponse);
			                    	console.log(dataResponse);
			                        /*if(dataResponse.stats == 'success')
			                        {
			                           alert()
			                        }else{
			                          toastr.error("FTP FAILED.");
			                        }*/
			                    }
			                });
			            }
		        	});
				} else {
				    x.innerHTML = "Geolocation is not supported by this browser.";
				}

			});
		    function showPosition(position) {
		 				$.ajax({
		                type: 'POST',
		                url: "<?php echo site_url('Api/getPrintShops');?>",
		                success: function(datas) {
		                     var map = new google.maps.Map(document.getElementById('map'), {
		                       zoom: 17, /*18*/
		                       center: new google.maps.LatLng(position.coords.latitude, position.coords.longitude), 
		                       mapTypeId: google.maps.MapTypeId.ROADMAP
		                     });

		                    var infowindow = new google.maps.InfoWindow({
		                      shadowStyle: 1,
		                      padding: 0,
		                      backgroundColor: 'rgb(57,57,57)',
		                      borderRadius: 5,
		                      arrowSize: 10,
		                      borderWidth: 1,
		                      borderColor: '#2c2c2c',
		                      disableAutoPan: true,
		                      hideCloseButton: true,
		                      arrowPosition: 30,
		                      backgroundClassName: 'transparent',
		                      arrowStyle: 3
		                    });

		                    var marker, i;

		                    for (i = 0; i < datas.length; i++) {  
		                        var icon = "<?php echo site_url('assets/images/home.png') ?>";
			                      marker = new google.maps.Marker({
			                        position: new google.maps.LatLng(datas[i].attr_ps_lat, datas[i].attr_ps_long),
			                        map: map,
			                        icon: icon,
			                        title: datas[i].attr_prntng_shp_name
			                      });

		                      google.maps.event.addListener(marker, 'click', (function(marker, i) {
		                        return function() {
		                          $('#upload').attr('disabled', false);
		                          $('#id').val(datas[i].attr_prn_shp_ownr_id);
		                          $('#psn').text(datas[i].attr_prntng_shp_name);
		                          $('#ad').text(datas[i].attr_prntng_shp_addrss);
		                          $('#cn').text(datas[i].attr_ps_contact);
		                          $('#o').text(datas[i].attr_ownr_fname + " " + datas[i].attr_ownr_lname);
		                          infowindow.setContent("<div><b>Shop Name: </b>" + datas[i].attr_prntng_shp_name +"</div>"+ 
		                                                    "<div><b>Addresss: </b>" + datas[i].attr_prntng_shp_addrss +"</div>"+
		                                                    "<div><b>Cotact #: </b>" + datas[i].attr_ps_contact +"</div>"+
		                                                    "<div><b>Longitude: </b>" + datas[i].attr_ps_long +"</div>"+
		                                                    "<div><b>Latitude: </b>" + datas[i].attr_ps_lat +"</div>");
		                          infowindow.open(map, marker);
		                        }
		                      })(marker, i));
		                    }
		                }
		               }).fail(function(datas) {
		                 // just in case posting your form failed
		                 $("#txtHint").text(data);
		            });  
		}


		</script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.easing.min.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.stellar.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.appear.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.nicescroll.min.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.countTo.js'); ?>"></script>

	</body>
</html>