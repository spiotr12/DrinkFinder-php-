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

/* TODO:
 * - change search (add place/drink option)
 * - search for the item
 * - print result table
 * - show place
 * - show drink
 */
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><!--validator error-->
        <title>Drinker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


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
                    <a class="navbar-brand" href="index.php?link=home"><img src="img/Logo.png" alt=""/></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse extend">
					<div class="navbar-form navbar-right" role="form">
						<div class="form-group">
							<form class="form-in-nav" role="form" name="search" action="php/search.php" method="get">
								<div class="input-group">
									<!-- Search engine -->
									<input type="text" name="searchFor" class="form-control" placeholder="Search for...">								<span class="input-group-btn">
										<button class="btn weed" type="submit" name="searchType" value="drink"><img class="img-responsive" src="img/glyphicons-275-beer.png" alt="Search for drink"/></button>
										<button class="btn weed" type="submit" name="searchType" value="place"><img class="img-responsive" src="img/glyphicons-243-google-maps.png" alt="Search for place"/></button>

									</span>
								</div>
							</form>
							<!-- /input-group -->
							<div class="btn-group input-group dropdown">
								<button class="btn weed" type="button" ><span class="glyphicon glyphicon-user"></span></button>
								<button class="btn weed dropdown-toggle" data-toggle="dropdown">

									<span class="caret"></span>
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdowncolor" onclick="username(event)" >

									<form style="margin: 0px" accept-charset="UTF-8" action="/sessions" method="post"> 
										<div style="margin:0;padding:0;display:inline">
											<input name="utf8" type="hidden" value="&#x2713;" />
											<input name="authenticity_token" type="hidden" value="4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=" />
										</div>
										<!-- Boxes for login and password in drop down menu-->
										<fieldset class='textbox' style="padding:10px">
											<input id = "username" style="margin-top: 8px" type="text" placeholder="Username"/>
											<input style="margin-top: 8px" type="password" placeholder="Passsword" />
											<input class="btn weed btn-sm center-block" name="commit" type="submit" value="Log In" style="margin-top: 7px;" />
										</fieldset>
									</form>
								</div>
							</div> 
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
				case "place" : include './subpages/place.php';
					break;
				case "drink" : include './subpages/drink.php';
					break;
				case "welcome" : include './subpages/welcome.php';
					break;

				//default
				default : include './subpages/home.php';
					break;
			}
			?>
		</section>

        <!-- FOOTER -->
        <section class="giveColor footer">
            <div class="container customfooter">
                <div class="row dark-grey row-custom">
                    <footer>
                        <!-- Information which would be include in footer -->
                        <h6 class="center-this">
                            PSSSST!! Did you know that this site was crafted
                            <br/>
                            using one theme included in the bundle? Cool right?!
                        </h6>
                        <h6 class="center-this">
                            DrinkFinder.com | Copyright 2015
                        </h6>
                    </footer>
                </div>
            </div>
        </section>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

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
