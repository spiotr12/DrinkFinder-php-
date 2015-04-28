<?php

$searchTerm = $_GET['searchFor'];
$searchType = $_GET['searchType'];

if ($searchType == "drink") {
	header("Location: ../drinker.php?link=drinkSearch&searchFor=" . $searchTerm);
} else if ($searchType == "place") {
	header("Location: ../drinker.php?link=placeSearch&searchFor=" . $searchTerm);
} else {
	header("Location: ../drinker.php?link=home");
}
?>
