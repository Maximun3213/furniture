<?php

  class userModel extends db {

    public function insertNewUser($username, $psw_hash, $name, $tel, $email) {
      $qr = "INSERT INTO info_user (U_fullname, U_password, U_name, U_tel, U_email) VALUES ('".$username."','".$psw_hash."','".$name."','".$tel."','".$email."')";

      if(mysqli_query($this->con, $qr)){
        $result = true;
      }
      return json_encode($result);
    }

    public function authUser($username, $psw) {

      $qr = "SELECT * FROM info_user
      WHERE U_fullname = '".$username."'
      AND U_password = '".$psw."'";
      $kq = mysqli_query($this->con, $qr);

      $data = array();
      while($row = mysqli_fetch_array($kq,1)) {
        $data[] = $row;
      }

      if ($data != null && count($data) > 0) {
        $result = true ;
        // echo "Đúng";
      }
      else {
        $result = false ;
        // echo "Sai";
      }

      return json_encode($result) ;
    }

    public function selectCartUser($name){
      $qr = "SELECT u_id FROM info_user WHERE u_fullName = '$name'";
      $kq = mysqli_query($this->con, $qr);
      $user = mysqli_fetch_array($kq);
      return $user;
    }
  }
?>