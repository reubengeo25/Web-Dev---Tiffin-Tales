
<?php
session_start();
// 1. database credentials
$host = "localhost";
$db_name = "tiffin_tales";
$username = "root";
$password = "";

// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

// 3. prepare and bind
$stmt = $con->prepare("SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1");
$stmt->bindParam(1, $_POST['Uname']);
$stmt->bindParam(2, $_POST['pwd']);

// 4. execute the query
$stmt->execute();

// 5. fetch results
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    // login success

    $_SESSION['user_id'] = $result['id'];
    $_SESSION['email'] = "HelloWOELD";
    header("Location: ../HTML/index.html");
} else {
    // login failed
    header("Location: ../HTML/login.html");
}

$con = null;
?>
