<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h1>There has been a problem with you loging in, please retry in few minutes</h1>
    <?php if(isset($_SESSION["user_id"])):
        header("Location: ../home.php");
        ?>

    <?php else:?>
        <em><a href="../index.php">Try to login agan</a></em>
    <?php endif; ?>
</body>
</html>