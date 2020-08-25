<?php

namespace App\Controllers;
use Exception;

class RomanNumeralConverter
{

    public $arabicToRoman = [
        1000 => 'M',
        
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',

        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',

        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public $result = '';

    //below is the refactored point from the article
    // public function arabicToRoman($arabic): string
    // {
    //     $result = '';

    //     if ($arabic > 9) {
    //         while ($arabic > 9) {
    //             $result = $result . 'X';
    //             $arabic = $arabic - 10;
    //         }
    //     }

    //     if ($arabic > 4) {
    //         $result = $result .'V';
    //         $arabic = $arabic - 5;
    //     }

    //     for ($i = $arabic; $i > 0; $i--) {
    //         $result = $result . 'I';
    //     }


    //     return $result;
    // }

    //refactored from a while loop to a foreach loop with a while loop
    // public function arabicToRoman($arabic): string
    // {
    //     $result = '';


    //     while ($arabic >= 10) {

    //         $result = $result . 'X';
    //         $arabic = $arabic - 10;

    //     }
      

    //     while($arabic >= 5) {

    //         $result = $result .'V';
    //         $arabic = $arabic - 5;

    //     }
        
        
    //     while ($arabic >= 1) {

    //         $result = $result . 'I';
    //         $arabic = $arabic - 1;

    //     }
        

    //     return $result;
    // }

    public function arabicToRoman($number): string
    {
        if ($number < 1) {
            throw new Exception('Zero and negative numbers are not allowed');
        }

        foreach ($this->arabicToRoman as $arabic => $roman) {
            while ($number >= $arabic) {
                $this->result .= $roman;
                $number = $number - $arabic;
            }
        }

        return $this->result;
    }

}