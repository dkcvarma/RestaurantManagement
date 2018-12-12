<?php
	include "../presets.php";
	
	$id=$_POST['id'];
	
	$add2 = " DELETE from `nethistory` WHERE id='$id' ";
	
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