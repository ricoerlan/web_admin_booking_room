<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$idBooking = $_POST['idBooking'];
		$statusBooking = $_POST['statusBooking'];
		
		require_once('../Config.php');
		  
		$sql = "UPDATE bookings SET statusBooking = '$statusBooking'  WHERE idBooking = $idBooking;";
		
		if(mysqli_query($con,$sql)){
			echo 'Update ststusBooking sukses';
		}else{
			echo 'Gagal';
		}
		
		mysqli_close($con);
	}