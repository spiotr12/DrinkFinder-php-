<?php
if (session_status() == PHP_SESSION_ACTIVE) {
    session_destroy();
}
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/vendor/jquery.tablesorter.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/flick/jquery-ui.css">
        <!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
        <script src="https://apis.google.com/js/client:platform.js" async defer></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="js/loginScript.js" type="text/javascript"></script>
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

            </div><!--/.navbar-collapse -->
        </nav> 

        <!--A container with a 2x2 structure -->
        <div class="container">
            <!--The first row -->
            <div class="row">
                <!--Spanning across both columns, a div which contains
                    a welcome message to the user, takes up 10/12 available
                     bootstrap columns, starting from the second column-->
                <div class="col-md-10 col-md-offset-1 WelcomeBox">
                    <!--The welcome message to be displayed to the user-->
                    <h1> Welcome!</h1>
                </div>
            </div>
            <!--The second row-->
            <div class="row">
                <!--The first column of this row, takes up 6/12 available
                     bootstrap columns, starting from the first column-->
                <div class=" col-md-6 WelcomeImage">
                    <img alt="Age verification splash image" src="http://www.wizid.com.au/images/wristbands/wristbands-tyvek-25mm-age-verified-over-18.jpg"/>
                </div>
                <!--The second column of this row containing two rows
                    , takes up 4/12 available bootstrap columns,
                    starting from the eighth column-->
                <div class="col-md-4 col-md-offset-2">
                    <!--The first row inside this column-->
                    <div class="row">
                        <!--Div which contains a welcome message to the user-->
                        <div id="WelcomeMessage">
                            <!--A warning message to the user that the content
                                which they wish to view has an age gate-->
                            <h3>You must login to enter this website, please login using one of the buttons below! :)
                            </h3>
                        </div>
                    </div>
                    <!--The second row inside this column-->
                    <div class="row">
                        <!--Contains the google+ login button-->
                        <div id="googleLogin">
                            <span id="signinButton">
                                <span
                                    class="g-signin"
                                    data-callback="signinCallback"
                                    data-clientid="163291490614-lav230edraqion2mh3nleqjpsvv90run.apps.googleusercontent.com"
                                    data-cookiepolicy="single_host_origin"
                                    data-requestvisibleactions="http://schema.org/AddAction"
                                    data-scope="https://www.googleapis.com/auth/plus.login">
                                </span>
                            </span>			
                        </div>
                    </div>
                    <div class="row">
                        <!--Contains the facebook login button-->
                        <div id="facebookLogin">
                            <div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true" onlogin="doStuff();"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <input id="datePicker" type="text"/>
                            <a href='#' id="submit" class='button'>Submit</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        <script type="text/javascript">
            function doStuff() {
                facebookLoginCallBack();
            }
        </script>

        <script>
            $(function () {
                $('#sorttable').tablesorter();
            });
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
?>
