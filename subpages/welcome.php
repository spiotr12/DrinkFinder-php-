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
                <div id="facebookLogin">
                    <div id="fb-root"></div>
                    <div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true"></div>
                </div>
            </div>
            <div class="row">
                <div id="allowAccess">
                    <input id="datePicker" type="text"/>
                    <a href='#' id="submit" class='button'>Submit</a> 
                </div>
                <div id="continue" class="continue-form">
                    <form role="form" method="post" action="php/continueToPage.php">
                        <div class="input-group" style="visibility: visible;">
                            <input id="isAllowedInput" type="hidden" name="isAllowed" value="false"/>
                        </div>
                        <button class="btn btn-success" value="continue" type="submit">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
