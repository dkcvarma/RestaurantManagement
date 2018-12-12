<?php
	include "../presets.php";
	
	$id=$_POST['id'];
	$cardnumber=$_POST['cardnumber'];
	$time=$_POST['time'];
	
	$add2 = " DELETE from `cardhistory` WHERE id='$id' AND time='$time' AND cardnumber='$cardnumber'";
	
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