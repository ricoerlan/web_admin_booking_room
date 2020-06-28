<?php 
	require_once '../DbOperation.php';
	$response = array(); 

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$idAdmin = $_POST['idAdmin'];
		$password = $_POST['password'];

		$db = new DbOperation(); 

		$result = $db->addAdmin($idAdmin,$password);

		if($result == 0){
			$response['status'] = false; 
			$response['message'] = 'Penambahan Admin Berhasil';
		}elseif($result == 2){
			$response['status'] = true; 
			$response['message'] = 'ID Admin Sudah Ada';
		}else{
			$response['status'] = true;
			$response['message']='Admin Gagal Ditambahkan';
		}
	}else{
		$response['status']=true;
		$response['message']='Invalid Request...';
	}

	echo json_encode($response);