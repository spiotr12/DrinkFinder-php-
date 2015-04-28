<!--START HERE
This part of the website displays search result tables. There are two tables, one for place on for drinks.
Using php, appropriate table will display depending what user is looking for-->
<?php
$searchTerm = $_GET['searchFor'];

$query = "SELECT * FROM drink WHERE UPPER(drink_name) LIKE UPPER('%$searchTerm%')";

$result = mysqli_query($db_con, $query);
/* USEFUL CODE GET ERROR MESSAGE
  if (!$check1_res){
  printf("Error: %s\n", mysqli_error($db_con));
  exit();
  } */

$resultArray = mysqli_fetch_array($result);
?>
<div class="container fullscreen">
	<div class="row place-search">
		<div class="row">
			<div class="col-md-2 col-md-offset-1">
				<h1>Drinks</h1>
			</div>				
		</div>
		<div class="row create-query col-md-offset-1">
			<!--SEARCH FIlTER FOR DRINK-->
			<form class="input-group">
				<div class="col-md-2">
					<ul class="col-md-2 list-group">
						<li class="label label-info">Price min / max</li>
						<li class="row input-group">
							<span class="input-group-addon">
								<input type="checkbox" name="priceMin"/>
							</span>
							<input class="form-control" type="number" name="priceMinValue" step="1" min="0" max="50" value="0"/>
							<span class="input-group-addon">£</span>
						</li>

						<li class="row input-group">
							<span class="input-group-addon">
								<input type="checkbox" name="priceMax"/>
							</span>
							<input class="form-control" type="number" name="priceMaxValue" step="1" min="0" max="50" value="50"/>
							<span class="input-group-addon">£</span>
						</li>
					</ul>
				</div>
				<!--TYPE OF DRINK-->
				<div class="col-md-5">
					<p class="label label-info">Type of drink</p>
					<ul class="list-group list-inline">
						<li class="list-group-item col-md-3"><input type="checkbox" name="type" value="beer"> Beer</li>
						<li class="list-group-item col-md-3"><input type="checkbox" name="type" value="lager"> Lager</li>
						<li class="list-group-item col-md-3"><input type="checkbox" name="type" value="ale"> Ale</li>
						<li class="list-group-item col-md-3"><input type="checkbox" name="type" value="spirit"> Spirit</li>
						<li class="list-group-item col-md-3"><input type="checkbox" name="type" value="cocktail"> Cocktail</li>
						<li class="list-group-item col-md-3"><input type="checkbox" name="type" value="cider"> Cider</li>
						<li class="list-group-item col-md-3"><input type="checkbox" name="type" value="wine"> Wine</li>
						<li class="list-group-item col-md-3"><input type="checkbox" name="type" value="whiskey"> Whiskey</li>
					</ul>
				</div>
				<!--FILTER ALCOHOL STRENGTH-->
				<div class="col-md-3">
					<p class="label label-info">Minimum strength</p>
					<div class=" input-group">
						<input class="form-control" type="number" name="postcode" step="0.1"/>
						<span class="input-group-addon">%</span>
					</div>
					<br/>
					<input class="btn btn-default search-submit" type="submit" value="Submit"/>
				</div>
				
			</form>
		</div>
		<div class="row">
			<!--show results-->
			<div class="col-md-9 col-md-offset-1 query-result">
				<table id="sorttable" class="table place-table tablesorter">
					<thead>
						<!--ignore validation error-->
	<!--				<th class="result-icon">
						Icon
					</th>-->
					<th class="result-name">
						Name
					</th>
					<th class="result-type">
						Type
					</th>
					<th class="result-percent">
						Strength
					</th>
					<th class="resulsst-rate">
						Rate
					</th>
					</thead>
					<tbody>
						<!--SAMPLE DATA-->
						<?php
						do {
							echo "<tr>";
//						echo "	<td class = 'result-icon'>" . $resultArray['drink_name'] . "</td>";
							echo "	<td class = 'result-name'><a href='drinker.php?link=drink&id=" . $resultArray['drink_id'] . "'>" . $resultArray['drink_name'] . "</a></td>";
							echo "	<td class = 'result-type'>" . $resultArray['type'] . "</td>";
							echo "	<td class = 'result-percent'>" . $resultArray['percent'] . "</td>";
							echo "	<td class = 'result-rate'>" . $resultArray['average_rate'] . "</td>";
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
<!-- /container -->