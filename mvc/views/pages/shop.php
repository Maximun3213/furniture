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
    <!-- Shop Section Begin -->
    <section class="shop spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="shop__sidebar">
              <div class="shop__sidebar__search">
                <form action="#">
                  <input type="text" placeholder="Search..." />
                  <button type="submit">
                    <span class="icon_search"></span>
                  </button>
                </form>
              </div>
              <div class="shop__sidebar__accordion">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-heading">
                      <a data-toggle="collapse" data-target="#collapseOne"
                        >Categories</a
                      >
                    </div>
                    <div
                      id="collapseOne"
                      class="collapse show"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <div class="shop__sidebar__categories">
                          <ul class="nice-scroll">
                            <li class="active" data-filter=".all"><a href="#">All</a></li>
                            <li data-filter=".table"><a href="#">Table</a></li>
                            <li data-filter=".chair"><a href="#">Chair</a></li>
                            <li data-filter=".bed"><a href="#">Bed</a></li>
                            <li data-filter=".lamp"><a href="#">Lamp</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9" style="height: 800px; overflow-y: scroll;">
            <div class="shop__product__option">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="shop__product__option__left">
                    <p>Showing 1–12 of 126 results</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row product__filter">
              <?php
                while($row = mysqli_fetch_array($data["allProduct"])){
                  $price__format = number_format($row["pd_price"]);
              ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mix all">
                  <form action="./cart/addCart" method="post">
                    <div class="product__item sale">
                      <div
                        class="product__item__pic set-bg"
                        data-setbg="<?=PD_PATH?><?php echo $row["pd_id"] ?>.jpg"
                      >
                        <span class="label">Sale</span>
                      </div>
                      <div class="product__item__text">
                        <h6><?php echo $row["pd_name"] ?></h6>
                        <p>Amount:<input type="number" name='quantity' min='1'></p>
                        <input type="hidden" name="pd_id" value=<?php echo $row["pd_id"]?>>
                        <button type="submit" class="add-cart">+ Add To Cart</button>
                        <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <h5><?php echo $price__format ?> VND</h5>
                      </div>
                    </div>
                  </form>
                </div>
              <?php
              }
              while($row = mysqli_fetch_array($data["tableProduct"])){
                $price__format = number_format($row["pd_price"]);
              ?>
              <div class="col-lg-4 col-md-6 col-sm-6 mix table">
                <form action="./cart/addCart" method="post">
                  <div class="product__item sale">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="<?=PD_PATH?><?php echo $row["pd_id"] ?>.jpg"
                    >
                      <span class="label">Sale</span>
                    </div>
                    <div class="product__item__text">
                      <h6><?php echo $row["pd_name"] ?></h6>
                      <p>Amount:<input type="number" name='quantity'><p>
                      <input type="hidden" name="pd_id" value=<?php echo $row["pd_id"]?>>
                      <button type="submit" class="add-cart">+ Add To Cart</button>
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <h5><?php echo $price__format ?> VND</h5>
                    </div>
                  </div>
                </form>
              </div>
              <?php
              }
              while($row = mysqli_fetch_array($data["chairProduct"])){
                $price__format = number_format($row["pd_price"]);
              ?>
              <div class="col-lg-4 col-md-6 col-sm-6 mix chair">
                <form action="./cart/addCart" method="post">
                  <div class="product__item sale">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="<?=PD_PATH?><?php echo $row["pd_id"] ?>.jpg"
                    >
                      <span class="label">Sale</span>
                    </div>
                    <div class="product__item__text">
                      <h6><?php echo $row["pd_name"] ?></h6>
                      <p>Amount:<input type="number" name='quantity'></p>
                      <input type="hidden" name="pd_id" value=<?php echo $row["pd_id"]?>>
                      <button type="submit" class="add-cart">+ Add To Cart</button>
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <h5><?php echo $price__format ?> VND</h5>
                    </div>
                  </div>
                </form>
              </div>
              <?php
              }
              while($row = mysqli_fetch_array($data["bedProduct"])){
                $price__format = number_format($row["pd_price"]);
              ?>
              <div class="col-lg-4 col-md-6 col-sm-6 mix bed">
                <form action="./cart/addCart" method="post">
                  <div class="product__item sale">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="<?=PD_PATH?><?php echo $row["pd_id"] ?>.jpg"
                    >
                      <span class="label">Sale</span>
                    </div>
                    <div class="product__item__text">
                      <h6><?php echo $row["pd_name"] ?></h6>
                      <p>Amount:<input type="number" name='quantity'></p>
                      <input type="hidden" name="pd_id" value=<?php echo $row["pd_id"]?>>
                      <button type="submit" class="add-cart">+ Add To Cart</button>
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <h5><?php echo $price__format ?> VND</h5>
                    </div>
                  </div>
                </form>
              </div>
              <?php
              }
              while($row = mysqli_fetch_array($data["lampProduct"])){
                $price__format = number_format($row["pd_price"]);
              ?>
              <div class="col-lg-4 col-md-6 col-sm-6 mix lamp">
                <form action="./cart/addCart" method="post">
                  <div class="product__item sale">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="<?=PD_PATH?><?php echo $row["pd_id"] ?>.jpg"
                    >
                      <span class="label">Sale</span>
                    </div>
                    <div class="product__item__text">
                      <h6><?php echo $row["pd_name"] ?></h6>
                      <p>Amount:<input type="number" name='quantity'></p>
                      <input type="hidden" name="pd_id" value=<?php echo $row["pd_id"]?>>
                      <button type="submit" class="add-cart">+ Add To Cart</button>
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <h5><?php echo $price__format ?> VND</h5>
                    </div>
                  </div>
                </form>
              </div>
              <?php
              }
              ?>
            </div>
            <!-- <div class="row">
              <div class="col-lg-12">
                <div class="product__pagination">
                  <a class="active" href="#">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <span>...</span>
                  <a href="#">21</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Shop Section End -->

    <!-- Search Begin -->
    <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
          <input type="text" id="search-input" placeholder="Search here....." />
        </form>
      </div>
    </div>
    <!-- Search End -->

  </body>
</html>
