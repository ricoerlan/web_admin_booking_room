<?php 
	$id = $_GET['id'];
	
	require_once('../Config.php');
	
	$sql = "DELETE FROM admin WHERE id=$id;";
	
	if(mysqli_query($con,$sql)){
		echo 'Admin berhasil di hapus';
	}else{
		echo 'Admin gagal di hapus';
	}
	
	mysqli_close($con);
