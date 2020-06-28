
<?php
// Load file koneksi.php
include "conf/Config.php";


function tambah_admin($data){

$idAdmin = $data['idAdmin'];
$password = $data['password'];

$query = ("INSERT INTO admin(id,idAdmin,password) VALUES
 ('','".$idAdmin."','".$password."')");
 
$sql = mysqli_query($con, $query);
}
?>