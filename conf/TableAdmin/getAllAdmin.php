<?php 

	require_once '../DbOperation.php';

	$db = new DbOperation(); 
	
	$devices = $db->getAllAdmins();

	$response = array(); 

	$response['error'] = false; 
	$response['devices'] = array(); 

	while($device = $devices->fetch_assoc()){
		$temp = array();
		$temp['id']=$device['id'];
		$temp['idAdmin']=$device['idAdmin'];
		$temp['password']=$device['password'];
		array_push($response['devices'],$temp);
	}

	echo json_encode($response);