<?php



echo factorial(6);


function factorial( $n = 1 ) {
    
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial($n-1);
    }
    
}