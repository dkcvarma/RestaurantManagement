<?php
	include "../presets.php";
	
	$id=$_POST['id'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$mobile=$_POST['mobile'];
	$gender=$_POST['gender'];
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	
	$add2 = " UPDATE `user` SET `username`='$username',`email`='$email',`gender`='$gender',`dob`='$dob',`status`='Pending',`mobile`='$mobile',`f_name`='$f_name',`l_name`='$l_name',`address`='$address',`state`='$state',`pin`='$pin' WHERE id='$id'";
	
	if(mysqli_query($connection,$add2)){
		echo "<script>
					alert('Sucessfully Updated');
					window.location.href='user.php';
			  </script>";
		exit;
	}else{
		echo "<script>
					alert('Error');
					window.location.href='user.php';
			  </script>";
		exit;
	}
?>