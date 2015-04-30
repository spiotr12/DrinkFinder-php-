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
        <title>Drinker</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><!--validator error-->        
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
        <script src="js/loginScript.js" type="text/javascript"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav id="navbar" class=" navbar navbar-inverse navbar-fixed-top" role="navigation">
            <nav class=" navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><!--validator error-->
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="drinker.php?link=home" tabindex="1">
                            <img src="img/Logo.png"
                                 alt="Drink Finder Website Logo"/>
                        </a>
                    </div>

                </div><!--/.navbar-collapse -->
            </nav> 

            <!--A container with a 2 columns structure -->
            <div class="container">
                <!--The first column in this container, uses 4/12 bootstrap columns
                    available. Has 4 rows.-->
                <div class="col-md-4">
                    <!--The first row in the column-->
                    <div class="row">
                        <div id="WelcomeMessage">
                            <!--A div which will display any output information onto
                                the screen.-->
                            <h1>Welcome!</h1>
                            <h3>You must login to enter this website, please login using one of the buttons below! :)</h3>
                        </div>
                    </div>
                    <!--The second row inside this column-->
                    <div class="row">
                        <!--Contains the google+ login button-->
                        <div id="googleLogin" class="login">
                            <span id="signinButton">
                                <button  tabindex="2"
                                         class="g-signin"
                                         data-callback="signinCallback"
                                         data-clientid="163291490614-lav230edraqion2mh3nleqjpsvv90run.apps.googleusercontent.com"
                                         data-cookiepolicy="single_host_origin"
                                         data-requestvisibleactions="http://schema.org/AddAction"
                                         data-scope="https://www.googleapis.com/auth/plus.login">
                                </button>
                            </span>			
                        </div>
                    </div>
                    <!-- The third row inside this column-->
                    <div class="row">
                        <!--Contains the facebook login button-->
                        <div id="facebookLogin" class="login">
                            <div id="fb-root"></div>
                            <div tabindex="3"
                                 class="fb-login-button"                                
                                 data-max-rows="1"
                                 data-size="xlarge"
                                 data-show-faces="false"
                                 data-auto-logout-link="true"
                                 onlogin="doStuff();">
                            </div>
                        </div>
                    </div>
                    <!-- The fourth row inside this column-->
                    <div class="row">
                        <!--A div containing the date picker input field and the
                            submit button to enter the input-->
                        <div id="allowAccess" class="login">
                            <input id="datePicker" type="text" tabindex="4"/>
                            <a href='#' id="submit" class='button' tabindex="5">Submit</a> 
                        </div>
                        <!--A div containing the continue button which will forward the user
                            user to the main web site if they are over 18-->
                        <div id="continue" class="continue-form">
                            <form role="form" method="post" action="php/continueToPage.php">
                                <!--A hidden div which stores a value, this value is the key
                                    to the age gate to enter the main website, 0 = not allowed,
                                    1 = allowed.-->
                                <div class="input-group">
                                    <input id="isAllowedInput" type="hidden" name="isAllowed" value="0"/>
                                </div>
                                <!--The continue button-->
                                <button class="btn btn-success" tabindex="6" value="continue" type="submit">Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--The second column of this row containing six columns
                    leaving an offset of two columns -->
                <div class=" col-md-6 col-md-offset-2 WelcomeImage">
                    <!--An image displayed on the page-->
                    <img alt="Age verification splash image" src="../img/wristbands2.png"/>
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
            <script type="text/javascript">
            /*Facebook login cannot access the facebookLoginCallBack() method from the
             * external javascript file. Instead this acts as a stepping stone, the
             * login button calls this method, and this method calls the 
             * facebookLoginCallBack() method. */
            function doStuff() {
                facebookLoginCallBack();
            }
            </script>                
    </body>
</html>
<?php
?>
