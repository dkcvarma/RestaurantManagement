<?php
	include "../presets.php";
	
	$id=$_POST['id'];
	$created=$_POST['created'];
	
	$add1 = " DELETE from `file` WHERE id='$id' AND created='$created'";
	
	if(mysqli_query($connection,$add1)){
		echo "<script>
					alert('Sucessfully Deleted');
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