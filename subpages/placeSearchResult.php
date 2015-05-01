<!--START HERE
This part of the website displays search result tables. There are two tables, one for place on for drinks.
Using php, appropriate table will display depending what user is looking for-->
<?php
$searchTerm = $_GET['searchFor'];

$query = "SELECT * FROM place WHERE UPPER(place_name) LIKE UPPER('%$searchTerm%')";

$result = mysqli_query($db_con, $query);

$resultArray = mysqli_fetch_array($result);
?>
<title>Place search: <?php echo $searchTerm; ?></title>
<div class="container fullscreen">
	<div class="row place-search">
		<div class="row">
			<div class="col-md-2 col-md-offset-1">
				<h1>Place</h1>
			</div>				
		</div>
		<div class="row">
			<!--show results-->
			<div class="col-md-10 col-md-offset-1 query-result">
				<table id="sorttable" class="table place-table tablesorter search-result-table table-drink-inpub">
					<!--ignore validation error-->
					<thead>
					<th class="result-name">
						Name
					</th>
					<th class="result-type">
						Type
					</th>
					<th class="result-postcode">
						Post code
					</th>
					<th class="result-rate">
						Rate
					</th>
					</thead>
					<tbody>
						<?php
						do {
							$id = $resultArray['place_id'];
							echo "<tr>";
							echo "	<td class = 'result-name'><a href='drinker.php?link=place&id=" . $id . "'>" . $resultArray['place_name'] . "</a></td>";
							echo "	<td class = 'result-type'>" . $resultArray['type'] . "</td>";
							echo "	<td class = 'result-postcode'>" . $resultArray['post_code'] . "</td>";
							echo "	<td class = 'result-rate'>" . getAverageRaring("drink", $id) . "</td>";
							echo "</tr>";
						} while ($resultArray = mysqli_fetch_array($result));


						mysqli_close($db_con);
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>