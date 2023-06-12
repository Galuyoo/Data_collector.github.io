
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="./css/index.css" />
        <title>Sign in & Sign up Form</title>
    </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form href="./home.php" action="login.php" method="POST" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" id="user" name="user" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="pass" name="pass" autocomplete="current-password" required />
                    </div>
                <input type="submit" value="Login" class="btn solid" id="btn" />
                <p class="social-text">Or Check our social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon1">
                        <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon2">
                        <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon3">
                        <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon4">
                        <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
        </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon1">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon2">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon3">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon4">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
            Make sure to create an account to benefit from our exclusive offers.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
                If you already have an account make sure to login!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
