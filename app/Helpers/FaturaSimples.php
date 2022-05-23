<?php

use Illuminate\Support\Str;
use GuzzleHttp\Client;

if (!function_exists('get_pedidos')) {
    function get_pedidos()
    {
        $apiKey = env('KEY_FATURA_SIMPLES');
        $client = new Client();
        $res = $client->request(
            'GET',
            'https://cartaocomvoce.faturasimples.com.br/api/v2/vendas/',
            ['auth' => [$apiKey, '']]
        );

        $response = (string) $res->getBody();
        $response = json_decode($response);
        $clientess = collect($response);
        $vendas =  collect($clientess['data']);

        return $vendas;
    }
}

