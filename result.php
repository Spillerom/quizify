<?php
// 
require_once "set_env.php";
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php LocalizedString('WEB_TITLE'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Please don't add "maximum-scale=1" here. It's bad for accessibility. -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
  
    <link rel="stylesheet" href="css/grid.css"/>
    <link rel="stylesheet" href="css/style.css"/>
         
    <!-- <link rel="shortcut icon" href="favicon.ico" /> -->    
    
    <!-- Here's Golden Gridlet, the grid overlay script. -->
    <!--  <script src="js/GGS.js"></script> -->
            
    <!-- 
        This script enables structural HTML5 elements in old IE.
        http://code.google.com/p/html5shim/
    -->
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="start-end" ontouchstart="" onmouseover="">
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
            <h1 class="introandresult massive"><?php FlushValue($result['headline']); ?></h1>
        </section>
        
        <section class="wrapper">
            <p class="message"><?php FlushValue($result['description']); ?></p>
        </section>

        <section class="twoway">
	        <section class="wrapper">
	        	<section class="btntease-contain"> 
                    <h3 class="tease"><?php LocalizedString('COMPLETE_TEASE_TEXT'); ?></h3>
                    <div id="share-button" class="btn">
                        <div class="metadata">
                            <div class="name"><?php LocalizedString('SHARE_TITLE'); FlushValue($shows[$resultId]); ?></div>
                            <div class="link"><?php FlushValue($rootURL); ?></div>
                            <div class="image"><?php FlushValue($rootURL.$facebookShareImage); ?></div>
                            <div class="caption"></div>
                            <div class="description"><?php LocalizedString('SHARE_DESCRIPTION'); ?></div>
                        </div>
                        <a href="#" class="button"><?php LocalizedString('SHARE_BUTTON');?></a>
			    	</div>
		    	</section>
	    	</section>
	    	
	    	 <section class="wrapper">
		        <section class="btntease-contain"> 
                    <h3 class="tease"><?php LocalizedString('TRY_AGAIN_BUTTON_1'); ?></h3>
			        <div id="backtostart-button" class="btn">
                        <a href="<?php FlushValue($rootURL); ?>valgomat.php" class="button"><?php LocalizedString('TRY_AGAIN_BUTTON_2'); ?></a>
			    	</div>
		    	</section>
	    	</section>

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

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     
      ga('create', 'UA-67003972-1', 'auto');
      ga('send', 'pageview');
     
    </script>

</body>
</html> 
