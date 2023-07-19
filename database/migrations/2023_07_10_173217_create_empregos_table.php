<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empregos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_empresa');
            $table->string('email_empresa');
            $table->string('endereco');
            $table->string('cargo');
            $table->string('carga_horaria');
            $table->string('salario');
            $table->string('necessita_experiencia');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empregos');
    }
};
