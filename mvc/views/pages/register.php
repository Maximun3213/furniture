<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Male_Fashion Template" />
    <meta name="keywords" content="Male_Fashion, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/myStyle.css" type="text/css" />
  </head>

  <body>
    <!-- Header Section End -->
    <section class="checkout spad">
      <div class="container">
        <div class="checkout__form">
          <form action="./register/registerProcess" method="POST">
            <div class="row">
              <div class="col-lg-8 col-md-6">
                <h3 class="checkout__title">Log In</h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="checkout__input">
                      <p>Account Name<span>*</span></p>
                      <input type="text" name="U_fullname"/>
                    </div>
                  </div>
                </div>
                <div class="checkout__input">
                  <p>Password<span>*</span></p>
                  <input type="password" name="U_psw"/>
                </div>
                <div class="checkout__input">
                  <p>Full name<span>*</span></p>
                  <input type="text" name="U_name"/>
                </div>
                <div class="checkout__input">
                  <p>Phone number<span>*</span></p>
                  <input type="text" name="U_tel"/>
                </div>
                <div class="checkout__input">
                  <p>Email<span>*</span></p>
                  <input type="email" name="U_email"/>
                </div>
                <div class="group">
                  <p>If you have account? <a href="http://localhost/FS-MVC/login">Log in</a></p>
                  <button type="submit" class="site-btn" name="btnRegister">Register</button>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form_img">
                  <img src="<?=IMG_PATH?>banner/banner1.jpg" alt="" />
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

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
