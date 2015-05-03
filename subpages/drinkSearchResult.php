<!--START HERE
This part of the website displays search result tables. There are two tables, one for place on for drinks.
Using php, appropriate table will display depending what user is looking for-->
<?php
$searchTerm = $_GET['searchFor'];

$query = "SELECT * FROM drink "
		. "WHERE UPPER(drink_name) LIKE UPPER('%$searchTerm%')"
		. "OR UPPER(type) LIKE UPPER('%$searchTerm%')";
$result = mysqli_query($db_con, $query);
/* USEFUL CODE GET ERROR MESSAGE
  if (!$check1_res){
  printf("Error: %s\n", mysqli_error($db_con));
  exit();
  } */

$resultArray = mysqli_fetch_array($result);
?>
<title>Drink search: <?php echo $searchTerm; ?></title>

<div class="container fullscreen">
	<div class="row place-search">
		<div class="row">
			<div class="col-md-2 col-md-offset-1">
				<h1>Drinks</h1>
				<br/>
			</div>				
		</div>
		<div class="row create-query">
			<!--TYPE OF DRINK-->
			<div id="tableFilter" class="col-md-12 col-md-offset-2">
				<p class="label label-warning">Select a type of drink</p>
				<ul id="typelist" class="list-group yellow-text list-inline search-result-list">
					<li class="list-group-item col-md-1 table-colour"><input id="beer" type="checkbox" name="type" value="beer"> Beer</li>
					<li class="list-group-item col-md-1 table-colour "><input id="lager" type="checkbox" name="type" value="lager"> Lager</li>
					<li class="list-group-item col-md-1 table-colour"><input id="ale" type="checkbox" name="type" value="ale"> Ale</li>
					<li class="list-group-item col-md-1 table-colour "><input id="spirit" type="checkbox" name="type" value="spirit"> Spirit</li>
					<li class="list-group-item col-md-1 table-colour"><input id="cocktail" type="checkbox" name="type" value="cocktail"> Cocktail</li>
					<li class="list-group-item col-md-1 table-colour"><input id="cider" type="checkbox" name="type" value="cider"> Cider</li>
					<li class="list-group-item col-md-1 table-colour"><input id="wine" type="checkbox" name="type" value="wine"> Wine</li>
					<li class="list-group-item col-md-1 table-colour"><input id="whiskey" type="checkbox" name="type" value="whiskey"> Whiskey</li>
				</ul>
			</div>
		</div>
		<br/>
		<br/>
		<div class="row">
			<!--show results-->
			<div class="col-md-10 col-md-offset-1 query-result">
				<table id="sorttable" class="table place-table tablesorter search-result-table table-drink-inpub">
					<thead>
					<th class="result-name">
						Name
					</th>
					<th class="result-type">
						Type
					</th>
					<th class="result-percent">
						Strength [%]
					</th>
					<th class="resulsst-rate">
						Rate
					</th>
					</thead>
					<tbody id="tableResult">
						<!--SAMPLE DATA-->
						<?php
						if (mysqli_num_rows($result) > 0) {
							do {
								$id = $resultArray['drink_id'];
								echo "<tr>";
								echo "	<td class='name' value='" . $resultArray['drink_name'] . "'><a href='drinker.php?link=drink&id=" . $id . "'>" . $resultArray['drink_name'] . "</a></td>";
								echo "	<td class='type' value='" . $resultArray['type'] . "'>" . $resultArray['type'] . "</td>";
								echo "	<td class='percent'>" . $resultArray['percent'] . "</td>";
								echo "	<td class='rate'>" . getAverageRaring("drink", $id) . "</td>";
								echo "</tr>";
							} while ($resultArray = mysqli_fetch_array($result));
						} else {
							echo "<tr>";
							echo "<td class='result-name'  colspan='0''>No result found for \"" . $searchTerm . "\"...</td>";
							echo "</tr>";
						}
						mysqli_close($db_con);
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /container -->