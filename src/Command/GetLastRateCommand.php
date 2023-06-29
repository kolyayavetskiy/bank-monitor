<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class GetLastRateCommand
{

    public function execute(): void
    {
        $client = new Client();
        try {
            $response = $client->request('GET', 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?valcode=USD&json');
            $data = json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            var_dump($e->getMessage());
        }

        if (!empty($data)) {
            $rate = $data[0]['rate'];

            file_put_contents('./src/assets/rate.txt', $rate);
            echo 'Курс валюти USD: ' . $rate . PHP_EOL;
        } else {
            echo 'Не вдалося отримати курс валюти USD.' . PHP_EOL;
        }
    }
}
