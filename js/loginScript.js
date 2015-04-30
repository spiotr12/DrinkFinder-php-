/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var allowedAccess = null;
window.onload = function () {
    go();
};

function go() {
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

function signinCallback(authResult) {
    if (authResult['status']['signed_in']) {
        // Update the app to reflect a signed in user
        // Hide the sign-in button now that the user is authorized, for example:
        //document.getElementById('signinButton').setAttribute('style', 'display: none');
        document.getElementById('WelcomeMessage').setAttribute('style', 'display:none')
        gapi.auth.setToken(authResult);
        gapi.client.load('plus', 'v1').then(function () {
            var request = gapi.client.plus.people.get({
                'userId': 'me'
            });

            request.execute(function (resp) {
                //document.getElementById('googleLogin').setAttribute('style', 'display: none');
                var name = resp.displayName;
                var age = resp.ageRange.max;
                if (age != undefined) {
                    if (age == 17) {
                        allowedAccess = false;
                    }
                    else {
                        allowedAccess = true;
                    }

                    document.getElementById('googleLogin').innerHTML =
                            "<h2> Hello " + name + "</h2>" +
                            "<p>You have successfully logged in with Google+</p>" +
                            "<p>Please press Continue to Enter the Website</p>";
                }
                else {
                    document.getElementById('googleLogin').innerHTML =
                            "<h2> Hello " + name + "</h2>" +
                            "<p>Please Enter your date of birth</p>";
                    document.getElementById('datePicker').setAttribute('style', 'display:inline');
                }
                document.getElementById('submit').setAttribute('style', 'display:inline');
                document.getElementById('facebookLogin').setAttribute('style', 'display:none');
            });
        });

    } else {
        // Update the app to reflect a signed out user
        // Possible error values:
        //   "user_signed_out" - User is signed-out
        //   "access_denied" - User denied access to your app
        //   "immediate_failed" - Could not automatically log in the user
        console.log('Sign-in state: ' + authResult['error']);
    }

    $(function () {
        //Call the datepicker
        $("#datePicker").datepicker({dateFormat: 'dd/mm/yy'});
        $('#sorttable').tablesorter();

        //Age Validation
        $('#submit').click(function () {
            if (allowedAccess == null) {
                var input = $("#datePicker").val();
                if (input == "") {
                    alert("Please enter a date of birth");
                }
                else {
                    var day = input.substring(0, 2);
                    var mon = input.substring(3, 5);
                    var year = input.substring(6, 10);
                    var dob = year + mon + day;

                    var d = new Date();

                    var month = d.getMonth() + 1;
                    var day = d.getDate();

                    var todayDate = d.getFullYear() +
                            (('' + month).length < 2 ? '0' : '') + month +
                            (('' + day).length < 2 ? '0' : '') + day;

                    if ((todayDate - dob) < 180000) {
                        allowedAccess = false;
                    }
                    else {
                        allowedAccess = true;
                    }
                }
            }
            document.getElementById('allowAccess').setAttribute('style', 'display:none');
            if (allowedAccess == true) {
                document.getElementById('googleLogin').innerHTML =
                        "<p>You are allowed to enter, please press continue!</p>";
                document.getElementById('isAllowedInput').setAttribute('value', '1');
            }
            else {
                document.getElementById('googleLogin').innerHTML =
                        "<p>You are not allowed to enter</p>";
            }
            document.getElementById('continue').setAttribute('style', 'display:inline');
        })
    });
}

//Facebook Login Functions
window.fbAsyncInit = function () {
    FB.init({
        appId: '579446912158414',
        xfbml: true,
        version: 'v2.3'
    });
};

var name;

function welcomeUser(){
    document.getElementById('WelcomeMessage').setAttribute('style', 'display:none')
    document.getElementById('googleLogin').setAttribute('style', 'display:none');
    document.getElementById('facebookLogin').innerHTML =
            "<h2> Hello " + name + "</h2>" +
            "<p>You have successfully logged in with Facebook</p>" +
            "<p>Please press Continue to Enter the Website</p>";
    document.getElementById('isAllowedInput').setAttribute('value', '1');
    document.getElementById('continue').setAttribute('style', 'display:inline');
    
}
function facebookLoginCallBack() {
    
    FB.api('/me', {fields: 'name'}, function (response) {
        name = response.name;    
        welcomeUser();
    });    
    

}

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=579446912158414";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

    