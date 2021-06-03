<?php

namespace App\Models;

use App\Services\CreditCardService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;
    private $number;

    public function setNumber(string $number){
        $this->number = $number;
    }

    public function getNumber(){
        return CreditCardService::maskNumber($this->number);
    }
}
