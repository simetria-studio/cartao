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

        </div>
    </div>
@endsection
