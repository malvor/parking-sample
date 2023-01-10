<?php

declare (strict_types = 1);

namespace App\ValueObject;

use App\Model\ParkingInterface;

class Money
{
    CONST DEFAULT_CURRENCY = "PLN";
    private $amount;
    private $currency;
    
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
        return $this->amount * 100;
    }
}


