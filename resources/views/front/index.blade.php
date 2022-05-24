@extends('layouts.main')
@section('content')
    <div class="hero">
        <div class="text-section">
            <div>
                <h2>Consultas<br> médicas a<br> partir de R$ 24</h2>
            </div>
            <div>
                <button class="btn btn-add">Peça já o seu</button>
            </div>
            <div>
                <p>* Na primeira mensalidade será<br> cobrada a taxa de adesão do cartão<br> no valor de R$ 27,50.</p>
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

    {{-- <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3>TESTE CADASTRO DE CLIENTE</h3>
            </div>
            <div class="card-body">
                <div class="row" id="form-pay">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="exampleFormControlInput1" class="form-label">CPF</label>
                                <input type="text" name="cpf" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="exampleFormControlInput1" class="form-label">Data de Nascimento</label>
                                <input type="text" name="data_nascimento" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="exampleFormControlInput1" class="form-label">Genero</label>
                                <select class="form-select" name="genero" aria-label="Default select example">
                                    <option selected>Selecione</option>
                                    <option value="1">Feminino</option>
                                    <option value="2">Masculino</option>
                                    <option value="3">Outro</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                <input type="text" name="telefone" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="exampleFormControlInput1" class="form-label">Celular</label>
                                <input type="text" name="celular" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <button type="button" class="btn btn-success" id="cadbutton">CADASTRAR</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
