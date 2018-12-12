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

<div class="container">            
    <div class="container2">
        <div class="row" style="margin-top:-10px;">  


			<?php
				include "../presets.php";
				$sql = "SELECT * FROM menu";
				$result = mysqli_query($connection, $sql);
				 echo"
                <div class='card' style='margin-top:20px;border:none;'>";
				if (mysqli_num_rows($result) > 0)
				{
					while($row = $result->fetch_assoc()) {
					$photo = base64_encode($row['photo']);
					echo"
					<div class='filterDiv2 type col-md-4 col-sm-4 col-xs-4 col-lg-4'>
                    <img src='data:image/jpeg;base64, ".$photo."' alt=".$row["name"]." data-target='#".$row["id"]."Model' data-toggle='modal' style='min-height: 100px;max-height:200px;width:360px;border-top-left-radius: 5px;border-top-right-radius: 5px;' class='img-fluid'>
                    <div class='row'>                        
                        <div class='col-md-7 col-sm-7 col-xs-7 col-lg-7'>
                            <div class='card-content' style='color:#000;padding-left:5%;margin-top:8px;margin-bottom:-10px;'>
                                <p>
                                    ".$row["name"]."
                                    <br>
                                    <strong style='color:#f00;'>Price: ".$row["cost"]."</strong>
                                </p>
                            </div>
                        </div>
                        <div class='col-md-5 col-sm-5 col-xs-5 col-lg-5 text-center'>                           
                            <i class='fa fa-info-circle' data-target='#".$row["id"]."Model' data-toggle='modal' style='font-size:25px;color:#5bc0de;margin-top:10px;' title='View Details'></i>                            
                            <i class='fa fa-shopping-cart' style='font-size:25px;color:#5cb85c;margin-top:10px;' title='Add to Order'></i>
                        </div>
                    </div> 
                    <div class='modal fade' id='".$row["id"]."Model' role='dialog' data-backdrop='false'>
                        <div class='modal-dialog modal-dialog-centered modal-lg'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h3 class='modal-title' id='".$row["id"]."ModelLabel'>".$row["name"]."</h3>
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
                                            <h4 style='font-weight:bold;padding-top:10px;'>cost</h4>
                                            <h5><strong style='color:#f00;'>Price: ₹".$row["cost"]."</strong></h5>
                                            <div>&nbsp;</div>
                                            <button style='border-width: 2px;font-weight:bold;' class='btn btn-outline-success' title='Add to Order'>Add to Order  <i class='fa fa-shopping-cart'></i></button>
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
					</div>";
                
					}
				echo"                
            </div>";
				}
			
			?>
			
			
        </div>        
    </div>     
</div>


</body>
</html>



