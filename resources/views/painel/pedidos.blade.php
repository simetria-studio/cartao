@extends('layouts.painel')
@section('content')
    <div class="filter-grid">
        <div>
            <a href=""><button class="btn-filter-1"><span>Todos</span></button></a>
        </div>
        <div>
            <a href=""><button class="btn-filter-2"><span>Pago</span></button></a>
        </div>
        <div>
            <a href=""><button class="btn-filter-3"><span>Pendente</span></button></a>
        </div>
        <div>
            <a href=""><button class="btn-filter-4"><span>Cancelado</span></button></a>
        </div>
    </div>
    <div class="table-headling">
        <div>
            <div class="form-check">
                <input class="form-check-input custom-checkbox" type="checkbox" value="" id="flexCheckDefault">
            </div>
        </div>
        <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>ID Pedido</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Influencer</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Cliente</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Data</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Status</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="pedidos-body">
        <div class="item-pedido">
            <div class="pedido-list">
                <div class="">
                    <div class="form-check check">
                        <input class="form-check-input custom-checkbox" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </div>
                <div class="grid-item">
                    <h5>#876364</h5>
                </div>
                <div class="grid-item">
                    <div>
                        <img src="{{ asset('painel/img/default.png') }}" alt="">
                    </div>
                    <div>
                        <h5>João da Silva</h5>
                    </div>
                </div>
                <div class="grid-item">
                    <div>
                        <img src="{{ asset('painel/img/icons/user-green.svg') }}" alt="">
                    </div>
                    <div>
                        <h5>Luis Carlos Vilasboas Paim</h5>
                    </div>
                </div>
                <div class="grid-item">
                    <div>
                        <img src="{{ asset('painel/img/icons/calendar.svg') }}" alt="">
                    </div>
                    <div>
                        <h5>15/05/2022</h5>
                    </div>
                </div>
                <div>
                    <div>
                        <h5>15/05/2022</h5>
                    </div>
                </div>
                <div class="grid-item">
                    <div>
                        <img src="{{ asset('painel/img/icons/percent-green.svg') }}" alt="">
                    </div>
                    <div class="more">
                        <a href="#">...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-pedido">
            <div class="pedido-list">
                <div class="">
                    <div class="form-check check">
                        <input class="form-check-input custom-checkbox" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </div>
                <div class="grid-item">
                    <h5>#876364</h5>
                </div>
                <div class="grid-item">
                    <div>
                        <img src="{{ asset('painel/img/default.png') }}" alt="">
                    </div>
                    <div>
                        <h5>João da Silva</h5>
                    </div>
                </div>
                <div class="grid-item">
                    <div>
                        <img src="{{ asset('painel/img/icons/user-green.svg') }}" alt="">
                    </div>
                    <div>
                        <h5>Luis Carlos Vilasboas Paim</h5>
                    </div>
                </div>
                <div class="grid-item">
                    <div>
                        <img src="{{ asset('painel/img/icons/calendar.svg') }}" alt="">
                    </div>
                    <div>
                        <h5>15/05/2022</h5>
                    </div>
                </div>
                <div>
                    <div>
                        <h5>15/05/2022</h5>
                    </div>
                </div>
                <div class="grid-item">
                    <div>
                        <img src="{{ asset('painel/img/icons/percent-green.svg') }}" alt="">
                    </div>
                    <div class="more">
                        <a href="#">...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
