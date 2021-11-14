<?php
  $config['base_url'] = 'http://localhost/FS-MVC/';
  define('CSS_PATH', 'http://localhost/FS-MVC/public/css/');
  define('JS_PATH', 'http://localhost/FS-MVC/public/js/');
  define('IMG_PATH', 'http://localhost/FS-MVC/public/IMG/');
  define('PD_PATH', 'http://localhost/FS-MVC/public/IMG/products/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet"
  />

  <!-- Css Styles -->
  <link
    rel="stylesheet"
    href="<?=CSS_PATH?>bootstrap.min.css"
    type="text/css"
  />
  <link
    rel="stylesheet"
    href="<?=CSS_PATH?>font-awesome.min.css"
    type="text/css"
  />
  <link
    rel="stylesheet"
    href="<?=CSS_PATH?>elegant-icons.css"
    type="text/css"
  />
  <link
    rel="stylesheet"
    href="<?=CSS_PATH?>magnific-popup.css"
    type="text/css"
  />
  <link
    rel="stylesheet"
    href="<?=CSS_PATH?>nice-select.css"
    type="text/css"
  />
  <link
    rel="stylesheet"
    href="<?=CSS_PATH?>font-awesome.min.css"
    type="text/css"
  />
  <link
    rel="stylesheet"
    href="<?=CSS_PATH?>owl.carousel.min.css"
    type="text/css"
  />
  <link
    rel="stylesheet"
    href="<?=CSS_PATH?>slicknav.min.css"
    type="text/css"
  />
  <link rel="stylesheet" href="<?=CSS_PATH?>style.css" type="text/css" />
  <link
    rel="stylesheet"
    href="<?=CSS_PATH?>myStyle.css"
    type="text/css"
  />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <title><?php echo $data["title"] ?></title>
</head>
<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Offcanvas Menu Begin -->
  <div class="offcanvas-menu-overlay"></div>
  <!-- Offcanvas Menu End -->

  <!-- Header Section Begin -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="header__logo">
            <a href="./index.html"
              ><img src="<?=IMG_PATH?>logo.png" alt=""
            /></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <nav class="header__menu mobile-menu">
            <ul>
              <li><a href="http://localhost/FS-MVC/home">Home</a></li>
              <li><a href="http://localhost/FS-MVC/products">Products</a></li>
              <?php
                if(isset($_SESSION['U_fullname'])){
                  echo '
                  <li><a href="http://localhost/FS-MVC/logout">Log out</a></li>
                  ';
                }else{
                  echo '
                  <li><a href="#">Auth</a>
                      <ul class="dropdown">
                          <li><a href="http://localhost/FS-MVC/login">Login</a></li>
                          <li><a href="http://localhost/FS-MVC/register">Register</a></li>
                      </ul>
                  </li>';
                }
              ?>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="header__nav__option">
            <a href="#" class="search-switch"
              ><img src="<?=IMG_PATH?>icon/search.png" alt=""
            /></a>
            <a href="http://localhost/FS-MVC/cart/showCart"
              ><img src="<?=IMG_PATH?>icon/cart.png" alt="" />
              <span>0</span></a
            >
            <div class="price">$0.00</div>
          </div>
        </div>
      </div>
      <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
  </header>
  <!-- Header Section End -->
  <h3>
    <?php
      require_once "./mvc/views/pages/".$data["page"].".php";
    ?>
  </h3>
  <!-- Footer Section Begin -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer__about">
            <div class="footer__logo">
              <a href="#"
                ><img src="<?=IMG_PATH?>footer-logo.png" alt=""
              /></a>
            </div>
            <p>
              The customer is at the heart of our unique business model, which
              includes design.
            </p>
            <a href="#"><img src="<?=IMG_PATH?>payment.png" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
          <div class="footer__widget">
            <h6>Shopping</h6>
            <ul>
              <li><a href="#">Chair</a></li>
              <li><a href="#">Table</a></li>
              <li><a href="#">Bed</a></li>
              <li><a href="#">Lamp</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <div class="footer__widget">
            <h6>Shopping</h6>
            <ul>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Payment Methods</a></li>
              <li><a href="#">Delivary</a></li>
              <li><a href="#">Return & Exchanges</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
          <div class="footer__widget">
            <h6>NewLetter</h6>
            <div class="footer__newslatter">
              <p>
                Be the first to know about new arrivals, look books, sales &
                promos!
              </p>
              <form action="#">
                <input type="text" placeholder="Your email" />
                <button type="submit">
                  <span class="icon_mail_alt"></span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!-- Footer Section End -->

  <!-- Js Plugins -->
  <script src="<?=JS_PATH?>jquery-3.3.1.min.js"></script>
  <script src="<?=JS_PATH?>bootstrap.min.js"></script>
  <script src="<?=JS_PATH?>jquery.nicescroll.min.js"></script>
  <script src="<?=JS_PATH?>jquery.magnific-popup.min.js"></script>
  <script src="<?=JS_PATH?>jquery.slicknav.js"></script>
  <script src="<?=JS_PATH?>mixitup.min.js"></script>
  <script src="<?=JS_PATH?>owl.carousel.min.js"></script>
  <script src="<?=JS_PATH?>main.js"></script>
</body>
</html>