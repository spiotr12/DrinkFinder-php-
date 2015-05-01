/* 
 * Log-in Javascript file to accompant index.php
 * Date: 30/04/15
 * Description: Javascript files which enable the use of the facebook and google+
 *              api's to allow a user to log in to our website using their facebook
 *              or google+ accounts, checking to see if the user is over the UK
 *              Drinking age before letting them in.
 */

//A variable which determines whether a user is allowed access to the website, determined
//by their age
var allowedAccess;
//A variable which determines whether a user is logged into facebook or not.
var faceIn = null;

//When the window loads, perform the googleSignIn function
window.onload = function () {
    googleSignIn();
};

/*A function which creates the google sign in button and listens to see when
 the sign in button is pressed. When the button is pressed it logs the user in*/
function googleSignIn() {
    console.log('Sign-in state: ');
    // Additional params including the callback, the rest of the params will
    // come from the page-level configuration.
    var additionalParams = {
        'callback': signinCallback
    };

    // Attach a click listener to a button to trigger the flow.
    var signinButton = document.getElementById('signinButton');
    signinButton.addEventListener('click', function () {
        console.log('Sign-in state: ');
        gapi.auth.signIn(additionalParams); // Will use page level configuration
    });
}

/*A function which is called after the user has successfully logged in with google*/
function signinCallback(authResult) {
    //Only do the following if the user is not signed in to facebook
    if (faceIn === false) {
        //If the user is signed in to google
        if (authResult['status']['signed_in']) {
            // Update the app to reflect a signed in user
            // Hide the sign-in buttons now that the user is authorized
            $('#googleLogin').hide();
            $('#facebookLogin').hide();
            document.getElementById('allowAccess').setAttribute('style', 'display:inline');
            gapi.auth.setToken(authResult);
            //Choose the version one google+ client and retrieve the users information
            gapi.client.load('plus', 'v1').then(function () {
                //store the users information to the variable loggedInUser
                var loggedInUser = gapi.client.plus.people.get({
                    'userId': 'me'
                });

                //execute the following function on the loggedInUser variable
                loggedInUser.execute(function (resp) {
                    //create a variable called name to store the user's name
                    var name = resp.displayName;
                    //create a variable age to store the user's age range (0-17),(18-20) or 21+
                    var age = resp.ageRange.max;
                    //If we can access the user's age from their google account
                    if (age != undefined) {
                        //If the user is less than 18
                        if (age == 17) {
                            //They are not allowed to access the website
                            allowedAccess = false;
                            //Display this information to the user
                            document.getElementById('WelcomeMessage').innerHTML =
                                    "<p2>You are under the age of 18 and hence, not allowed to enter. Sorry! :(</p2>";
                        }
                        //If the user is over 18
                        else {
                            //They are allowed to access the website
                            allowedAccess = true;
                            //Display this information to the user
                            document.getElementById('WelcomeMessage').innerHTML =
                                    "<h2> Hello " + name + "</h2>" +
                                    "<p2>You have successfully logged in with Google+ </p2>" +
                                    "<p2>Please press Continue to Enter the Website</p2>";
                        }
                        //Show the user the continue button regardless of wether they are old enough or not
                        document.getElementById('continue').setAttribute('style', 'display:inline-block');
                    }
                    //If we do not know their age from the google+ account
                    else {
                        //Print out a message to the user asking them to enter their date of birth
                        document.getElementById('WelcomeMessage').innerHTML =
                                "<h2> Hello " + name + "</h2>" +
                                "<p2>Please Enter your date of birth</p2>";
                        //Display both the datepicker and the submit button for the datepicker
                        document.getElementById('datePicker').setAttribute('style', 'display:inline');
                        document.getElementById('submit').setAttribute('style', 'display:inline');
                    }
                });
            });
            //If they are not signed in, print out to console an error letting the user know
            //what the problem is.
        } else {
            // Update the app to reflect a signed out user
            // Possible error values:
            //   "user_signed_out" - User is signed-out
            //   "access_denied" - User denied access to your app
            //   "immediate_failed" - Could not automatically log in the user
            console.log('Sign-in state: ' + authResult['error']);
        }
    }

    //A function which activates the JQuery datepicker
    $(function () {
        //Call the datepicker, format it to UK format
        $("#datePicker").datepicker({dateFormat: 'dd/mm/yy'});
        //When the submit button is clicked, execute the following
        $('#submit').click(function () {
            //Create a variable called inputDate which takes the value from the
            //datePicker.
            var inputDate = $("#datePicker").val();
            //If the user has not selected a date
            if (inputDate == "") {
                //Ask them to select a date
                alert("Please enter your date of birth");
            }
            //if the date does not have slashes/separators
            else if ((inputDate.length) < 10) {
                //ask them to re-enter
                alert("Please enter the date in the format dd/mm/yyy");
            }
            //If the user has selected a date
            else {
                //store the first two numbers as the day
                var day = inputDate.substring(0, 2);
                //the next two number as the month
                var mon = inputDate.substring(3, 5);
                //the next two numbers as the year
                var year = inputDate.substring(6, 10);
                //format the date of birth into yyyymmdd
                var dob = year + mon + day;

                //Create a new date variable to store todays date
                var d = new Date();

                //Get todays month
                var month = d.getMonth() + 1;
                //Get todays date
                var day = d.getDate();
                //Calculate todays date
                var todayDate = d.getFullYear() +
                        (('' + month).length < 2 ? '0' : '') + month +
                        (('' + day).length < 2 ? '0' : '') + day;

                /*Compare today's date against their date of birth, if they are
                 under 18*/
                if ((todayDate - dob) < 180000) {
                    //They are not allowed to enter
                    allowedAccess = false;
                }
                //They must be over 18 then
                else {
                    //They are allowed to enter
                    allowedAccess = true;
                }
                //Hide the div which contains the datePicker
                document.getElementById('allowAccess').setAttribute('style', 'display:none');
            }

            //If they are old enough to enter the website
            if (allowedAccess == true) {
                //Inform the user that they are old enough
                document.getElementById('WelcomeMessage').innerHTML =
                        "</br></br></br><p2>You are allowed to enter, please press continue!</p2>";
                /*Set the value attribute of isAllowedInput to 1 (This value is checked
                 By a PhP script when the continue button is pressed and acts as an age
                 gate*/
                document.getElementById('isAllowedInput').setAttribute('value', '1');
                //Show the continue button
                document.getElementById('continue').setAttribute('style', 'display:inline-block');
            }
            //They are not old enough to enter the website
            else if (allowedAccess == false) {
                //Inform them they are not old enough to enter
                document.getElementById('WelcomeMessage').innerHTML =
                        "<p2>You are under the age of 18 and hence, not allowed to enter. Sorry! :( </p2>";
                //Show the continue button to the user (will not give them access)
                document.getElementById('continue').setAttribute('style', 'display:inline-block');
            }
            ;
        });
    });
}

//A function to load and initialise the Facebook SDK
window.fbAsyncInit = function () {
    FB.init({
        appId: '579446912158414',
        xfbml: true,
        version: 'v2.3'
    });
    //After initialising the facebook SDK, run the facebookLoginCallBack function
    facebookLoginCallBack();
}
;

//Setup a variable which will store the name of the user
var name;
//A function which will welcome the user when they have been logged in
function welcomeUser() {
    //Print out a message to welcome the user
    document.getElementById('WelcomeMessage').innerHTML =
            "<h2> Hello " + name + "</h2>" +
            "<p2>You have successfully logged in with Facebook</p2>" +
            "<br/><p2>Please press Continue to Enter the Website</p2>";
    //Change the variable in isAllowedInput to allow the user to pass the age gate
    document.getElementById('isAllowedInput').setAttribute('value', '1');
}

//A function which responds to the user successfully logging in with their facebook account
function facebookLoginCallBack() {
    //Set the variable faceIn to true to indicate that the user has logged in with facebook
    faceIn = true;
    //Check to see if the user has logged in to facebook
    FB.getLoginStatus(function (response) {
        //if the user is logged in and has authenticated the app
        if (response.status === 'connected') {
            FB.api('/me', function (response) {
                //Store the user's name as the name variable
                name = response.name;
                //execute the welcomeUser function
                welcomeUser();
            });
            //On successful login, hide the facebook/google login buttons
            $('#facebookLogin').hide();
            $('#googleLogin').hide();
            //And show the continue button
            document.getElementById('continue').setAttribute('style', 'display:inline-block');

            /*If the user is logged into facebook but has not been authorized(is under 18)
             or has not given us permission*/
        } else if (response.status === 'not_authorized') {
            //Assume that they are under age, print this information to the user
            document.getElementById('WelcomeMessage').innerHTML =
                    "<h1> Sorry!</h1>" +
                    "</br><h3>Your facebook account tells us you are under 18 :( </h3>" +
                    "<h3> Unfortunately you have to be over the age of 18 to view this website</h3";
            //User has successfully logged in, hide the login buttons
            $('#facebookLogin').hide();
            $('#googleLogin').hide();
            //And show the continue button
            document.getElementById('continue').setAttribute('style', 'display:inline-block');
            //If the user is not logged in
        } else {
            //Change faceIn to false again
            faceIn = false;
        }
    });
}
//Function which generates the facebook login button
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=579446912158414";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

//Google Analytics: UA-62484612-1 (side-ID)
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
ga('create', 'UA-62484612-1', 'auto');
ga('send', 'pageview');