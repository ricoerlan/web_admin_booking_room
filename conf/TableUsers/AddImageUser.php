<?php 
	require_once('../Config.php');

if($_SERVER['REQUEST_METHOD']=='POST'){

		//Getting values
		$nim = $_POST['nim'];
		$namaUser = $_POST['namaUser'];
		$nohp = $_POST['nohp'];
		$password = $_POST['password'];
		$image = $_POST['image'];


    $query = "UPDATE users SET namaUser='$namaUser',nohp='$nohp',password='$password' WHERE nim='$nim' ";		


	if ( mysqli_query($con, $query) ){

		if ($image == null) {

			$result["value"] = "1";
			$result["message"] = "Success";

			echo json_encode($result);
			mysqli_close($con);

		} else {


			$path = "images/$nim.png";
			$actualpath  = "$nim.png";

		//Creating an sql query
			$sql = "UPDATE users SET image='$actualpath' WHERE nim='$nim' ";

		//Importing our db connection script


		//Executing query to database
			if(mysqli_query($con,$sql)){

				if ( file_put_contents( $path, base64_decode($image) ) ) {

					$result["value"] = "1";
					$result["message"] = "Success!";

					echo json_encode($result);
					mysqli_close($con);

				} else {

					$response["value"] = "0";
					$response["message"] = "Error! ".mysqli_error($con);
					echo json_encode($response);

					mysqli_close($con);
				}
			}
		}
	}
        else {
            $response["value"] = "0";
            $response["message"] = "Error! ".mysqli_error($con);
            echo json_encode($response);

            mysqli_close($con);
        }
}

?>