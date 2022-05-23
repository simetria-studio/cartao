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
}
