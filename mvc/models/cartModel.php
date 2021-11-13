<?php
  class cartModel extends db {

    // neu ton tai pd_id trong cart
    public function addCartDB($cd_quantity, $user, $pd_id){
      $qr = "UPDATE cart_item SET cd_quantity=$cd_quantity WHERE cd_uid ='".$user[0]."' and cd_pd_id='$pd_id'";
      mysqli_query($this->con, $qr);
    }

    // neu khong ton tai pd_id trong cart;
    public function selectProduct($id){
      $qr = "SELECT * FROM product WHERE pd_id='$id'";
      return mysqli_query($this->con, $qr);
    }

    //Insert product into cart db
    public function insertProduct($user, $pd_id2, $cd_quantity){
      $qr = "insert into cart_item values ('$user','$pd_id2','$cd_quantity')";
      return mysqli_query($this->con, $qr);
    }

    //Select cart of user
    public function selectCart($rs){
      $qr = "SELECT * from cart_item c join product p on p.pd_id=c.cd_pd_id where cd_uid='".$rs."'";
      return mysqli_query($this->con, $qr);
    }

    //Select cart of uid
    public function selectCartItem($user){
      $qr = "select * from cart_item where cd_uid='".$user."'";
      return mysqli_query($this->con, $qr);
    }

    //Update cart
    public function updateCart($quantity, $user, $id){
      $qr = "UPDATE cart_item SET cd_quantity = '$quantity' WHERE cd_pd_id='$id' and cd_uid='".$user."'";
      return mysqli_query($this->con, $qr);
    }

    //Delete cart
    public function deleteCart($user, $id){
      $qr = "DELETE FROM cart_item where cd_pd_id='$id' and cd_uid='".$user."'";
      return mysqli_query($this->con, $qr);
    }
  }
?>