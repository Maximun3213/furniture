<?php
  class login extends controller{

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
        "title" => "Login",
        "page" => "login",
      ]);
    }

    public function loginProcess(){

      if(isset($_POST["btnLogin"])){

        $username = $_POST["U_fullname"];
        $_SESSION['U_fullname'] = $username;

        $psw = md5($_POST["U_psw"]);
        $_SESSION['U_psw'] = $psw;

        $kq = $this->userModel->authUser($username, $psw);

        // echo $kq;
        //Export view

        if ($kq == 'true') {
          echo "<script>alert(\"Login successful\")</script>";
          header ("Location: http://localhost/FS-MVC/home");
          // $this->views("main", [
          //   "title" => "Home page",
          //   "page" => "home",
          // ]);
        } else {
          echo "<script>alert(\"Wrong password or username\")</script>";
          header ("Location: http://localhost/FS-MVC/login");
          // $this->views("main", [
          //   "title" => "Login",
          //   "page" => "login",
          // ]);
          // $this->show();
        }
      }
    }
  }
?>