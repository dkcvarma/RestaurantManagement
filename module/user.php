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
		.file {
			visibility: hidden;
			position: absolute;
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
                <li style="opacity:0.9;">
                    <a href="dashboard.php">
                        <i class="fa fa-sticky-note"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
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
		<nav class="navbar navbar-default">
            <div class="container-fluid"  style="background-image: url('../img/tt.jpg');">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color:white;">Hello <?php echo $f_name; ?></a>
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


        <div class="content"  style="background-image: url('../img/tt.jpg');">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                        <div class="card card-user"  style="background-color:transparent;">
                            <div><br><br><br></div>
                            <div class="content">
                                <div class="author">	
									<div class="dropdown">
										<a href="#" id="upimage" class="dropdown-toggle" data-toggle="dropdown" style="pointer-events:;">
											<img style="height:250px;width:250px;border-radius:5px;"  src="data:image/jpeg;base64,<?php echo base64_encode($photo); ?>" name="photo" />
										</a>
										<ul class="dropdown-menu" style="padding: 10px;background-color:transparent;color:white;">
											<form method="post" action="../module/image.php" enctype="multipart/form-data">
												<li>
													<div class="form-group">
														<input type="file" name="photo" class="file">
														<div class="input-group col-xs-12">
															<span class="input-group-addon"><i class="fa fa-user"></i></span>
																<input type="text" class="form-control border-input"  style="background-color:transparent;color:white;background-image: url('../img/tt.jpg');" placeholder="Upload Image">
																<span class="input-group-btn">
																<button class="browse btn btn-primary btn-fill input-xs" type="button"><i class="fa fa-search"></i> Browse</button>
																</span>
														</div>
													</div>		
												</li>
												<li><button style="margin-right:5%;background-image: url('../img/tt.jpg');color:white;" class="btn btn-success btn-fill pull-right" type="submit" name="submit">Update</button></li>
											</form>
										</ul>
									</div>
                                    <h4 class="title" style="color:white;"><?php echo $f_name . " " . $l_name ?><br /><small style="font-size: 20px;"><?php echo $role ?></small><br /></h4>
									<div id="adm1" style="display:none;">
										<h4><small style="font-size: 20px;">KYC Approval Status:<?php echo $status ?></small></h4>
									</div>
                                </div>
							</div> 
                            
                            
                        </div>
						<div id="cha" style="display:none;background-color:transparent;" class="card">
						<div class="header">
                                <h4 class="title" style="color:white"><b>File</b></h4>
                        </div>
						<div class="content">
						<form action="add_file.php" method="post" enctype="multipart/form-data">
							<input type="file" name="uploaded_file" class="file">
							<div class="input-group col-xs-12">
								<span class="input-group-addon"><i class="fa fa-file"></i></span>
								<input type="text" style="background-color:transparent;color:white;" class="form-control border-input" placeholder="Upload File">
								<span class="input-group-btn">
								<button class="browse btn btn-primary btn-fill input-xs" type="button"><i class="fa fa-search"></i> Browse</button>
								</span>
							</div>
							<div class="row">
							<div class="col-md-3">
							<input type="submit" class="btn btn-success btn-fill pull-left" style="background-color:transparent;color:white;" value="Upload file">
							</div>
							</div>
							<input type='text' name='id' value="<?php echo $id ?>"  style='visibility:hidden;'>
						</form>
                        <!--<p>
							<a href="list_files.php">See all files</a>
						</p>-->
						<?php
							// Connect to the database
							$dbLink = new mysqli('127.0.0.1', 'root', '', 'hotel_details');
							if(mysqli_connect_errno()) {
								die("MySQL connection failed: ". mysqli_connect_error());
							}
							 
							// Query for a list of all existing files
							$sql = "SELECT `id`, `name`, `mime`, `size`, `created` FROM `file` where id=".$id;
							$result = $dbLink->query($sql);
							 
							// Check if it was successfull
							if($result) {
								// Make sure there are some files in there
								if($result->num_rows == 0) {
									echo '<p style="color:white;">There are no files in the database</p>';
								}
								else {
									// Print the top of a table
									echo '<table class="table table-stripped">
											<thead>
											<tr>
												<td><b style="color:white;">Document Name</b></td>
												<td><b style="color:white;">Upload Date</b></td>
												<td><b style="color:white;">Delete</b></td>
											</tr>
											</thead>';
							 
									// Print each file
									while($row = $result->fetch_assoc()) {
										echo "
											<tbody>
											<tr>
												<td><a href='get_file.php?id={$row['id']}'><b>{$row['name']}</b></a></td>
												
												<td style='color:white;'>{$row['created']}</td>
												<td><form method='post' action='deletefile.php'><button class='btn btn-danger btn-sm' style='border:none;'><i style='font-size: 2em;' class='fa fa-trash'></i></button>
												</td>
												<input type='hidden' name='id' value='".$row["id"]."'>
												<input type='hidden' name='created' value='".$row["created"]."'></form>
												
											</tr>
											</tbody>";
									}
							 
									// Close table
									echo '</table>';
								}
							 
								// Free the result
								$result->free();
							}
							else
							{
								echo 'Error! SQL query failed:';
								echo "<pre>{$dbLink->error}</pre>";
							}
							 
							// Close the mysql connection
							$dbLink->close();
							?>
                    </div>
					</div>
					</div>
                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                        <div class="card" style="background-color:transparent;">
                            <div class="header">
                                <h4 class="title" style="background-color:transparent;color:white;"><b>Edit Profile</b></h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="update.php">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="color:white;">ID</label>
                                                <input style="background-color:transparent;color:white;" type="text" name="id" class="form-control border-input" readonly placeholder="ID" value="<?php echo $id ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="color:white;">Username</label>
                                                <input style="background-color:transparent;color:white;" type="text" name="username" class="form-control border-input" placeholder="Username" value="<?php echo $username?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" style="color:white;">Email address</label>
                                                <input style="background-color:transparent;color:white;" type="email" name="email" class="form-control border-input" placeholder="Email" value="<?php echo $email ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="color:white;">First Name</label>
                                                <input style="background-color:transparent;color:white;" type="text" name="f_name" class="form-control border-input" placeholder="First Name" value="<?php echo $f_name ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="color:white;">Last Name</label>
                                                <input style="background-color:transparent;color:white;" type="text" name="l_name" class="form-control border-input" placeholder="Last Name" value="<?php echo $l_name ?>">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-md-3">
                                            <div class="form-group">
                                                <label style="color:white;">Gender</label>
                                                <input style="background-color:transparent;color:white;" type="text" name="gender" class="form-control border-input" placeholder="Gender" value="<?php echo $gender ?>">
                                            </div>
                                        </div>
										<div class="col-md-3">
                                            <div class="form-group">
                                                <label style="color:white;">Date of Birth</label>
                                                <input style="background-color:transparent;color:white;" type="text" name="dob" class="form-control border-input" placeholder="dob" value="<?php echo $dob ?>">
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label style="color:white;">Contact No.</label>
                                                <input style="background-color:transparent;color:white;" type="text" name="mobile" class="form-control border-input" placeholder="Contact No." value="<?php echo $mobile ?>">
                                            </div>
                                        </div>
									</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="color:white;">Address</label>
                                                <input style="background-color:transparent;color:white;" type="text" name="address" class="form-control border-input" placeholder="Home Address" value="<?php echo $address ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="color:white;">State</label>
                                                <input style="background-color:transparent;color:white;" type="text" name="state" class="form-control border-input" placeholder="State" value="<?php echo $state ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="color:white;">Country</label>
                                                <input style="background-color:transparent;color:white;" type="text" class="form-control border-input" placeholder="Country" value="India" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="color:white;">Postal Code</label>
                                                <input style="background-color:transparent;color:white;" type="text" name="pin" class="form-control border-input" placeholder="Postal Code" value="<?php echo $pin ?>">
                                            </div>
                                        </div>
                                    </div>

                                   <br />
                                    <div class="text-center">
                                        <button type="submit" style="background-color:transparent;color:white;" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid"  style="background-image: url('../img/tt.jpg');">
                
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
		$(document).on('click', '.browse', function(){
			var file = $(this).parent().parent().parent().find('.file');
			file.trigger('click');
		});
		
		$(document).on('change', '.file', function(){
			$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
		});
		
		$(document).ready(function() {
			
			if(<?php echo $id ?> == 1){
			$("#adm").show();
		}
	});
		
		$(document).ready(function() {
			
			if(<?php echo $id ?> != 1){
			$("#adm1").show();
			$("#cha").show();
		}
	});
	
	$(document).ready(function() {
			
			if(<?php echo $id ?> != 1){
			$("#adm4").show();
			$("#adm5").show();
		}
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
