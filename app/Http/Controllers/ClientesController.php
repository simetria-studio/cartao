<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientesController extends Controller
{
    public function index()
    {
        $results = get_clientes();
        $clientes = $this->paginate($results);
        // dd($results);
        return view('painel.clientes', get_defined_vars());
    }

    public function paginate($items, $perPage = 10, $total = null, $page = null, $options = [],  $pageName = 'page')
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
    public function filterId(Request $request)
    {
        if ($request->ajax()) {
            if ($request->valor == 1) {
                $clientes =  $this->paginate(get_clientes()->sortBy('id'));
                $view = view('painel.render.clientes', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->valor == 2) {
                $clientes =  $this->paginate(get_clientes()->sortByDesc('id'));
                $view = view('painel.render.clientes', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
            if ($request->valor == 0) {
                $clientes =  $this->paginate(get_clientes());
                $view = view('painel.render.clientes', get_defined_vars())->render();
                return response()->json(get_defined_vars());
            }
        }
    }
}
