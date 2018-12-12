<?php
	session_start();
	if(!$_SESSION['auth']) {
		header("location:main.html");
	}
	
	include "../profile_query.php";
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<title>Hotel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	<script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
		
		
		$(document).ready(function() {
			
			if(<?php echo $id ?> == 1){
			$("#adm").show();
		}
	});
		
		$(document).ready(function() {
			
			if(<?php echo $id ?> != 1){
			$("#adm1").show();
		}
	});
	
	$(document).ready(function() {
			
			if(<?php echo $id ?> != 1){
			$("#adm4").show();
			$("#adm5").show();
		}
	});
		</script>
	
	
	<style>
		.modal-header, .close, .modal-head {
			background-color: #7cc67c;
			color: #f9f9f9 !important;
			text-align: center;
			padding-top: 20px;
			font-size: 30px;
			font-weight: bold;
		}
		.modal-footer {
			background-color: #f9f9f9;
		}

    .nav-pills > li.active > a, .nav-pills > li.active > a:focus {
        color: black;
        background-color: transparent;
		border: 2px solid white;
    }

        .nav-pills > li.active > a:hover {
            color: black;
        background-color: transparent;
		border: 2x solid black;
        }
		
		.nav-pills > li > a {
			color: black;
		}
		
		
		
		
		.dropbtn {
			background-color: transparent;
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			
		}
		
		
</style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper" style="background-image: url('../img/sss2.png');">
            <div class="logo">
                <a href="#" class="simple-text">
                    Peking
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-sticky-note"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="fa fa-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
				<li class="active">
                    <a href="menu.php">
                        <i class="fa fa-cutlery"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li id="adm" style="display:none;">
                    <a href="list.php">
                        <i class="fa fa-list"></i>
                        <p>Customers List</p>
                    </a>
                </li>
                <li id="adm4" style="display:none;">
                    <a href="wallet.php">
                        <i class="fa fa-google-wallet"></i>
                        <p>Wallet</p>
                    </a>
                </li>
				<li id="adm5" style="display:none;">
                    <a href="history.php">
                        <i class="fa fa-history"></i>
                        <p>History</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default"  style="background-image: url('../img/thumb.jpeg');">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color:white;">Menu</a>
					<div id="adm1" style="display:none;float: left; ">
						<h1 style="font-size:20px;margin-left:750px;color:white;">Order Cart <span style="cursor: pointer;"class="glyphicon glyphicon-shopping-cart my-cart-icon" ><span class="badge badge-notify my-cart-badge"></span></span></h1>
					</div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../logout.php" class="form-control border-input" style="background-color:transparent;color:white;">Logout</a></li>
                        <!--<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-cog" style="font-size: 23px;"></i><b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a id="myBtn" href="#myModal">Change Password</a></li>
                                <li><a href="../logout.php">Logout</a></li>
                              </ul>
                        </li>-->
						
						
                    </ul>

                </div>
            </div>
        </nav>
		<div class="content" style="background-image: url('../img/thumb.jpeg');">
				<div id="parent">
			
                    <div class="content">
                        <div class="container-fluid">
							<ul class="nav nav-pills nav-justified">
								<!--<li class="active"><a data-toggle="pill" href="#all">All</a></li>-->
								<li><a data-toggle="pill" href="#app" style="color:white;">Appetizers</a></li>
								<li><a data-toggle="pill" href="#acc" style="color:white;">Accompaniments</a></li>
								<li><a data-toggle="pill" href="#soup" style="color:white;">Indian Style Soup</a></li>
								<li><a data-toggle="pill" href="#tand" style="color:white;">Tandoori Delicacies</a></li>
								<li><center><div class="dropdown">
									<button class="dropbtn" style="color:white;">Specalities</button>
									<div class="dropdown-content">
										<a data-toggle="pill" href="#chef">Chef Specials</a>
										<a data-toggle="pill" href="#chicken">Chicken Specalities</a>
										<a data-toggle="pill" href="#lamb">Lamb Specalities</a>
										<a data-toggle="pill" href="#rice">Rice Specalities</a>
										<a data-toggle="pill" href="#vegetable">Vegetable Specalities</a>
										<a data-toggle="pill" href="#seafood">Seafood Specalities</a>
									</div>
									</div></center>
								</li>
								<li><a data-toggle="pill" href="#biryani" style="color:white;">Biryani</a></li>
								<li><a data-toggle="pill" href="#tandoori" style="color:white;">Tandoori Breads</a></li>
								<li><a data-toggle="pill" href="#desserts" style="color:white;">Desserts</a></li>
								<li><a data-toggle="pill" href="#beverages" style="color:white;">Beverages</a></li>
							</ul>
                                                
  
							<div class="tab-content">
								<!--<div id="all" class="tab-pane fade in active">
									<?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where id>0";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:14px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>
																</p>
																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>-->
						<div id="app" class="tab-pane fade">
						  <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Appetizers'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:14px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>
																</p>
																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						<div id="acc" class="tab-pane fade">
						  <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Accompaniments'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						 <div id="soup" class="tab-pane fade">
						  <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Indian Style Soup'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						<div id="tand" class="tab-pane fade">
						  <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Tandoori Delicacies'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:transparent;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:14px;color:white;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>
																</p>
																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						
						<div id="chef" class="tab-pane fade">
						  <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Chef Specials'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						<div id="chicken" class="tab-pane fade">
						  <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Chicken Specialties'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						<div id="lamb" class="tab-pane fade">
						 <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Lamb Specialties'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						<div id="seafood" class="tab-pane fade">
						 <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Seafood Specialties'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						<div id="biryani" class="tab-pane fade">
						  <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Biryani'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						<div id="rice" class="tab-pane fade">
						  <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Rice Specialties'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						<div id="vegetable" class="tab-pane fade">
						 <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Vegetable Specialties'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						 
						</div>
						
						<div id="tandoori" class="tab-pane fade">
						 <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Tandoori Breads'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						<div id="desserts" class="tab-pane fade">
						 <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Desserts'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						<div id="beverages" class="tab-pane fade">
						  <?php						
										error_reporting(0);				
										
											$sql = "SELECT * FROM menu where type='Beverages'";
														$result = mysqli_query($connection, $sql);
												if (mysqli_num_rows($result) > 0)
													{
														//table  table-hover
													while($row = $result->fetch_assoc()) {
														$photo = base64_encode($row['photo']);
													echo"
													<div class='col-md-3 text-center'><br><br> 
														<div style='background-color:#fff;width:250px;border-radius:5px;'>
															<img src='data:image/jpeg;base64, ".$photo."' width='250px' height='220px' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='cursor:pointer;border-top-left-radius: 5px;border-top-right-radius: 5px;'>
																<br>
																<p style='font-size:16px;'>".$row["name"]."-<strong style='color:#f00;'>₹ ".$row["cost"]."</strong></p>
																<i class='fa fa-info-circle' style='cursor:pointer;font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details' data-toggle='modal' data-target='#".$row["id"]."Model'></i>
																<i class='fa fa-shopping-cart my-cart-btn' style='cursor:pointer;font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order' title='View Details' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'></i>

																<div  class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
																	<div class='modal-dialog modal-lg'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h3 class='modal-head' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
																				<button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
																					<i class='fa fa-times'></i>    
																				</button>                                
																			</div>
																			<div class='modal-body'>
																				<div class='row'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<img src='data:image/jpeg;base64, ".$photo."' alt='".$row["name"]."' data-target='#".$row["id"]."' data-toggle='modal' style='min-height: 150px;max-height:250px;width:340px;border-radius:10px;' class='img-fluid'>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
																						<h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
																						<h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
																						<div>&nbsp;</div>
																						<button style='border-width: 2px;font-weight:bold;' class='btn btn-dark my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
																					</div>
																				</div>
																				<div>&nbsp;</div>                                                            
																				<div class='row text-center'>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Description</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>".$row["description"]."</p>
																					</div>
																					<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
																						<h4 class='text-center'><b>Ingredients</b></h4>
																						<p style='font-size:16px;font-weight:normal;'>Ingredients</p>
																					</div>
																				</div>                                     
																			</div>                                
																		</div>
																	</div>
																</div> 
									
									
														</div>
													</div>";
														}
													}
											else{
												echo "0 items found";}
										
					  ?>
						</div>
						
					  </div>
											   
								
							</div> 
									
					</div> 
				</div>
				
				
        </div>

		
		<footer class="footer">
            <div class="container-fluid" style="background-image: url('../img/thumb.jpeg');">
                
				<div class="copyright pull-right">
                     <p style="color:white;">&copy; <script>document.write(new Date().getFullYear())</script>, Peking</p>
                </div>
            </div>
        </footer>
    </div>
</div>
			
			

<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="post" action="changepassword.php">
                        <div class="form-group">
                            <label for="usrname"> Username</label>
                            <input type="text" class="form-control" name="usr" placeholder="Enter username" required style="border: 1px solid darkgrey;">
                        </div>
                        <div class="form-group">
                            <label for="psw"> Old Password</label>
                            <input type="password" class="form-control" name="opsw" placeholder="Enter password" required style="border: 1px solid darkgrey;">
                        </div>
                        <div class="form-group">
                            <label for="psw"> New Password</label>
                            <input type="password" class="form-control" name="npsw" placeholder="Enter password" required style="border: 1px solid darkgrey;">
                        </div>
                        <div class="form-group">
                            <label for="psw"> Retype Password</label>
                            <input type="password" class="form-control" name="rpsw" placeholder="Enter password" required style="border: 1px solid darkgrey;">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-info btn-fill btn-block"> Change</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal" style="color:#fff;background-color:#d9534f;border-color:#d43f3a"> Cancel</button>
                    
                </div>
            </div>      
        </div>
    </div>

	
	

	
	
	
	<script src="js/jquery-2.2.3.min.js"></script>
  <script type='text/javascript' src="js/bootstrap.min.js"></script>
  <script type='text/javascript' src="js/jquery.mycart.js"></script>
	
	
  
  <script type="text/javascript">

  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      numberOfDecimals: 2,
      cartItems: [
       
      ],
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity);
        });
      
		alert(checkoutString)
		
		
        console.log("checking out", products, totalPrice, totalQuantity);
		return totalPrice
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 0.9;
		
      }
    });

    
  });
  </script>
	
	
	
	
		</body>
	
	
	
	

    

</html>
