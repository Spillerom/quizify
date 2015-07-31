<?php
// 
require_once "set_env.php";

// 
require_once "language/".$language."/results.php";
$num_results = count($results);
$result = $results[GetURLVar('SCORE', ($num_results-1))];

?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Valgomat - hva DU bør se på TVNorge denne sessongen?</title>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/default.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
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
</head>
<div id="main">
    <h2><?php FlushValue($result['headline']); ?></h2>
    <div class="description"><?php FlushValue($result['description']); ?></div>
</div>
</body>
</html> 
