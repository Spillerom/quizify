<?php
// 
require_once "set_env.php";
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php LocalizedString('WEB_TITLE'); ?></title>
   
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
                    <div class="fb-share-button" data-href="<?php FlushValue($rootURL); ?>" data-layout="button_count"></div>
                    <a href="http://www.facebook.com/share.php?u=<?php FlushValue($shareURL); ?>" class="btnShare button"><?php LocalizedString('SHARE_BUTTON');?></a>
			    	</div>
		    	</section>
	    	</section>
	    	
	    	 <section class="wrapper">
		        <section class="btntease-contain"> 
                    <h3 class="tease"><?php LocalizedString('TRY_AGAIN_BUTTON_1'); ?></h3>
			        <div id="backtostart-button" class="btn">
                        <a href="<?php FlushValue($rootURL); ?>valgomat.php" class="btnShare button"><?php LocalizedString('TRY_AGAIN_BUTTON_2'); ?></a>
			    	</div>
		    	</section>
	    	</section>

    	</section>    
    </section> 
   
    <section id="bottom-space"></section>

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
