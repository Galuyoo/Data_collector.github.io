<?php
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/conn.php";

// Check if the email already exists in the database
$existingEmailSql = "SELECT COUNT(*) FROM user WHERE email = ?";
$existingEmailStmt = $mysqli->prepare($existingEmailSql);
$existingEmailStmt->bind_param("s", $_POST["email"]);
$existingEmailStmt->execute();
$existingEmailResult = $existingEmailStmt->get_result();
$existingEmailCount = $existingEmailResult->fetch_row()[0];

if ($existingEmailCount > 0) {
    // Email already exists, handle the error
    echo "Email already exists.";
    exit;
}

// Insert the new record
$insertSql = "INSERT INTO user (name, email, password) VALUES (?, ?, ?)";
$insertStmt = $mysqli->prepare($insertSql);
$insertStmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

if ($insertStmt->execute()) {
    header("Location:../index.php");
    exit;
} else {
    // Error occurred during insertion
    die($mysqli->error . " " . $mysqli-> errno);
}

$insertStmt->close();
$existingEmailStmt->close();
$mysqli->close();
?>
