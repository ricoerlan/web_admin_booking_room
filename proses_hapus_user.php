<?php
include "conf/Config.php";

$id = $_GET['id'];
$query = ("DELETE FROM users WHERE idUsers ='$id'");
if(!mysqli_query($con,$query)){
die(mysqli_error);
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="data_user.php"</script>';
}
?>