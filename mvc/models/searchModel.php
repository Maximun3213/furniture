<?php
  class searchModel extends db {
    public function selectProductSearch($search){
      $qr = "SELECT * FROM Product where pd_name like'%$search%' ";
      return mysqli_query($this->con, $qr);
    }
  }
?>