@extends('layouts.painel')
@section('content')
    <div class="filter-grid">
        {{-- <div>
            <button class="btn-filter-influencer" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>+ Add
                    Influencer</span></button>
        </div> --}}
        <div>
            <button class="btn-filter-1 btn-status" data-value="2"><span>Todos</span></button>
        </div>
        <div>
            <button class="btn-filter-5 btn-status" data-value="3"><span>Ativos</span></button>
        </div>
        <div>
            <button class="btn-filter-4 btn-status" data-value="4"><span>Inativos</span></button>
        </div>
    </div>
    <div class="table-headling">
        <div>
            <div class="form-check">
                <input class="form-check-input custom-checkbox" type="checkbox" value="" id="flexCheckDefault">
            </div>
        </div>
        <div>
            <select class="form-select" id="select_id" aria-label="Default select example">
                <option selected value="0">ID</option>
                <option value="1">ASC</option>
                <option value="2">DESC</option>
            </select>
        </div>
        {{-- <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Influencer</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div> --}}
        {{-- <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Cliente</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div> --}}
        {{-- <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Data</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div> --}}
        <div>
            <select class="form-select" id="select_status" aria-label="Default select example">
                <option value="1" selected>Status</option>
                <option value="2">Pago</option>
                <option value="3">Pedente</option>
                <option value="4">Cancelado</option>
            </select>
        </div>
    </div>
    <div class="pedidos-body">
        @foreach ($clientes as $cliente)
            <div class="item-pedido">
                <div class="pedido-list">
                    <div class="">
                        <div class="form-check check">
                            <input class="form-check-input custom-checkbox" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="grid-item">
                        <h5>#{{ $cliente->id }}</h5>
                    </div>
                    <div class="grid-item-f">
                        <div>
                            <img src="{{ asset('painel/img/default.png') }}" alt="">
                        </div>
                        <div>
                            <h5>{{ $cliente->nome }}</h5>
                        </div>
                    </div>
                    <div class="grid-item-g">
                        @php
                            $email = 'sem email cadastrado';
                            $celular = '(99) 99999-9999';
                            foreach ($cliente->contatos as $key => $value) {
                                $email = $value->email;
                                $celular = $value->celular;
                            }
                        @endphp
                        <div>
                            <h5>{{ $email ?? 'sem email cadastrado' }}</h5>
                        </div>
                    </div>
                    <div class="grid-item-h">
                        <div>
                            <img src="{{ asset('painel/img/icons/whatsapp.svg') }}" alt="">
                        </div>
                        <div>
                            <h5>{{ $celular }}</h5>
                        </div>

                    </div>
                    <div>
                        <div>
                            @if ($cliente->status == 0)
                                <button class="btn-filter-4"><span>Cancelado</span></button>
                            @elseif ($cliente->status == 2)
                                <button class="btn-filter-3"><span>Pendente</span></button>
                            @elseif ($cliente->status == 1)
                                <button class="btn-filter-2"><span>Ativo</span></button>
                            @endif

                        </div>
                    </div>
                    <div class="grid-item d-none">
                        <div>
                            <img src="{{ asset('painel/img/icons/file-download.svg') }}" alt="">
                        </div>
                        <div class="more">
                            <a href="#">...</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $clientes->links() }}
    </div>

    <!-- Modal -->
@endsection
