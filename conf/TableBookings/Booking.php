<?php 
require_once '../DbOperation.php';
$response = array(); 

if($_SERVER['REQUEST_METHOD']=='POST'){
	$nimBooking = $_POST['nimBooking'];
	$namaPembooking = $_POST['namaPembooking'];
	$namaRuangBooking = $_POST['namaRuangBooking'];
	$tanggal = $_POST['tanggal'];
	$jamMulai = $_POST['jamMulai'];
	$jamSelesai = $_POST['jamSelesai'];
	$keterangan = $_POST['keterangan'];


	$db = new DbOperation(); 

	$result = $db->pushBooking($nimBooking,$namaPembooking,$namaRuangBooking,$tanggal,$jamMulai,$jamSelesai,$keterangan);

	if($result == 0){
		$response['status'] = true; 
		$response['message'] = 'Booking Succes';
	}elseif($result == 2){
		$response['status'] = false; 
		$response['message'] = 'Anda sudah melakukan Booking';
	}else{
		$response['status'] = false;
		$response['message']='Gagal Booking';
	}
}else{
	$response['status']=true;
	$response['message']='Invalid Request...';
}

echo json_encode($response);