<?php
	include "presets.php";
	$username = $_SESSION['user'];
	
	$sql = "SELECT * FROM user WHERE username='$username'";
	$result = mysqli_query($connection,$sql);
	
	while($row = mysqli_fetch_array($result)) {
		$id = $row['id'];
		$username = $row['username'];
		$gender = $row['gender'];
		$role = $row['role'];
		$mobile = $row['mobile'];
		$status = $row['status'];
		$dob = $row['dob'];
		$email = $row['email'];
		$f_name = $row['f_name'];
		$l_name = $row['l_name'];
		$address = $row['address'];
		$state = $row['state'];
		$pin = $row['pin'];
		$photo = $row['photo'];
		$balance = $row['balance'];
	}
?>