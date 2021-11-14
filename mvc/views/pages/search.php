<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Male_Fashion Template" />
    <meta name="keywords" content="Male_Fashion, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  </head>

  <body>
    <section class="shop spad">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <?php
                  if ($data['num'] > 0){
                ?>
                <div class="row product__filter">
                  <?php
                    foreach($data['data'] as $item){
                      $price__format = number_format($item["pd_price"]);
                  ?>
                  <div class="col-lg-3 col-md-6 col-sm-6 mix all">
                      <form action="./cart/addCart" method="POST">
                          <div class="product__item">
                              <div class="product__item__pic set-bg" data-setbg="<?=PD_PATH?><?php echo $item["pd_id"] ?>.jpg">
                              </div>
                              <div class="product__item__text">
                                  <h6><?php echo $item["pd_name"]?></h6>
                                  <button href="#" class="add-cart">+ Add To Cart</button>
                                  <div class="detail">
                                    <p>Amount:<input type="number" min=1 value='0' name='quantity' class="btn__sl"></p>
                                  </div>
                                  <input type="hidden" name="pd_id" value=<?php echo $item["pd_id"]?>>
                                  <h5>Price: <?php echo $price__format?> VND</h5>
                              </div>
                          </div>
                      </form>
                  </div>
                  <?php
                  }
                  } else {
                    echo '<h3>No product were found.</h3>';
                  }
                  ?>
                </div>
            </div>
          </div>
      </div>
    </section>
  </body>
  <!-- Search Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch">+</div>
      <form class="search-model-form" action="./search" method="GET">
        <input type="text" id="search-input" placeholder="Search here....." name="key"/>
      </form>
    </div>
  </div>
  <!-- Search End -->
</html>
