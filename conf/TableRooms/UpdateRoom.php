<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$idRoom = $_POST['idRoom'];
		$kapasitas = $_POST['kapasitas'];
		$fasilitas1 = $_POST['fasilitas1'];
		$fasilitas2 = $_POST['fasilitas2'];
		$fasilitas3 = $_POST['fasilitas3'];
		$fasilitas4 = $_POST['fasilitas4'];
		$deskripsi = $_POST['deskripsi'];
		
		require_once('../Config.php');
		  
		$sql = "UPDATE rooms SET kapasitas = '$kapasitas', fasilitas1 = '$fasilitas1', fasilitas2 = '$fasilitas2', fasilitas3 = '$fasilitas3', fasilitas4 = '$fasilitas4'  , deskripsi = '$deskripsi' WHERE idRoom = $idRoom;";
		
		if(mysqli_query($con,$sql)){
			echo 'Update ruangan sukses';
		}else{
			echo 'Gagal';
		}
		
		mysqli_close($con);
	}