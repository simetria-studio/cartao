<?php

namespace App\Http\Controllers;



use App\Models\Pedido;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class PainelController extends Controller
{
    public function index()
    {
        return view('painel.index');
    }
    public function pedidos()
    {

        $vendas =  $this->paginate(get_pedidos());
        // dd($vendas);
        return view('painel.pedidos', get_defined_vars());
    }
    public function filterId(Request $request)
    {
        if ($request->ajax()) {
            if ($request->valor == 1) {
                $vendas =  $this->paginate(get_pedidos()->sortBy('id'));
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->valor == 2) {
                $vendas =  $this->paginate(get_pedidos()->sortByDesc('id'));
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->valor == 0) {
                $vendas =  $this->paginate(get_pedidos());
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
        }
    }
    public function filterStatus(Request $request)
    {
        if ($request->ajax()) {
            if ($request->status == 2) {
                $vendas =  $this->paginate(get_pedidos()->where('parcela_status', 2));
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->status == 1) {
                $vendas =  $this->paginate(get_pedidos());
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->status == 3) {
                $vendas =  $this->paginate(get_pedidos()->where('parcela_status', 1));
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->status == 4) {
                $vendas =  $this->paginate(get_pedidos()->whereIn('parcela_status', [4, 5]));
                $view = view('painel.render.pedidos', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
        }
    }

    public function deleteVenda(Request $request)
    {
        $id = $request->id_pedido;
        $delete = delete_venda($id);
        return response()->json($delete);
    }

    public function paginate($items, $perPage = 20, $total = null, $page = null, $options = [],  $pageName = 'page')
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator(
            $items->forPage($page, $perPage),
            $total ?: $items->count(),
            $perPage,
            $page,
            [
                'path' => LengthAwarePaginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }
}
