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
    <!-- Header Section End -->
    <section class="checkout spad">
      <div class="container">
        <div class="checkout__form">
          <form action="./login/loginProcess" method="POST">
            <div class="row">
              <div class="col-lg-8 col-md-6">
                <h3 class="checkout__title">Log In</h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="checkout__input">
                      <p>Username<span>*</span></p>
                      <input type="text" name="U_fullname" required/>
                    </div>
                  </div>
                </div>
                <div class="checkout__input">
                  <p>Password<span>*</span></p>
                  <input type="password" name="U_psw" required/>
                </div>
                <div class="group">
                  <p>If you don't have account? <a href="http://localhost/FS-MVC/register">Register</a></p>
                  <button type="submit" class="site-btn" name="btnLogin">Log in</button>
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
          <form class="search-model-form" action="./search" method="POST">
            <input type="text" id="search-input" placeholder="Search here....." name="key"/>
          </form>
      </div>
    </div>
    <!-- Search End -->
  </body>
</html>
