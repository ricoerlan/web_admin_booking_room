<?php

class DbOperation
{
    //Database connection link
    private $con;

    //Class constructor
    function __construct()
    {
        //Getting the DbConnect.php file
        require_once dirname(__FILE__) . '/DbConnect.php';

        //Creating a DbConnect object to connect to the database
        $db = new DbConnect();

        //Initializing our connection link of this class
        //by calling the method connect of DbConnect class
        $this->con = $db->connect();
    }

    //storing token in database 
    public function registerDevice($nim,$namaUser,$nohp,$password,$token ){
        if(!$this->isUsernameExist($nim)){
            $stmt = $this->con->prepare("INSERT INTO users (nim, namaUser, nohp, password, token) VALUES (?,?,?,?,?) ");
            $stmt->bind_param("sssss",$nim,$namaUser,$nohp,$password,$token);
            if($stmt->execute())
                return 0; //return 0 means success
            return 1; //return 1 means failure
        }else{
            return 2; //returning 2 means nim already exist
        }
    }

    //the method will check if nim already exist 
    private function isUsernameexist($nim){
        $stmt = $this->con->prepare("SELECT idUsers FROM users WHERE nim = ?");
        $stmt->bind_param("s",$nim);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

    //getting all tokens to send push to all users
    public function getAllTokens(){
        $stmt = $this->con->prepare("SELECT token FROM users");
        $stmt->execute(); 
        $result = $stmt->get_result();
        $tokens = array(); 
        while($token = $result->fetch_assoc()){
            array_push($tokens, $token['token']);
        }
        return $tokens; 
    }

    //getting a specified token to send push to selected device
    public function getTokenByUsername($nim){
        $stmt = $this->con->prepare("SELECT token FROM users WHERE nim = ?");
        $stmt->bind_param("s",$nim);
        $stmt->execute(); 
        $result = $stmt->get_result()->fetch_assoc();
        return array($result['token']);        
    }

    //getting all the registered users from database 
    public function getAllDevices(){
        $stmt = $this->con->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result; 
    }

        //getting all the registered users from database 
    public function getAllUsers(){
        $stmt = $this->con->prepare("SELECT * FROM rooms");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result; 
    }

        //storing token in database 
    public function pushBooking($nimBooking,$namaPembooking,$namaRuangBooking,$tanggal,$jamMulai,$jamSelesai,$keterangan){
        if(!$this->isnamaRuangBookingExist($nimBooking)){
            $stmt = $this->con->prepare("INSERT INTO bookings (nimBooking,namaPembooking, namaRuangBooking, tanggal, jamMulai, jamSelesai, keterangan ) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssss",$nimBooking,$namaPembooking,$namaRuangBooking,$tanggal,$jamMulai,$jamSelesai,$keterangan);
            if($stmt->execute())
                return 0; //return 0 means success
            return 1; //return 1 means failure
        }else{
            return 2; //returning 2 means nim already exist
        }
    }

        //the method will check if nim already exist 
    private function isnamaRuangBookingExist($nimBooking){
        $stmt = $this->con->prepare("SELECT nimBooking FROM bookings WHERE nimBooking = ?");
        $stmt->bind_param("s",$nimBooking);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }


            //storing token in database 
    public function createRoom($namaRoom,$kapasitas,$fasilitas1,$fasilitas2,$fasilitas3,$fasilitas4,$deskripsi){
        if(!$this->isnamaRuangExist($namaRoom)){
            $stmt = $this->con->prepare("INSERT INTO rooms (namaRoom,kapasitas,fasilitas1,fasilitas2,fasilitas3, fasilitas4, deskripsi) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssss",$namaRoom,$kapasitas,$fasilitas1,$fasilitas2,$fasilitas3,$fasilitas4,$deskripsi);
            if($stmt->execute())
                return 0; //return 0 means success
            return 1; //return 1 means failure
        }else{
            return 2; //returning 2 means nim already exist
        }
    }

        //the method will check if nim already exist 
    private function isnamaRuangExist($namaRoom){
        $stmt = $this->con->prepare("SELECT * FROM rooms WHERE namaRoom = ?");
        $stmt->bind_param("s",$namaRoom);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

        //getting all the registered users from database 
    public function getAllBookings(){
        $stmt = $this->con->prepare("SELECT * FROM bookings");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result; 
    }


            //getting all the registered users from database 
    public function getAllBookingsa(){
        $stmt = $this->con->prepare("SELECT * FROM bookings WHERE nimBooking = $nimBooking");
        $stmt->bind_param("s");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result; 
    }



    public function addAdmin($idAdmin,$password){
        if(!$this->isAdminExist($idAdmin)){
            $stmt = $this->con->prepare("INSERT INTO admin (idAdmin,password) VALUES (?,?)");
            $stmt->bind_param("ss",$idAdmin,$password);
            if($stmt->execute())
                return 0; //return 0 means success
            return 1; //return 1 means failure
        }else{
            return 2; //returning 2 means nim already exist
        }
    }

        private function isAdminExist($idAdmin){
        $stmt = $this->con->prepare("SELECT * FROM admin WHERE idAdmin = ?");
        $stmt->bind_param("s",$idAdmin);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }


            //getting all the registered users from database 
    public function getAllAdmins(){
        $stmt = $this->con->prepare("SELECT * FROM admin");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result; 
    }



}