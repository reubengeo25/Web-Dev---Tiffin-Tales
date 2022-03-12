Welcome : <?php echo $_POST['P_name']; ?>

<?php
// 1. database credentials
$host = "localhost";
$db_name = "tiffin_tales";
$username = "root";
$password = "";

// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

// 3. prepare and bind
$stmt = $con->prepare("INSERT INTO `provider` (`name`, `address`, `meal_type`, `phone`, `meal_time`, `description`, `location`) VALUES (?, ?, ?, ?, ?, NULL, NULL)");
$stmt->bindParam(1, $_POST['P_name']);
$stmt->bindParam(2, $_POST['addr']);
$stmt->bindParam(3, $_POST['meals']);
$stmt->bindParam(4, $_POST['contact']);
$stmt->bindParam(5, $_POST['meal_options']);


// 4. execute the query
$stmt->execute();

header("Location: ../HTML/index.html");  // redirects to login.html


$con = null;
?>
