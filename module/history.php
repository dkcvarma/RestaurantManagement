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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
                <a href="" class="simple-text">
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
				<li>
                    <a href="wallet.php">
                        <i class="fa fa-google-wallet"></i>
                        <p>Wallet</p>
                    </a>
                </li>
				<li class="active">
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
            <div class="container-fluid" style="background-image: url('../img/time2.jpg');">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color:white;">Transaction History </a>
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

        <div class="content" style="background-image: url('../img/time12.jpg');">
            <div class="container-fluid">
				<div class="row" style="margin-left:0.15%;">
				<button id="btn1" class="btn btn-default btn" style="border-radius:5px;color:white;">Card</button>			
				<button id="btn2" class="btn btn-default btn" style="border-radius:5px;color:white;">Net Banking</button>
				</div>
				<div style="margin-top:1%;">
				
                <div id="form1" class="row" style="display:none;">
                    <div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">					
                        <div class="card"> <!-- <div class="card card-plain">-->
						<br>
							<div>
							<input class="col-md-3" style="margin-left:20px;padding:3px;font-family:FontAwesome;border-radius:5px;border:1px solid black;padding:10px;" type="text" id="search" onkeyup="myFunction()" placeholder="&#xF002;   Search..." title="Type in a name">
							</div>
							<div style='margin-left:910px;font-size:18px;'>
								<form method='post' action='delcardall.php'>
									<input type='hidden' name='id' value="<?php echo $id?>">
									<button title="Delete all transactions" data-toggle="tooltip" class='btn btn-danger btn-sm' style='border:none;'><i style='font-size: 2em;' class='fa fa-trash'></i></button>
								</form>
							</div>
							<br>							
                            <div class="content table-responsive table-full-width">
							<?php
										$sql = "SELECT * FROM cardhistory where id=".$id;
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									echo "
										<table id='table' class='table table-stripped'>
										<thead>
										<tr>
                                        <td><b>Card Number</b></td>
                                    	<td><b>Amount</b></td>
										<td><b>Date & Time</b></td>
										<td><b>Delete</b></td>
										<tr>
                                    </thead>";
									while($row = $result->fetch_assoc()) {
										$rest = substr($row["cardnumber"], -12,2);
										$rest1 = substr($row["cardnumber"], -4);
										$rest2 = $rest.'** **** '.$rest1;
									echo"
                                    <tbody>
										<tr><form method='post' action='deletetran.php'>
										<td>".$rest2."</td>
										<td>".$row["bal"]."</td>
										<td>".$row["time"]."</td>
										<td><button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
										<input type='hidden' name='id' value='".$row["id"]."'>
										<input type='hidden' name='cardnumber' value='".$row["cardnumber"]."'>
										<input type='hidden' name='time' value='".$row["time"]."'>
										</form>
										</tr>
                                    </tbody> ";
									}
									echo "</table>";
									}
									
							else{
								echo "<br>&nbsp &nbsp &nbsp &nbspNo transactions found";}
										?>
                            </div>
                        </div>
						
                    </div>
					
					
					
                </div>


                </div>
				
				
				
				<div id="form2" class="row" style="display:none;">
				 <div class="row">
					<div class="col-md-12">
                        <div class="card"> <!-- <div class="card card-plain">-->
							<br>
							<div>
							<input class="col-md-3" style="margin-left:20px;padding:3px;font-family:FontAwesome;border-radius:5px;border:1px solid black;padding:10px;" type="text" id="search1" onkeyup="myFunction()" placeholder="&#xF002;   Search..." title="Type in a name">
							</div>
							<div style='margin-left:950px;font-size:18px;'>
								<form method='post' action='delnetall.php'>
									<input type='hidden' name='id' value="<?php echo $id?>">
									<button title="Delete all transactions" data-toggle="tooltip" class='btn btn-danger btn-sm' style='border:none;'><i style='font-size: 2em;' class='fa fa-trash'></i></button>
								</form>
							</div>
							<br>
							<?php
										$sql = "SELECT * FROM nethistory where id=".$id;
										$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0)
									{
										//table  table-hover
									echo "
										<table id='table' class='table table-stripped'>
										<thead>
										<tr>
                                        <td><b>Name</b></td>
                                    	<td><b>Bank</b></td>
										<td><b>Amount</b></td>
										<td><b>Date & Time</b></td>
										<td><b>Delete</b></td>
										<tr>
                                    </thead>";
									while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='netdelete.php'>
										<td>".$row["name"]."</td>
										<td>".$row["bank"]."</td>
										<td>".$row["amount"]."</td>
										<td>".$row["time"]."</td>
										<td><button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
										<input type='hidden' name='id' value='".$row["id"]."'>
										<input type='hidden' name='time' value='".$row["time"]."'>
										</form>
										</tr>
                                    </tbody> ";
									}
									echo "</table>";
									}
									
							else{
								echo "<br>&nbsp &nbsp &nbsp &nbspNo transactions found";}
										?>
                            </div>
                        </div>
                    </div>
					
					
					
                </div>
				</div>
				</div>
               
        </div>


        <footer class="footer">
            <div class="container-fluid" style="background-image: url('../img/time1.jpg');">
                
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

</body>
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
		
		$(document).ready(function() {
			$('#btn1').click(function() {
				$('#form1').css("display","block");
				$('#form2').css("display","none");
			});
			$('#btn2').click(function() {
				$('#form2').css("display","block");
				$('#form1').css("display","none");
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
			
			
		$(document).ready(function() {
			if(document.referrer.indexOf(window.location.hostname) != -1){
			var referrer =  document.referrer;
			if(referrer.includes("deletetran")){
				 $('#btn1').click()
			}
		}
	});
	
		$(document).ready(function() {
			if(document.referrer.indexOf(window.location.hostname) != -1){
			var referrer =  document.referrer;
			if(referrer.includes("netdelete")){
				 $('#btn2').click()
			}
		}
	});
	
	var $rows = $('#table tbody tr');
			$('#search1').keyup(function() {
				var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
				
				$rows.show().filter(function() {
					var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
					return !~text.indexOf(val);
				}).hide();
			});	
    </script>
	<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
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
