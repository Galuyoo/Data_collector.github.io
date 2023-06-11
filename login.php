<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="vewport" content="width=device-width, initial-scale=1.0">   
        <title>
            login
        </title>
        <link rel="stylesheet" href="./static/login.css">
    </head>
    <body>
        <div class="banner">
            <div class="logo_buttons">
                <img src="./static/agamine_logo.png" class="logo">
                <ul>
                    <li><a href="index.php">home</a></li>
                </ul>
            </div>
            <div class="form-box">
                <form action="test_.php" class="input-group" method="post">
                    <?php if(isset($_GET['error'])) { ?>
                        <p class="error"> <?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <input  type="text" class="input-field" placeholder="user name" name="username" style="color:#fff;"
                    required>
                    <input type="password" class="input-field" placeholder="pass word" name="password" required>
                    <ul>
                        <li><a href="signup.php">did you forget your password ?</a></li>
                    </ul>
                    <!--<input type="checkbox" class="check-box"><snap>did you forget your pass word ?</snap>-->
                    <!--<button type="submit" class="submit-btn">log in</button>-->
                    <input type="submit" class="submit-btn" value="login">
                </form>  
            </div>
        </div>
        
    </body>
</html>