<?php 
	$nimBooking = $_GET['nimBooking'];
	
	require_once('../Config.php');

	$response = [
		'text' => "Gagal",
		'status' => false,];

	
	// $sql = "SELECT bookings.*, users.*, rooms.kode_room FROM `bookings` JOIN users ON users.id_user = bookings.id_user JOIN rooms ON rooms.id_room = bookings.id_room WHERE users.nim = '$nimBooking'";

$sql = "SELECT * FROM bookings WHERE nimBooking=$nimBooking";

	$r = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($r);

	if($row != null) {
		$response['text']  = 'berhasil';
		$response['status'] = true;
		$response['data'] = array(
			"idBooking"=>$row['idBooking'],
			"nimBooking"=>$row['nimBooking'],
			"namaPembooking"=>$row['namaPembooking'],
			"namaRuangBooking"=>$row['namaRuangBooking'],
			"tanggal"=>$row['tanggal'],
			"jamMulai"=>$row['jamMulai'],
			"jamSelesai"=>$row['jamSelesai'],
			"keterangan"=>$row['keterangan'],
			"statusBooking"=>$row['statusBooking'],
		);
	}

	echo json_encode($response);
	
	mysqli_close($con);
