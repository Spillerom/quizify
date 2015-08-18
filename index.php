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
				<img src="images/dnetworks@2x.png" width="122" height="52" alt="Discovery Networks logo" />
			</section>
		</header>
		
		<nav class="oneway">
			<section class="wrapper">
			    <div class="stepbystep-nav"></div>
			</section>
		</nav>
						
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
				        <div class="alternatives">
				            <?php
				            $alternatives = $question['alternatives'];
                            for( $j=0; $j<count($alternatives); $j++ ) {
                                $alternative = $alternatives[$j];
				            ?>
				            <div class="alternative">
                                <input id="radio-<?php FlushValue($i + 1); ?>-<?php FlushValue($j + 1); ?>" type="radio" name="radio" value="1" checked="checked">
                                <label for="radio-<?php FlushValue($i + 1); ?>-<?php FlushValue($j + 1); ?>">
                                    <span><span></span></span>
                                    <?php FlushValue($alternative['text']); ?>
                                </label>
                                <div class="metadata"><?php FlushValue($alternative['score']); ?></div>
				            </div>		
				            <?php
				            }
				            ?>
						</div><!-- end alternatives -->
                    </section>

			      	<section class="wrapper">
					    <figure >    
					        <img class="wayimage" src="images/952x636.png" alt="imagetest">
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
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

		<!-- load Greensock TweenMax -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.10.2/TweenMax.min.js"></script>
			
		<!-- Quizify -->
		<script src="js/quizify.js"></script>
    </body>
</html>
