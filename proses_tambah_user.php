
<?php
// Load file koneksi.php
include "conf/Config.php";
// Ambil Data yang Dikirim dari Form
$nim = $_POST['nim'];
$namaUser = $_POST['namaUser'];
$nohp = $_POST['nohp'];
$password = $_POST['password'];
$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// Rename nama imagenya dengan menambahkan tanggal dan jam upload
$imagebaru = date('dmYHis').$image;
// Set path folder tempat menyimpan imagenya
$path = "conf/TableUsers/images/".$imagebaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak

  
$query = ("INSERT INTO users(idUsers,nim,namaUser,nohp,password,image,) VALUES
 ('','".$nim."','".$namaUser."','".$nohp."','".$password."',".$imagebaru."')");
 
$sql = mysqli_query($con, $query);
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    echo "Data Booking telah berhasil ditambahkan";
    echo "<br><a href='data_user.php'>Kembali Ke Booking List</a>";
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='data_user.php'>Kembali Ke Booking List</a>";
  }

}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";  
}
?>