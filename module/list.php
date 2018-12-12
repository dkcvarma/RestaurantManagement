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
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
		img {
		  border-radius: 50%;
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
				<li>
                    <a href="menu.php">
                        <i class="fa fa-cutlery"></i>
                        <p>Menu</p>
                    </a>
                </li>
				<li class="active">
                    <a href="list.php">
                        <i class="fa fa-list"></i>
                        <p>Customers List</p>
                    </a>
                </li>
				<!--<li id="adm4" style="display:none;">
                    <a href="wallet.php">
                        <i class="fa fa-google-wallet"></i>
                        <p>Wallet</p>
                    </a>
                </li>-->
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
                    <a class="navbar-brand" href="#">Customers List</a>
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
                <div class="row">
					<div class="col-md-12">
                        <div class="card"> <!-- <div class="card card-plain">-->
                            <div class="header">
                                <h4 class="title">Customers List:</h4>
                                <p class="category">Click on photo to know complete details</p>
								<br>
                            </div>
							<div>
							<input class="col-md-3" style="margin-left:20px;padding:3px;font-family:FontAwesome;border-radius:5px;border:1px solid black;padding:10px;" type="text" id="search" onkeyup="myFunction()" placeholder="&#xF002;   Search for ID or Name" title="Type in a name">
							</div>
							<?php
								$sql = "SELECT count(*) FROM user where id>1";
								$rs = mysqli_query($connection, $sql);
								$result = mysqli_fetch_array($rs);
								echo "<div style='margin-left:910px;font-size:18px;'><b>Count :</b> $result[0]</div>";
							?>
							<br>
                            <div class="content table-responsive table-full-width">
							<?php
										$sql = "SELECT * FROM user where id>1";
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									echo "
										<table id='table' class='table table-striped'>
										<thead>
										<tr>
                                        <td><b>Customer ID</b></td>
                                    	<td><b>Customer Name</b></td>
										<td><b>KYC Approval Status<i class='fa fa-pencil-square-o'></i></b></td>
										<td><b>Photo</b></td>
										<td><b>Delete</b></td>
										<tr>
                                    </thead>";
									while($row = $result->fetch_assoc()) {
										$photo = base64_encode($row['photo']);
									echo"
                                    <tbody>
										<tr>
										<td>".$row["id"]."</td>
										<td>".$row["f_name"]."</td>
										<td><ul style='list-style-type:none;'><li class='dropdown'>
										  <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
											".$row['status']."
										  </a>
										  
										  <ul class='dropdown-menu' style='background-color: lightgrey;'>
											<div class='row' style='padding: 10px;'>
												<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6' style='margin-left:4px;'>
													<form method='post' action='accept.php'><button class='btn btn-success btn-fill btn-sm'>Accept</button>
													<input type='hidden' name='id' value='".$row["id"]."'></form>
												</div>
												<div class='col-md-6 col-sm-6 col-xs-6 col-lg-6' style='margin-left:-15px;'>
													<form method='post' action='decline.php'><button class='btn btn-danger btn-fill btn-sm'>Decline</button>
													<input type='hidden' name='id' value='".$row["id"]."'></form>
												</div>
											</div>
										  </ul>
									</li></ul></td>
										<td>
											<a href='customer.php?id={$row['id']}'>
											<img class='avatar border-gray' src='data:image/jpeg;base64, ".$photo."' />
											</a>
										</td>
										<td><form method='post' action='delete.php'><button class='btn btn-danger btn-sm' style='border:none;'><i style='font-size: 2em;' class='fa fa-trash'></i></button>
										</td>
										<input type='text' name='id' value='".$row["id"]."'  style='visibility:hidden;'></form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
							else{
								echo "0 customers found";}
										?>
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

</body>
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
		
		var $rows = $('#table tbody tr');
			$('#search').keyup(function() {
				var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
				
				$rows.show().filter(function() {
					var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
					return !~text.indexOf(val);
				}).hide();
			});
    </script>

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


</html>
