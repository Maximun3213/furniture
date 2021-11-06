<?php
  class home extends controller{
    function show() {

      //Model
      $p = $this->model("productModel");
      // echo $p->getProduct();
      // $tong = $p->totalProduct($a, $b);

      //View
      $this->views("main", [
        "title" => "Home Page",
        "page" => "home",
        "product" => $p -> allProduct()
        // "number"=>$tong
      ]);
    }
  }
?>