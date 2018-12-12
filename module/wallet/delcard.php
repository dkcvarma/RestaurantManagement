<?php
	include "../../presets.php";
	
	$id=$_POST['id'];
	$cardnumber=$_POST['cardnumber'];
	
	$add1 = " DELETE from `card` WHERE id='$id' AND cardnumber='$cardnumber'";
	
	if(mysqli_query($connection,$add1)){
		echo "<script>
					alert('Sucessfully Deleted');
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
?>