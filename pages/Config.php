<?php 
define('DB_USERNAME','root');
define('DB_PASSWORD','');
//define('DB_NAME','rest');
define('DB_NAME','roombooking');
//define('DB_NAME','testRoomBook');
define('DB_HOST','localhost');

	//defined a new constant for firebase api key
define('FIREBASE_API_KEY', 'AAAAZl2ZDV8:APA91bFWwaF8wMWfUvUzWyuGp4IaagCWiNWRi8CgwnV5s0EnOZQZynmhnJCybQZkP_k5NnkapMP_BqOD2JVxcAVfKHau20-LUdGpYxwu2JEgkNN9-NALm0tweu8tXchyPSF4bSlEE__i');

$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        //Checking if any error occured while connecting
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{  //echo "Connect"; 
}

?>

