@extends('layouts.main')
@section('content')
    <div class="container">
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
    </div>
@endsection
