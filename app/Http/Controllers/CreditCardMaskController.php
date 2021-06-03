<?php

namespace App\Http\Controllers;

use App\CreditCard;
use App\Http\Requests\GetMaskedNumberRequest;

class CreditCardMaskController extends Controller
{
    private $creditCard;
    public function __construct()
    {
        $this->creditCard = new CreditCard();
    }

    public function maskNumber(GetMaskedNumberRequest $request){

        $number = $request->number;
        $this->creditCard->setNumber($number);
        $maskedNumber = $this->creditCard->getNumber();
        return $maskedNumber;

    }
}
