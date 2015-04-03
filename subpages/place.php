<div class="container" >
	<!--Place for individual code-->

	<!--making rows and columns which will be responsive to window size-->
	<div class="row">
		<div class="col-lg-6">
			<h3>Bar</h3>          
			<p>Name of Bar: Underground</p>
			<img id="barImg" src="img/empirebeer_0[1].jpg"/>
			<!--inserted image above--> 
			<!--description of bar-->
			<p>Underground is a rock inspired bar for young people to have a good time. It features special night Carwash Tuesdays and Jagerbomb fridays.</p>
		</div>
		<!--An interactive menu which will depend on the database-->
		<div class="col-lg-4 col-lg-offset-2">
			<h3>Menu</h3>
			<p>Some drinks including:</p><br/>
			<p>Smirnoff Vodka</p><br/>
			<p>Tennants</p><br/>
			<p>Sourz</p><br/>
			<p>Jagerbombs</p><br/>
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
			<div class="map-canvas">
				<img id="googleImg" src="img/Implement-GPS-data-for-your-Google-MAP.gif"/>
				<script src="https://maps.googleapis.com/maps/api/js"></script>
				<script>
					function initialize() {
						var mapCanvas = document.getElementById('map-canvas');
						var mapOptions = {
							center: new google.maps.LatLng(44.5403, -78.5463),
							zoom: 8,
							mapTypeId: google.maps.MapTypeId.ROADMAP
						}
						var map = new google.maps.Map(mapCanvas, mapOptions)
					}
					google.maps.event.addDomListener(window, 'load', initialize);
				</script>
			</div>
		</div>
	</div>
</div>