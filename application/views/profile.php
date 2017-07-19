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


<!-- google analysis -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-101172094-1', 'auto');
	  ga('send', 'pageview');

	</script>


	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '1645475025691908'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=1645475025691908&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
	<div class="preloader">
		<img src="<?= base_url('assets/aniq_assets')?>/images/preloader.gif">
	</div>
	<div class="container">
		<!--menu-->
		<?php # include_once("includes/menu.php") ?>

		<div class="menu grid-100 mobile-grid-100 tablet-grid-100">
			<div class="menu_sub grid-90 prefix-5 mobile-grid-100 tablet-grid-100">
				<img src="<?= base_url('assets/aniq_assets')?>/images/logo1.png" class="logo1" alt="" />
				<ul class="menu_ul">
					<li class="menu_li">
						<a class="menu_a" href="<?= base_url('index.php/home/homePage')?>">How to Play</a>
					</li>
					<li class="menu_li">
						<a class="menu_a" href="<?= base_url('index.php/home/Leaderboard')?>">Leaderboard</a>
					</li>
					<li class="menu_li">
						<a id="username" class="menu_a" href="<?=base_url('index.php/home/profile/')?>">Hi <?=@$this->session->userdata('users_data')->username?>,</a> 
						<div id="profile" class="profile_cirlce" style="background: url('<?=@$this->session->userdata('users_data')->profile?>'); background-size: 100% 100%;">
						</div>
					</li>
				</ul>
			</div>	
		</div>


		<!--menu-->
		<p class="date_text">In Theatres June 23</p>
		<div class="landing_box grid-30 prefix-5 mobile-grid-100 tablet-grid-100">
			<div class="profile_box pad0 grid-100 mobile-grid-100 tablet-grid-100">
				<div class="qb grid-100 pad0 tablet-grid-100 mobile-grid-100">
					<p class="landing_text" style="text-align:left;">Your Profile</p>
				</div>
				<div class="quiz_sub grid-100 mobile-grid-100 tablet-grid-100">
					<div class="grid-100 mobile-grid-100 tablet-grid-100">
						<div class="profile_cirlce1">
							<img id='profile_pic' src="<?=@$this->session->userdata('users_data')->profile?>" class="profile_img" alt="" />	
						</div>
					</div>
					<div class="profile_sub grid-80 mobile-grid-100 tablet-grid-100">
						<p class="profile_text">NAME</p>
						<input id="name" type="text" class="profile_inpt" name="name" value="<?=@$this->session->userdata('users_data')->username?>">
					</div>
					<div class="profile_sub grid-80 mobile-grid-100 tablet-grid-100">
						<p class="profile_text">PHONE NO.</p>
						<input id="mobile" type="text" class="profile_inpt" name="number" value="<?=@$this->session->userdata('users_data')->mobile?>">
					</div>
					<div class="profile_sub grid-80 mobile-grid-100 tablet-grid-100">
						<p class="profile_text">DATE OF BIRTH</p>
						<input placeholder="DD/MM/YYYY" id="birthday" type="text" class="profile_inpt" name="birthday" value="<?=@$this->session->userdata('users_data')->birthday?>">
					</div>
					<div class="profile_sub grid-80 mobile-grid-100 tablet-grid-100">
						<p class="profile_text">EMAIL</p>
						<input id="email" type="email" class="profile_inpt" name="email" value="<?=@$this->session->userdata('users_data')->email?>">
					</div>
					<div class="grid-50 mobile-grid-100 tablet-grid-100">

						 <p id="success"></p>
						 <input id='update' type="submit" class="submit_click" value="UPDATE">	
					</div>
				</div>
			</div>
			<img src="<?= base_url('assets/aniq_assets')?>/images/meet.png" class="meet hide-on-mobile hide-on-tablet" alt="" />	
		</div>
		<!--footer-->
		<?php # include_once("includes/footer.php") ?>
		<!--footer-->
	</div>

	<script src="<?= base_url('assets/aniq_assets')?>/assets/javascripts/jquery.js"></script>
	<script src="<?= base_url('assets/aniq_assets')?>/js/script.js"></script>
	<script src="<?= base_url('assets/aniq_assets')?>/js/lockr.min.js"></script>

	<script src="<?= base_url('assets/aniq_assets')?>/assets/javascripts/demo.js"></script>

	<script type="text/javascript">
			
	// $('#profile_pic').attr('src',Lockr.get('user_details').profile);
	// $('#name').val(Lockr.get('user_details').username);
	// $('#mobile').val(Lockr.get('user_details').mobile);
	// $('#birthday').val(Lockr.get('user_details').birthday);
	// $('#email').val(Lockr.get('user_details').email);


	</script>

</body>
</html>