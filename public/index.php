<?php

require_once __DIR__ . '../../vendor/autoload.php';

function arabicToRoman($arabic) {
    $result = '';

    //this will go around 5 times and append x 
    while ($arabic >= 10) {
        $result = $result . 'X';
        $arabic = $arabic - 10;
    }

    while($arabic >= 5) {

        $result = $result .'V';
        $arabic = $arabic - 5;

    }
    
    
    while ($arabic >= 1) {

        $result = $result . 'I';
        $arabic = $arabic - 1;

    }

    return $result;
}

echo arabicToRoman(40);