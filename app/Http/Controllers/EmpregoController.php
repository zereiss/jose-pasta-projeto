<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Emprego;

class EmpregoController extends Controller
{
    //Escrever aqui os métodos para o CRUD

    //C do  crud
    public function store(Request $request)
    {       
        //instancia o Model Emprego
        $Emprego = new Emprego;

        $Emprego->nome_empresa = $request->nome_empresa;
        $Emprego->email_empresa = $request->email_empresa;
        $Emprego->endereco = $request->endereco;
        $Emprego->cargo = $request->cargo;
        $Emprego->carga_horaria = $request->carga_horaria;
        $Emprego->salario = $request->salario;
        $Emprego->necessita_experiencia = $request->necessita_experiencia;
        $Emprego->user_id = Auth()->user()->id;

        //Grava na tabela do BD
        $Emprego->save();
        //Redireciona para o Dashboard
        return redirect('dashboard');
    }

    //R do CRUD
    public function read()
    {
        $user = auth()->user()->id;

        //Carrega as despesas na variável
        $Emprego = Emprego::get();

        $dados = [
            'Emprego' =>$Emprego
        ];

        return view('dashboard', );
    }

    //U do CRUD - carrega os dados
    public function form_update($id)
    {
        
    }
    //U do CRUD - atualiza dados
    public function update(Request $request)
    {
        
    }

    // D do CRUD
    public function deletar($id)
    {
        
    }
}
