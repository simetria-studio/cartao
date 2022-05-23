<?php

namespace App\Http\Controllers;

use App\Models\Influencer;
use Illuminate\Http\Request;
use FlyingLuscas\Correios\Client;

class InfluencerController extends Controller
{
    public function index()
    {
        $influencers = Influencer::get();
        return view('painel.influencer', get_defined_vars());
    }

    public function store(Request $request)
    {
        $save = Influencer::create($request->all());
        return redirect()->back()->with('success', 'Influencer adicionado');
    }



    public function buscaCep(Request $request)
    {
        $correios = new Client;

        $cep = $correios->zipcode()->find($request->search);

        return $cep;
    }
}
