<?php

// 
require_once 'functions/functions.php';

// 
$language = GetURLVar('lang','no');

//
require_once 'language/'.$language.'/strings.php';

//
$rootURL = 'http://web.tvnorge.no/valgomat';

// 
$posterImages = array(
    '952x636_poster_baard.png',
    '952x636_poster_harald.png',
    '952x636_poster_magnus.png',
    '952x636_poster_odda.png',
    '952x636_poster_thodesen.png',
    '952x636_poster_baard.png',
    '952x636_poster_harald.png'
);



?>
