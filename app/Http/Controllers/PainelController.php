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

        $vendas =  get_pedidos();
        // dd($vendas);
        return view('painel.pedidos', get_defined_vars());
    }
    public function filterId(Request $request)
    {
        if ($request->ajax()) {
            if ($request->valor == 1) {
                $vendas =  get_pedidos()->sortBy('id');
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->valor == 2) {
                $vendas =  get_pedidos()->sortByDesc('id');
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->valor == 0) {
                $vendas =  get_pedidos();
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
        }
    }
    public function filterStatus(Request $request)
    {
        if ($request->ajax()) {
            if ($request->status == 2) {
                $vendas =  get_pedidos()->where('parcela_status', 2);
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->status == 1) {
                $vendas =  get_pedidos();
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->status == 3) {
                $vendas =  get_pedidos()->where('parcela_status', 1);
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->status == 4) {
                $vendas =  get_pedidos()->where('parcela_status', 4)->orWhere('parcela_status', 5);
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
        }
    }
}
