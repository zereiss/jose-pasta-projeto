@extends('app')

@section('conteudo')
<h3 class="text-center">Cadastro de empregos:</h3>
<form action="processa.php" method="POST" enctype="multipart/form-data" class="container">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome da Empresa:</label>
        <input type="text" class="form-control" name="nome-empresa" id="nome-empresa" placeholder="Digite seu o nome da Empresa:">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Email da Empresa:</label>
        <input type="email" class="form-control" name="email-empresa" id="email-empresa" placeholder="Exemplo: abc@mail.com:">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Endereço da empresa:</label>
        <input type="text" class="form-control" name="endereco-empresa" id="endereco-empresa" placeholder="Digite o endereço:">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cargo:</label>
        <input type="text" class="form-control" name="cargo-emprego" id="cargo-emprego" placeholder="Digite o cargo: ">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Carga horária:</label>
        <input type="text" class="form-control" name="cargah-emprego" id="cargah-emprego" placeholder="Digite o carga horaria: ">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Salário em média:</label>
        <input type="text" class="form-control" name="salario-emprego" id="salario-emprego" placeholder="Digite o Salário: ">
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">É necessário experiência:</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>ㅤ</option>
            <option>Sim</option>
            <option>Não</option>
        </select>
    </div>
    <br>
    <div class="text-center">
        <a href="index.html" class="btn btn-outline-success btn-lg">Finalizar cadastro</a>
    </div>
    @endsection