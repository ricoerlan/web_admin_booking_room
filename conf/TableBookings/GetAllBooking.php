<?php 

	require_once '../DbOperation.php';

	$db = new DbOperation(); 
	
	$devices = $db->getAllBookings();

	$response = array(); 

	$response['error'] = false; 
	$response['devices'] = array(); 

	while($device = $devices->fetch_assoc()){
		$temp = array();
		$temp['idBooking']=$device['idBooking'];
		$temp['nimBooking']=$device['nimBooking'];
		$temp['namaPembooking']=$device['namaPembooking'];
		$temp['namaRuangBooking']=$device['namaRuangBooking'];
		$temp['tanggal']=$device['tanggal'];
		$temp['jamMulai']=$device['jamMulai'];
		$temp['jamSelesai']=$device['jamSelesai'];
		$temp['keterangan']=$device['keterangan'];
		$temp['statusBooking']=$device['statusBooking'];
		array_push($response['devices'],$temp);
	}

	echo json_encode($response);