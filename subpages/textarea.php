<?php
$id = $_GET['id'];

$query = "SELECT * FROM place WHERE place_id = $id";

$result = mysqli_query($db_con, $query);

$resultArray = mysqli_fetch_array($result);
do {
	?>
	<div class="container" >
		<!--Place for individual code-->

		<!--making rows and columns which will be responsive to window size-->
		<div class="row">
			<div class="col-md-6">
				<h3 class="place-name"><?php echo $resultArray['place_name']; ?></h3>          
				<br>
				<div id="placeImage">
					<img src="img/places/<?php echo $resultArray['place_id']; ?>.jpg" alt="Image for <?php echo $resultArray['place_name']; ?>"/>
				</div>
				<!--inserted image above--> 
				<!--description of bar-->
				<br>
				<p class="place-description yellow-text"><?php echo $resultArray['description']; ?></p>
			</div>
			<!--An interactive menu which will depend on the database-->
			<div class="col-md-5 col-md-offset-1 place-drinklist">
				<h3>Menu</h3>
				<ul class="list-group table-colour">
					<?php
					$menuQuery = "SELECT * "
							. "FROM serve "
							. "WHERE place_id = $id";

					$menuResult = mysqli_query($db_con, $menuQuery);
//				if (!$check1_res) {
//					printf("Error: %s\n", mysqli_error($db_con));
//					exit();
//				}

					$menuArray = mysqli_fetch_array($menuResult);
					do {
						$drinkId = $menuArray['drink_id'];
						$drinkQuery = "SELECT drink_id, drink_name FROM drink WHERE drink_id = $drinkId";
						$drinkResult = mysqli_query($db_con, $drinkQuery);
						$drinkArray = mysqli_fetch_array($drinkResult);

						echo "<li class='list-group-item  table-colour'><a href='drinker.php?link=drink&id=" . $drinkId . "'>" . $drinkArray['drink_name'] . "</a></li>";
					} while ($menuArray = mysqli_fetch_array($menuResult));
					?>
				</ul>
			</div>
		</div>	

		<div class="row">
			<!--reviews will be from people submitting one to the database and then appear on the page-->
			<div class="col-md-6" >
				<h3>Feedback</h3>
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="yellow-text">
					<div class="row">
						<div class="form-group col-md-8">
							<label>User name:</label> 
							<input type="text" name="userName" required class="form-control black-text">
						</div>
						<div class="form-group col-md-4">
							<label>Rating</label> 
							<select class="form-control" name="type">
								<option value="5">5</option>
								<option value="4">4</option>
								<option value="3">3</option>
								<option value="2">2</option>
								<option value="1">1</option>
								<option value="0">0</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label>Feedback:</label> 
						<textarea type="text" name="review" required rows="5" class="form-control black-text"></textarea>
					</div>
					<button class="btn btn-bg black-text" type="submit" name="submit"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Submit</button>
				</form>
			</div>

			<div class="col-md-5 col-md-offset-1 yellow-text">
				<h3>User's reviews</h3>
				<div>
					<!--rating's plugin-->
					<!--php for rating-->       
					<?php
					$ratingQuery = "SELECT * "
							. "FROM place_rate ";

					$ratingResult = mysqli_query($db_con, $ratingQuery);

					$row = mysqli_fetch_array($ratingResult);

					while ($row = mysqli_fetch_array($ratingResult)) {
						?>
						<div class="user-comment">
							<h3><?php echo $row['userName']; ?></h3>
							<div class="">
								 <p class="yellow-text"><?php echo $row['review']; ?></p>
							</div>
								<div class="row">
									<p class="col-md-6 yellow-text">Date: <?php echo $row['date']; ?></p>
									<p class="col-md-3 col-md-offset-3 yellow-text">Rate:&nbsp;&nbsp;<?php echo $row['rate']; ?></p>
								</div>
						</div>
						<?php
					}
					?>

				</div>
			</div>
		</div>

		<div class ="row">
			<div class="col-md-6" >
				<!-- this will show the location of the bar on google images-->
				<h3>Maps</h3>
				<!--google maps-->
				<?php echo $resultArray['google_map']; ?>
			</div>
		</div>
	</div>
	<?php
} while ($resultArray = mysqli_fetch_array($result));
?>