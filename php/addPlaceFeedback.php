<?php

include '../etc/db_access.php';

// Create connection
$db_con = mysqli_connect($db_host, $db_username, $db_password, $db_dbname)
		or die("Unable to connect to MySQL");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


// adds feedback if form was used to send new rating
$id = $_POST['id'];
$userName = $_POST['userName'];
$rate = $_POST['rate'];
$review = $_POST['review'];
$date = date('Y-m-d');
echo $rate;
$sql = "INSERT INTO place_rate (place_id, userName, rate, review, date) "
		. "VALUES ( '$id', '$userName', '$rate', '$review', '$date')";
mysqli_query($db_con, $sql);

header("Location: ../drinker.php?link=place&id=" . $id);



