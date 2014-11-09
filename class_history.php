<!DOCTYPE html>
<html>
<?php
session_start();
$_SESSION['Title']="Class History";
include("header.php");
?>


	<!-- main container -->
    <div class="content">
        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '746062275469473',
      xfbml      : true,
      version    : 'v2.2'
    });
  };
  FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    console.log('Logged in.');
  }
  else {
    FB.login();
  }
});

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
        <!-- <fb:login-button scope="pubtdc_profile,email" onlogin="checkLoginState();">
        </fb:login-button>

        <div id="status">
        </div> -->
        <!-- settings changer -->

         <div class="row" style="margin-top: 20px;">
            <div class="col-md-10 col-md-offset-1" align="center">
                <h1 class = "Class-Title">Appcology </h1>
            </div>
            <div align="center">
                <table class="friends_pics">
                    <tr>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-10 col-md-offset-1" align="center">
                <h1 class = "Class-Title">Econ 121</h1>
            </div>
            <div align="center">
                <table class="friends_pics">
                    <tr>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-10 col-md-offset-1" align="center">
                <h1 class = "Class-Title">English 181</h1>
            </div>
            <div align="center">
                <table class="friends_pics">
                    <tr>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                        <td><img src="img/contact-img.png"></td>
                    </tr>
                </table>
            </div>
            <!-- <div class="col-md-10 col-md-offset-1" atdgn="center">
                <h1 class = "Class-Title">Biology 141 </h1>
            </div>
            <div class="col-md-10 col-md-offset-1" atdgn="center">
                <h1 class = "Class-Title">Biology 141 </h1>
            </div>
            <div class="col-md-10 col-md-offset-1" atdgn="center">
                <h1 class = "Class-Title">Biology 141 </h1>
            </div>
            <div class="col-md-10 col-md-offset-1" atdgn="center">
                <h1 class = "Class-Title">Biology 141 </h1>
            </div>
            <div class="col-md-10 col-md-offset-1" atdgn="center">
                <h1 class = "Class-Title">Biology 141 </h1>
            </div> -->

        </div>
        <div class="skins-nav">
            <a href="#" class="skin first_nav selected">
                <span class="icon"></span><span class="text">Default skin</span>
            </a>
            <a href="#" class="skin second_nav" data-file="css/compiled/skins/dark.css">
                <span class="icon"></span><span class="text">Dark skin</span>
            </a>
        </div>
       


    </div>

    <!-- scripts -->
    <script src="js/jquery-1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.10.2.custom.min.js"></script>
    <!-- knob -->
    <script src="js/jquery.knob.js"></script>
    <!-- flot charts -->
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <script src="js/theme.js"></script>
</body>
</html>