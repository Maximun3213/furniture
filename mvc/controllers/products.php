<?php
  class products extends controller{

    function show(){
      // Gọi tới cơ sở dữ liệu cart
      $this->userModel = $this->model("userModel");
      $this->cartModel = $this->model("cartModel");

      if(isset($_SESSION['U_fullname'])){
        $username = $_SESSION['U_fullname'];

        $rs = $this->userModel->selectCartUser($username);
        // $user = mysqli_fetch_array($rs);
        // echo $user[0];
        // dung de tao lai session cart hien thi tren icon cart(0);
        $cnt = 0;
        // echo $rs[0];
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
      //Model
      $p = $this->model("productModel");

      //View
      $this->views("main", [
        "title" => "Product",
        "page" => "shop",
        "allProduct" => $p -> allProduct(),
        "tableProduct" => $p -> tableProduct(),
        "chairProduct" => $p -> chairProduct(),
        "bedProduct" => $p -> bedProduct(),
        "lampProduct" => $p -> lampProduct()
      ]);
    }
  }

?>