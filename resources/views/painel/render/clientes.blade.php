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
