
<?php
// Load file koneksi.php
include "conf/Config.php";
// Ambil Data yang Dikirim dari Form
$nimBooking = $_POST['nimBooking'];
$namaPembooking = $_POST['namaPembooking'];
$namaRuangBooking = $_POST['namaRuangBooking'];
$tanggal = $_POST['tanggal'];
$jamMulai = $_POST['jamMulai'];
$jamSelesai = $_POST['jamSelesai'];
$keterangan = $_POST['keterangan'];
$statusBooking = $_POST['statusBooking'];
$query = ("INSERT INTO bookings(idBooking,nimBooking,namaPembooking,namaRuangBooking,
            tanggal,jamMulai,jamSelesai,keterangan,statusBooking) VALUES
 ('','".$nimBooking."','".$namaPembooking."','".$namaRuangBooking."','".$tanggal."',
 '".$jamMulai."','".$jamSelesai."','".$keterangan."','".$statusBooking."')");
 
$sql = mysqli_query($con, $query);
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    echo "Data Booking telah berhasil ditambahkan";
    echo "<br><a href='data_booking_room.php'>Kembali Ke Booking List</a>";
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='data_booking_room.php'>Kembali Ke Booking List</a>";

  }
?>