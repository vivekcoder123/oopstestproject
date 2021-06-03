<?php

namespace App;

use App\Services\CreditCardService;

class CreditCard
{
    private $number;

    public function setNumber(string $number){
        $this->number = $number;
    }

    public function getNumber(){
        return CreditCardService::maskNumber($this->number);
    }
}
