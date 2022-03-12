<?php
// 1. database credentials
$host = "localhost";
$db_name = "tiffin_tales";
$username = "root";
$password = "";

// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

// 3. prepare and bind
$stmt = $con->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
$stmt->bindParam(1, $_POST['Name']);
$stmt->bindParam(2, $_POST['username']);
$stmt->bindParam(3, $_POST['Email']);
$stmt->bindParam(4, $_POST['password']);

// 4. execute the query
$stmt->execute();

header("Location: ../HTML/login.html");  // redirects to login.html


$con = null;
?>
