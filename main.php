<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

while(true)
{
    echo 'Welcome to our exchange center.'.PHP_EOL;
    echo '...............................'.PHP_EOL;
    echo 'How can we help you? Enter necessary number: '.PHP_EOL;
    echo '[1] - Make currency exchange from EUR.'.PHP_EOL;
    echo '[2] - Check all available exchange rates'.PHP_EOL;
    echo '[3] - Exit.'.PHP_EOL;

    $input = (int) readline();
    $exchangeRequest = new \App\Exchange();

    switch ($input)
    {
        case 1:
            $amount = (int) readline('Enter amount of euro you want to exchange: ');
            $currency = readline('Choose currency you want convert to (USD, GBP, ...): ');
            echo 'Exchange result: '.$exchangeRequest->exchange($amount, $currency).PHP_EOL;
            break;
        case 2:
            $exchangeRequest->displayRates();
            break;
        case 3:
            echo 'Have a nice day!';
            die;
        default:
            echo 'I am not sure what you want.';
    }
}