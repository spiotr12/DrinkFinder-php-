<?php
$id = $_GET['id'];

$query = "SELECT * FROM place WHERE place_id = $id";

$result = mysqli_query($db_con, $query);

$resultArray = mysqli_fetch_array($result);
do {
	?>
	<div class="container img" >
		<!--Place for individual code-->

		<!--making rows and columns which will be responsive to window size-->
		<div class="row">
			<div class="col-lg-6">
				<h3 class="place-name"><?php echo $resultArray['place_name']; ?></h3>          
				<p class="place-type">Type: <?php echo $resultArray['type']; ?></p>
				<img id="barImg" src="img/places/underground.jpg" alt=""/>
				<!--inserted image above--> 
				<!--description of bar-->
				<p class="place-description"><?php echo $resultArray['description']; ?></p>
			</div>
			<!--An interactive menu which will depend on the database-->
			<div class="col-lg-4 col-lg-offset-2 place-drinklist">
				<h3>Menu</h3>
				<ul class="list-group">
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

					echo "<li class='list-group-item'><a href='index.php?link=drink&id=" . $drinkId . "'>" . $drinkArray['drink_name'] . "</a></li>";
				} while ($menuArray = mysqli_fetch_array($menuResult));
				?>
				</ul>
			</div>
		</div>	

		<div class="row">
			<!--reviews will be from people submitting one to the database and then appear on the page-->
			<div class="col-lg-6" >
				<h3>Reviews</h3>
				<p>This is a written review example which will be</p> 
				<p>implemented with the database.</p>
				<p>"I thought underground has a nice atmosphere but it gets too crowded."</p>
			</div>

			<div class="col-lg-4 col-lg-offset-2">
				<h3>Rating</h3>
				<div>
					<!--rating's plugin-->
					<p>Rating from some sort of database</p>
					<p>Rating ****</p>
					<!--rating scale in here use JQuery with css-->

				</div>
			</div>
		</div>

		<div class ="row">
			<div class="col-lg-6" >
				<!-- this will show the location of the bar on google images-->
				<h3>Map</h3>
				<!--google maps-->
				<?php echo $resultArray['google_map']; ?>
			</div>
		</div>
	</div>
	<?php
} while ($resultArray = mysqli_fetch_array($result));
?>