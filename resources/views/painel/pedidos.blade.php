@extends('layouts.painel')
@section('content')
    <div class="filter-grid">
        <div>
            <button class="btn-filter-1 btn-status" data-value="1"><span>Todos</span></button>
        </div>
        <div>
            <button class="btn-filter-2 btn-status" data-value="2"><span>Pago</span></button>
        </div>
        <div>
            <button class="btn-filter-3 btn-status" data-value="3"><span>Pendente</span></button>
        </div>
        <div>
            <button class="btn-filter-4 btn-status" data-value="4"><span>Cancelado</span></button>
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
                <option selected value="0">ID Pedido</option>
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
            <select class="form-select filter-status" id="select_status" aria-label="Default select example">
                <option value="1" selected>Status</option>
                <option value="2">Pago</option>
                <option value="3">Pedente</option>
                <option value="4">Cancelado</option>
            </select>
        </div>
    </div>
    <div class="pedidos-body">
        @foreach ($vendas as $key => $venda)
            @php
                $date = new DateTime($venda->email_enviado);
                $pedido = App\Models\Pedido::where('id_pedido', $venda->id)
                    ->with('influencer')
                    ->first();
                // var_dump($pedido);
            @endphp
            <div class="item-pedido">
                <div class="pedido-list">
                    <div class="">
                        <div class="form-check check">
                            <input class="form-check-input custom-checkbox" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="grid-item">
                        <h5>#000{{ $venda->id }}</h5>
                    </div>
                    <div class="grid-item-a">
                        <div>
                            <img src="{{ asset('painel/img/default.png') }}" alt="">
                        </div>
                        <div>
                            <h5>{{ $pedido->influencer->name ?? 'Venda Direta' }}</h5>
                        </div>
                    </div>
                    <div class="grid-item-b">
                        <div>
                            <img src="{{ asset('painel/img/icons/user-green.svg') }}" alt="">
                        </div>
                        <div>
                            <h5>{{ $venda->cliente }}</h5>
                        </div>
                    </div>
                    <div class="grid-item-c">
                        <div>
                            <img src="{{ asset('painel/img/icons/calendar.svg') }}" alt="">
                        </div>
                        <div>
                            <h5>{{ date_format($date, 'd/m/Y') ?? '18/05/2022' }}</h5>
                        </div>
                    </div>
                    <div>
                        <div>
                            @if ($venda->parcela_status == 0)
                                <button class="btn-filter-4"><span>Cancelado</span></button>
                            @elseif ($venda->parcela_status == 1)
                                <button class="btn-filter-3"><span>Pendente</span></button>
                            @elseif ($venda->parcela_status == 2)
                                <button class="btn-filter-2"><span>Pago</span></button>
                            @elseif ($venda->parcela_status == 4)
                                <button class="btn-filter-4"><span>Cancelado</span></button>
                            @elseif ($venda->parcela_status == 5)
                                <button class="btn-filter-4"><span>Cancelado</span></button>
                            @endif

                        </div>
                    </div>
                    <div class="d-none">
                        @php
                            $valor = 0;
                            foreach ($venda->itens as $item) {
                                $valor = $item->valor;
                            }
                        @endphp
                        <input type="hidden" class="input_pedido_{{ $key }}" name="id_pedido"
                            value="{{ $venda->id }}">
                        <input type="hidden" class="input_influencer_{{ $key }}" name="id_influencer"
                            value="{{ $pedido->influencer->id ?? 0 }}">
                        <input type="hidden" name="valor" value="{{ $valor }}">
                    </div>
                    <div class="grid-item">
                        @if (isset($pedido->influencer))
                            <div class="percent" data-id="{{ $key }}">
                                <img src="{{ asset('painel/img/icons/percent-green.svg') }}" alt="">
                            </div>
                        @endif
                        <div class="trash" data-id="{{ $key }}">
                            <img src="{{ asset('painel/img/icons/trash.svg') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
