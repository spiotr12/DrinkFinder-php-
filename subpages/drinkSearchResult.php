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
	<h1>Drinks</h1>
	<div class="row place-search">
		<div class="col-lg-2 create-query">
			<!--SEARCH FIlTER FOR DRINK-->
			<form class="input-group">
<!--				<p class="label label-info">What are you looking for?</p>
				SELECT SEARCH TYPE
				<div class="row">
					<span class="input-group-addon">
						<input class="radio input-group-addon" type="radio" name="searchFor" value="place"/> Place 
					</span>
					<span class="input-group-addon">
						<input class="radio input-group-addon" type="radio" name="searchFor" value="drink"/> Drink
					</span>
				</div>
				<br/>-->
				<!--PRICE FILTER-->
				<ul class="list-group">
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
				<!--TYPE OF DRINK-->
				<p class="label label-info">Type of drink</p>
				<div class="row">
					<ul class="list-group">
						<li class="list-group-item"><input type="checkbox" name="type" value="beer"> Beer</li>
						<li class="list-group-item"><input type="checkbox" name="type" value="lager"> Lager</li>
						<li class="list-group-item"><input type="checkbox" name="type" value="ale"> Ale</li>
						<li class="list-group-item"><input type="checkbox" name="type" value="spirit"> Spirit</li>
						<li class="list-group-item"><input type="checkbox" name="type" value="cocktail"> Cocktail</li>
						<li class="list-group-item"><input type="checkbox" name="type" value="cider"> Cider</li>
						<li class="list-group-item"><input type="checkbox" name="type" value="wine"> Wine</li>
						<li class="list-group-item"><input type="checkbox" name="type" value="whiskey"> Whiskey</li>
					</ul>
				</div>
				<!--FILTER ALCOHOL STRENGTH-->
				<p class="label label-info">Minimum strength</p>
				<div class="row input-group">
					<input class="form-control" type="number" name="postcode" step="0.1"/>
					<span class="input-group-addon">%</span>
				</div>
				<br/>

						<!--<p class="label label-info">Submit</p>-->
				<div class="row">
					<input class="btn btn-default search-submit" type="submit" value="Submit"/>
				</div>
			</form>
		</div>

		<!--show results-->
		<div class="col-lg-9 query-result">
			<table class="table place-table">
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
				<th class="result-rate">
					Rate
				</th>
				</thead>
				<tbody>
					<!--SAMPLE DATA-->
					<?php
					do {
						echo "<tr>";
//						echo "	<td class = 'result-icon'>" . $resultArray['drink_name'] . "</td>";
						echo "	<td class = 'result-name'>" . $resultArray['drink_name'] . "</td>";
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
<!-- /container -->