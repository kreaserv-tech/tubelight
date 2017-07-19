<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<title></title>
	<!--[if lt IE 9]>
	<script src="./assets/javascripts/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?= base_url('assets/aniq_assets')?>/css/style.css" />
	<link rel="stylesheet" href="<?= base_url('assets/aniq_assets')?>/assets/stylesheets/demo.css" />
	<!--[if (gt IE 8) | (IEMobile)]><!-->
	<link rel="stylesheet" href="<?= base_url('assets/aniq_assets')?>/assets/stylesheets/unsemantic-grid-responsive-tablet.css" />
	<!--<![endif]-->
	<!--[if (lt IE 9) & (!IEMobile)]>
	<link rel="stylesheet" href="./assets/stylesheets/ie.css" />
	<![endif]-->
	

</head>
<body>

	<div class="preloader">
		<img src="<?= base_url('assets/aniq_assets')?>/images/preloader.gif">
	</div>


	<div class="container">
		<div class="landing_box grid-40 prefix-5 mobile-grid-100 tablet-grid-100">
			<div class="grid-100 mobile-grid-100 tablet-grid-100">
				<img src="<?= base_url('assets/aniq_assets')?>/images/logo.png" class="logo" alt="" />
			</div>		
			<p class="landing_text">ARE YOU A SALMAN KHAN SUPERFAN? PROVE IT.</p>
			<p class="landing_text1">TAKE THE QUIZ. SIGN UP NOW.</p>
			

			<div class="grid-100 mobile-grid-100 tablet-grid-100">
				<a id='fblogin' href="#">
					<img src="<?= base_url('assets/aniq_assets')?>/images/fb.png" class="login_logo" alt="" />
				</a>
			</div>
			<div class="grid-100 mobile-grid-100 tablet-grid-100">	
				<a href="<?= base_url('index.php/hauth/login/Twitter')?>">
					<img src="<?= base_url('assets/aniq_assets')?>/images/twt.png" class="login_logo" alt="" />
				</a>
			</div>	
			<div class="grid-100 mobile-grid-100 tablet-grid-100">	
				<a id="customBtn"  href="#">
					<img src="<?= base_url('assets/aniq_assets')?>/images/google.png" class="login_logo" alt="" />
				</a>
			</div>	

			<!-- <div id="gSignInWrapper"> -->
		        <!-- <span class="label">Sign in with:</span> -->
		        <!-- <div class="customGPlusSignIn"> -->
		          <!-- <span class="icon"></span> -->
		          <!-- <span class="buttonText">Google</span> -->
		        <!-- </div> -->
		    <!-- </div> -->


		</div>
		<img src="<?= base_url('assets/aniq_assets')?>/images/meet.png" class="meet" alt="" />	
	</div>
	
	<script src="<?= base_url('assets/aniq_assets')?>/assets/javascripts/jquery.js"></script>
	<script src="<?= base_url('assets/aniq_assets')?>/js/script.js"></script>
	<script src="<?= base_url('assets/aniq_assets')?>/js/lockr.min.js"></script>
	<script src="<?= base_url('assets/aniq_assets')?>/assets/javascripts/demo.js"></script>

    <script src="https://apis.google.com/js/api:client.js"></script>
	

	<script type="text/javascript">

		var base_url = "http://inoxbrightesttubelight.com/index.php/";

		window.fbAsyncInit = function() {

	      FB.init({
	        appId      : '778014919032770',
	        cookie     : true,
	        xfbml      : true,
	        version    : 'v2.8'
	      });
	      
	      FB.AppEvents.logPageView();   

	      // FB.getLoginStatus(function(response) {
	      //     statusChangeCallback(response);
	      // });

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
	      }

	    }

	    function testAPI() {

	      FB.api('me?fields=id,name,birthday,email,picture', function(response) {

	        console.log('User name is '+JSON.stringify(response));
	        // return false;

	        $.ajax({

	        	type:'POST',
	        	url: base_url+'home/login',
	        	data:{

	        		from:'facebook',
	        		social_id:response.id,
	        		username:response.name,
	        		birthday:response.birthday,
	        		email:response.email,
	        		profile:response.picture.data.url,

	        	},
	        	success:function(result){

	        		// console.log(result);
	        		var result = JSON.parse(result);
	        		if(result.status=='success'){

	        			console.log('response success');


	        			// Lockr.set('user_details',{social_id:response.id,username:response.name,birthday:response.birthday,email:response.email,profile:response.picture.data.url});

	        			// console.log(Lockr.get('user_details'));
	        			// return false;

	        			location.href = base_url+'home/homePage';
	        		}
	        	},
	        	error:function(error){

	        	}
	        })

	      });

	    }

	    $('#fblogin').click(function(){
			FB.login(function(response){
				statusChangeCallback(response);
			}, {scope: 'public_profile,email,'});
	    })

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

	      // console.log(element.id);

	      auth2.attachClickHandler(element, {},
	          function(googleUser) {

	            var profile = googleUser.getBasicProfile();

	            $.ajax({

		        	type:'POST',
		        	url: base_url+'home/login',
		        	data:{

	        			from:'google',
		        		social_id:profile.getId(),
		        		username:profile.getName(),
		        		profile:profile.getImageUrl(),

		        	},
		        	success:function(result){

		        		// console.log(result);
		        		var result = JSON.parse(result);
		        		if(result.status=='success'){

		        			// Lockr.set('user_details',{username:profile.getName(),profile:profile.getImageUrl()});
		        			location.href = base_url+'home/homePage';
		        		}
		        	},
		        	error:function(error){

		        	}
		        })


	          }, function(error) {
	            	alert(JSON.stringify(error, undefined, 2));
	          });
	    }

	    startApp();

	</script>

</body>
</html>