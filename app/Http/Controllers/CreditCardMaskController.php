<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetMaskedNumberRequest;
use App\Models\CreditCard;
use Illuminate\Http\Request;

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
