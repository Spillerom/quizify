<?php
// 
require_once "set_env.php";

// 
require_once "language/".$language."/results.php";
$num_results = count($results);
$result = $results[GetURLVar('program', ($num_results-1))];

?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php LocalizedString('WEB_TITLE'); ?></title>
    <meta property="og:url"           content="<?php FlushValue($rootURL); ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php LocalizedString('SHARE_TITLE'); ?>" />
    <meta property="og:description"   content="<?php LocalizedString('SHARE_DESCRIPTION'); ?>" />
    <meta property="og:image"         content="<?php FlushValue($rootURL.$facebookShareImage) ?>" />
    
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

<body class="start-end">
 <script>
      window.fbAsyncInit = function() {
              FB.init({
                            appId      : '1630666833841212',
                                  xfbml      : true,
                                        version    : 'v2.3'
                                            });

                  // ADD ADDITIONAL FACEBOOK CODE HERE
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
			        <div id="backtostart-button" class="btn">
                    <a href="<?php FlushValue($rootURL); ?>" 
                        data-image="<?php FlushValue($shareImage); ?>" 
                        data-title="<?php LocalizedString('SHARE_TITLE'); ?>" 
                        data-desc="<?php LocalizedString('SHARE_DESCRIPTION'); ?>" 
                        class="btnShare button"><?php LocalizedString('SHARE_BUTTON');?></a>
			    	</div>
		    	</section>
	    	</section>
	    	
	    	 <section class="wrapper">
		        <section class="btntease-contain"> 
                    <h3 class="tease"><?php LocalizedString('TRY_AGAIN_BUTTON_1'); ?></h3>
			        <div id="backtostart-button" class="btn">
                        <a href="<?php FlushValue($rootURL); ?>/valgomat.php" class="btnShare button"><?php LocalizedString('TRY_AGAIN_BUTTON_2'); ?></a>
			    	</div>
		    	</section>
	    	</section>

    	</section>    
    </section> 
   
    <!-- Body border -->
    <!--[if lte IE 6]>
        <style>#top, #bottom, #left, #right { display: none; }</style>
    <![endif]-->
    <b id="left"></b>
    <b id="right"></b>
    <b id="top"></b>
    <b id="bottom"></b>
    
     <!-- jQuery -->
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- load Greensock TweenMax -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.10.2/TweenMax.min.js"></script>
</body>
</html> 
