<?php
	session_start();
	if(!$_SESSION['auth']) {
		header("location:main.html");
	}
	
?>

<?php
	include "../presets.php";
	$id = intval($_GET['id']);
	$sql = "SELECT * FROM user WHERE id='$id'";
	$result = mysqli_query($connection,$sql);
	
	while($row = mysqli_fetch_array($result)) {
		$id = $row['id'];
		$username = $row['username'];
		$role = $row['role'];
		$mobile = $row['mobile'];
		$dob = $row['dob'];
		$status = $row['status'];
		$email = $row['email'];
		$gender = $row['gender'];
		$f_name = $row['f_name'];
		$l_name = $row['l_name'];
		$address = $row['address'];
		$state = $row['state'];
		$pin = $row['pin'];
		$photo = $row['photo'];
	}
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
<body style= "background-color: #f4f3ef;">


    <div style= "background-color: #f4f3ef;">
	<br>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="card card-plain">
						<br>
							<div class="card">
								<img style="min-height:250px;min-width:250px;" class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode($photo); ?>" name="photo" />
							</div>                            
                        </div>
						<div class="card">
						<div class="header">
                                <h4 class="title"><b>File</b></h4>
                        </div>
						<div class="content">
                        <!--<p>
							<a href="list_files.php">See all files</a>
						</p>-->
						<?php
							// Connect to the database
							$dbLink = new mysqli('localhost', 'root', '', 'hotel_details');
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
									echo '<p>There are no files in the database</p>';
								}
								else {
									// Print the top of a table
									echo '<table class="table table-hover">
											<thead>
											<tr>
												<td><b>Document Name</b></td>
												<td><b>Upload Date</b></td>
											</tr>
											</thead>';
							 
									// Print each file
									while($row = $result->fetch_assoc()) {
										echo "
											<tbody>
											<tr>
												<td><a href='get_file.php?id={$row['id']}'>{$row['name']}</a></td>
												
												<td>{$row['created']}</td>
												
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
					<br>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><b>Profile</b></h4>
                            </div>
							<div class="content table-responsive table-full-width">
								<!--table  table-stripped-->
									
									<table id='table' class='table table-hover'>
                                    <thead>
										<tr>
										<td><b>ID</b></td>
										<td>:&nbsp&nbsp&nbsp<?php echo $id ?> </td>
										</tr>
										<tr>
										<td><b>First Name</b></td>
										<td>:&nbsp&nbsp&nbsp<?php echo $f_name ?> </td>
										</tr>
										<tr>
										<td><b>Last Name</b></td>
										<td>:&nbsp&nbsp&nbsp<?php echo $l_name ?> </td>
										</tr>
										<tr>
										<td><b>Gender</b></td>
										<td>:&nbsp&nbsp&nbsp<?php echo $gender ?> </td>
										</tr>
										<tr>
										<td><b>Date of Birth</b></td>
										<td>:&nbsp&nbsp&nbsp<?php echo $dob ?> </td>
										</tr>
										<tr>
										<td><b>Contact No.</b></td>
										<td>:&nbsp&nbsp&nbsp<?php echo $mobile ?> </td>
										</tr>
										<tr>
										<td><b>Email</b></td>
										<td>:&nbsp&nbsp&nbsp<?php echo $email ?> </td>
										</tr>
										<tr>
										<td><b>Address</b></td>
										<td>:&nbsp&nbsp&nbsp<?php echo $address ?> </td>
										</tr>
										<tr>
										<td><b>State</b></td>
										<td>:&nbsp&nbsp&nbsp<?php echo $state ?> </td>
										</tr>
										<tr>
										<td><b>Country</b></td>
										<td>:&nbsp&nbsp&nbspIndia </td>
										</tr>
										<tr>
										<td><b>Postal Code</b></td>
										<td>:&nbsp&nbsp&nbsp<?php echo $pin ?> </td>
										</tr>
                                    </thead>
								</table>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h4 class="title"><b>Order History</b></h4>
							</div>
							<div class="content table-responsive table-full-width">
									<?php
												$sql = "SELECT * FROM user";
												$result = mysqli_query($connection, $sql);

										//if (mysqli_num_rows($result) > 0)
											//{
												//table  table-hover
											echo '<table class="table table-hover">
											<thead>
											<tr>
												<td><b>Order ID</b></td>
												<td><b>Order Details</b></td>
												<td><b>Time</b></td>
											</tr>
											</thead>'; 
											//while($row = $result->fetch_assoc()) {
											echo"
											<tbody>
												<tr>
												<td>1</td>
												<td>Butter Chicken, Chilly Chicken</td>
												<td>2018-02-19</td>
												</tr>
												<tr>
												<td>2</td>
												<td>Chicken 65, Chicken Tikka</td>
												<td>2018-02-18</td>
												</tr>
												<tr>
												<td>3</td>
												<td>Mutton Fry, Pork Fry</td>
												<td>2018-02-17</td>
												</tr>
											</tbody> ";
												/*}*/
											echo "</table>";
											/*}*/
									/*else{
										echo "0 results";}*/
												?>
							</div>
						</div>
					</div>
                </div>
				<div class="text-center">
					<a href="list.php"><button class="btn btn-success btn-fill btn-wd">Go Back</button></a>
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
