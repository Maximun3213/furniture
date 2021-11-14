<?php
  class checkout extends controller {
    public $cartModel;
    public $userModel;

    public function __construct(){
      // Gọi tới cơ sở dữ liệu cart
      $this->userModel = $this->model("userModel");
      $this->cartModel = $this->model("cartModel");

    }

    public function showCheckout(){
      if(isset($_SESSION['U_fullname'])){
        $username = $_SESSION['U_fullname'];

        $qr1 = $this->userModel->selectCartUser($username);

        $provice = $this->userModel->selectProvice();

        $this->views("main", [
          "title" => "Checkout",
          "page" => "checkout",
          "userCart" => $qr1,
          "provice" => $provice
          ]);
      }
    }
  }
?>