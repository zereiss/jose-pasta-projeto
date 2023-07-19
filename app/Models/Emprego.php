<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprego extends Model
{


    use HasFactory;
    //campos "autorizados" para modificação
    protected $fillable = ['nome_empresa', 'email_empresa', 'endereco', 'cargo', 'carga_horaria', 'salario', 'necessita_experiencia','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
