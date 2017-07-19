<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="<?= base_url('assets/website_assets/css/bootstrap.min.css')?>" rel="stylesheet" media="screen">

    <link href="<?= base_url('assets/website_assets/css/styles.css')?>" rel="stylesheet" media="screen">
    <link href="<?= base_url('assets/website_assets/css/media.css')?>" rel="stylesheet" media="screen">
  </head>

  <style type="text/css">

    #customBtn {
      display: inline-block;
      background: white;
      color: #444;
      width: 190px;
      border-radius: 5px;
      border: thin solid #888;
      box-shadow: 1px 1px 1px grey;
      white-space: nowrap;
    }
    #customBtn:hover {

      cursor: pointer;
      
    }
    span.label {
      font-family: serif;
      font-weight: normal;
    }
    span.icon {
      background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 42px;
      height: 42px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 42px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto', sans-serif;
    }

  </style>


  <body>

  <script>

    window.fbAsyncInit = function() {

      FB.init({
        appId      : '778014919032770',
        cookie     : true,
        xfbml      : true,
        version    : 'v2.8'
      });
      FB.AppEvents.logPageView();   

      FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
      });

    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    function statusChangeCallback(response) {

      if (response.status === 'connected') {
        testAPI();
      } else {
        document.getElementById('status').innerHTML = 'You Are Not Currently Logged In';
      }

    }

    function testAPI() {

      FB.api('/me', function(response) {
        document.getElementById('status').innerHTML = 'User name is '+response.name;
      });

    }

  </script>

    <div class="container">

      <button id='fblogin'>Login with facebook</button>
      <button id='fbshare'>Share on facebook</button>

      <div id="gSignInWrapper">
        <span class="label">Sign in with:</span>
        <div id="customBtn" class="customGPlusSignIn">
          <span class="icon"></span>
          <span class="buttonText">Google</span>
        </div>
      </div>
      <div id="name"></div>
      <div id="status"></div>

    </div>

    <script src="<?= base_url('assets/website_assets/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/website_assets/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/website_assets/js/script.js')?>"></script>


    <script src="https://apis.google.com/js/api:client.js"></script>


    <script type="text/javascript">


    var googleUser = {};
    var startApp = function() {
      gapi.load('auth2', function(){
        // Retrieve the singleton for the GoogleAuth library and set up the client.
        auth2 = gapi.auth2.init({
          client_id: '199580801575-u3sumgmrdfphjfhk26kieh48g4vd093p.apps.googleusercontent.com',
          cookiepolicy: 'single_host_origin',
          // Request scopes in addition to 'profile' and 'email'
          //scope: 'additional_scope'
        });
        attachSignin(document.getElementById('customBtn'));
      });
    };

    function attachSignin(element) {
      console.log(element.id);
      auth2.attachClickHandler(element, {},
          function(googleUser) {
            document.getElementById('name').innerText = "Signed in: " +
                googleUser.getBasicProfile().getName();
          }, function(error) {
            alert(JSON.stringify(error, undefined, 2));
          });
    }

    startApp();


      $('#fblogin').click(function(){

          FB.login(function(response){

              statusChangeCallback(response);

          });
      })

      $('#fblogout').click(function(){

          FB.logout(function(response) {

            if(response.status=="unknown"){
              location.reload();
            }

          });
      })

      $('#fbshare').click(function(){

          FB.ui({

            method: 'feed',
            link: 'http://tahamehmoodansari.com/',
            quote: 'YOUR SCORE IS 425',

          }, function(response){});
      })

      

    </script>

  </body>
</html>