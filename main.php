<?php

require 'vendor/autoload.php';

while(true)
{
    echo 'Welcome to our exchange center.'.PHP_EOL;
    echo '...............................'.PHP_EOL;
    echo 'How can we help you? Enter necessary number: '.PHP_EOL;
    echo '[1] - Make currency exchange from EUR.'.PHP_EOL;
    echo '[2] - Check all available exchange rates'.PHP_EOL;
    echo '[3] - Exit.'.PHP_EOL;

    $input = (int) readline();

    switch ($input)
    {
        case 1:
            $amount = (int) readline('Enter amount of euro you want to exchange: ');
            $currency = readline('Choose currency you want convert to (USD, GBP, ...): ');

            break;
        case 2:

        case 3:
            echo 'Have a nice day!';
            die;
        default:
            echo 'I am not sure what you want.';
    }
}
//Izstrādāt programmu, kas pieprasa ievadīt monetāru skaitli (piem. 10.99),
//pieņemot ka bāzes valūta ir EUR, ievadīt vērtību/valūtu uz kuru veikt konvertāciju (piem. USD).
//Tā tad ievadot - 100 un USD, tiek pārveidoti 100 EUR uz 100 USD
//Izmantojot https://www.latvijasbanka.lv/vk/ecb.xml piedāvāto XML datu ieguvei.
//new but not improved