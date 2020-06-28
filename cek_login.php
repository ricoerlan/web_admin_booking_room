<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include "conf/config.php";
 
// menangkap data yang dikirim dari form
$idAdmin = $_POST['idAdmin'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan idAdmin dan password yang sesuai
$data = mysqli_query($con,"select * from admin where idAdmin='$idAdmin' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['idAdmin'] = $idAdmin;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	
}
?>