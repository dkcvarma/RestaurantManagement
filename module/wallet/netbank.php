<?php
	session_start();
	if(!$_SESSION['auth']) {
		header("location:main.html");
	}
	
	include "../../profile_query.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Hotel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="../assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

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
					<br>
					<?php
						$amount=$_POST['amount'];
						$radio=$_POST['radio'];
					?>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><b>Net Banking</b></h4>
                            </div>
							<br><br>
							<div style="margin-left:25px;">
								<b>Bank</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $radio ?>
							</div><br>
							<div style="margin-left:25px;">
								<b>Amount</b>&nbsp:&nbsp&nbsp&nbsp<i class="fa fa-inr"></i><?php echo $amount ?>
							</div><br><br>
							<form method="post" action="addnet.php">
							<div style="margin-left:25px;">
								<h5 class="title"><b>Login Crentials</b></h5><br>
                                <label>Username<span style="font-size:12px; color:red">*<span/></label>
                                <input type="text" name="uname" style="width:180px;" class="form-control border-input" placeholder="username" value="" required >
								<label>Passsword<span style="font-size:12px; color:red">*<span/></label>
                                <input type="password" name="password" style="width:180px;" class="form-control border-input" placeholder="password" value="" required >
								<input type="hidden" name="bank" value="<?php echo $radio ?>">
								<input type="hidden" name="id" value="<?php echo $id ?>">
								<input type="hidden" name="bal" value="<?php echo $amount ?>">
							</div><br>
							<div style="margin-left:25px;">
								<button type="submit" class="btn btn-info btn-fill btn-wd">Submit</button><br><br>
							</div>
							</form>
                        </div>
                    </div>
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
    </script>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
