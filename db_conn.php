<?php
$host = "localhost";
$username = "root";
$password = "123wxcAZEF@";
$db_name = "raspberry";

// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);
if ($conn) {
  echo "Connected";
}
// Check connection
if (!$conn) {
  echo "Connected failed";
}
?>

