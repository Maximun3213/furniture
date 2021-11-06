<?php
  class productModel extends db{
    public function getProduct() {
      //Connect database
      return "aaa";
    }
    public function totalProduct($n, $m) {
      return $n + $m;
    }

    public function allProduct(){
      $qr = "SELECT pd_id, pd_name, pd_price FROM product";
      return mysqli_query($this->con, $qr);
    }

    public function tableProduct(){
      $qr = "SELECT pd_id, pd_name, pd_price, pd_img FROM product WHERE pd_id LIKE 'T%'";
      return mysqli_query($this->con, $qr);
    }

    public function chairProduct(){
      $qr = "SELECT pd_id, pd_name, pd_price, pd_img FROM product WHERE pd_id LIKE 'C%'";
      return mysqli_query($this->con, $qr);
    }

    public function bedProduct(){
      $qr = "SELECT pd_id, pd_name, pd_price, pd_img FROM product WHERE pd_id LIKE 'B%'";
      return mysqli_query($this->con, $qr);
    }

    public function lampProduct(){
      $qr = "SELECT pd_id, pd_name, pd_price, pd_img FROM product WHERE pd_id LIKE 'L%'";
      return mysqli_query($this->con, $qr);
    }
  }
?>