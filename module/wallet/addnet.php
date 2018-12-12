<?php
	include "../../presets.php";
	
	$id=$_POST['id'];
	$bank=$_POST['bank'];
	$bal=$_POST['bal'];
	$uname=$_POST['uname'];
	
	$res = mysqli_query($connection,"SELECT `balance` FROM `user` WHERE id='$id' ");
	$row = mysqli_fetch_row($res);
	$add1 = " INSERT INTO `nethistory`(`id`,`name` ,`bank`, `amount`, `time`) VALUES ('$id','$uname','$bank','$bal',NOW())";
	$add3 = $row[0] + $bal;
	$add4 = "UPDATE `user` SET `balance`='$add3' WHERE id=$id";
	if(mysqli_query($connection,$add1)){
		if(mysqli_query($connection,$add4)){
			echo "<script>
						alert('Sucessfully Added');
						window.location.href='index1.php';
				  </script>";
			exit;
		}	
		else{
			echo "<script>
						window.location.href='index1.php';
				  </script>";
			exit;
		}
	}
	else{
		echo "<script>
					window.location.href='index1.php';
			  </script>";
		exit;
	}
?>