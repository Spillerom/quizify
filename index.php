<?php
// 
require_once 'set_env.php';

// 
require_once 'language/'.$language.'/questions.php';
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Valgomat - hva DU bør se på TVNorge denne sesongen</title>

		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		 
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<!-- Grid overlay script. -->
		<script src="js/GGS.js"></script>
		
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/default.js"></script>
		
		
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
		<div id="questions">
		    <?php
		    for( $i=0; $i<count($questions); $i++ ) {
		        $question = $questions[$i];
		    ?>
		    <div id="question-<?php FlushValue($i + 1); ?>" class="question-container">
		        <div class="question"><?php FlushValue($question['question']); ?></div>
		        <div class="alternatives">
		            <?php
		            $alternatives = $question['alternatives'];
		            foreach( $alternatives as $alternative ) {
		            	
		            ?>
		            <div class="alternative">
		            <div class="text"><?php FlushValue($alternative['text']); ?></div>
		                <div class="metadata"><?php FlushValue($alternative['score']); ?></div>
		            </div>
		            <?php
		            }
		            ?>
		       </div>
		      
		    </div>
		    <?php
		    }
		    ?>
		</div>
		<div id="feedbacks">
		    <?php
		    for( $i=0; $i<count($questions); $i++ ) {
		        $question = $questions[$i];
	            $alternatives = $question['alternatives'];
			    for( $j=0; $j<count($alternatives); $j++ ) {
	            	$alternative = $alternatives[$j];
	            	$feedback = $alternative["feedback"];
	            ?>
	            <div id="feedback-<?php FlushValue($i + 1); ?>-<?php FlushValue($j + 1); ?>" class="feedback-container"><?php FlushValue($feedback); ?></div>
	            <?php
	            }
		    }
		    ?>
		</div>
	</body>
</html> 
