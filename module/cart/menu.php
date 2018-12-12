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
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper" style="background-image: url('../img/side.jpg');">
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
               <!-- <li id="adm" style="display:none;">
                    <a href="list.php">
                        <i class="fa fa-list"></i>
                        <p>Customers List</p>
                    </a>
                </li>-->
                <li>
                    <a href="wallet.php">
                        <i class="fa fa-google-wallet"></i>
                        <p>Wallet</p>
                    </a>
                </li>
				<li>
                    <a href="history.php">
                        <i class="fa fa-history"></i>
                        <p>History</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Menu</a>
					<div style="float: left; cursor: pointer; ">
						<h1 style="font-size:20px;">Order Cart <span class="glyphicon glyphicon-shopping-cart my-cart-icon" ><span class="badge badge-notify my-cart-badge" ></span></span></h1>
					</div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-cog" style="font-size: 23px;"></i><b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a id="myBtn" href="#myModal">Change Password</a></li>
                                <li><a href="../logout.php">Logout</a></li>
                              </ul>
                        </li>
						
						
                    </ul>

                </div>
            </div>
        </nav>
		<div class="content">
            <div class="container-fluid">
				
				
				<div id="parent">
			
                    <div class="content" >
                        <div class="container-fluid" >
						<ul class="nav nav-pills nav-justified">
							<li class="active"><a data-toggle="pill" href="#all">All</a></li>
							<li><a data-toggle="pill" href="#app">Appe tizers</a></li>
							<li><a data-toggle="pill" href="#acc">Accom paniments</a></li>
							<li><a data-toggle="pill" href="#soup">Indian Style Soup</a></li>
							<li><a data-toggle="pill" href="#tand">Tandoori Delic acies</a></li>
							<li><a data-toggle="pill" href="#chef">Chef Specials</a></li>
							<li><a data-toggle="pill" href="#chicken">Chicken Spec ialties</a></li>
							<li><a data-toggle="pill" href="#lamb">Lamb Spec ialties</a></li>
							<li><a data-toggle="pill" href="#seafood">Seafood Spec ialties</a></li>
							<li><a data-toggle="pill" href="#biryani">Biryani</a></li>
							<li><a data-toggle="pill" href="#rice">Rice Specialties</a></li>
							<li><a data-toggle="pill" href="#vegetable">Vege table Spec ialties</a></li>
							<li><a data-toggle="pill" href="#tandoori">Tand oori Breads</a></li>
							<li><a data-toggle="pill" href="#desserts">Desserts</a></li>
							<li><a data-toggle="pill" href="#beverages">Beverages</a></li>
						  </ul>
                                                
  
  <div class="tab-content">
    <div id="all" class="tab-pane fade in active">
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
									<div >
									  <img src='data:image/jpeg;base64, ".$photo."' width='200px' height='200px'  style='border:1px solid grey;'>
									  <br>
									  ".$row["name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info' data-toggle='modal' data-target='#".$row["name"]."Model'>Details</a>
									  
									  
					<div  class='modal fade' id='".$row["name"]."Model' role='dialog' data-backdrop='false'>
                        <div class='modal-dialog modal-lg'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h3 class='modal-head' id='".$row["name"]."ModelLabel'>".$row["name"]."</h3>
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
                                            <h4 style='font-weight:bold;padding-top:10px;'>".$row["name"]."</h4>
                                            <h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>   
											<h5><strong style='color:#f00;'>Calorific Value: ".$row["description"]." calories</strong></h5> 											
                                        </div>
                                    </div>
                                    <div>&nbsp;</div>                                                            
                                    <div class='row' style='text-align:justify;'>
                                        <div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
                                            <h4 class='text-center'><b>Description</b></h4>
                                            <p style='font-size:16px;font-weight:normal;'> ".$row["name"]." </p>
                                        </div>
                                        <div class='col-md-6 col-sm-6 col-xs-6 col-lg-6'>
                                            <h4 class='text-center'><b>Ingredients</b></h4>
                                            <p style='font-size:16px;font-weight:normal;'>".$row["name"]." </p>
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
    <div id="app" class="tab-pane fade">
      <?php
	     $sql = "SELECT * FROM menu where type='Appetizers'";
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
									  ".$row["name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  
	  ?>
    </div>
    <div id="acc" class="tab-pane fade">
      <?php
	  $sql = "SELECT * FROM menu where type='Accompaniments'";
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
									  ".$row["name"]." - <strong>₹ ".$row["cost"]."</strong>
									  <br>
									  <button class='btn btn-danger my-cart-btn' data-id=".$row["id"]." data-name=".$row["name"]." data-summary='summary ".$row["id"]."' data-price= ".$row["cost"]." data-quantity='1' data-image='data:image/jpeg;base64, ".$photo."'>Add to Cart</button>
									  <a href='#' class='btn btn-info'>Details</a>
									</div> ";
										}
									}
							else{
								echo "0 results";}
	  ?>
    </div>
	 <div id="soup" class="tab-pane fade">
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
	<div id="tand" class="tab-pane fade">
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
	
	<div id="chef" class="tab-pane fade">
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
	<div id="chicken" class="tab-pane fade">
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
	<div id="lamb" class="tab-pane fade">
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
	<div id="seafood" class="tab-pane fade">
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
	<div id="biryani" class="tab-pane fade">
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
	<div id="rice" class="tab-pane fade">
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
	<div id="vegetable" class="tab-pane fade">
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
									  
									  
					<div  class='modal fade' id='".$row["name"]."Model' role='dialog' data-backdrop='false'>
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
	
	<div id="tandoori" class="tab-pane fade">
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
	<div id="desserts" class="tab-pane fade">
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
	<div id="beverages" class="tab-pane fade">
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
    
  </div>
			               
            
        </div> 
				
			</div> 
	</div>
				
				
				
				
				
				
				
				
				
				
				
            </div>
        </div>

		
		<footer class="footer">
            <div class="container-fluid">
                
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, Peking
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
	
	<script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
		</script>
	
	
	
	
	
	
	
</body>
    

</html>
