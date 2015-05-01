<?php
$id = $_GET['id'];
$query = "SELECT * FROM drink WHERE drink_id = $id";
// gets information about drink identified by ID
$result = mysqli_query($db_con, $query);
$resultArray = mysqli_fetch_array($result);
do {
	?>
	<!--A container which contains all the information about the drink-->
	<div class="container">
		<!--A row which contains 2 columns-->
		<div class="row">
			<!--The first column in the row which contains a picture
				of the drink and its description, has 3 rows-->
			<div class="col-lg-5 col-lg-offset-1">  <!-- left hand side column -->
				<!--The first row in this column which contains the image-->
				<h3 class="drink-name"><?php echo $resultArray['drink_name']; ?></h3>
				<!--The image of the drink, sourced online-->
				<img class="drink-image img-rounded" src="img/drinks/<?php echo $resultArray['drink_id']; ?>.jpg" alt="Image for <?php echo $resultArray['drink_name']; ?>"/>
				<!--The description of the drink-->
				<p class="yellow-text drink-description"><?php echo $resultArray['details']; ?></p>
			</div>
			<!--The second column in the row which contains a list of
				the bars which sell this drink and the rating, has 2 rows-->
			<div class="col-md-4 col-lg-offset-1">-
				<!--Row one which contains the list of places which sell the drink-->
				<h3>List of bars</h3>
				<div class="row">
					<!--The list of bars which sell the drink-->
					<table id="sorttable" class="table tablesorter table-drink-inpub">
						<thead>
						<th class="result-name">
							Name
						</th>
						<th class="result-type">
							Price
						</th>
						</thead>
						<?php
						$listQuery = "SELECT * "
								. "FROM serve "
								. "WHERE drink_id = $id";

						$listResult = mysqli_query($db_con, $listQuery);

						$listArray = mysqli_fetch_array($listResult);
						do {
							$placeId = $listArray['place_id'];
							$placeQuery = "SELECT place_id, place_name FROM place WHERE place_id = $placeId";
							$placeResult = mysqli_query($db_con, $placeQuery);
							$placeArray = mysqli_fetch_array($placeResult);
							$price = $listArray['price'];
							?>
							<tr>
								<td>
									<a href="drinker.php?link=place&id=<?php echo $placeId; ?>">
										<?php echo $placeArray['place_name']; ?>
									</a>
								</td>
								<td>
									<?php echo "£" . $price; ?>
								</td>
							</tr>
							<?php
						} while ($listArray = mysqli_fetch_array($listResult));
						?>
					</table>
				</div>

				<div class="row">
					<div>
						<!--The star ratings of the drink-->
						<h2>Rating</h2>
						<!--rating's plugin-->
						<p class="yellow-text">Rating from some sort of database</p>
						<p class="yellow-text">Rating ****</p>
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
							<input type="number" min="0" max="5" step="1" value="3" name="rating_drink"/>
							<input type="submit" name="submit_rating_drink" class="btn-bg">
						</form>
						<!--php for rating-->
						<?php
						if (isset($_POST['submit_rating_drink'])) {
							$rate = $_POST['rating_drink'];
							$date = date('Y-m-d');
							echo $rate;
							$sql = "INSERT INTO drink_rate (drink_id, rate, date) "
									. "VALUES ( '$id', '$rate', '$date')";
							mysqli_query($db_con, $sql);
						}
						?>
					</div> 
				</div>
			</div>
		</div>
		<?php
	} while ($resultArray = mysqli_fetch_array($result));
	?>