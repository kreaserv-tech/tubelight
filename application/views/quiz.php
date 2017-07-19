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
	        <div id='q1' class='quiz_box q1 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>When was Salman Khan's life-size wax figure installed?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz1' value='1'>12th November, 2009</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz1' value='2'>15th January, 2008</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz1' value='3'>19th February, 2006</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz1' value='4'>27th December, 2007</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='1' value='SUBMIT'></div>
	            </div>
	        </div>
	        <div id='q2' class='quiz_box hide q2 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>What is Salman Khan's date of birth?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz2' value='1'>27th December, 1965</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz2' value='2'>27th December, 1964</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz2' value='3'>27th December, 1960</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz2' value='4'>27th December, 1966</p>
	                </div>

	                <div style="clear:both"></div>
	                
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='2' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q3' class='quiz_box hide q3 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Who played the role of Salman Khan's Boss in the film Hello Brother?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz3' value='1'>Shakti Kapoor</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz3' value='2'>Anupam Kher</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz3' value='3'>Dalip Tahil</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz3' value='4'>Amitabh Bachchan</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='3' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q4' class='quiz_box hide q4 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Salman had two names Rohan Yadav and Vasudev Gujral in this film</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz4' value='1'>Nishchaiy</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz4' value='2'>Auzaar</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz4' value='3'>Dil Ne Jise Apna Kahaa</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz4' value='4'>Dil Tera Aashiq</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='4' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q5' class='quiz_box hide q5 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>In which David Dhavan comedy does Salman Khan play the role of a married man having an affair with a model, played by Sushmita Sen?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz5' value='1'>Main Aur Mrs Khanna</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz5' value='2'>Baghban</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz5' value='3'>Biwi No. 1</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz5' value='4'>Kal Ho Na Ho</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='5' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q6' class='quiz_box hide q6 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>In which city was Salman Khan born?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz6' value='1'>New Delhi</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz6' value='2'>Bangalore</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz6' value='3'>Mumbai</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz6' value='4'>Indore</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='6' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q7' class='quiz_box hide q7 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que7.jpg' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie from the still frame</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz7' value='1'>Tubelight</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz7' value='2'>Bajrangi Bhaijaan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz7' value='3'>Partner</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz7' value='4'>Yeh Hai Jalwa</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='7' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q8' class='quiz_box hide q8 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que8.jpg' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie and name his co star in the film</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz8' value='1'>Sultan - Anushka Sharma</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz8' value='2'>Bajrangi Bhaijaan - Kareena Kapoor</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz8' value='3'>Body Guard - Kareena Kapoor</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz8' value='4'>Dabang - Sonakshi Sinha</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='8' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q9' class='quiz_box hide q9 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Name the debut film of Salman Khan.</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz9' value='1'>Maine Pyar Kiya</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz9' value='2'>Biwi Ho To Aisi</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz9' value='3'>Hum Aapke Hain Kaun</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz9' value='4'>Saajan</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='9' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q10' class='quiz_box hide q10 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>What colour is the stone of Salman Khan's bracelet?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz10' value='1'>Turquoise</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz10' value='2'>Blue Topaz</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz10' value='3'>Sapphire</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz10' value='4'>Garnet</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='10' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q11' class='quiz_box hide q11 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que11.png' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz11' value='1'>Ek tha Tiger</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz11' value='2'>Bodyguard</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz11' value='3'>Hum Saath Saath Hain</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz11' value='4'>Hello Brother</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='11' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q12' class='quiz_box hide q12 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que12.png' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz12' value='1'>Hello Brother</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz12' value='2'>Chal Mere Bhai</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz12' value='3'>Hum Dono</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz12' value='4'>Sultan</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='12' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        
	        <div id='q13' class='quiz_box hide q13 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que13.jpg' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the film and name the character he plays in the film?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz13' value='1'>Kick / Devi Lal Singh</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz13' value='2'>Dabang / Chulbul P. Pandey</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz13' value='3'>Bajrangi Bhaijaan/ Pawan Kumar Chaturvedi</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz13' value='4'>Tubelight/ Laxman</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='13' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q14' class='quiz_box hide q14 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Who played the role of Salman Khan's Boss in the film Hello Brother?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz14' value='1'>Amitabh Bachchan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz14' value='2'>Dalip Tahil</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz14' value='3'>Anupam Kher</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz14' value='4'>Shakti Kapoor</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='14' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q15' class='quiz_box hide q15 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>In this film his character's name was also called Salman Khan</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz15' value='1'>Sanam Bewafa</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz15' value='2'>Dil Tera Aashiq</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz15' value='3'>Chand Kaa Tukda</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz15' value='4'>Maine Pyaar Kiya</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='15' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q16' class='quiz_box hide q16 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Name the Prabhu Deva directorial debut 2009 film in which Salman Khan played the role of a Gangster</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz16' value='1'>Baghban</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz16' value='2'>Hello</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz16' value='3'>Wanted</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz16' value='4'>God Tussi Great Ho</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='16' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q17' class='quiz_box hide q17 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Salman's screen name in this film was not Prem</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz17' value='1'>Biwi No.1</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz17' value='2'>Hum Saath-Saath Hain</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz17' value='3'>Jaanam Samjha Karo</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz17' value='4'>Biwi Ho To Aise</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='17' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q18' class='quiz_box hide q18 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>In which Sanjay Leela Bhansali directed film did Salman Khan act as a music learner alongside famous actress Aishwarya Rai?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz18' value='1'>Hum Aapke Hain Kaun</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz18' value='2'>Hum Tumhare Hain Sanam</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz18' value='3'>Hum Saath Saath Hain</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz18' value='4'>Hum Dil De Chuke Sanam</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='18' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q19' class='quiz_box hide q19 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que19.png' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz19' value='1'>Biwi No.1</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz19' value='2'>Jaanam Samjha Karo</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz19' value='3'>Hum Saath Saath Hain</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz19' value='4'>Maine pyar kyu kiya</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='19' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q20' class='quiz_box hide q20 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que20.png' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz20' value='1'>Kuch Kuch Hota Hai</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz20' value='2'>Jai Ho</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz20' value='3'>Mujhse Shaadi Karogi</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz20' value='4'>Hum Saath Saath Hai</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='20' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q21' class='quiz_box hide q21 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>What is the name of Salman Khan's father who is also a celebrated bollywood script writer?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz21' value='1'>Sanjay Khan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz21' value='2'>Kader Khan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz21' value='3'>Salim Khan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz21' value='4'>Irfan Khan</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='21' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q22' class='quiz_box hide q22 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Name the Salman Khan - Shilpa Shetty starrer which deals with AIDS.</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz22' value='1'>Main Aur Mrs Khanna</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz22' value='2'>Kal Ho Na Ho</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz22' value='3'>Phir Milenge</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz22' value='4'>Baghban</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='22' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q23' class='quiz_box hide q23 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Which actress played the lead role opposite Salman Khan in the Sooraj Barjatya directed superhit film Maine Pyar Kiya?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz23' value='1'>Rani Mukherjee</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz23' value='2'>Karishma Kapoor</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz23' value='3'>Madhuri Dixit</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz23' value='4'>Bhagyashree</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='23' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q24' class='quiz_box hide q24 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Which is the first television reality show hosted by Salman Khan?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz24' value='1'>Dus Ka Dum</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz24' value='2'>Kaun Banega Crorepati 3</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz24' value='3'>Khatron Ke Khiladi</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz24' value='4'>Kya Aap Paanchvi Pass Se Tej Hai</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='24' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q25' class='quiz_box hide q25 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que25.png' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz25' value='1'>Tubelight</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz25' value='2'>Kyuki</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz25' value='3'>Biwi No. 1</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz25' value='4'>Chal Mere Bhai</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='25' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q26' class='quiz_box hide q26 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que26.png' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz26' value='1'>Bodyguard</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz26' value='2'>Maine Pyaar Kiya</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz26' value='3'>Mujhse Shaadi Karogi</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz26' value='4'>Prem Ratan Dhan Payo</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='26' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q27' class='quiz_box hide q27 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Salman has played Prem in many movies. Which one was his first 'Prem' movie?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz27' value='1'>Hum Aapke Hain Kaun</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz27' value='2'>Maine Pyaar Kiya</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz27' value='3'>Hum Saath Saath Hain</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz27' value='4'>Biwi No.1</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='27' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q28' class='quiz_box hide q28 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>In this film Salman's screen name was Vicky Bhandari?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz28' value='1'>Sanam Bewafa</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz28' value='2'>Maine Pyaar Kiya</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz28' value='3'>Biwi Ho To Aise</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz28' value='4'>Hum Tumhare Hain Sanam</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='28' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q29' class='quiz_box hide q29 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>What is Salman Khan's favourite mode of transport</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz29' value='1'>Bicycle</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz29' value='2'>Motor Bikes</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz29' value='3'>Auto Rickshaws</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz29' value='4'>Cars</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='29' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q30' class='quiz_box hide q30 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Salman who plays the son of a colonel in the Indian army was called Saajan in this film</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz30' value='1'>Baaghi</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz30' value='2'>Mujhse Shaadi Karogi</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz30' value='3'>Pyaar Kiya To Darna Kya</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz30' value='4'>Hello</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='30' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q31' class='quiz_box hide q31 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Who is Salman Khan's favourite actress?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz31' value='1'>Hema Malini</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz31' value='2'>Mumtaz</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz31' value='3'>Helen</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz31' value='4'>Madhuri Dixit</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='31' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q32' class='quiz_box hide q32 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>In which 1995 film directed by Rakesh Roshan did Salman Khan co-star with famous actor Shahrukh Khan?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz32' value='1'>Hum Tumhare Hain Sanam</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz32' value='2'>Om Shanti Om</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz32' value='3'>Karan Arjun</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz32' value='4'>Kuch Kuch Hota Hai</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='32' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q33' class='quiz_box hide q33 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>In which 1995 film directed by Rakesh Roshan did Salman Khan co-star with famous actor Shahrukh Khan?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz33' value='1'>Karan Arjun</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz33' value='2'>Om Shanti Om</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz33' value='3'>Kuch Kuch Hota Hai</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz33' value='4'>Hum Tumhare Hain Sanam</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='33' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q34' class='quiz_box hide q34 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>In which film directed by David Dhavan does Salman Khan play the role of a Love Guru?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz34' value='1'>Yeh Hai Jalwa</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz34' value='2'>Partner</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz34' value='3'>No Entry</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz34' value='4'>Biwi No. 1</p>
	                </div>

	                <div style="clear:both"></div>



	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='34' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q35' class='quiz_box hide q35 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>What role does Salman Khan play in the film Veer?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz35' value='1'>Warrior</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz35' value='2'>Police Inspector</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz35' value='3'>King</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz35' value='4'>God</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='35' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q36' class='quiz_box hide q36 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que36.png' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz36' value='1'>Maine Pyar Kiya</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz36' value='2'>Prem Ratan Dhan Payo</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz36' value='3'>Ready</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz36' value='4'>Kick</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='36' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q37' class='quiz_box hide q37 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>What is the name of the character played by Salman Khan in the film Tere Naam?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz37' value='1'>Pyare Mohan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz37' value='2'>Radhe Shyam</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz37' value='3'>Radhe Mohan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz37' value='4'>Pyare Shyam</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='37' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q38' class='quiz_box hide q38 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que38.png' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz38' value='1'>Bodyguard</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz38' value='2'>Ready</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz38' value='3'>Pyar kiya tho darna kya</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz38' value='4'>Mujhse Shaadi Karogi</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='38' value='SUBMIT'></div>
	                <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q39' class='quiz_box hide q39 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>What is the name of the character played by Salman Khan in the film Hum Dil De Chuke Sanam?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz39' value='1'>Salman</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz39' value='2'>Sameer</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz39' value='3'>Rahul</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz39' value='4'>Prem</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='39' value='SUBMIT'></div>
	        		<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q40' class='quiz_box hide q40 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Who played the role of Salman Khan's brother in the film Chal Mere Bhai?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz40' value='1'>Arbaaz Khan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz40' value='2'>Sanjay Dutt</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz40' value='3'>Jackie Shroff</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz40' value='4'>Sohail Khan</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='40' value='SUBMIT'></div>
                    <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q41' class='quiz_box hide q41 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Salman Khan was the _______ Indian actor to be replicated as a wax statue at the Madame Tussauds wax museum in London.</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz41' value='1'>first</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz41' value='2'>second</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz41' value='3'>third</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz41' value='4'>fourth</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='41' value='SUBMIT'></div>
                    <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q42' class='quiz_box hide q42 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que42.jpg' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie and the song</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz42' value='1'>Saiyaara - Ek Tha Tiger</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz42' value='2'>Selfie Le Le - Bajrangi Bhaijaan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz42' value='3'>Just chill chill - Maine Pyaar Kyun Kiya</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz42' value='4'>Banjaara - Ek Tha Tiger</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='42' value='SUBMIT'></div>
                    <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q43' class='quiz_box hide q43 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>What is Salman Khan's birth name</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz43' value='1'>Abdul Salim Salman Khan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz43' value='2'>Shohaib Khan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz43' value='3'>Abdul Rashid Salim Salman Khan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz43' value='4'>Salman Khan</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='43' value='SUBMIT'></div>
                    <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q44' class='quiz_box hide q44 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>What is Salman Khan's zodiac sign?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz44' value='1'>Virgo </p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz44' value='2'>Taurus </p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz44' value='3'>Scorpio</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz44' value='4'>Capricorn</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='44' value='SUBMIT'></div>
                    <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q45' class='quiz_box hide q45 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>What role did Salman Khan play in the film God Tussi Great Ho?</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz45' value='1'>Businessman</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz45' value='2'>Television Anchor</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz45' value='3'>God</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz45' value='4'>Television Reporter</p>
	                </div>

	                <div style="clear:both"></div>


	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='45' value='SUBMIT'></div>
                    <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q46' class='quiz_box hide q46 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que46.jpg' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie and the character he plays in the film</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz46' value='1'>In and as Bodyguard</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz46' value='2'>Thief in Kick</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz46' value='3'>A common man in Bajrangi Bhaijaan</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz46' value='4'>A doctor in Maine Pyaar Kyu Kiya</p>
	                </div>

	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='46' value='SUBMIT'></div>
                    <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q47' class='quiz_box hide q47 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Name the Karan Johar directorial debut film for which Salman Khan received the Filmfare Best Supporting Actor Award in 1998.</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz47' value='1'>Hum Aapke Hain Kaun</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz47' value='2'>uch Kuch Hota Hai</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz47' value='3'>Hum Dil De Chuke Sanam</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz47' value='4'>Andaz Apna Apna</p>
	                </div>
	                
	                <div style="clear:both"></div>

	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='47' value='SUBMIT'></div>
                    <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q48' class='quiz_box hide q48 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que48.png' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz48' value='1'>Andaaz Apna Apna</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz48' value='2'>Yuvvraaaj</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz48' value='3'>Ready</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz48' value='4'>No Entry</p>
	                </div>
	                <div style="clear:both"></div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='48' value='SUBMIT'></div>
                    <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>
	        <div id='q49' class='quiz_box hide q49 pad0 grid-100 mobile-grid-100 tablet-grid-100'>
	            <div class='grid-100 pad0 tablet-grid-100 mobile-grid-100'><img src='<?=base_url()?>assets/uploads/que49.png' class='wdh' alt='' /></div>
	            <div class='quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100'>
	                <p class='quiz_text1'>Guess the movie</p>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz49' value='1'>God Tussi Great Ho</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz49' value='2'>Prem Ratan Dhan Payo</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz49' value='3'>Har Dil Jo Pyaar Karega</p>
	                </div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='quiz_text2'><input type='radio' name='quiz49' value='4'>London Dreams</p>
	                </div>
	                <div style="clear:both"></div>
	                <div class='pad0 grid-50 mobile-grid-100 tablet-grid-100'>
	                    <p class='error'></p><input type='submit' class='submit submit_click' data-que='49' value='SUBMIT'></div>
                    <div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>
	            </div>
	        </div>

			<!-- <div id="q1" class="quiz_box q1 pad0 grid-100 mobile-grid-100 tablet-grid-100">
				<div class="quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100">
					<p class="quiz_text1">When was Salman Khan's life-size wax figure installed?</p>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz1" value="1"> 12th November, 2009</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz1" value="2"> 15th January, 2008</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz1" value="3"> 19th February, 2006</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz1" value="4"> 27th December, 2007</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="error"></p>
						<input type="submit" class="submit submit_click" data-que="1" value="SUBMIT">
					</div>
				</div>
			</div> -->
			<!-- <div id="q1" class="quiz_box q1 pad0 grid-100 mobile-grid-100 tablet-grid-100">
				<div class="quiz_sub q1 grid-100 mobile-grid-100 tablet-grid-100">
					<p class="quiz_text1">When was Salman Khan's life-size wax figure installed?</p>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz1" value="1"> 12th November, 2009</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz1" value="2"> 15th January, 2008</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz1" value="3"> 19th February, 2006</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz1" value="4"> 27th December, 2007</p>
					</div>
					
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="error"></p>
						<input type="submit" class="submit submit_click" data-que="1" value="SUBMIT">
					</div>
				</div>
			</div>
			<div id="q2" class="quiz_box q2 hide pad0 grid-100 mobile-grid-100 tablet-grid-100">
				<div class="quiz_sub grid-100 mobile-grid-100 tablet-grid-100">
					<p class="quiz_text1">What is Salman Khan's date of birth?</p>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz2" value="1"> 27th December, 1965</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz2" value="2"> 27th December, 1964</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz2" value="3"> 27th December, 1960</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz2" value="4"> 27th December, 1966</p>
					</div>
					
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="error"></p>
						<input type="submit" class="submit submit_click" data-que="1" value="SUBMIT">
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<input id="show_q2" type="submit" class="result submit_click" value="VIEW RESULT">	
					</div>

				</div>
			</div>
			<div id="q3" class="quiz_box q2 hide pad0 grid-100 mobile-grid-100 tablet-grid-100">
				<div class="quiz_sub grid-100 mobile-grid-100 tablet-grid-100">
					<p class="quiz_text1">In which movie did Salman Khan star opposite Sohail Khan?</p>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz3" value="1"> Maine Pyaar Kiya</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz3" value="2"> Hum Aap Ke Hai Koun</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz3" value="3"> Hum Saath Saath Hai</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz3" value="4"> Andaz Apna Apna</p>
					</div>
					
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="error"></p>
						<input type="submit" class="submit submit_click" data-que="3" value="SUBMIT">
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>

				</div>
			</div>

			<div id="q4" class="quiz_box q2 hide pad0 grid-100 mobile-grid-100 tablet-grid-100">
				<div class="quiz_sub grid-100 mobile-grid-100 tablet-grid-100">
					<p class="quiz_text1">In which movie did Salman Khan star opposite Sohail Khan?</p>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz4" value="1"> Maine Pyaar Kiya</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz4" value="2"> Hum Aap Ke Hai Koun</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz4" value="3"> Hum Saath Saath Hai</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz4" value="4"> Andaz Apna Apna</p>
					</div>
					
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="error"></p>
						<input type="submit" class="submit submit_click" data-que="4" value="SUBMIT">
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>

				</div>
			</div>

			<div id="q5" class="quiz_box q2 hide pad0 grid-100 mobile-grid-100 tablet-grid-100">
				<div class="quiz_sub grid-100 mobile-grid-100 tablet-grid-100">
					<p class="quiz_text1">In which movie did Salman Khan star opposite Sohail Khan?</p>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz5" value="1"> Maine Pyaar Kiya</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz5" value="2"> Hum Aap Ke Hai Koun</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz5" value="3"> Hum Saath Saath Hai</p>
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="quiz_text2"><input type="radio" name="quiz5" value="4"> Andaz Apna Apna</p>
					</div>
					
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<p class="error"></p>
						<input type="submit" class="submit submit_click" data-que="5" value="SUBMIT">
					</div>
					<div class="pad0 grid-50 mobile-grid-100 tablet-grid-100">
						<a id="show_q3" class="result">VIEW RESULT</a>	
					</div>

				</div>
			</div> -->
			
			<div class="quiz_box result-box hide pad0 grid-100 mobile-grid-100 tablet-grid-100">
				<div class="qb grid-100 pad0 tablet-grid-100 mobile-grid-100">
					<p class="landing_text" style="text-align:left;">Thank you for participating!</p>
				</div>
				<div class="quiz_sub qs grid-100 mobile-grid-100 tablet-grid-100">
					<p class="quiz_text1" style="text-align:center;">Your score is</p>
					<p class="score_text"></p>
					<div class="grid-100 mobile-grid-100 tablet-grid-100">
						<img id='fbshare' src="<?= base_url('assets/aniq_assets')?>/images/fbshare.jpg" class="login_logo" alt="" />
					</div>
					<div class="grid-100 mobile-grid-100 tablet-grid-100">

						<img id="twittershare" src="<?= base_url('assets/aniq_assets')?>/images/twishare.jpg" class="login_logo" alt="" />
						
					</div>

					<input id='continue' type="submit" value="Play Again">
					<a href="<?= base_url('index.php/home/leaderboard')?>">
						<input class="leaderboard-btn" type="submit" value="Leaderboard">
					</a>
				</div>
			</div>	
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
		window.fbAsyncInit = function() {
	      FB.init({
	        appId      : '778014919032770',
	        cookie     : true,
	        xfbml      : true,
	        version    : 'v2.8'
	      });
	      
	      FB.AppEvents.logPageView();   
	    };

	    (function(d, s, id){
	       var js, fjs = d.getElementsByTagName(s)[0];
	       if (d.getElementById(id)) {return;}
	       js = d.createElement(s); js.id = id;
	       js.src = "//connect.facebook.net/en_US/sdk.js";
	       fjs.parentNode.insertBefore(js, fjs);
	    }(document, 'script', 'facebook-jssdk'));

	    $('#fbshare').click(function(){
	      FB.ui({
	        method: 'feed',
	        link: '<?=base_url()?>',
	        quote: 'YOUR SCORE IS '+$('.score_text').html(),
	      }, function(response){});
	    })

	    $("#twittershare").click(function(){

			var href = 'http://twitter.com/share';

			var option = {
			    url: '<?=base_url()?>',
			    text: 'YOUR SCORE IS '+$('.score_text').html(),
			};

			var width = 575, 
			    height = 400, 
			    left = ($(window).width() - width) / 2, 
			    top = ($(window).height() - height) / 2, 
			    url = $(this).attr('href'), 
			    opts = 'status=1' 
			         + ',width=' + width 
				 + ',height=' + height 
				 + ',top=' + top 
				 + ',left=' + left;
					 	
			window.open(href + '?' + $.param(option), 'Twitter Share', opts);

	    })
	</script>
</body>
</html>