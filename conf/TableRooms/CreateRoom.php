<?php 
	require_once '../DbOperation.php';
	$response = array(); 

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$namaRoom = $_POST['namaRoom'];
		$kapasitas = $_POST['kapasitas'];
		$fasilitas1 = $_POST['fasilitas1'];
		$fasilitas2 = $_POST['fasilitas2'];
		$fasilitas3 = $_POST['fasilitas3'];
		$fasilitas4 = $_POST['fasilitas4'];
		$deskripsi = $_POST['deskripsi'];

		$db = new DbOperation(); 

		$result = $db->createRoom($namaRoom,$kapasitas,$fasilitas1,$fasilitas2,$fasilitas3,$fasilitas4,$deskripsi);

		if($result == 0){
			$response['status'] = false; 
			$response['message'] = 'Penambahan Ruang Berhasil';
		}elseif($result == 2){
			$response['status'] = true; 
			$response['message'] = 'Nama Ruangan Sudah Ada';
		}else{
			$response['status'] = true;
			$response['message']='Ruangan Gagal Ditambahkan';
		}
	}else{
		$response['status']=true;
		$response['message']='Invalid Request...';
	}

	echo json_encode($response);