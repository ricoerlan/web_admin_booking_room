<?php 
	$idRoom = $_GET['idRoom'];
	
	require_once('../Config.php');
	
	$sql = "DELETE FROM rooms WHERE idRoom=$idRoom;";
	
	if(mysqli_query($con,$sql)){
		echo 'Ruangan berhasil di hapus';
	}else{
		echo 'Gagal DI hapus';
	}
	
	mysqli_close($con);
