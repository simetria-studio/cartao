@extends('layouts.main')
@section('content')
    <div class="hero-club">
        <div class="text-section">
            <div>
                <h2>Até 75% de desconto<br> <span>em milhares de<br> estabelecimentos<br> em todo o País</span></h2>
            </div>
            <div>
                <button class="btn btn-add">ACESSE AQUI</button>
            </div>

        </div>
    </div>
    <div class="hero-2">
        <div>

        </div>
        <div class="section-text">
            <div>
                <p><span>Cartão com você</span> é um novo cartão de descontos do Brasil. Ele oferece descontos de até 75%
                    principalmente
                    nas áreas de saúde, educação e lazer. Pagando um valor mensal, você pode aproveitar todos os benefícios
                    e incluir seus filhos, marido ou esposa.</p>
            </div>
            <div class="block-icons">
                <div class="agenda">
                    <div>
                        <img src="{{ asset('front/img/wedding-day.svg') }}" alt="">
                    </div>
                    <div>
                        <h4>Agendar consulta</h4>
                    </div>
                </div>
                <div class="club">
                    <div>
                        <img src="{{ asset('front/img/discount.svg') }}" alt="">
                    </div>
                    <div>
                        <h4>Clube de benefícios</h4>
                    </div>
                </div>
                <div>
                    <button class="btn btn-card">Peça já o seu</button>
                </div>
            </div>
        </div>
    </div>
    <div class="clients custom-container">
        <div>
            <h2>Medicamentos com até <span>35% de desconto</span></h2>
        </div>
        <div>
            <img src="{{ asset('front/img/araujo.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('front/img/onofre.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('front/img/saopaulo.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('front/img/drogasil.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('front/img/ultrafarma.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('front/img/raia.png') }}" alt="">
        </div>
    </div>
    <div class="section-2 container">
        <div>
            <img src="{{ asset('front/img/pic.png') }}" alt="">
        </div>
        <div>
            <div>
                <h2>O cartão é fácil de pedir, fácil de pagar e fácil de usar!<br>
                    <span>Peça já o seu!</span>
                </h2>
            </div>
            <div>
                <button class="btn btn-card">Peça eu cartão</button>
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="smile-grid">
                <div>
                    <img src="{{ asset('front/img/smile.svg') }}" alt="">
                </div>
                <div>
                    <h5>Apenas R$ 27,50 mensais pra toda a família</h5>
                </div>
            </div>
            <div class="smile-grid">
                <div>
                    <img src="{{ asset('front/img/smile.svg') }}" alt="">
                </div>
                <div>
                    <h5>Adicione até 7 dependentes

                        (esposa ou marido e filhos)</h5>
                </div>
            </div>
            <div class="smile-grid">
                <div>
                    <img src="{{ asset('front/img/smile.svg') }}" alt="">
                </div>
                <div>
                    <h5>Pagamento com cartão de crédito ou pela conta de luz</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3 container">
        <div>
            <div>
                <h2>Seja nosso representante<br>
                    <span>e fature alto!</span>
                </h2>
            </div>
            <div>
                <button class="btn btn-card">Mais informações</button>
            </div>
        </div>
        <div>
            <img src="{{ asset('front/img/pic2.png') }}" alt="">
        </div>
    </div>
@endsection
