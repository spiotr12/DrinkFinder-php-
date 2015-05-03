<?php

include '../etc/db_access.php';

// Create connection
$db_con = mysqli_connect($db_host, $db_username, $db_password, $db_dbname)
		or die("Unable to connect to MySQL");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// adds rate if form was used to send new rating
$id = $_POST['id'];
$rate = $_POST['rate'];
$date = date('Y-m-d H:i:s');
echo $rate;
$sql = "INSERT INTO drink_rate (drink_id, rate, date) "
		. "VALUES ( '$id', '$rate', '$date')";
mysqli_query($db_con, $sql);

header("Location: ../drinker.php?link=drink&id=" . $id);
?>