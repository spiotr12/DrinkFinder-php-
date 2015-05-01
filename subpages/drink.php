<?php
$id = $_GET['id'];

$query = "SELECT * FROM drink WHERE drink_id = $id";

$result = mysqli_query($db_con, $query);

$resultArray = mysqli_fetch_array($result);
do {
	?>
	<!--A container which contains all the information about the drink-->
	<div class="container">
		<!--A row which contains 2 columns-->
		<div class="row">
			<h3 class="drink-name"><?php echo $resultArray['drink_name']; ?></h3>
		</di>
		<div class="row">
			<!--The first column in the row which contains a picture
				of the drink and its description, has 3 rows-->
			<div class="col-lg-5 col-lg-offset-1">  
				
				<img class="drink-image img-responsive" src="img/drinks/<?php echo $resultArray['drink_id']; ?>.jpg" alt="Image for <?php echo $resultArray['drink_name']; ?>"/>
			</div>    

			<!--The first row in this column which contains the image-->
			<div class="row">
				<div class="col-lg-8 col-lg-offset-3">
					<!--The image of the drink, sourced online-->
				</div>
				<!--The second row in the column which contains the description-->
				<div class="row">
					<div class="col-lg-8 col-lg-offset-3">
						<!--The description of the drink-->

						<!--description of drink below-->
						<p class="yellow-text"><?php echo $resultArray['details']; ?></p>
					</div>       
				</div>
			</div>
			<!--The second column in the row which contains a list of
				the bars which sell this drink and the rating, has 2 rows-->
			<div class="col-lg col-lg-5 col-lg-offset-1">
				<!--Row one which contains the list of places which sell
					the drink-->
				<div class="row">
					<!--The list of bars which sell the drink-->

					<h3>List of bars</h3>
					<ul class="listOfBars ">
						<?php
						$listQuery = "SELECT * "
								. "FROM serve "
								. "WHERE drink_id = $id";
						$listResult = mysqli_query($db_con, $listQuery);
//				if (!$check1_res) {
//					printf("Error: %s\n", mysqli_error($db_con));
//					exit();
//				}

						$listArray = mysqli_fetch_array($listResult);
						do {
							$placeId = $listArray['drink_id'];
							$placeQuery = "SELECT place_id, place_name FROM drink WHERE place_id = $placeId";
							$placeResult = mysqli_query($db_con, $placeQuery);
							$placeArray = mysqli_fetch_array($placeResult);

							echo "<li class='list-group-item'><a href='textarea.php?link=textarea&id=" . $placeId . "'>" . $placeArray['place_name'] . "</a></li>";
						} while ($menuArray = mysqli_fetch_array($placeResult));
						?>
					</ul>
				</div>
				<!--Row two which contains the star rating provided by users
					for the drink-->

				<!--------------------------------------------------------------->

				<!--rating's plugin-->
				<p class="yellow-text">Rating from some sort of database</p>
				<p class="yellow-text">Rating ****</p>
				<input type="number" min="0" max="10" step="2" value="5" name="rating_drink"/>
				<input type="submit" name="submit_rating_drink">
				<!--rating scale in here use JQuery with css-->

				<!--php for rating-->
				<?php
				if (isset($_POST['submit_rating_drink'])) {
					mysql_select_db("u500179497_df", $db_con);
					$sql = "INSERT INTO rating_drink () VALUES ('$_POST[rate]')";

					mysql_query($sql, $db_con);
					my_sql_close($con);
				}
				?>

				<!-------------------------------------------------------------->

				<div class="row">
					<div>
						<!--The star ratings of the drink-->
						<h2>Rating</h2>
						<span class="glyphicon glyphicon-star stars"></span>
						<span class="glyphicon glyphicon-star stars" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star stars" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star-empty stars" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star-empty stars" aria-hidden="true"></span>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<?php
} while ($resultArray = mysqli_fetch_array($result));
?>