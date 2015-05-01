<?php
session_start();

include './etc/db_access.php';

// Create connection
$db_con = mysqli_connect($db_host, $db_username, $db_password, $db_dbname)
		or die("Unable to connect to MySQL");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// sets the link
$subpage;
if (isset($_GET["link"]) && !empty($_GET["link"])) {
	$subpage = $_GET["link"];
} else {
	$subpage = "home";
}

// gets scripts
include './php/scripts.php';


$myErrorMessage = "";
$isEighteen = 0;
if (isset($_SESSION['sess_isEighteen'])) {
	$myErrorMessage .= "Session value is: " . $_SESSION['sess_isEighteen'] . "<br/>";
	if ($_SESSION['sess_isEighteen'] == 1) {
		$myErrorMessage .= "Elo user was checked and is 18<br/>";
		$myErrorMessage .= "User is 18: " . $_SESSION['sess_isEighteen'] . "<br/>";
		$isEighteen = 1;
	} else {
		$myErrorMessage .= "Elo user was checked and is NOT 18<br/>";
	}
} else {
	$myErrorMessage .= "NOTHING WAS SETTED UP";
	$isEighteen = 0;
}

//echo "isEighteen value is: " . $isEighteen . "<br/>";
if ($isEighteen == 0) {
	?>
	<!doctype html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><!--validator error-->
			<!--<title>Drinker</title>-->
			<meta name="description" content="">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="apple-touch-icon" href="apple-touch-icon.png">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/bootstrap-theme.min.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/flick/jquery-ui.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
			<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
			<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
			<script src="js/vendor/jquery.tablesorter.js"></script>
			<script src="https://apis.google.com/js/client:platform.js" async defer></script>
			<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
			<script src="js/filter.js" type="text/javascript"></script>
		</head>
		<body>
			<!--[if lt IE 8]>
				<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
			<![endif]-->

			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><!--validator error-->
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="drinker.php?link=home"><img src="img/Logo.png" alt=""/></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse extend">
						<div class="navbar-form navbar-right" role="form">
							<div class="display-inline">
								<form class="form-in-nav pull-left" role="form" name="search" action="php/search.php" method="get">
									<div class="input-group">
										<!-- Search engine -->
										<input type="text" name="searchFor" class="form-control" placeholder="Search for...">								
										<span class="input-group-btn">
											<button class="btn btn-bg" type="submit" name="searchType" value="drink"><img class="img-responsive" src="img/glyphicons-275-beer.png" alt="Search for drink"/></button>
											<button class="btn btn-bg" type="submit" name="searchType" value="place"><img class="img-responsive" src="img/glyphicons-243-google-maps.png" alt="Search for place"/></button>
										</span>
									</div>
								</form>
							</div>
						</div><!-- /.row -->
					</div><!-- /.row -->
				</div><!--/.navbar-collapse -->
			</nav> 

			<!-- Main jumbotron for a primary marketing message or call to action -->
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<header id="myCarousel" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<!-- setting up number of slides of carousel-->
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									<li data-target="#myCarousel" data-slide-to="3"></li>
									<li data-target="#myCarousel" data-slide-to="4"></li>
									<li data-target="#myCarousel" data-slide-to="5"></li>
									<li data-target="#myCarousel" data-slide-to="6"></li>
									<li data-target="#myCarousel" data-slide-to="7"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<!-- Links to pictures -->
									<div class="item active">
										<img class="slide-image" src="img/07.jpg" alt=""/>
									</div>
									<div class="item">
										<img class="slide-image" src="img/02.jpg" alt=""/>                                                                    
									</div>
									<div class="item">
										<img class="slide-image" src="img/03.jpg" alt=""/>
									</div>
									<div class="item">
										<img class="slide-image" src="img/04.jpg" alt=""/>
									</div>
									<div class="item">
										<img class="slide-image" src="img/05.jpg" alt=""/>
									</div>
									<div class="item">
										<img class="slide-image" src="img/06.jpg" alt=""/>
									</div>
									<div class="item">
										<img class="slide-image" src="img/01.jpg" alt=""/>
									</div>
									<div class="item">
										<img class="slide-image" src="img/08.jpg" alt=""/>
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#myCarousel" data-slide="prev">
									<span class="icon-prev"></span>
								</a>
								<a class="right carousel-control" href="#myCarousel" data-slide="next">
									<span class="icon-next"></span>
								</a>
							</header>
						</div>
					</div>
				</div>
			</div>

			<section>
				<?php
				switch ($subpage) {
					case "home" : include './subpages/home.php';
						break;
					case "drinkSearch" : include './subpages/drinkSearchResult.php';
						break;
					case "placeSearch" : include './subpages/placeSearchResult.php';
						break;
					case "place" : include './subpages/textarea.php';
						break;
					case "drink" : include './subpages/drink_copy_1.php';
						break;
//					case "welcome" : include './subpages/welcome.php';
//						break;
					//default
					default : include './subpages/home.php';
						break;
				}
				?>
			</section>

			<!-- FOOTER -->
	        <section class="drinkFooter">
	            <div class="container">
	                <div class="row">
	                    <footer>
	                        <!-- Information which would be include in footer -->
	                        <h6 class="footerText">
	                            PSSSST!! Did you know that this site was crafted
	                            <br/>
	                            using one theme included in the bundle? Cool right?!
	                        </h6>
	                        <h6 class="footerText">
	                            DrinkFinder.com | Copyright 2015
	                        </h6>
	                    </footer>
	                </div>
	            </div>
	        </section>   

			<script src="js/vendor/bootstrap.min.js"></script>

			<script src="js/main.js"></script>

			<script>
				// initializing jQuery functionality
				$(function () {
					$('#sorttable').tablesorter();
				});
			</script>

			<script>

			</script>

			<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
			<script>
				(function (b, o, i, l, e, r) {
					b.GoogleAnalyticsObject = l;
					b[l] || (b[l] =
							function () {
								(b[l].q = b[l].q || []).push(arguments)
							});
					b[l].l = +new Date;
					e = o.createElement(i);
					r = o.getElementsByTagName(i)[0];
					e.src = '//www.google-analytics.com/analytics.js';
					r.parentNode.insertBefore(e, r)
				}(window, document, 'script', 'ga'));
				ga('create', 'UA-XXXXX-X', 'auto');
				ga('send', 'pageview');
			</script>
		</body>
	</html>
	<?php
} else {
	echo "You are not allowed to see content of this page. Sorry";
}
?>