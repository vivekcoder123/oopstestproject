<?php

namespace App\Interfaces;

interface CreditCardInterface
{
    public static function maskNumber(string $number);
}
