<?php
//session_start();

//session_unset();
//session_destroy();

//header("Location: login.php");
include "db_conn.php";
session_start();
//destroy the session
session_unset();
//redirect to login page
session_destroy();
header("location: login.php");
?>