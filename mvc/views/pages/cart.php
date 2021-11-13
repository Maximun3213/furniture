<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <?php
                  if($data['amountProduct'] > 0){
                  $subTotal = 0.00;
                  $total = 0.00;
                ?>
                <div class="col-lg-12">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Unit Price</th>
                                    <th>Quantity</th>
                                    <th>Update</th>
                                    <th>Subtotal</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while ($row = mysqli_fetch_assoc($data['show'])){

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
                                            <img src="<?=PD_PATH?><?php echo $row2["pd_id"] ?>.jpg" alt="" style="width: 160px;">
                                        </div>
                                    </td>
                                    <td style="width: 335px;">
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $row2['pd_name']?></h6>
                                        </div>
                                    </td>
                                    <td style="width: 200px;">
                                        <div class="product__cart__item__text">
                                            <h5><?php echo number_format($row2['pd_price'],0)?> VND</h5>
                                        </div>
                                    </td>
                                    <form method="POST" action="./updateProductCart">
                                        <td class="quantity__item">
                                            <div class="quantity">
                                                <div class="pro-qty-2">
                                                    <input type="text" name="c_quantity" value="<?php echo $row['cd_quantity']?>" min="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width: 200px;">
                                        <input type="submit" value="Update" class="btn btn-secondary">
                                        <input type='hidden' name='pd_id' value="<?php echo $row["cd_pd_id"] ?>" />
                                        </td>
                                    </form>
                                    <td class="cart__price" style="width: 260px;"><?php echo number_format(($row2["pd_price"] * $row['cd_quantity']),0) ?> VND</td>
                                    <td class="cart__close">
                                        <form method="POST" action="./deleteProductCart">
                                            <input type="submit" name="remove" value="Remove" class="btn btn-danger">
                                            <input type='hidden' name='pd_id' value="<?php echo $row["cd_pd_id"] ?>" />
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <p class="total">TOTAL: <?php echo number_format($subTotal,0);?>&nbsp;VND</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="./shop.php">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="../checkout/showCheckout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>CHECK ORDER</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    else {
                    ?>
                    <br><br><br><br>
                    <h2 style ="text-align: center;">Your cart is currently empty!</h2>
                    <?php
                    }
                ?>
            </div>
        </div>
    </section>
</body>
</html>


