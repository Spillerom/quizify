<?php

// 
function FlushValue($value) {
    echo $value;
}

// 
function LocalizedString($string) {
    global $localizedStrings;
    echo $localizedStrings[$string];
}

// 
function GetURLVar($var, $default) {
    // 
    if( isset($_GET[$var] )) {
        return $_GET[$var];
    } else {
        return $default;
    }
}
?>
