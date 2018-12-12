<?php
	include "presets.php";
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	
	$add2 = "INSERT INTO `user`( `username`, `password`, `mobile`,`status`) VALUES ('$username','$password',$mobile,'Pending')";
	if(mysqli_query($connection,$add2)){
		session_start();
		$query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
		$result = mysqli_query($connection,$query);
		$check = mysqli_fetch_array($result);  
		
		if(isset($check)) {
			
			$_SESSION['auth'] = 'true';
			$_SESSION['user'] = $username;
			header("Location:../Hotel/module/user.php");
			exit;
		}
	}else{
		echo "<script>
					alert('Username has been taken aleardy!!!');
					window.location.href='main.html';
			  </script>";
		exit;
	}
?>