<?php
  class search extends controller{

    public function show(){
      $search = addslashes($_POST['key']);
      $num = mysqli_num_rows($this->model('searchModel')->selectProductSearch($search));
      $sql = $this->model('searchModel')->selectProductSearch($search);


      $data = [];
      while ($row = mysqli_fetch_array($sql, 1)) {
        $data[] = $row;

      }
      $this->views("main", [
        "title" => "Search",
        "page" => "search",
        "num" => $num,
        "data" => $data
      ]);
    }
  }
?>