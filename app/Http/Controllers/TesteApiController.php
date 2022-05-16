<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TesteApiController extends Controller
{



    public function index()
    {
        $apiKey = env('KEY_FATURA_SIMPLES');
        $client = new Client();
        $res = $client->request(
            'GET',
            'https://cartaocomvoce.faturasimples.com.br/api/v2/vendas/',
            [
                'auth' => [$apiKey, ''],
                'json' => [
                    "agendamento" => 1,
                    "agendamento_data" => date("Y-m-d H:i", strtotime("+1 minutes")),
                    "agendamento_frequencia" => 0, // frequencia mensagel
                    "agendamento_repetir" => 2, // repetir sempre
                    'agendamento_automatico' => 1, // realizar geração automaticamente
                    "discriminacao" => "Teste da Fatura Simples",
                    "id_cliente" => 5,
                    "id_meio_pagamento" => 15,
                    "metodo_cobranca" => 3, // aguardar pagamento para emitir FS
                    "email_enviar" => 1,
                    'sms_enviar' => 1,
                    "valor_venda" => 1.00,
                    "nfse_dados" => [
                        "rps_tipo" => 1,
                        "rps_serie" => "FSIMP",
                    ],
                    "itens" => [
                        [
                            "recorrente" => 1,
                            "id_servico" => 5,
                            "valor" => 1.23,
                            "qtd" => 1,
                            "total" => 1,
                        ]

                    ],
                    "parcelas" => [
                        [
                            "data_vencimento" => "2022-05-14",
                            "valor" => 1,
                            'status	' => 1,
                            'valor_original' => 1,
                            'valor_recebido' => 1,
                        ],

                    ]

                ]
            ]
        );

        return $res->getBody();
    }

    public function exvluirVenda()
    {
        $apiKey = env('KEY_FATURA_SIMPLES');
        $client = new Client();
        $res = $client->request(
            'DELETE',
            'https://cartaocomvoce.faturasimples.com.br/api/v2/vendas/25',
            ['auth' => [$apiKey, '']]
        );

        echo $res->getBody();
    }

    public function insertClient()
    {
        $apiKey = env('KEY_FATURA_SIMPLES');
        $client = new Client();
        $res = $client->request(
            'POST',
            'https://cartaocomvoce.faturasimples.com.br/api/v2/clientes/',
            [
                'auth' => [$apiKey, ''],
                'json' => [
                    'tipo' => 1,
                    'nome' => 'Cliente de Teste contato API',
                    "contatos" => [
                        [
                            'tipo' => 'Titular',
                            'email' => 'teste@gmail.com',
                            'principal' => 1,
                            'nome' => 'Teste 3',
                            'telefone' => '(44) 44444-4444',
                            'celular' => '(44) 44444-4444',
                        ]
                    ]
                ]
            ]
        );

        echo $res->getBody();
    }

    public function testeData()
    {
        return date("d-m-Y H:i", strtotime("+1 minutes"));
    }
}
