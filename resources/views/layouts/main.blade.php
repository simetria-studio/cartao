<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}">
    <title>Cartão para você</title>
</head>

<body>
    <header>
        <div class="custom-container">
            <div class="header-grid">
                <div class="logo">
                    <img src="{{ asset('front/img/logo.svg') }}" alt="">
                </div>
                <div class="agenda" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                <div class="user">
                    <div>
                        <img src="{{ asset('front/img/password.svg') }}" alt="">
                    </div>
                    <div>
                        <h4>Minha conta</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="container">
            <div class="d-flex footer-links">
                <div>
                    <img src="{{ asset('front/img/logo-alt.svg') }}" alt="">
                </div>
                <div>
                    <a href="">Termos de uso</a>
                </div>
                <div>
                    <a href="">Política de privacidade</a>
                </div>
                <div>
                    <a href="">Contrato de adesão</a>
                </div>
                <div>
                    <a href="">LGPD</a>
                </div>
                <div>
                    <a href="">Contato</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="up-content">
                            <div>
                                <img src="{{ asset('front/img/logo.svg') }}" alt="">
                            </div>
                            <div>
                                <h3>AGENDAR SUA <span>CONSULTA</span></h3>
                            </div>
                            <div>
                                <h5>Basta ligar e informar seu CPF</h5>
                            </div>
                        </div>
                        <div class="middle-content">
                            <div>
                                <h1>0800 -721-4074</h1>
                            </div>
                            <div>
                                <p>A central telefônica para os serviços de assistência estão disponíveis 24 horas por
                                    dia, 7 dias por semana.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-content">
                        <div>
                            <img src="{{ asset('front/img/pic3.png') }}" alt="">
                        </div>
                        <div>
                            <div>
                                <p>Para agendar a consulta você precisa ter cadastro no Cartão com você.</p>
                            </div>
                            <div>
                                <button class="btn btn-card">Peça seu cartão</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
</body>

</html>
