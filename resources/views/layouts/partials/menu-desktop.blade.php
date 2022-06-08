<div class="custom-container d-header">
    <div class="header-grid">
        <div class="logo">
            <a href="{{ route('index') }}"> <img src="{{ asset('front/img/logo.svg') }}" alt=""></a>
        </div>
        <div class="agenda" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div>
                <img src="{{ asset('front/img/wedding-day.svg') }}" alt="">
            </div>
            <div>
                <h4>Agendar consulta</h4>
            </div>
        </div>
        <div class="club" onclick="routeClub()">
            <div>
                <img src="{{ asset('front/img/discount.svg') }}" alt="">
            </div>
            <div>
                <h4>Clube de benefícios</h4>
            </div>
        </div>
        <div class="sobre">
            <div>
                <img src="{{ asset('front/img/bandage.svg') }}" alt="">
            </div>
            <div>
                <h4>Sobre nossa empresa</h4>
            </div>
        </div>
        <div>
            <button class="btn btn-card">Peça seu cartão</button>
        </div>
        <div class="user" onclick="minhaConta()">
            <div>
                <img src="{{ asset('front/img/password.svg') }}" alt="">
            </div>
            <div >
                <h4>Minha conta</h4>
            </div>
        </div>
    </div>
</div>
