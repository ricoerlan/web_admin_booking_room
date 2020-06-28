<?php 
	$nimBooking = $_GET['nimBooking'];
	$statusBooking = $_GET['statusBooking'] = 'pending';
	require_once('../Config.php');
	header('Content-type: application/json');
	
	$sql = "SELECT * FROM bookings WHERE nimBooking=$nimBooking AND statusBooking = '$statusBooking'";
	$r = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($r);
	$arr = array(
			"idBooking"=>$row['idBooking'],
			"namaRuangBooking"=>$row['namaRuangBooking'],
			"tanggal"=>$row['tanggal'],
			"jamMulai"=>$row['jamMulai'],
			"jamSelesai"=>$row['jamSelesai'],
			"keterangan"=>$row['keterangan'],
			"statusBooking"=>$row['statusBooking'],
	);
// Done


	echo json_encode($arr);
	
	mysqli_close($con);
