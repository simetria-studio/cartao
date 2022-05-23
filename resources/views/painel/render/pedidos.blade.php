@foreach ($vendas as $venda)
@php
    $date = new DateTime($venda->email_enviado);
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
                <h5>Venda Direta</h5>
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
@endforeach
