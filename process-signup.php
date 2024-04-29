<?php

if (empty($_POST["email"])) {
    die("Email is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

$password = password($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (email, password)
        VALUES (?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ss",
                  $_POST["email"],
                  $password);
                  
if ($stmt->execute()) {

    header("Location: signup-success.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("Email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}