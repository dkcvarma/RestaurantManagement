<?php
	session_start();

	include "presets.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
	$result = mysqli_query($connection,$query);
	$check = mysqli_fetch_array($result);
	
	if(isset($check)) {
		$_SESSION['auth'] = 'true';
		$_SESSION['user'] = $username;
		header("Location:../Hotel/module/dashboard.php");
		exit;
	}else {
		echo "<script>
			window.location.href='main.html';
			</script>";
		exit;
	}
	mysqli_close($connection);
?>