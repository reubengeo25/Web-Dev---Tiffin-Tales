<?php
// 1. database credentials
$host = "localhost";
$db_name = "tiffin_tales";
$username = "root";
$password = "";

// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

// 3. prepare and bind
$stmt = $con->prepare("INSERT INTO `feedback` (`name`, `subscriber`, `rating`, `reference`, `description`) VALUES (?, ?, ?, ?, ?)");
$stmt->bindParam(1, $_POST['Name']);
$stmt->bindParam(2, $_POST['subs']);
$stmt->bindParam(3, $_POST['rate']);
$stmt->bindParam(4, $_POST['selection']);
$stmt->bindParam(5, $_POST['Tell']);

// 4. execute the query
$stmt->execute();

header("Location: ../HTML/index.html");  // redirects to login.html


$con = null;
?>
