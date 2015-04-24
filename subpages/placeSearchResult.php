<!--START HERE
This part of the website displays search result tables. There are two tables, one for place on for drinks.
Using php, appropriate table will display depending what user is looking for-->
<?php
$searchTerm = $_GET['searchFor'];

$query = "SELECT * FROM place WHERE UPPER(place_name) LIKE UPPER('%$searchTerm%')";

$result = mysqli_query($db_con, $query);

$resultArray = mysqli_fetch_array($result);
?>
<div class="container fullscreen">
	<h1>Place</h1>
	<div class="row place-search">
		<!--search form-->
		<div class="col-lg-12">
			<form>
				<!-- PLACE FOR A SEARCH BAR: to copy form code from home page-->
				<!--search bar-->
			</form>
		</div>

		<!--create query-->
		<div class="col-lg-2 create-query">
			<!--SEARCH FIlTER FOR PLACE-->
			<form class="input-group">
<!--				<p class="label label-info">What are you looking for?</p>
				<div class="row">
					<span class="input-group-addon">
						<input class="radio input-group-addon" type="radio" name="searchFor" value="place"/> Place
					</span>
					<span class="input-group-addon">
						<input class="radio input-group-addon" type="radio" name="searchFor" value="drink"/> Drink
					</span>
				</div>
				<br/>-->

				<p class="label label-info">Name</p>
				<div class="row">
					<input class="form-control" type="text" name="name" value="<?php echo $searchTerm; ?>"/>
				</div>
				<br/>

				<p class="label label-info">Post code</p>
				<div class="row">
					<input class="form-control" type="text" name="postcode"/>
				</div>
				<br/>

				<p class="label label-info">TypeTODO</p>
				<div class="row form-group">
					<!--<label for="sel1">Select list:</label>-->
					<select class="form-control" id="sel1">
						<option value="bar">Bar</option>
						<option value="pub">Pub</option>
						<option value="club">Club</option>
					</select>
				</div>
				<br/>

				<p class="label label-info">Submit</p>
				<div class="row">
					<input class="btn btn-default" type="submit" value="Submit"/>
				</div>
			</form>
		</div>

		<!--show results-->
		<div class="col-lg-9 query-result">
			<table class="table place-table">
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
						echo "<tr>";
						echo "	<td class = 'result-name'><a href='index.php?link=place&id=" . $resultArray['place_id'] . "'>" . $resultArray['place_name'] . "</a></td>";
						echo "	<td class = 'result-type'>" . $resultArray['type'] . "</td>";
						echo "	<td class = 'result-postcode'>" . $resultArray['post_code'] . "</td>";
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
