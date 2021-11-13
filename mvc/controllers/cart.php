<?php

  class cart extends controller {

    public $cartModel;
    public $userModel;

    public function __construct(){
      // Gọi tới cơ sở dữ liệu cart
      $this->userModel = $this->model("userModel");
      $this->cartModel = $this->model("cartModel");

      if(isset($_SESSION['U_fullname'])){
        $username = $_SESSION['U_fullname'];

        $rs = $this->userModel->selectCartUser($username);
        $cnt = 0;

        $rs = $this->cartModel->selectCart($rs[0]);

        while ($row = mysqli_fetch_array($rs)){
          $_SESSION['cart'][$cnt] =array(
            'pd_name'=>$row['pd_name'],
            'pd_id'=>$row['cd_pd_id'],
            'pd_price'=>$row['pd_price'],
            'pd_quantity'=>$row['cd_quantity'],
            'pd_img'=>$row['pd_img']);
          $cnt+=1;
        }
      }
    }

    public function addCart(){
      error_reporting(0);
      if(isset($_SESSION['U_fullname'])){

        $username = $_SESSION['U_fullname'];
        $user = $this->userModel->selectCartUser($username);

        $pd_id = $_POST['pd_id'];
        $soluong = $_POST['quantity'];
        if(isset($_SESSION['cart'])){
          $myCart=array_column($_SESSION['cart'],'pd_id');
          if(in_array($_POST['pd_id'],$myCart)){
            // neu ton tai pd_id trong cart
            foreach($_SESSION['cart'] as $key => $value){
              if($_POST['pd_id']==$value['pd_id']){
                if(isset($_POST['quantity'])){
                  $_SESSION['cart'][$key]['pd_quantity']+=$_POST['quantity'];
                  echo"<script>
                          alert('Product Added');
                          window.location.href= history.back();
                      </script>";
                  //update quantity trong db;
                  $cd_quantity = $_SESSION['cart'][$key]['pd_quantity'];
                  $pd_id = $_SESSION['cart'][$key]['pd_id'];
                  $addCart = $this->cartModel->addCartDB($cd_quantity, $user[0], $pd_id);
                }
              }
            }
          }else {
            // neu khong ton tai pd_id trong cart;
            if (isset($_POST['pd_id']) && $_POST['pd_id']!=""){
              $id = $_POST['pd_id'];
              $result = $this->cartModel->selectProduct($id);
              $row = mysqli_fetch_array($result);
              $name = $row['pd_name'];
              $id = $row['pd_id'];
              $price = $row['pd_price'];
              $image = $row['pd_img'];

              $count=count($_SESSION['cart']);

              $_SESSION['cart'][$count]=array(
                  'pd_name'=>$name,
                  'pd_id'=>$id,
                  'pd_price'=>$price,
                  'pd_quantity'=>$_POST['quantity'],
                  'pd_img'=>$image);
              echo"<script>
                      alert('Product Added');
                      window.location.href= history.back();
                  </script>";
              $cd_quantity = $_SESSION['cart'][$count]['pd_quantity'];
              $pd_id2 = $_SESSION['cart'][$count]['pd_id'];
              $result = $this->cartModel->insertProduct($user[0], $pd_id2, $cd_quantity);
              print_r($user[0]) ;
              echo $pd_id2;
              echo $cd_quantity;
            }
          }
        } else {
          if(isset($_POST['quantity'])){
            if (isset($_POST['pd_id']) && $_POST['pd_id']!=""){
              $id = $_POST['pd_id'];
              $result = $this->cartModel->selectProduct($id);
              $row = mysqli_fetch_array($result);
              $name = $row['pd_name'];
              $id = $row['pd_id'];
              $price = $row['pd_price'];
              $image = $row['pd_img'];

              $_SESSION['cart'][0]=array(
                  'pd_name'=>$name,
                  'pd_id'=>$id,
                  'pd_price'=>$price,
                  'pd_quantity'=>$_POST['quantity'],
                  'pd_img'=>$image);
              echo"<script>
                      alert('Product Added');
                      window.location.href= history.back();
                  </script>";
              $cd_quantity = $_SESSION['cart'][0]['pd_quantity'];
              $pd_id = $_SESSION['cart'][0]['pd_id'];
              $result = $this->cartModel->insertProduct($user[0], $pd_id, $cd_quantity);
            }
          }
        }
      } else {
        echo "<script>alert(\"You need to login\")</script>";
        header ("Location: http://localhost/FS-MVC/login");
      }
    }

    public function showCart(){
      if(isset($_SESSION['U_fullname'])){
        $username = $_SESSION['U_fullname'];

        //Select Id cart user
        $qr1 = $this->userModel->selectCartUser($username);

        //Select product in cart with id user
        $rs = $this->cartModel->selectCartItem($qr1[0]);

        //In ra số lượng product để biết có empty hay có hàng
        $amountProduct = mysqli_fetch_assoc($rs);

        $p = $this->cartModel;

        //Show ra giỏ hàng
        $this->views("main", [
        "title" => "Your cart",
        "page" => "cart",
        "amountProduct" => $amountProduct,
        "show" => $p -> selectCartItem($qr1[0]),
        "showProduct" => $rs ,
        ]);
      }
      else{
        echo "<script>alert(\"You need to login\")</script>";
        header ("Location: http://localhost/FS-MVC/login");
      }
    }

    public function updateProductCart(){
      if(isset($_POST['pd_id']) && $_POST['pd_id']!=""){
        if(isset($_SESSION['U_fullname'])){
          echo "hello";
          // luu vao database;
          $username = $_SESSION['U_fullname'];

          $user = $this->userModel->selectCartUser($username);
          if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $key => $value){
              if($value['pd_id']==$_POST['pd_id']){
                $_SESSION['cart'][$key]['pd_quantity']=$_POST['c_quantity'];

                $id = $_SESSION['cart'][$key]['pd_id'];
                $quantity = $_SESSION['cart'][$key]['pd_quantity'];

                //Update lại database cart
                $rs = $this->cartModel->updateCart($quantity, $user[0], $id);

                header("location: http://localhost/FS-MVC/cart/showCart");
              }
            }
          }
        }
      }
    }
  }
?>