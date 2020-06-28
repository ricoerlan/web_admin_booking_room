<?php 

	require_once '../DbOperation.php';

	$db = new DbOperation(); 
	
	$room = $db->getAllUsers();

	$response = array(); 

	$response['error'] = false; 
	$response['room'] = array(); 

	while($device = $room->fetch_assoc()){
		$temp = array();
		$temp['idRoom']=$device['idRoom'];
		$temp['namaRoom']=$device['namaRoom'];
		$temp['kapasitas']=$device['kapasitas'];
		$temp['fasilitas1']=$device['fasilitas1'];
		$temp['fasilitas2']=$device['fasilitas2'];
		$temp['fasilitas3']=$device['fasilitas3'];
		$temp['fasilitas4']=$device['fasilitas4'];
		$temp['deskripsi']=$device['deskripsi'];
		array_push($response['room'],$temp);
	}

	echo json_encode($response);