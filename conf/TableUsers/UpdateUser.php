<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$nim = $_POST['nim'];
		$namaUser = $_POST['namaUser'];
		$nohp = $_POST['nohp'];
		$password = $_POST['password'];
		$image = $_POST['image'];
		
		require_once('../Config.php');

        $path = "images/".$nim.".png";    
		$sql = "UPDATE users SET namaUser = '$namaUser', nohp = '$nohp' , password = '$password' , image = '$image' WHERE nim = $nim;";
		
		if(mysqli_query($con,$sql)){
			file_put_contents($path,base64_decode($image));
			echo 'User Updated Successfully';
		}else{
			echo 'Could Not Update User Try Again';
		}
		
		mysqli_close($con);
	}