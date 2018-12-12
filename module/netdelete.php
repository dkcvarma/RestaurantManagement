<?php
	include "../presets.php";
	
	$id=$_POST['id'];
	$time=$_POST['time'];
	
	$add2 = " DELETE from `nethistory` WHERE id='$id' AND time='$time'";
	
	if(mysqli_query($connection,$add2)){
		echo "<script>
					alert('Sucessfully Deleted');
					window.location.href='history.php';
			  </script>";
		exit;
	}else{
		echo "<script>
					alert('Error');
					window.location.href='history.php';
			  </script>";
		exit;
	}
?>