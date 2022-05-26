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
            <select class="form-select" id="select_status" aria-label="Default select example">
                <option value="1" selected>Status</option>
                <option value="2">Pago</option>
                <option value="3">Pedente</option>
                <option value="4">Cancelado</option>
            </select>
        </div>
    </div>
    <div class="pedidos-body">
        @foreach ($splits as $key => $split)
            {{-- @php
                $date = new DateTime($venda->email_enviado);
                $pedido = App\Models\Pedido::where('id_pedido', $venda->id)
                    ->with('influencer')
                    ->first();
                // var_dump($pedido);
            @endphp --}}
            <div class="item-pedido">
                <div class="pedido-list">
                    <div class="">
                        <div class="form-check check">
                            <input class="form-check-input custom-checkbox" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="grid-item">
                        <h5>#000{{ $split->id }}</h5>
                    </div>
                    <div class="grid-item-a">
                        <div>
                            <img src="{{ asset('painel/img/default.png') }}" alt="">
                        </div>
                        <div>
                            <h5>{{ $split->influencer ?? 'Venda Direta' }}</h5>
                        </div>
                    </div>
                    <div class="grid-item-b">
                        <div>
                            <img src="{{ asset('painel/img/icons/user-green.svg') }}" alt="">
                        </div>
                        <div>
                            <h5>{{ $split->cliente }}</h5>
                        </div>
                    </div>
                    <div class="grid-item-c">

                        <div>
                            <h5>{{ 'R$ ' . number_format($split->valor, 2, ',', '.') }}</h5>
                        </div>
                    </div>
                    <div>
                        <div>
                            @if ($split->status == 8)
                                <button class="btn-filter-4"><span>Cancelado</span></button>
                            @elseif ($split->status == 0)
                                <button class="btn-filter-3"><span>Pendente</span></button>
                            @elseif ($split->status == 1)
                                <button class="btn-filter-2"><span>Pago</span></button>
                            @elseif ($split->status == 4)
                                <button class="btn-filter-4"><span>Cancelado</span></button>
                            @elseif ($split->status == 5)
                                <button class="btn-filter-4"><span>Cancelado</span></button>
                            @endif

                        </div>
                    </div>

                    <div class="grid-item">
                        @if ($split->status !== 1)
                            <div class="payment-modal" data-dados="{{ $split }}" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <img src="{{ asset('painel/img/icons/percent-green.svg') }}" alt="">
                            </div>
                        @else
                            <div class="payment-modal" data-dados="{{ $split }}" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <img src="{{ asset('painel/img/icons/eye.svg') }}" alt="">
                            </div>
                        @endif

                        {{-- <div class="dropdown more">
                            <a class="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">...</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item edit" href="#">Editar</a></li>
                              <li><a class="dropdown-item delete" href="#">Deletar</a></li>
                              <li><a class="dropdown-item pay" href="#">Comissão</a></li>
                            </ul>
                          </div> --}}
                        {{-- <div class="more dropdown">
                            <a class="" id="dropdownMenuLink-{{ $key }}" data-bs-toggle="dropdown" aria-expanded="false">...</a>
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink-{{ $key }}">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Comissão a pagar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('split.payment') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="inputs">
                            <div class="container">

                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="exampleFormControlInput1" class="form-label">Pedido</label>
                                        <input type="text" class="form-control" name="id_pedido" id="pedido">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="exampleFormControlInput1" class="form-label">Valor Total</label>
                                        <input type="text" class="form-control" name="valor_total" id="total">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="exampleFormControlInput1" class="form-label">Comissão</label>
                                        <input type="text" class="form-control" name="comissao" id="comissao">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="exampleFormControlInput1" class="form-label">Cliente</label>
                                        <input type="text" class="form-control" name="cliente" id="cliente">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="exampleFormControlInput1" class="form-label">Influencer</label>
                                        <input type="text" class="form-control" name="influencer" id="influencer">
                                    </div>
                                    <div class="mb-3 upfile">
                                        <label for="formFile" class="form-label">Carregar comprovante</label>
                                        <input class="form-control" type="file" name="comprovante" id="formFile">
                                    </div>
                                    <input type="hidden" name="id_influencer" id="id_influencer">
                                    <input type="hidden" name="split" id="split">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Pagar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
