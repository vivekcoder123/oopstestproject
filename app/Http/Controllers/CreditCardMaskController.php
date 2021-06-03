<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetMaskedNumberRequest;
use App\Models\CreditCard;
use Illuminate\Http\Request;

class CreditCardMaskController extends Controller
{
    public function __construct()
    {

    }

    public function maskNumber(GetMaskedNumberRequest $request){

        $number = $request->number;
        $creditCard = new CreditCard();
        $creditCard->setNumber($number);
        $maskedNumber = $creditCard->getNumber();
        return $maskedNumber;

    }
}
