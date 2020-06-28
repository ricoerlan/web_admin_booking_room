<?php 
	$nim = $_GET['nim'];
	
	require_once('../Config.php');
	
	$sql = "SELECT * FROM users WHERE nim=$nim";
	$r = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($r);
	$arr = array(
			"idUsers"=>$row['idUsers'],
			"nim"=>$row['nim'],
			"namaUser"=>$row['namaUser'],
			"nohp"=>$row['nohp'],
			"password"=>$row['password']
		);

/*	nama_user ! namaUser

bedakna field
function nembe camelCase*/

/*JAJAL SELECT nang SQL karo query nimBOOKING
MESTI RA ISA*/

/*
PENGGANTI SPASI NGGO NAMA FIELD kue underscore (nek spasi atau STRIP mesti eror, SQL bingung le njiot data)

PENGGANTI SPASI NGGO FUNTION nember camel Case, contone

FIELD
nama mahasiswa ditulis nama_mahasiswa

FUNCTION 
nama mahasiswa ditulis namaMahasaiswa


MENDING SUSUN ULANG DATABSEMU
NEK ESIH ERROR SQLMU aja takon nyong sit :V


wkkw, o

ANGKA NOLMU ILANGNA KABEH

NAMANE PRIMARY KEY KUE NIALINE FIX, ORA ISA PADA
TERSERAH TIP DATANE, biasane INT.

RELASI ATAU RELATIONSHIP TABEL KUE KARO ID (kunci tabel & row)

-id- -nama- -nim-
1	joni 	83
2	jono 	84

MESKI NIM JELAS BEDA TAPI NEK PENULISAN NIM KARO STRUKTURE RA SESUAI PRIMARY SQL ya ribet


TABEL USER

id_user // PRIMARY
nim
nama_user
no_hp
token
image


TABEL BOOKING
id_booking // PRIMARY
id_user // FOREIGN id_user udu id_booking

NJIOT NIM
SELECT bookings.* FROM bookings JOIN users ON users.id_user = bookings.id_user WHERE users.nim = 83


*/


	echo json_encode($arr);
	
	mysqli_close($con);