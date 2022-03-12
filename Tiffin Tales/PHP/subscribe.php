<?php
// 1. database credentials
$host = "localhost";
$db_name = "tiffin_tales";
$username = "root";
$password = "";

// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

/**
 * @param PDOStatement $stmt
 * @return void
 */
function extracted(PDOStatement $stmt)
{
    $stmt->bindParam(1, $_POST['Name']);
    $stmt->bindParam(2, $_POST['Prov']);
    $stmt->bindParam(3, $_POST['addr']);
    $stmt->bindParam(4, $_POST['preferences']);
    $stmt->bindParam(5, $_POST['meals']);
    $stmt->bindParam(6, $_POST['subs_plan']);
    $stmt->bindParam(7, $_POST['email']);
}

if ($_POST['action'] == "0") {
    $stmt = $con->prepare("INSERT INTO `subscribers` (`name`, `pid`, `address`, `meal_type`, `meal_time`, `duration`, `email`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    extracted($stmt);
} elseif ($_POST['action'] == "1") {
    $stmt = $con->prepare("UPDATE `subscribers` SET `name` = ?, `pid` = ?, `address` = ?, `meal_type` = ?, `meal_time` = ?, `duration` = ? WHERE `email` = ?");
    extracted($stmt);
} elseif ($_POST['action'] == "2") {
    $stmt = $con->prepare("DELETE FROM `subscribers` WHERE `email` = ?");
    $stmt->bindParam(1, $_POST['email']);
}

// 3. prepare and bind

// 4. execute the query
$stmt->execute();

header("Location: ../HTML/index.html");  // redirects to login.html


$con = null;
?>
