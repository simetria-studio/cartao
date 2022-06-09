<div class="fade-line"> </div>
<div class="m-header">
    <div class="container">
        <div class="grid-m-menu">
            <div class="logo">
               <a href="{{ route('index') }}"> <img src="{{ asset('front/img/logo.svg') }}" alt=""></a>
            </div>
            <div>
                <button class="btn btn-card" data-bs-toggle="modal" data-bs-target="#modalCard">Peça seu cartão</button>
            </div>
            <div class="menu-btn" id="menu-new">
                <img src="{{ asset('front/img/entypo_menu.svg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="menu-mobile">
        <div class="logo-menu">
            <img src="{{ asset('front/img/logo.svg') }}" alt="">
        </div>
        <div class="text-menu">
            <h1>AGENDAR SUA<br> <span>CONSULTA</span> </h1>
            <p>Basta ligar e<br> informar seu CPF</p>
            <h2>0800 -721-4074</h2>
            <p>A central telefônica para os serviços de assistência estão disponíveis 24 horas por dia, 7 dias por
                semana.</p>
        </div>
        <div class="images">
            <div class="agenda" >
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
        </div>
    </div>
</div>
