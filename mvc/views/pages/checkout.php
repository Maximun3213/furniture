<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <?php
                    //Lấy id cart user
                    $user = $data['userCart'];

                    $r = $this->model("userModel")->selectCheckoutUser($user[0]);
                    while ($row = mysqli_fetch_assoc($r)){
                ?>
                <form action="../updateAddress/update" method="POST">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">INVOICE INFORMATION</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Name<span>*</span></p>
                                        <input type="text" style="color: #000;" value="<?php echo $row['U_name'] ?>"  name="fname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone number<span>*</span></p>
                                        <input type="text" style="color: #000;" value="<?php echo $row['U_tel'] ?>" name="p_number">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="text" style="color: #000;" value="<?php echo $row['U_email'] ?>" name="email">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" name="address" placeholder="Enter your address" class="checkout__input__add color__black" style="color: #000;">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>District<span>*</span></p>
                                        <!-- <select type="text" class="checkout__input__add"> -->
                                        <select name="district" id="district" class="checkout__input__add select__btn" style="border: 1px solid #e1e1e1; font-size: 16px;">
                                            <option value="">Choose province</option>
                                        </select>
                                        <script>
                                        $(document).ready(function(){
                                            jQuery('#province').change(function(event){
                                                console.log('hello');
                                                var id = jQuery(this).val();
                                                $.post('http://localhost/FS-MVC/district/showDistrict', {'id': id}, function(data){
                                                    $("#district").html(data);
                                                });
                                            });
                                        });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Province<span>*</span></p>
                                        <select name="province" id="province" class="checkout__input__add select__btn" style="border: 1px solid #e1e1e1; font-size: 16px;">
                                            <option value="">Select Province</option>
                                            <?php
                                                $result = $data['provice'];

                                                while ($row = mysqli_fetch_assoc($result)){
                                                echo "<option value='" .$row['province_id'] . "'>" . $row['province_name'] ."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="site-btn" style="float: right; margin-top: 20px;">UPDATE INFORMATION</button>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order" style="background-color: #fff; padding: 0px;">
                                <img src="<?=IMG_PATH?>banner/banner1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                    }
                    $result = $this->model("userModel")->selectCheckoutUser($user[0]);
                    while ($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="checkout__title">YOUR BILL</h6>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Name: <?php echo $row['U_name'] ?></p>
                            </div>
                            <div class="col-lg-12">
                                <p>Phone number: <?php echo $row['U_tel'] ?></p>
                            </div>
                            <div class="col-lg-12">
                                <p>Email: <?php echo $row['U_email'] ?></p>
                            </div>
                            <?php
                                }
                                $ex_q3 = $this->model("userModel")->selectAddress($user[0]);
                                while ($rs3 = mysqli_fetch_assoc($ex_q3)){
                                    $dis_id =  $rs3['ad_district_id'];
                                    $ex_q4 = $this->model('userModel')->selectDistrictName($dis_id);
                                    $rs4 = mysqli_fetch_array($ex_q4);

                                    $ex_q5 = $this->model('userModel')->selectProvinceName($dis_id);
                                    $rs5 = mysqli_fetch_array($ex_q5);
                            ?>
                            <div class="col-lg-12">
                                <p>Address: <?php echo $rs3['ad_address']?>, <?php echo $rs4[0]?>, <?php echo $rs5[0]?></p>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shopping__cart__table">
                        <?php
                            $exe_q1 = $this->model('cartModel')->selectCartItem($user[0]);
                            if(mysqli_num_rows($exe_q1) > 0){
                            $subTotal = 0.00;
                            $total = 0.00;
                        ?>
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    while ($row = mysqli_fetch_assoc($exe_q1)){
                                    $pd_id = $row['cd_pd_id'];
                                    $exe_q2 = $this->model('cartModel')->selectProduct($pd_id);
                                    $row2 = mysqli_fetch_array($exe_q2);

                                    $discount = 1.0;
                                    $subTotal += ($row2["pd_price"] * $row['cd_quantity']);
                                    $total = $subTotal * $discount;
                                ?>
                                    <tr>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="<?=PD_PATH?><?php echo $row2["pd_id"] ?>.jpg" alt="">
                                            </div>
                                        </td>
                                        <td style="width: 335px;">
                                            <div class="product__cart__item__text">
                                                <h6><?php echo $row2['pd_name']?></h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product__cart__item__text">
                                                <h5><?php echo number_format($row2['pd_price'],0)?></h5>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product__cart__item__text">
                                                <h5><?php echo $row['cd_quantity']?></h5>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product__cart__item__text">
                                                <h5><?php echo number_format(($row2["pd_price"] * $row['cd_quantity']),0) ?></h5>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <p class="total">TOTAL: <?php echo number_format($subTotal,0);?>&nbsp;VND</p>
                        <div class="checkout__order order__btn">
                            <a href="../order/orderProcess">
                                <button type="submit" class="site-btn" onclick="final()">ORDER</button>
                                <script>
                                    function final(){
                                        alert("Thanks for your order");
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </section>
    <!-- Checkout Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form" action="search.php?" method="GET">
                <input type="text" id="search-input" name="key" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->
</body>

</html>