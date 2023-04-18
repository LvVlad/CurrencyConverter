<?php

namespace App;

class UserInput
{
    private float $moneyInput;
    private string $exchangeCurrency;
    private string $url = 'https://www.latvijasbanka.lv/vk/ecb.xml';

    public function __construct
    (
        float $moneyInput,
        string $exchangeCurrency
    )
    {
        $this->moneyInput = $moneyInput;
        $this->exchangeCurrency =$exchangeCurrency;
    }

    public function convert ()
    {
        //return $moneyInput-coverted by exhange rate
    }
}