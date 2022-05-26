<div class="col-md-6">
    <form action="{{ route('teste.api') }}" method="post">
        <select class="form-select" name="payment_method" aria-label="Default select example">
            <option selected>Selecione o método de pagamento</option>
            <option value="7">Boleto</option>
            <option value="8">Cartão de Crédito (à vista)</option>
            <option value="15">PIX</option>
        </select>
        @csrf
        <input type="hidden" name="id_user" value="{{ $response->id }}">
        <input type="hidden" name="email" value="{{ $response->contatos[0]->email }}">
        <div class="mt-3">
            <button type="submit" class="btn btn-success">PAGAR</button>
        </div>
    </form>
</div>
