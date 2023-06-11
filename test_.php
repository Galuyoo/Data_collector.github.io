<?php
session_start();
include "db_conn.php";

if(isset($_POST['username']) && isset($_POST['password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
} 

$username = validate($_POST['username']);
$password = validate($_POST['password']);

/*if(empty($username))
{
    header ("Location: login.php?error=user name is required");
    exit();
}
else if(empty($password)) 
{
    header ("Location: login.php?error=password is required");
    exit();
}*/

$sql = "SELECT * FROM login WHERE username='".$username."' AND password='".$password."'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1)
{
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $username && $row['password'] === $password)
    {
        //echo "logged in !";
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit(); 
    }
    else
    {
        header("Location: login.php?error=Incorrect user name or password");
        exit(); 
    }
}
else
{
    header("Location: login.php?error=Incorrect user name or password");
    exit();
}
function logout()
{
   $_SESSION['logged_in'] = null;
   // empty($null_variable) is true but isset($null_variable) is also true so using unset too as a safeguard for further codes
   unset($_SESSION['logged_in']);
   // Note that the script continues running since it may be a part of an ajax request and the rest handled in the client side.
}
