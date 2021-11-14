<?php
  class updateAddress extends controller {

    public function __construct(){
      // Gọi tới cơ sở dữ liệu cart
      $this->userModel = $this->model("userModel");
      $this->cartModel = $this->model("cartModel");

    }

    public function update(){
      if($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['fname'];
        $p_num = $_POST['p_number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        if (isset($_POST['district']))
            $district = $_POST['district'];
        $exe_q1 = $this->userModel->selectDistrictID($district);
        $rsq1 = mysqli_fetch_array($exe_q1);
        while($rsq1 = mysqli_fetch_array($exe_q1)){
          $exe_q1 = $this->userModel->insertAddress($rsq1[0]);
        }

        if(!empty($name) && !empty($p_num) && !empty($email)){

            if(isset($_SESSION['U_fullname'])){
                $username = $_SESSION['U_fullname'];
                $rs = $this->userModel->selectIdUser($username);

                while ($user = mysqli_fetch_array($rs)){
                  $result = $this->userModel->updateInfoUser($name, $p_num, $email, $user[0]);
                  if(!empty($address) && !empty($district)){
                    $rs2 = $this->userModel->insertNewAddress($user[0],$address, $district);
                  }

                }
            }

            echo "<script>
                window.location.href= history.back();
            </script>";
            die;

        }
        else {
            echo "<script>
                alert('Please enter some valid information!');
                window.location.href= history.back();
            </script>";
        }
    }
    }
  }
?>