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
    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
</head>
<body>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/default.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

    <section id="intro-text" class="oneway">
        <h2><?php FlushValue($result['headline']); ?></h2>
        <div class="description"><?php FlushValue($result['description']); ?></div>
    </section>

    <section id="start-button">
<!--
        <a href="valgomat.php">Del på Facebook</a>
        <div class="fb-share-button" data-href="http://www.your-domain.com/your-page.html" data-layout="button_count">
-->
        <a href="someurl.com/some-article" data-image="article-1.jpg" data-title="Article Title" data-desc="Some description for this article" class="btnShare">Share</a>
    </div>

    </section>

    <!-- Body border -->
    <!--[if lte IE 6]>
        <style>#top, #bottom, #left, #right { display: none; }</style>
    <![endif]-->
    <b id="left"></b>
    <b id="right"></b>
    <b id="top"></b>
    <b id="bottom"></b>
</body>
</html> 
