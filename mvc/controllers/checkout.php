<?php
  class checkout extends controller {
    public $cartModel;
    public $userModel;

    public function __construct(){
      // Gọi tới cơ sở dữ liệu cart
      $this->userModel = $this->model("userModel");
      $this->cartModel = $this->model("cartModel");

      // if(isset($_SESSION['U_fullname'])){
      //   $username = $_SESSION['U_fullname'];

      //   $rs = $this->userModel->selectCartUser($username);
      //   $cnt = 0;

      //   $rs = $this->cartModel->selectCart($rs[0]);

      //   while ($row = mysqli_fetch_array($rs)){
      //     $_SESSION['cart'][$cnt] =array(
      //       'pd_name'=>$row['pd_name'],
      //       'pd_id'=>$row['cd_pd_id'],
      //       'pd_price'=>$row['pd_price'],
      //       'pd_quantity'=>$row['cd_quantity'],
      //       'pd_img'=>$row['pd_img']);
      //     $cnt+=1;
      //   }
      // }
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