<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('painel/css/main.min.css') }}">
    <title>Cartão para você</title>
</head>

<body>
    <header>
        <div class="side-bar">
            <div class="logo">
                <a href="{{ route('admin.index') }}"><img src="{{ asset('painel/img/logo.svg') }}" alt="logo"></a>
            </div>
            <div class="menu">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.index') }}"><img
                                src="{{ asset('painel/img/icons/home.svg') }}" alt="">
                            Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.pedidos') }}"><img
                                src="{{ asset('painel/img/icons/shopping-cart.svg') }}" alt=""> Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="{{ asset('painel/img/icons/percent.svg') }}"
                                alt=""> Comissões</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="{{ asset('painel/img/icons/user.svg') }}" alt="">
                            Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="{{ asset('painel/img/icons/bullhorn.svg') }}"
                                alt=""> Influencers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img
                                src="{{ asset('painel/img/icons/settings-alt.svg') }}" alt=""> Configurações</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="header-top container-custom">
            <div class="content-top">
                <div class="text-capitalize">
                    <p>
                        @if (!Request::segment(2))
                            Dashboard
                        @else
                            {{ Request::segment(2) }}
                        @endif
                    </p>
                </div>
                <div class="user-alt">
                    <div class="user">
                        <div>
                            <img src="{{ asset('painel/img/profile_foto.png') }}" alt="">
                        </div>
                        <div class="user-text">
                            <h5>Luis Carlos</h5>
                            <p>Administrador</p>
                        </div>
                    </div>

                    <div>
                        <img src="{{ asset('painel/img/icons/logout.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-custom">
            @yield('content')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('painel/js/script.js') }}"></script>
</body>

</html>
