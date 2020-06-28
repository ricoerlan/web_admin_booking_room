<?php 

	require_once '../DbOperation.php';

	$db = new DbOperation(); 
	
	$devices = $db->getAllDevices();

	$response = array(); 

	$response['error'] = false; 
	$response['devices'] = array(); 

	while($device = $devices->fetch_assoc()){
		$temp = array();
		$temp['idUsers']=$device['idUsers'];
		$temp['nim']=$device['nim'];
		$temp['namaUser']=$device['namaUser'];
		$temp['nohp']=$device['nohp'];
		$temp['passsword']=$device['password'];
		$temp['token']=$device['token'];
		array_push($response['devices'],$temp);
	}

	echo json_encode($response);