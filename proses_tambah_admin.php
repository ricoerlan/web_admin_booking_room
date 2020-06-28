
<?php
// Load file koneksi.php
include "conf/Config.php";
// Ambil Data yang Dikirim dari Form
$idAdmin = $_POST['idAdmin'];
$password = $_POST['password'];
$query = ("INSERT INTO admin(id,idAdmin,password) VALUES
 ('','".$idAdmin."','".$password."')");
 
$sql = mysqli_query($con, $query);
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    echo "Data Booking telah berhasil ditambahkan";
    echo "<br><a href='data_admin.php'>Kembali Ke Booking List</a>";
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='data_admin.php'>Kembali Ke Booking List</a>";

  }
?>