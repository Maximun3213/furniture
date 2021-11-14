<?php
  class order extends controller{

    public $cartModel;
    public $userModel;

    public function __construct(){
      // Gọi tới cơ sở dữ liệu cart
      $this->userModel = $this->model("userModel");
      $this->cartModel = $this->model("cartModel");
    }

    public function orderProcess(){
      if (isset($_SESSION['cart'])){
        if (isset($_SESSION['U_fullname'])){
          $session_user = $_SESSION['U_fullname'];
          $user = $this->userModel->selectIdUser($session_user);

          while ($check = mysqli_fetch_array($user)){

              $rs1 = $this->userModel->selectIdUser($check[0]);

              if ($rs1){
                  foreach ($_SESSION['cart'] as $key => $value){
                      if(isset($_SESSION['cart'][$key]['pd_id'])){
                          $max = $this->userModel->selectMaxOrder();
                          while ($row = mysqli_fetch_array($max)){
                              $order_id = $row[0];
                          }
                          $pd_id = $_SESSION['cart'][$key]['pd_id'];
                          $pd_quantity = $_SESSION['cart'][$key]['pd_quantity'];

                          $process = $this->userModel->InsertOrderFinal($order_id, $pd_id, $pd_quantity);
                      }
                  }
              }
              unset($_SESSION['cart']);
              $process = $this->cartModel->UnsetCart($check[0]);
              $r = $this->userModel->selectEmail($check[0]);
              while ($row4 = mysqli_fetch_array($r)) {
                  $_SESSION['email'] = $row4[0];
                  header("location: http://localhost/FS-MVC/sendMail/send");
              }
          }

        }
        else {
          header("location: http://localhost/FS-MVC/login");
        }
      }
      else {
        header("location: http://localhost/FS-MVC/cart/showCart");
      }
    }
  }
?>