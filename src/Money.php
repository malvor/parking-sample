<?php

declare (strict_types = 1);

namespace App\ValueObject;

class Money 
{
    CONST DEFAULT_CURRENCY = "PLN";
    private $amount;
    
    public function __construct(int $amount, string $currency = self::DEFAULT_CURRENCY) 
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }

    public function getCurrency() :string
    {
        return $this->currency;
    }

    public function getAmount() :int
    {
        return $this->amount;
    }

   
}


