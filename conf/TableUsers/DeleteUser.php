<?php 
	$nim = $_GET['nim'];
	
	require_once('../Config.php');
	
	$sql = "DELETE FROM users WHERE nim=$nim;";
	
	if(mysqli_query($con,$sql)){
		echo 'User Deleted Successfully';
	}else{
		echo 'Could Not Delete User Try Again';
	}
	
	mysqli_close($con);
