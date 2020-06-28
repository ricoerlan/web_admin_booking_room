<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  // echo $_SERVER["DOCUMENT_ROOT"];  // /home1/demonuts/public_html
//including the database connection file
 include_once("../Config.php");
 
 $nim = $_POST['nim'];
 $password = $_POST['password'];
 //$token = $_POST['token'];
 
 if( $nim == '' || $nim == '' ){
  echo json_encode(array( "status" => "false","message" => "Parameter missing!") );
}else{
 // $query = "UPDATE users SET token = '$token' WHERE nim = $nim";
  $query= "SELECT * FROM users WHERE nim='$nim' AND password='$password'";
  $result= mysqli_query($con, $query);
  
  if(mysqli_num_rows($result) > 0){
  //$query = "UPDATE users SET token = '$token' WHERE nim = $nim";
   $query= "SELECT * FROM users WHERE nim='$nim' AND password='$password'";
   $result= mysqli_query($con, $query);
   $emparray = array();
   if(mysqli_num_rows($result) > 0){  
     while ($row = mysqli_fetch_assoc($result)) {
       $emparray = $row;
     }
   }
   echo json_encode(array( "status" => "true","message" => "Login successfully!", "data" => $emparray) );
 }else{ 
  echo json_encode(array( "status" => "false","message" => "Invalid nim or password!") );
}
mysqli_close($con);
}
} else{
  echo json_encode(array( "status" => "false","message" => "Error occured, please try again!") );
}
?>