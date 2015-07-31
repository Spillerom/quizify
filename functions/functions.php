<?php

// 
function FlushValue($value) {
    echo $value;
}

// 
function GetURLVar($var, $default) {
    // 
    if( isset($GET[$var] ) {
        return $GET[$var];
    } else {
        return $default;
    }
}
?>
