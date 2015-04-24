<?php

$searchTerm = $_GET['searchFor'];
$searchType = $_GET['searchType'];

if ($searchType == "drink") {
	header("Location: ../index.php?link=drinkSearch&searchFor=" . $searchTerm);
} else if ($searchType == "place") {
	header("Location: ../index.php?link=placeSearch&searchFor=" . $searchTerm);
} else {
	header("Location: ../index.php?link=home");
}
?>
