<?php

//--------- Scripts ------------

function getError() {
	if (!$check1_res) {
		printf("Error: %s\n", mysqli_error($db_con));
		exit();
	}
}

function getAverageRaring($what, $id) {
	include 'etc/db_access.php';
	// Create connection
	$db_con = mysqli_connect($db_host, $db_username, $db_password, $db_dbname)
			or die("Unable to connect to MySQL");
	$tableName = $what . "_rate";
	$query = "SELECT rate FROM $tableName WHERE " . $what . "_id = $id";
	// gets information about drink identified by ID
	$rateResult = mysqli_query($db_con, $query);
	$rateResultArray = mysqli_fetch_array($rateResult);
	$rateSum = 0;
	$count = 0;
	do {
		$rateSum += $rateResultArray['rate'];
		$count++;
	} while ($rateResultArray = mysqli_fetch_array($rateResult));

	return number_format(($rateSum / $count), 1);
}

function getPromotedDataArray($what, $id) {
	include 'etc/db_access.php';
	// Create connection
	$db_con = mysqli_connect($db_host, $db_username, $db_password, $db_dbname)
			or die("Unable to connect to MySQL");
	$query = "SELECT * FROM $what WHERE " . $what . "_id = $id";
	$result = mysqli_query($db_con, $query);
	return mysqli_fetch_array($result);
}

?>