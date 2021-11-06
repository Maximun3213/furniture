<?php

class db{

  public $con;
  protected $servername = "localhost";
  protected $username = "root";
  protected $password = "dat123";
  protected $database = "furniture";

  function __construct(){
    $this->con = mysqli_connect($this->servername, $this->username, $this->password);
    mysqli_select_db($this->con, $this->database);
    mysqli_query($this->con, "SET NAMES 'utf8'");
  }
}

?>