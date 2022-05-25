<?php

namespace App\Http\Controllers;

use App\Models\Split;
use App\Models\Influencer;
use App\Models\SplitPayment;
use Illuminate\Http\Request;

class SplitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $splits = Split::get();
        return view('painel.split', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendas =  get_pedidos()->where('id', $request->id_pedido)->first();
        $influencer = Influencer::where('id', $request->id_influencer)->first();
        $valor = $vendas->itens[0]->valor;
        $valorPorcentagem = ($valor * $influencer->comissao) / 100;

        $data = Split::create([
            'influencer' => $influencer->name,
            'cliente' => $vendas->cliente,
            'valor' => $valorPorcentagem,
            'valor_total' => $valor,
            'id_pedido' => $vendas->id,
            'id_influencer' => $influencer->id,
        ]);

        return response()->json($data);
    }

    public function payment(Request $request)
    {

        $path = $request->comprovante->store('/comprovantes', ['disk' =>   'local']);
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $dados = SplitPayment::create([
            'id_pedido' => $request->id_pedido,
            'valor_total' => $request->valor_total,
            'comissao' => $request->comissao,
            'cliente' => $request->cliente,
            'influencer' => $request->influencer,
            'comprovante' => $path,
            'id_influencer' => $request->id_influencer,
        ]);

        $split = Split::find($request->split);
        $split->status = 1;
        $split->save();

        return redirect()->back()->with('success', 'O comprovante de pagamento foi enviado!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
