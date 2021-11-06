<?php
  class register extends controller{

    public $userModel;

    public function __construct(){
      $this->userModel = $this->model("userModel");
    }

    function show() {

      //Model
      // $p = $this->model("productModel");
      // echo $p->getProduct();
      // $tong = $p->totalProduct($a, $b);

      //View
      $this->views("main", [
        "title" => "Register",
        "page" => "register",
        // "number"=>$tong
      ]);
    }

    public function registerProcess(){
      //Get data
      if(isset($_POST["btnRegister"])){

        $username = $_POST['U_fullname'];
        $psw = md5($_POST['U_psw']) ;
        $name = $_POST['U_name'];
        $tel = $_POST['U_tel'];
        $email = $_POST['U_email'];

        //Insert data
        $kq = $this->userModel->insertNewUser($username, $psw, $name, $tel, $email);

        //Export view
        if($kq == true) {
          echo "<script>alert(\"Register successful\")</script>";
          $this->views("main", [
            "title" => "Login",
            "page" => "login",
          ]);
        }
      }
    }
  }
?>