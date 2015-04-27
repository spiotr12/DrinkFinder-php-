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
		<!--The first column in the row which contains a picture
			of the drink and its description, has 3 rows-->
		<div class="col-lg-5 col-lg-offset-1">  
			<!--The first row in this column which contains the image-->
			<div class="row">
				<div class="col-lg-8 col-lg-offset-3">
					<!--The image of the drink, sourced online-->
					<!--<div id="drinkImage">--><img class="drink-image img-responsive" src="img/drinks/<?php echo 	$resultArray['drink_id'];?>.jpg" alt="Image for <?php echo $resultArray['drink_name'];?>"/></div>    
				<!--</div>-->
			</div>
			<!--The second row in the column which contains the description-->
			<div class="row">
				<div class="col-lg-8 col-lg-offset-3">
					<!--The description of the drink-->
					<h3 class="drink-name"><?php echo $resultArray['drink_name']; ?></h3>
					<!--description of drink below-->
					<p><?php echo $resultArray['details']; ?></p>
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
				<h1> List of bars</h1>
				<ul class="listOfBars">
					<li><a>Paramount</a></li>
					<li><a>Korova</a></li>
					<li><a>Wild Boar</a></li>
					<li><a>Bobbin</a></li>
					<li><a>Triple Kirks</a></li>
					<li><a>Amicus Apple</a></li>    
					<li><a>Brew dog</a></li>
					<li><a>Dusk</a></li>
					<li><a>Nox</a></li>
					<li><a>Campus</a></li>
					<li><a>Underground</a></li>
				</ul>
			</div>
			<!--Row two which contains the star rating provided by users
				for the drink-->
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