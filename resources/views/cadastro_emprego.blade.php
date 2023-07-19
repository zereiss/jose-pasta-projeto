@extends('app')

@section('conteudo')
<main class="">

        <h3 class="text-center empresa2">Cadastro de empregos:</h3>
        <form action="{{route('store')}}" method="POST" class="container">
            @csrf
            
            <div class="form-floating mb-3">
                <input type="label" class="form-control" id="nome_empresa" name="nome_empresa"
                    placeholder="Nome inteiro da empresa:">
                <label for="floatingInput">Nome da Empresa:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email_empresa" name="email_empresa" placeholder="">
                <label for="floatingInput">Email da Empresa:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="label" class="form-control" id="endereco" name="endereco" placeholder="">
                <label for="floatingInput">Endereço da Empresa</label>
            </div>

            <div class="form-floating mb-3">
                <input type="label" class="form-control" id="cargo" name="cargo" placeholder="">
                <label for="floatingInput">Cargo: </label>
            </div>

            <div class="form-floating mb-3">
                <input type="label" class="form-control" id="carga_horaria" name="carga_horaria" placeholder="">
                <label for="floatingInput">Carga horária:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="label" class="form-control" id="salario" name="salario" placeholder="">
                <label for="floatingInput">Salário em média:</label>
            </div>

            <div class="form-floating">
                <select class="form-select" id="necessita_experiencia" name="necessita_experiencia" aria-label="Floating label select example">
                  <option selected>É necessário experiência?</option>
                  <option value="1">Sim</option>
                  <option value="2">Não</option>
                </select>
                <label for="floatingSelect">selecione uma opção: </label>
              </div>
            <br>
            <div class="text-center">
                <input type="submit" class="btn btn-outline-primary btn-lg" value="Finalizar cadastro">
            </div>


    </main>
@endsection