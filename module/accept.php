<?php
	include "../presets.php";
	
	$id=$_POST['id'];
	
	$add2 = " UPDATE `user` SET `status`='Accepted' WHERE id='$id'";
	
	if(mysqli_query($connection,$add2)){
		echo "<script>
					alert('Sucessfully Accepted');
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
?>