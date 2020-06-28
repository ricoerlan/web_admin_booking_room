<?php 
session_start();
include "conf/config.php";

if( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$idAdmin = $_POST['idAdmin'];
	$password = $_POST['password'];

	$result = mysqli_query($con, "SELECT * FROM admin WHERE idAdmin = '$idAdmin'");

	// cek idAdmin
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if( isset($_POST['remember']) ) {
				// buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['idAdmin']), time()+60);
			} else {
				header("Location : login.php");
			}

			header("Location: utama.php");
			exit;
		}
	}

	$error = true;

}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman Login</title>
		<style>@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,300,600);
		*{box-sizing:border-box;}
			body {
			  font-family: 'open sans', helvetica, arial, sans;
			background:url(http://farm8.staticflickr.com/7064/6858179818_5d652f531c_h.jpg) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			}
		@grey:#2a2a2a;
		@blue:#1fb5bf;
		.log-form {
			  width: 40%;
			  min-width: 320px;
			  max-width: 475px;
			  background: #fff;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  -webkit-transform: translate(-50%,-50%);
			-moz-transform: translate(-50%,-50%);
			-o-transform: translate(-50%,-50%);
			-ms-transform: translate(-50%,-50%);
			transform: translate(-50%,-50%);
			  
			  box-shadow: 0px 2px 5px rgba(0,0,0,.25);
			  
			  @media(max-width: 40em){
			    width: 95%;
			    position: relative;
			    margin: 2.5% auto 0 auto;
			    left: 0%;
		    	}
			}
	</style>
</head>


<body>



<?php if( isset($error) ) : ?>
	<p style="color: red; font-style: italic;">idAdmin / password salah</p>
<?php endif; ?>
<div class="log-form">
	<h2>--------Halaman Login--------</h2>
<form action="" method="post">

			<label for="idAdmin">idAdmin :</label>
			<input type="text" name="idAdmin" id="idAdmin">
			<br><br>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
			<br>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember me</label>
			<br> <br>
			<button type="submit" name="login">Login</button>
			    <a class="forgot" href="Registrasi.php">Regestrasi</a>

	
</form>




</body>
</html>