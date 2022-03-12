
<?php

// 1. database credentials
$host = "localhost";
$db_name = "tiffin_tales";
$username = "root";
$password = "";

// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

// 3. prepare and bind
$stmt = $con->prepare("INSERT INTO `newsletter_subs` (`email`) VALUES (?)");
$stmt->bindParam(1, $_POST['Email']);

// 4. execute the query
$stmt->execute();

header("Location: ../HTML/index.html");

$con = null;
?>
