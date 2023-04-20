<?php

namespace App;

use GuzzleHttp\Client;

class Exchange
{
    private Client $client;
    private array $currencies;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function exchange(float $amount, string $exchangeTo)
    {
        $this->getInfo();
        /** @var Currency $currency */

        foreach ($this->currencies as $currency)
        {
            if ($currency->getID() == $exchangeTo)
            {
                return $amount * $currency->getRate().' '.$currency->getID();
            } elseif ($currency->getID() == null){
                return 'Something went wrong';
            }
        }
        //$currency = $this->currencies[$exchangeTo];
        //return $currency == null ? 0: $amount * $currency->getRate().' '.$currency->getID();
    }

    public function displayRates()
    {
        $this->getInfo();

        foreach ($this->currencies as $currency)
        {
            echo $currency->getRate().' '.$currency->getID().PHP_EOL;
        }
    }

    public function getInfo()
    {
        $response = $this->client->request('GET', 'http://www.latvijasbanka.lv/vk/ecb.xml');
        $records = simplexml_load_string($response->getBody()->getContents());

        foreach ($records->Currencies->Currency as $info)
        {
            $this->currencies[(string)$info->ID] = new Currency((string)$info->ID, (float)$info->Rate);
        }
    }
}