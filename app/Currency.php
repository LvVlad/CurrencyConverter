<?php

namespace App;

class Currency
{
    private string $currencyID;
    private float $exchangeRate;

    public function __construct
    (
        string $currencyID,
        float $exchangeRate
    )
    {
        $this->currencyID = $currencyID;
        $this->exchangeRate =$exchangeRate;
    }

    public function getID (): string
    {
        return $this->currencyID;
    }

    public function getRate (): float
    {
        return $this->exchangeRate;
    }
}