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
    <title>Valgomat - hva DU bør se på TVNorge denne sessongen?</title>
    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
    
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
	       	<h3 class="tease">
	        	Bli med i trekningen
				av signert Ylvis premie:
			</h3>
		        <div id="share-button" class="btn">
		        	<a href="someurl.com/some-article" 
		            data-image="article-1.jpg" 
		            data-title="Article Title" 
		            data-desc="Some description for this article" 
		            class="btnShare button">Del med venner</a>
		    	</div>
	    	</section>
	    	
	    	 <section class="wrapper">
		         <h3 class="tease">
	        		Misfornøyd?
				</h3>
		        <div id="backtostart-button" class="btn">
		        	<a href="someurl.com/some-article" 
		            data-image="article-1.jpg" 
		            data-title="Article Title" 
		            data-desc="Some description for this article" 
		            class="btnShare button">Én gang til!</a>
		    	</div>
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
