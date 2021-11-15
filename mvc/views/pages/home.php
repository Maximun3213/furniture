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
    <!-- Hero Section Begin -->
    <section class="hero">
      <div class="hero__slider owl-carousel">
        <div
          class="hero__items set-bg"
          data-setbg="<?=IMG_PATH?>banner/banner2.jpg"
        >
          <div class="container">
            <div class="row">
              <div class="col-xl-5 col-lg-7 col-md-8">
                <div class="hero__text">
                  <h6>Summer Collection</h6>
                  <h2>Fall - Winter Collections 2030</h2>
                  <a href="#" class="primary-btn"
                    >Shop now <span class="arrow_right"></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="hero__items set-bg"
          data-setbg="<?=IMG_PATH?>banner/banner3.jpg"
        >
          <div class="container">
            <div class="row">
              <div class="col-xl-5 col-lg-7 col-md-8">
                <div class="hero__text">
                  <h6>Summer Collection</h6>
                  <h2>Fall - Winter Collections 2030</h2>
                  <a href="#" class="primary-btn"
                    >Shop now <span class="arrow_right"></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad" style="margin-top: 90px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="banner__item banner__item--middle">
              <div class="banner__item__pic">
                <img src="<?=IMG_PATH?>banner/banner4.jpg" alt="" />
              </div>
              <div class="banner__item__text">
                <h2>Accessories</h2>
                <a href="#">Shop now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="banner__item banner__item--last">
              <div class="banner__item__pic">
                <img src="<?=IMG_PATH?>products/C02.jpg" alt="" />
              </div>
              <div class="banner__item__text">
                <h2>Shoes Spring 2030</h2>
                <a href="#">Shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner Section End -->
    <?php
      // while($row = mysqli_fetch_array($data["product"])){
      //   echo $row["pd_name"];
      // }
    ?>
    <!-- Product Section Begin -->
    <!-- <section class="product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="filter__controls">
              <li class="active" data-filter="*">Best Sellers</li>
              <li data-filter=".new-arrivals">New Arrivals</li>
              <li data-filter=".hot-sales">Hot Sales</li>
            </ul>
          </div>
        </div>
        <div class="row product__filter">
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales"
          >
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg="<?=IMG_PATH?>product/product-2.jpg"
              >
              </div>
              <div class="product__item__text">
                <h6>Piqué Biker Jacket</h6>
                <a href="#" class="add-cart">+ Add To Cart</a>
                <div class="rating">
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>$67.24</h5>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales"
          >
            <div class="product__item sale">
              <div
                class="product__item__pic set-bg"
                data-setbg="<?=IMG_PATH?>product/product-6.jpg"
              >
                <span class="label">Sale</span>
              </div>
              <div class="product__item__text">
                <h6>Ankle Boots</h6>
                <a href="#" class="add-cart">+ Add To Cart</a>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>$98.49</h5>
              </div>
            </div>
          </div>
          <div
            class="
              col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6
              mix
              new-arrivals
            "
          >
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg="<?=IMG_PATH?>product/product-7.jpg"
              >
              </div>
              <div class="product__item__text">
                <h6>T-shirt Contrast Pocket</h6>
                <a href="#" class="add-cart">+ Add To Cart</a>
                <div class="rating">
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>$49.66</h5>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales"
          >
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg="<?=IMG_PATH?>product/product-8.jpg"
              >
              </div>
              <div class="product__item__text">
                <h6>Basic Flowing Scarf</h6>
                <a href="#" class="add-cart">+ Add To Cart</a>
                <div class="rating">
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>$26.28</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Product Section End -->



    <!-- Search Begin -->
    <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" action="./search" method="POST">
          <input type="text" id="search-input" placeholder="Search here....." name="key"/>
        </form>
      </div>
    </div>
    <!-- Search End -->
  </body>
</html>
