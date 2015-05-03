<?php
// pick recomended and off the week place and drink
//0 - week place, 1 - week drink, 2 - rec place, 3 - rec drink
$pickHomeItems = [2, 5, 3, 7];
?>
<title>Drink Finder - Home</title>
<!--The container for the search bar placed along the middle of this page-->
<div class="container" id="MainSearchBar">
    <!--The row inside the container which will hold the search bar-->
    <div class="row">
        <form role="form" name="search" action="php/search.php" method="get">
            <!--The div which will contain the search bar inside the row,
                    of type input-group-->
            <div class="input-group" >
                <!--Sets the text for the search bar and accepts user input
                        in the form of text/numbers-->
                <input type="hidden" name="link" value="search">
                <input type="text" name="searchFor" class="form-control" placeholder="Search for...">
                <!--The "magnifiying glass" search icon at the end of the search bar
                        taken from bootstrap's glyphicon database-->
                <span class="input-group-btn">
                    <!--The magnifying glass icon as a button, interactivity to
                            be added later-->
                    <button class="btn btn-bg" type="submit" name="searchType" value="drink">
						<img class="img-responsive" src="img/glyphicons-275-beer.png" alt="Search for drink"/>
					</button>
                    <button class="btn btn-bg" type="submit" name="searchType" value="place">
						<img class="img-responsive" src="img/glyphicons-243-google-maps.png" alt="Search for place"/>
					</button>
                </span>
            </div><!-- /input-group -->
        </form>
    </div>
</div>

<!--A  container with 2, 2x2 containers, which will display information
        to the user-->
<div class="container promotionBox">
    <!--The first 2x2 container -->
    <div class="row infoContainer">
        <!--The first row inside the container-->
        <div class="infoBox col-md-5"> 
			<?php
			$resultArray = getPromotedDataArray("place", $pickHomeItems[0]);
			if ($resultArray !== false) {
				?>
				<!--The header for this field-->
				<h2>Place of the week:</h2>
				<h3 class="text-center">
					<a href="drinker.php?link=place&id=<?php echo $resultArray['place_id']; ?>">
						<?php echo $resultArray['place_name']; ?>
					</a>
				</h3>
				<!--The first column inside the first row-->
				<div class="col-md-12">    
					<!--Contains an image displaying our bar/pub of the
							week, placeholder image right now.-->
					<a href="drinker.php?link=place&id=<?php echo $resultArray['place_id']; ?>">
						<img class="img-responsive" src="img/places/<?php echo $resultArray['place_id']; ?>.jpg" alt="Image for <?php echo $resultArray['place_name']; ?>"/>
					</a>
				</div>
				<?php
			}
			?>
        </div>
        <!--The second row inside the container-->
        <div class=" infoBox col-md-5 col-md-offset-2">
			<?php
			$resultArray = getPromotedDataArray("drink", $pickHomeItems[1]);
			if ($resultArray !== false) {
				?>
				<!--The header for this field-->
				<h2>Drink of the week</h2>
				<h3 class="text-center">
					<a href="drinker.php?link=drink&id=<?php echo $resultArray['drink_id']; ?>">
						<?php echo $resultArray['drink_name']; ?>
					</a>
				</h3>
				<!--The first column inside the first row-->
				<div class="col-xs-6 col-xs-offset-3">    
					<!--Contains an image displaying our bar/pub of the
							week, placeholder image right now.-->
					<a href="drinker.php?link=drink&id=<?php echo $resultArray['drink_id']; ?>">
						<img class="img-responsive" src="img/drinks/<?php echo $resultArray['drink_id']; ?>.jpg" alt="Image for <?php echo $resultArray['drink_name']; ?>"/>
					</a>
				</div>
				<?php
			}
			?>
        </div>
    </div>
    <!--The second 2x2 container -->
    <div class="row infoContainer">
        <!--The first row inside the container-->
		<div class="infoBox col-md-5"> 
			<?php
			$resultArray = getPromotedDataArray("place", $pickHomeItems[2]);
			if ($resultArray !== false) {
				?>
				<!--The header for this field-->
				<h2>Recommended place:</h2>
				<h3 class="text-center">
					<a href="drinker.php?link=place&id=<?php echo $resultArray['place_id']; ?>">
						<?php echo $resultArray['place_name']; ?>
					</a>
				</h3>
				<!--The first column inside the first row-->
				<div class="col-md-12">    
					<!--Contains an image displaying our bar/pub of the
							week, placeholder image right now.-->
					<a href="drinker.php?link=place&id=<?php echo $resultArray['place_id']; ?>">
						<img class="img-responsive" src="img/places/<?php echo $resultArray['place_id']; ?>.jpg" alt="Image for <?php echo $resultArray['place_name']; ?>"/>
					</a>
				</div>
				<?php
			}
			?>
        </div>
        <!--The second row inside the container-->
        <div class=" infoBox col-md-5 col-md-offset-2">
			<?php
			$resultArray = getPromotedDataArray("drink", $pickHomeItems[3]);
			if ($resultArray !== false) {
				?>
				<!--The header for this field-->
				<h2>Recommended drink:</h2>
				<h3 class="text-center">
					<a href="drinker.php?link=drink&id=<?php echo $resultArray['drink_id']; ?>">
						<?php echo $resultArray['drink_name']; ?>
					</a>
				</h3>
				<!--The first column inside the first row-->
				<div class="col-xs-6 col-xs-offset-3">    
					<!--Contains an image displaying our bar/pub of the
							week, placeholder image right now.-->
					<a href="drinker.php?link=drink&id=<?php echo $resultArray['drink_id']; ?>">
						<img class="img-responsive" src="img/drinks/<?php echo $resultArray['drink_id']; ?>.jpg" alt="Image for <?php echo $resultArray['drink_name']; ?>"/>
					</a>
				</div>
				<?php
			}
			?>
        </div>
    </div>
</div>