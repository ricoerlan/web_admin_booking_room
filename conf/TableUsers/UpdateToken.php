<?php 
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $token = $_POST['token'];
    $nim = $_POST['nim'];
    
    require_once('../Config.php');
      
    $sql = "UPDATE users SET token = '$token' WHERE nim = $nim";
    
    if(mysqli_query($con,$sql)){
      echo 'Update ruangan sukses';
    }else{
      echo 'Gagal';
    }
    
    mysqli_close($con);
  }