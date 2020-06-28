<?php 
	$idBooking = $_GET['idBooking'];
	
	require_once('../Config.php');
	
	$sql = "DELETE FROM bookings WHERE idBooking=$idBooking;";
	
	if(mysqli_query($con,$sql)){
		echo 'Booking berhasil di hapus';
	}else{
		echo 'Gagal DI hapus';
	}
	
	mysqli_close($con);
