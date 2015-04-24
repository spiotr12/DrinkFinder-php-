<?php

include '../etc/db_access.php';

// Create connection
$db_con = mysqli_connect($db_host, $db_username, $db_password, $db_dbname)
		or die("Unable to connect to MySQL");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



//$sql = "SHOW TABLES FROM $db_dbname";
//$result = mysql_query($sql);
//
//if (!$result) {
//    echo "DB Error, could not list tables\n";
//    echo 'MySQL Error: ' . mysql_error();
//    exit;
//}
//
//while ($row = mysql_fetch_row($result)) {
//    echo "Table: {$row[0]}\n";
//}

$searchTerm = $_GET['searchFor'];
$searchType = true;

echo "search for place<br/>";
$query = "SELECT * FROM place WHERE place_name LIKE '%$searchTerm%'";

$result = mysqli_query($db_con, $query);
//USEFUL CODE GET ERROR MESSAGE
//if (!$check1_res){
//	printf("Error: %s\n", mysqli_error($db_con));
//	exit();
//}

$resultArray = mysqli_fetch_array($result);

echo "Number of results: " . count($resultArray) . "<br/>";

if (count($resultArray) == 0) {
	echo "search for drink<br/>";
	$searchType = false;
	$query = "SELECT * FROM drink WHERE drink_name LIKE '%$searchTerm%'";

	$result = mysqli_query($db_con, $query);
	$resultArray = mysqli_fetch_array($result);
}

do {
	if ($searchType) {
		echo $resultArray['place_id'] . "<br/>";
		echo $resultArray['place_name'] . "<br/>";
		echo $resultArray['description'] . "<br/>";
	} else {
		echo $resultArray['drink_id'] . "<br/>";
		echo $resultArray['drink_name'] . "<br/>";
		echo $resultArray['type'] . "<br/>";
	}
} while ($resultArray = mysqli_fetch_array($result));


mysqli_close($db_con);
//header($header);
?>