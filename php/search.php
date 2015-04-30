<?php

include '../etc/db_access.php';

// Create connection
$db_con = mysqli_connect($db_host, $db_username, $db_password, $db_dbname)
		or die("Unable to connect to MySQL");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$searchTerm = mysqli_real_escape_string($db_con, $_GET['searchFor']);
$searchType = mysqli_real_escape_string($db_con, $_GET['searchType']);
echo "term: " . $searchTerm . "<br/>";
echo "type: " . $searchType;

if ($searchType == "drink") {
	header("Location: ../drinker.php?link=drinkSearch&searchFor=" . $searchTerm);
} else if ($searchType == "place") {
	header("Location: ../drinker.php?link=placeSearch&searchFor=" . $searchTerm);
} else {
	header("Location: ../drinker.php?link=home");
}
?>
