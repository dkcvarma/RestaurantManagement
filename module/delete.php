<?php
	include "../presets.php";
	
	$id=$_POST['id'];
	
	$add1 = " DELETE from `file` WHERE id='$id'";
	$add2 = " DELETE from `user` WHERE id='$id'";
	
	if(mysqli_query($connection,$add1)){
	if(mysqli_query($connection,$add2)){
		echo "<script>
					alert('Sucessfully Deleted');
					window.location.href='list.php';
			  </script>";
		exit;
	}else{
		echo "<script>
					alert('Error');
					window.location.href='list.php';
			  </script>";
		exit;
	}
	}else{
		echo "<script>
					alert('Error');
					window.location.href='list.php';
			  </script>";
		exit;
	}
?>