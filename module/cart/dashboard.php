<?php 
	session_start();
	if(!$_SESSION['auth']) {
		header('location:index.html');
	}	
	include "../scripts/profile_queries.php";
?>

<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />		
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
	<!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/dashboard.css" rel="stylesheet"/>
    <!--  CSS   -->
    <!--<link href="assets/css/demo.css" rel="stylesheet" />-->
    <!--    Fonts and icons     -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="../styles/tree_menu.css" rel="stylesheet" />
	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
<!-- Light Bootstrap Table Core javascript and methods -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>
	<style>
	.file {
		    
			visibility: hidden;
			position: absolute;
		}
	.modal-header, .close, .modal-head {
		background-color: #7CC67C	;
		color:#f9f9f9 !important;
		text-align: center;
		padding-top: 20px;
		font-size: 30px;
		font-weight: bold;
	}
	.modal-footer {
		background-color: #f9f9f9;
	}
	</style>
	<style>
    .nav-pills > li.active > a, .nav-pills > li.active > a:focus {
        color: black;
        background-color: transparent;
		border: 2px solid black;
    }

        .nav-pills > li.active > a:hover {
            color: black;
        background-color: transparent;
		border: 2x solid black;
        }
		
		.nav-pills > li > a {
			color: black;
		}
</style>
</head>

<!--   Core JS Files   -->


	
<body background="payment/images/2.jpg">
	<div class="wrapper">
	
		<!-- Side Bar (Menu Bar) -->
		<div class="sidebar" data-color="grey" data-image="payment/images/2.jpg">
			<div class="sidebar-wrapper">
				<div class="logo">
					<a class="simple-text" target="_new">Trigade's Palace</a>
				</div>
				<ul class="nav">
					<li class="active">
						<a href="dashboard.php">
							<i class="pe-7s-wine"></i>
							<p>Dashboard</p>
						</a>
					</li>
					<li>
						<a href="user.php">
							<i class="pe-7s-user"></i>
							<p>Profile</p>
						</a>
					</li>
					 <li>
					<a href="wallet.php">
						<i class="pe-7s-shopbag"></i>
						<p>Wallet</p>
					</a>
				</li>
				 <li>
					<a href="../scripts/logout.php">
						<i class="pe-7s-lock"></i>
						<p>Logout</p>
					</a>
				</li>
					
			
					
					<li id="empman" style="display:none;"><a id="man" class="tree-toggle" style="cursor:pointer;"><i class="pe-7s-edit"></i><p>Manage</p></a>
                        <ul id="manul" class="nav nav-list tree bullets" style="margin-top:-8px;">
							<li style="display:none;"><a class="tree-toggle" style="cursor:pointer;"><i class="pe-7s-users"></i><p>Manage Customers</p></a>
								<ul class="nav nav-list tree bullets" style="margin-top:-8px;">
									<li><a href="add_emp.php"><p>Add Customers</p></a></li>
									<li><a href="remove_emp.php"><p>Remove Customers</p></a></li>
									<li><a href="update_emp.php"><p>Update Customers</p></a></li>	                        
								</ul>
							</li>
							<li style="display:none;"><a class="tree-toggle" style="cursor:pointer;"><i class="pe-7s-albums"></i><p>Manage Items</p></a>
								<ul class="nav nav-list tree bullets" style="margin-top:-8px;">
									<li><a href="add_proj.php"><p>Add Items</p></a></li>
									<li><a href="remove_proj.php"><p>Remove Items</p></a></li>
									<li><a href="update_proj.php"><p>Update Items</p></a></li>	                        
								</ul>
							</li>									                   
						</ul>
					</li>									
				</ul>
			</div>
		</div>
		
		<!-- Main Panel -->
		<div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">
					<div class="navbar-header">
					
						<!-- Button to open Menu -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<!-- Welcome User -->
						<a class="navbar-brand" href="#">Welcome <?php echo $f_name; ?></a>
					</div>
					
					<!-- Account Menu -->
					<div class="collapse navbar-collapse">					
						<ul class="nav navbar-nav navbar-right">
						
							
							<div style="float: left; cursor: pointer; ">
							<h1 style="font-size:30px;">Order's <span class="glyphicon glyphicon-shopping-cart my-cart-icon" ><span class="badge badge-notify my-cart-badge" ></span></span></h1>
							 </div>
							
							
							<li class="separator hidden-lg hidden-md"></li>
						</ul>
					</div>
					
				</div>
			</nav>
		<br>
			<div id="parent">
			
                    <div class="content" >
                        <div class="container-fluid" ><ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="pill" href="#all">All</a></li>
    <li><a data-toggle="pill" href="#Veg">Veg</a></li>
    <li><a data-toggle="pill" href="#Non-Veg">Non-Veg</a></li>
	<li><a data-toggle="pill" href="#American">American</a></li>
    <li><a data-toggle="pill" href="#Caribbean">Caribbean</a></li>
	<li><a data-toggle="pill" href="#Chinese">Chinese</a></li>
    <li><a data-toggle="pill" href="#Indian">Indian</a></li>
	<li><a data-toggle="pill" href="#Italian">Italian</a></li>
    <li><a data-toggle="pill" href="#Japanese">Japanese</a></li>
	<li><a data-toggle="pill" href="#Mexican">Mexican</a></li>
    <li><a data-toggle="pill" href="#Dessert">Dessert</a></li>
	<li><a data-toggle="pill" href="#Drinks">Drinks</a></li>
  </ul>
                                                
  
  <div class="tab-content">
    <div id="all" class="tab-pane fade in active">
      <?php
	  include "../scripts/presets.php";						
						error_reporting(0);				
						
							$sql = "SELECT * FROM food where f_id>0";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									<div >
									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info' data-toggle='modal' data-target='#".$row["item_name"]."Model'>Details</a>
									  
									  
					<div  class='modal fade' id='".$row["item_name"]."Model' role='dialog' data-backdrop='false'>
                        <div class='modal-dialog modal-lg'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h3 class='modal-head' id='".$row["item_name"]."ModelLabel'>".$row["item_name"]."</h3>
                                    <button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
                                        <i class='fas fa-times'></i>    
                                    </button>                                
                                </div>
                                <div class='modal-body'>
                                    <div class='row'>
                                        <div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
                                            <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
                                        </div>
                                        <div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
                                            <h4 style='font-weight:bold;padding-top:10px;'>".$row["item_name"]."</h4>
                                            <h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>   
											<h5><strong style='color:#f00;'>Calorific Value: ".$row["cal"]." calories</strong></h5> 											
                                        </div>
                                    </div>
                                    <div>&nbsp;</div>                                                            
                                    <div class='row' style='text-align:justify;'>
                                        <div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
                                            <h4 class='text-center'><b>Description</b></h4>
                                            <p style='font-size:16px;font-weight:normal;'> ".$row["dir"]." </p>
                                        </div>
                                        <div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
                                            <h4 class='text-center'><b>Ingredients</b></h4>
                                            <p style='font-size:16px;font-weight:normal;'>".$row["steps"]." </p>
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
								echo "0 results";}
						
	  ?>
    </div>
    <div id="Veg" class="tab-pane fade">
      <?php
	     $sql = "SELECT * FROM food where item_type='Veg'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									  									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  
	  ?>
    </div>
    <div id="Non-Veg" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM food where item_type='Non-Veg'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									 									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  ?>
    </div>
	 <div id="American" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM food where item_cus='American'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									 									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  ?>
    </div>
	<div id="Caribbean" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM food where item_cus='Caribbean'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									 									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  ?>
    </div>
	
	<div id="Chinese" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM food where item_cus='Chinese'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									 									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  ?>
    </div>
	<div id="Indian" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM food where item_cus='Indian'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									 									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  ?>
    </div>
	<div id="Italian" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM food where item_cus='Italian'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									 									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  ?>
    </div>
	<div id="Japanese" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM food where item_cus='Japanese'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									 									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  ?>
    </div>
	<div id="Mexican" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM food where item_cus='Mexican'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									 									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  ?>
    </div>
	<div id="Dessert" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM food where item_cus='Dessert'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									 									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  ?>
    </div>
	<div id="Drinks" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM food where item_cus='Drinks'";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <div class='col-md-3 text-center'><br><br> 
									 									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["item_name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["f_id"]." data-name=".$row["item_name"]." data-summary='summary ".$row["f_id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
								  <a href='#' class='btn btn-info' data-toggle='modal' data-target='#".$row["item_name"]."Model'>Details</a>
									  
									  
					<div  class='modal fade' id='".$row["item_name"]."Model' role='dialog' data-backdrop='false'>
                        <div class='modal-dialog modal-lg'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h3 class='modal-head' id='".$row["item_name"]."ModelLabel'>".$row["item_name"]."</h3>
                                    <button class='close' aria-hidden='true' type='button' data-dismiss='modal' style='padding-top:20px;'>
                                        <i class='fas fa-times'></i>    
                                    </button>                                
                                </div>
                                <div class='modal-body'>
                                    <div class='row'>
                                        <div class='col-md-6 col-sm-6 col-xs-6 col-lg-6 text-center'>
                                            <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
                                        </div>
                                        <div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
                                            <h4 style='font-weight:bold;padding-top:10px;'>".$row["item_name"]."</h4>
                                            <h5><strong style='color:#f00;'>Price: ".$row["cost"]."</strong></h5>             
                                        </div>
                                    </div>
                                    <div>&nbsp;</div>                                                            
                                    <div class='row' style='text-align:justify;'>
                                        <div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
                                            <h4 class='text-center'><b>Description</b></h4>
                                            <p style='font-size:16px;font-weight:normal;'> ".$row["dir"]." </p>
                                        </div>
                                        <div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
                                            <h4 class='text-center'><b>Ingredients</b></h4>
                                            <p style='font-size:16px;font-weight:normal;'>".$row["steps"]." </p>
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
								echo "0 results";}
								
	  ?>
	 
    </div>
    
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

<!--  JS for Changepassword  -->


<!--  Checkbox, Radio & Switch Plugins -->

<!--  Charts Plugin -->
<!-- <script src="assets/js/chartist.min.js"></script> -->
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<!-- <script src="assets/js/demo.js"></script> -->

</html>
