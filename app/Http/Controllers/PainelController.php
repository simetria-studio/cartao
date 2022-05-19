<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function index()
    {
        return view('painel.index');
    }
    public function pedidos()
    {
        $apiKey = env('KEY_FATURA_SIMPLES');
        $client = new Client();
        $res = $client->request(
            'GET',
            'https://cartaocomvoce.faturasimples.com.br/api/v2/clientes/?id=2&id=3&_expand=contatos,cartoes',
            ['auth' => [$apiKey, '']]
        );

        $response = (string) $res->getBody();
        $response = json_decode($response);
        $clientess = collect($response);
        $clientes = $clientess['data'];
        return view('painel.pedidos', get_defined_vars());
    }
}
