<?php
include "conf/Config.php";
//jika tombol simpan di tekan/klik
if(isset($_POST['submit'])){
$nimBooking	= $_POST['nimBooking'];
$namaPembooking	= $_POST['namaPembooking'];
$namaRuangBooking	= $_POST['namaRuangBooking'];
$tanggal		= $_POST['tanggal'];
$jamMulai		= $_POST['jamMulai'];
$jamSelesai		= $_POST['jamSelesai'];
$keterangan		= $_POST['keterangan'];
$statusBooking		= $_POST['statusBooking'];
			
$sql = mysqli_query($con, "UPDATE bookings SET nimBooking='$nimBooking',
       namaPembooking='$namaPembooking', namaRuangBooking='$namaRuangBooking', tanggal='$tanggal',
       jamMulai='$jamMulai', jamSelesai='$jamSelesai', keterangan='$keterangan', statusBooking='$statusBooking'
        WHERE idBooking='$id'") or die(mysqli_error($con));
			
	if($sql){
	echo '<script>alert("Berhasil menyimpan data."); document.location="list_room.php";</script>';
	}else{
	echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
	}}
?>