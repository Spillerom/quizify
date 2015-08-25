<?php
// 
require_once 'set_env.php';

// 
require_once 'language/'.$language.'/questions.php';
?>

<!doctype html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->

<!--
	The comment jumble above is handy for targeting old IE with CSS.
	http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
-->
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<title>Responsive template - animated and mobile menu</title>

		<!-- Please don't add "maximum-scale=1" here. It's bad for accessibility. -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="stylesheet" href="css/grid.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		
		<!-- <link rel="shortcut icon" href="favicon.ico" /> -->    
		
		<!-- Here's Golden Gridlet, the grid overlay script. -->
		<script src="js/GGS.js"></script>
				
		<!-- 
			This script enables structural HTML5 elements in old IE.
			http://code.google.com/p/html5shim/
		-->
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	</head>
	<body lang="no" ontouchstart="" onmouseover="">
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

		<header>
			<section class="logo">
				<img src="images/516x210_logo.png" width="258" height="105" alt="logo" />
			</section>
		</header>
		
		<section class="oneway">
			<section class="wrapper">
			    
			    <div class="nav-container">
					<nav>
					  <ul>
					    <li>
					        <a href="#"></a>
					    </li>
					    <li>
					        <a href="#"></a>
					    </li>
					    <li>
					        <a href="#"></a>
					    </li>
					    <li>
					        <a href="#"></a>
					    </li>
					    <li>
					        <a href="#"></a>
					    </li>
					   </ul>
					</nav>
				</div>

			</section>
		</section>
						
    	<div id="questions" class="q-wrapper">
    	    <?php
		    for( $i=0; $i<count($questions); $i++ ) {
		        $question = $questions[$i];
		    ?>
		    <div id="question-<?php FlushValue($i + 1); ?>" class="question-container">
    
		        <article class="oneway wrapper">
		        	<h1 class="question"><?php FlushValue($question['question']); ?></h1>
                </article>

		        <article class="twoway">
			        <section class="wrapper">
				        <ul class="alternatives">
				            <?php
				            $alternatives = $question['alternatives'];
                            for( $j=0; $j<count($alternatives); $j++ ) {
                                $alternative = $alternatives[$j];
				            ?>
                            <li class="alternative">
                                <div class="custom-radio"></div>
                                <div class="text"><?php FlushValue($alternative['text']); ?></div>
                                <div class="metadata"><?php FlushValue($alternative['score']); ?></div>
				            </li>		
				            <?php
				            }
				            ?>
						</ul>
						
                    </section>

			      	<section class="wrapper">
					    <figure>    
					        <img src="images/952x636_poster_test.png" alt="Poster">
					    </figure>     
				        </div>
			        </section>
		        </article><!-- end twoway -->     
		    <?php
		    }
		    ?>
		    </div><!-- end question-container -->
		    
		</div> <!-- end q-wrapper --> 
	
		<div id="feedbacks" class="feedback-wrapper">
            <div class="fullscreen-background"></div>
		    <?php
		    for( $i=0; $i<count($questions); $i++ ) {
		        $question = $questions[$i];
	            $alternatives = $question['alternatives'];
			    for( $j=0; $j<count($alternatives); $j++ ) {
	            	$alternative = $alternatives[$j];
	            	$feedback = $alternative["feedback"];
            ?>
            <h3 id="feedback-<?php FlushValue($i + 1); ?>-<?php FlushValue($j + 1); ?>" class="feedback-container"><?php FlushValue($feedback); ?></h3>
            <?php
                }
            }
            ?>
        </div>

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
			
		<!-- Quizify -->
		<script src="js/quizify.js"></script>
    </body>
</html>