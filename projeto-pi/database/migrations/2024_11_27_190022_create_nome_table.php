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
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table -> string('nome');
            $table -> string('preco');
            $table -> string('qtd_estoque');
        });

        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table -> string('valor_total');
            $table -> string('data');
            $table -> string('cliente_id');
            $table -> string('vendedor_id');
            $table -> string('pagamento_id');
        });


        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table -> string('nome');
            $table -> string('telefone');
            $table -> string('endereco');
            $table -> string('cpf');
            $table -> string('email');
            $table -> string('cep');
        });

        Schema::create('pagamento', function (Blueprint $table) {
            $table->id();
            $table -> string('forma_pagamento');
        });


        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table -> string('nome');
        });

        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table -> string('cnpj');
            $table -> string('nome');
        });









    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nome');
    }
};
