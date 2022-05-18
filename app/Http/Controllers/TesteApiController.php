<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TesteApiController extends Controller
{



    public function index(Request $request)
    {
        $apiKey = env('KEY_FATURA_SIMPLES');
        $client = new Client();
        $res = $client->request(
            'POST',
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
                    "id_cliente" => $request->id_user,
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
                            "data_vencimento" => date("Y-m-d H:i", strtotime("+30 minutes")),
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
            'https://cartaocomvoce.faturasimples.com.br/api/v2/vendas/20',
            ['auth' => [$apiKey, '']]
        );

        echo $res->getBody();
    }

    public function insertClient(Request $request)
    {
        // dd($request->all());
        if ($request->ajax()) {
            $apiKey = env('KEY_FATURA_SIMPLES');
            $client = new Client();
            $res = $client->request(
                'POST',
                'https://cartaocomvoce.faturasimples.com.br/api/v2/clientes/',
                [
                    'auth' => [$apiKey, ''],
                    'json' => [
                        'tipo' => 2,
                        'nome' => $request->name,
                        'cpf' => $request->cpf,
                        'genero' => $request->genero,
                        "contatos" => [
                            [
                                'tipo' => 'Titular',
                                'email' => $request->email,
                                'principal' => 1,
                                'nome' => $request->name,
                                'telefone' => $request->telefone,
                                'celular' => $request->celular,
                            ]
                        ]
                    ]
                ]
            );
            $response = (string) $res->getBody();
            $response = json_decode($response);
            $view = view('front.render.payment', get_defined_vars())->render();
            return response()->json([get_defined_vars()]);
        }
    }

    public function testeData()
    {
        return date("d-m-Y H:i", strtotime("+1 minutes"));
    }
}