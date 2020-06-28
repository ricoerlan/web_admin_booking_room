<?php
include "conf/Config.php";

$id = $_GET['id'];
$query = ("DELETE FROM admin WHERE id ='$id'");
if(!mysqli_query($con,$query)){
die(mysqli_error);
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="data_admin.php"</script>';
}
?>