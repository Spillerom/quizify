<?php
// 
require_once 'set_env.php';
?><!doctype html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<!--
	The comment jumble above is handy for targeting old IE with CSS.
	http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
-->
<html>
	<head>
		<meta charset="utf-8"/>
        <title><?php LocalizedString('WEB_TITLE'); ?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<!-- Please don't add "maximum-scale=1" here. It's bad for accessibility. -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="stylesheet" href="css/grid.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		
		<!-- <link rel="shortcut icon" href="favicon.ico" /> -->    
		
		<!-- Here's Golden Gridlet, the grid overlay script.
		<script src="js/GGS.js"></script>
		-->
		<!-- 
			This script enables structural HTML5 elements in old IE.
			http://code.google.com/p/html5shim/
		-->
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	</head>
	<body class="start-end" lang="no" ontouchstart="" onmouseover="">
		<script>
		  window.fbAsyncInit = function() {
			FB.init({
			  appId      : '1630666833841212',
			  xfbml      : true,
			  version    : 'v2.4'
			});
		  };

		  (function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "//connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>	
	
		<header class="logo">
			<img src="images/516x210_logo.png" width="258" height="105" alt="logo" />
		</header>
		
        <section class="oneway">
            <section class="wrapper">
                <h1 class="introandresult massive"><?php LocalizedString("START_HEADING"); ?></h1>
            </section>
            
             <section class="wrapper">
                <p class="message"><?php LocalizedString('START_SHORTDESC'); ?></p>
            </section>
            
            <section class="wrapper">
	            <div id="start-button" class="btn">
	            	<a href="valgomat.php"><?php LocalizedString('START_BUTTON_TEXT'); ?></a>
	        	</div>
        	</section>
        </section>

        <section id="bottom-space"></section>
	
	    <!-- jQuery -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

		<!-- load Greensock TweenMax -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.10.2/TweenMax.min.js"></script>
			
		<!-- Quizify -->
		<script src="js/quizify.js"></script>
    </body>
</html>
