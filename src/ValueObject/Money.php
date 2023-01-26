<?php

declare (strict_types = 1);

namespace App\ValueObject;

class Money 
{
    CONST DEFAULT_CURRENCY = "PLN";
    private int $amount;
    private string $currency;
    
    public function __construct(int $amount, string $currency = self::DEFAULT_CURRENCY) 
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }

    public function multiply(int $multiply): Money
    {
        $total = $this->amount * $multiply;
        return new Money($total, $this->currency);
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
