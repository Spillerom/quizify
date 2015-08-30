<?php

// 
require_once 'functions/functions.php';

// 
$language = GetURLVar('lang','no');

//
require_once 'language/'.$language.'/strings.php';

// 
$alternativesIndexCharacter = array('A', 'B', 'C');

//
$rootURL = 'http://web.tvnorge.no/valgomat/';

// 
$posterImages = array(
    'images/952x636_poster_harald.png',
    'images/952x636_poster_odda.png',
    'images/952x636_poster_magnus.png',
    'images/952x636_poster_baard.png',
    'images/952x636_poster_thodesen.png',
    'images/952x636_poster_harald.png',
    'images/952x636_poster_odda.png'
);

// 
$facebookShareImages = array(
    'images/facebook_share/1200x630_baard.jpg',
    'images/facebook_share/1200x630_harald.jpg',
    'images/facebook_share/1200x630_magnus.jpg',
    'images/facebook_share/1200x630_odda.jpg',
    'images/facebook_share/1200x630_thodesen.jpg'
);
$facebookShareImage = $facebookShareImages[rand(0,4)];

// 
require_once "language/".$language."/results.php";
$num_results = count($results);

$resultId = GetURLVar('program', ($num_results-1);

$result = $results[$resultId];

// 
$shareURL = urlencode($rootURL.'?program='.$resultId);




?>
