<?php 
include "conf/config.php";

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($con);
	}

}

function registrasi($data) {
	global $con;

	$idAdmin = $_POST['idAdmin'];
	$password = $_POST['password'];

	// cek idAdmin sudah ada atau belum
	$result = mysqli_query($con, "SELECT idAdmin FROM admin WHERE idAdmin = '$idAdmin'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('idAdmin sudah terdaftar!')
		      </script>";
		return false;
	}

	// tambahkan adminbaru ke database
	mysqli_query($con, "INSERT INTO admin VALUES('', '$idAdmin', '$password')");

	return mysqli_affected_rows($con);

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

<h1>Halaman Registrasi</h1>

<form action="" method="post">

	<ul>
		<li>
			<label for="idAdmin">idAdmin :</label>
			<input type="text" name="idAdmin" id="idAdmin">
		</li>
		<li>
			<label for="password">password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<label for="password2">konfirmasi password :</label>
			<input type="password" name="password2" id="password2">
		</li>
		<li>
			<button type="submit" name="register">Register!</button>

		</li>
	
	</ul>
	
</form>
<a class="forgot" href="login.php">Sudah daftar Masuk</a>
</body>
</html>