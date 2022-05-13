<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TesteApiController extends Controller
{
    public function index()
    {
        $apiKey = 'UX0j2NRGN5NmUbQfkxnmfohfmNtF0o0WshfPluAO7Hw';
        $client = new Client();
        $res = $client->request(
            'GET',
            'https://cartaocomvoce.faturasimples.com.br/api/v2/meios-pagamento/',
            ['auth' => [$apiKey, '']]
        );

       echo $res->getBody();
    }
}
