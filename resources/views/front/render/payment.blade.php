<div class="col-md-6">
    <form action="{{ route('teste.api') }}" method="post">
        @csrf
        <input type="hidden" name="id_user" value="{{ $response->id }}">
        <input type="hidden" name="email" value="{{ $response->contatos[0]->email }}">
        <div>
            <button type="submit" class="btn btn-success">PAGAR</button>
        </div>
    </form>
</div>
