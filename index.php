<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/php/conn.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password"])) {
            
            session_start();
            
            session_regenerate_id();
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: php/login.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

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
        <form method="POST" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="email" id="email" name="email" 
                        value="<?=htmlspecialchars($_POST["email"] ?? "")?>"
                        required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password" id="password" name="password" autocomplete="current-password" required/>
                    </div>
                <input type="submit" value="Login" class="btn solid" id="btn" />
                <?php if($is_invalid):?>
                       <em>Invalid login</em> 
                <?php endif; ?>
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
          <form action="./php/signup.php" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="name" id="name" name="name" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="email" id="email" name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="password" id="password" name="password" autocomplete="current-password" required/>
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

    <script src="./js/app.js"></script>
  </body>
</html>