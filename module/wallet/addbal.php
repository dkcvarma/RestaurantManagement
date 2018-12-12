<?php
	include "../../presets.php";
	
	$id=$_POST['id'];
	$cardnumber=$_POST['cardnumber'];
	$cvv=$_POST['cvv'];
	$amount=$_POST['amount'];
	
	
	$res1 = mysqli_query($connection,"SELECT `cvv` FROM `card` WHERE id='$id' AND cardnumber='$cardnumber' ");
	$row1 = mysqli_fetch_row($res1);
	if($cvv==$row1[0]){
		$res = mysqli_query($connection,"SELECT `balance` FROM `user` WHERE id='$id' ");
		$row = mysqli_fetch_row($res);
		$add3 = $row[0] + $amount;
		$add1 = " INSERT INTO `cardhistory`(`id`, `cardnumber`, `bal`, `time`) VALUES ('$id','$cardnumber','$amount',NOW())";
		$add4 = "UPDATE `user` SET `balance`='$add3' WHERE id=$id";
		
		
		if(mysqli_query($connection,$add1)){
			if(mysqli_query($connection,$add4)){
				echo "<script>
							alert('Sucessfully Added');
							window.location.href='index1.php';
					  </script>";
				exit;
			}else{
				echo "<script>
							window.location.href='index1.php';
					  </script>";
				exit;
			}
		}else{
			echo "<script>
						window.location.href='index1.php';
				  </script>";
			exit;
		}
	}
	else{
		echo "<script>
					alert('Invalid cvv');
					window.location.href='index1.php';
			  </script>";
		exit;
	}
?>