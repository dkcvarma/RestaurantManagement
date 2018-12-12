<?php
	include "../../presets.php";
	
	$id=$_POST['id'];
	$cardname=$_POST['cardname'];
	$cardnumber=$_POST['cardnumber'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$cvv=$_POST['cvv'];
	$check=$_POST['check'];
	$bal=$_POST['bal'];
	
	$res = mysqli_query($connection,"SELECT `balance` FROM `user` WHERE id='$id' ");
	$row = mysqli_fetch_row($res);
	$add1 = " INSERT INTO `cardhistory`(`id`, `cardnumber`, `bal`, `time`) VALUES ('$id','$cardnumber','$bal',NOW())";
	//$add =  "SELECT `balance` FROM `user` WHERE id='$id' ";
	$add3 = $row[0] + $bal;
	$add4 = "UPDATE `user` SET `balance`='$add3' WHERE id=$id";
	if(mysqli_query($connection,$add1)){
		if(mysqli_query($connection,$add4)){
			
			
			if($check=="check"){
				$add2 = " INSERT INTO `card`(`id`, `cardname`, `cardnumber`, `month`, `year`, `cvv`) VALUES ('$id','$cardname','$cardnumber','$month','$year','$cvv')";
				
				if(mysqli_query($connection,$add2)){
					echo "<script>
								alert('Sucessfully Stored and Added');
								window.location.href='index1.php';
						  </script>";
					exit;
				}else{
					echo "<script>
								alert('Error');
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