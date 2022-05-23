@extends('layouts.painel')
@section('content')
    <div class="filter-grid">
        <div>
            <button class="btn-filter-influencer" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>+ Add
                    Influencer</span></button>
        </div>
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
        @foreach ($influencers as $influencer)
            <div class="item-pedido">
                <div class="pedido-list">
                    <div class="">
                        <div class="form-check check">
                            <input class="form-check-input custom-checkbox" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="grid-item">
                        <h5>#{{ $influencer->id }}</h5>
                    </div>
                    <div class="grid-item-a">
                        <div>
                            <img src="{{ asset('painel/img/default.png') }}" alt="">
                        </div>
                        <div>
                            <h5>{{ $influencer->name }}</h5>
                        </div>
                    </div>
                    <div class="grid-item-b">

                        <div>
                            <h5>{{ $influencer->email }}</h5>
                        </div>
                    </div>
                    <div class="grid-item-c">
                        <div>
                            <img src="{{ asset('painel/img/icons/whatsapp.svg') }}" alt="">
                        </div>
                        <div>
                            <h5>{{ $influencer->telefone }}</h5>
                        </div>

                    </div>
                    <div>
                        <div>
                            @if ($influencer->status == 0)
                                <button class="btn-filter-4"><span>Cancelado</span></button>
                            @elseif ($influencer->status == 2)
                                <button class="btn-filter-3"><span>Pendente</span></button>
                            @elseif ($influencer->status == 1)
                                <button class="btn-filter-2"><span>Ativo</span></button>
                            @endif

                        </div>
                    </div>
                    <div class="grid-item">
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Influencer</h5>
                    <button type="button" class="btn-close cls" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <form action="{{ route('influencers.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                    placeholder="Nome:">
                            </div>
                            <div class="mb-3 col-md-12">
                                <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                                    placeholder="E-mail:">
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="comissao" id="comissao"
                                    placeholder="Comissão:">
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF:">
                            </div>
                            <div class="mb-3 col-md-4">
                                <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP:">
                            </div>
                            <div class="mb-3 col-md-8">
                                <input type="text" class="form-control" name="endereco" id="endereco"
                                    placeholder="Endereço:">
                            </div>
                            <div class="mb-3 col-md-4">
                                <input type="text" class="form-control" name="numero" id="numero" placeholder="Numero:">
                            </div>
                            <div class="mb-3 col-md-8">
                                <input type="text" class="form-control" name="complemento" id="exampleFormControlInput1"
                                    placeholder="Complemento">
                            </div>
                            <div class="mb-3 col-md-2">
                                <input type="text" class="form-control" name="uf" id="uf" placeholder="UF">
                            </div>
                            <div class="mb-3 col-md-10">
                                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
                            </div>
                            <div class="mb-3 col-md-12">
                                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro:">
                            </div>
                            <div class="mb-3 col-md-12">
                                <input type="text" class="form-control" name="telefone" id="telefone"
                                    placeholder="Telefone com ddd:">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary add">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
