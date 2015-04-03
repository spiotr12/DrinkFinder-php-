<!--The container for the search bar placed along the middle of this page-->
<div class="container" id="MainSearchBar">
	<!--The row inside the container which will hold the search bar-->
	<div class="row">
		<!--The div which will contain the search bar inside the row,
			of type input-group-->
		<div class="input-group" >
			<!--Sets the text for the search bar and accepts user input
				in the form of text/numbers-->
			<input type="text"  class="form-control" placeholder="Search for...">
			<!--The "magnifiying glass" search icon at the end of the search bar
				taken from bootstrap's glyphicon database-->
			<span class="input-group-btn">
				<!--The magnifying glass icon as a button, interactivity to
					be added later-->
				<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
			</span>
		</div><!-- /input-group -->
	</div>
</div>

<!--A  container with 2, 2x2 containers, which will display information
	to the user-->
<div class="container promotionBox">
	<!--The first 2x2 container -->
	<div class="row infoContainer">
		<!--The first row inside the container-->
		<div class=" infoBox col-md-4 col-md-offset-1"> 
			<!--The header for this field-->
			<h4>Bar/Pub of the week</h4>
			<div class="row">
				<!--The first column inside the first row-->
				<div class="col-md-6 infoPicture">    
					<!--Contains an image displaying our bar/pub of the
						week, placeholder image right now.-->
					<img class="infoImage" alt="Bar/Pub of the week Image" src="http://www.thegoodpubguide.co.uk/var/ezflow_site/storage/images/media/images/monteiths-lager/7615933-1-eng-GB/Monteiths-Lager_imagelarge.jpg"/>
				</div>
				<!--The second column inside the first row-->
				<div class="col-md-4 infoText">
					<!--Contains information about the bar/pub of the
						week, placeholder text right now.-->
					<p> Test</p>
				</div>
			</div>
		</div>
		<!--The second row inside the container-->
		<div class=" infoBox col-md-4 col-md-offset-2">
			<!--The header for this field-->
			<h4>Drink of the week</h4>
			<div class="row">
				<!--The first column inside the second row-->
				<div class="col-md-6 infoPicture">   
					<!--Contains an image displaying our drink of the
						week, placeholder image right now.-->
					<img class="infoImage" alt="Drink of the week image" src="http://www.thegoodpubguide.co.uk/var/ezflow_site/storage/images/media/images/monteiths-lager/7615933-1-eng-GB/Monteiths-Lager_imagelarge.jpg"/>
				</div>
				<!--The second column inside the second row-->
				<div class="col-md-4 infoText">
					<!--Contains information about the drink of the
						week, placeholder text right now.-->
					<p> Test</p>
				</div>                    
			</div>
		</div>
	</div>
	<!--The second 2x2 container -->
	<div class="row infoContainer">
		<!--The first row inside the container-->
		<div class=" infoBox col-md-4 col-md-offset-1"> 
			<!--The header for this field-->
			<h4>Recommended Bar/Pub</h4>
			<div class="row">
				<!--The first column inside the first row-->
				<div class="col-md-6 infoPicture">       
					<!--Contains an image displaying our recommended
					bar/pub, placeholder image right now.-->
					<img class="infoImage" alt="Recommended Bar/Pub Image" src="http://www.thegoodpubguide.co.uk/var/ezflow_site/storage/images/media/images/monteiths-lager/7615933-1-eng-GB/Monteiths-Lager_imagelarge.jpg"/>
				</div>
				<!--The second column inside the first row-->
				<div class="col-md-4 infoText">
					<!--Contains information about our recommended
					bar/pub, placeholder text right now.-->
					<p> Test</p>
				</div>
			</div>
		</div>
		<!--The second row inside the container-->
		<div class=" infoBox col-md-4 col-md-offset-2">
			<!--The header for this field-->
			<h4> Recommended Drink</h4>
			<div class="row">
				<!--The first column inside the second row-->
				<div class="col-md-6 infoPicture">     
					<!--Contains an image displaying our recommended
					drink, placeholder image right now.-->
					<img class="infoImage" alt="Recommended Drink Image" src="http://www.thegoodpubguide.co.uk/var/ezflow_site/storage/images/media/images/monteiths-lager/7615933-1-eng-GB/Monteiths-Lager_imagelarge.jpg"/>
				</div>
				<!--The second column inside the second row-->
				<div class="col-md-4 infoText">
					<!--Contains information about our recommended
					drink, placeholder text right now.-->
					<p> Test</p>
				</div>
			</div>
		</div>
	</div>
</div>