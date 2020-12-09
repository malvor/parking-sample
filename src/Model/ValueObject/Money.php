<?php

declare (strict_types = 1);

namespace App\ValueObject;

class Money 
{
    private $amount;
    const DEFAULT_CURRENCY = "PLN";

    public function __construct(int $amount, string $currency = self::DEFAULT_CURRENCY) 
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getCurrency()
    {
        return self::DEFAULT_CURRENCY;
    }
}

$pay = new Money (1098);
echo $pay->getAmount();
echo $pay->getCurrency();
