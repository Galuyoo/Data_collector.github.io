<?php
$host = "localhost:3307";
$user = "root";
$password = '123wxcAZEF@';
$dbname = "ls"; 

$mysqli = new mysqli ($host, $user, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Failed to connect with MySQL: " . $mysqli->connect_errno);
}
return $mysqli;
?>