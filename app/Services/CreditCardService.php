<?php

namespace App\Services;

use App\Interfaces\CreditCardInterface;

class CreditCardService
{

    public static function maskNumber(string $number)
    {
        if(strlen($number)<6){
            return $number;
        }
        $firstCharacter = substr($number, 0, 1);
        $lastFourCharacters = substr($number, -4);
        $charactersToBeMasked = substr($number,1,strlen($number) - 5);
        $maskedCharacters = preg_replace('/[0-9]/', '*', $charactersToBeMasked);
        $maskedNumber = $firstCharacter. $maskedCharacters . $lastFourCharacters;
        return $maskedNumber;
    }

}
