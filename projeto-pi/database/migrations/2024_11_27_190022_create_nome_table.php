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
            $table ->string('nome');
            $table ->string('preco');
            $table ->string('qtd_estoque');
        });

        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table ->decimal('valor_total');
            $table ->dateTime('data');
            $table ->integer('cliente_id');
            $table ->integer('vendedor_id');
            $table ->integer('pagamento_id');
        });


        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table ->string('nome');
            $table ->integer('telefone');
            $table ->string('endereco');
            $table ->string('cpf');
            $table ->string('email');
            $table ->string('cep');
        });

        Schema::create('pagamento', function (Blueprint $table) {
            $table->id();
            $table ->string('forma_pagamento');
        });


        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table ->string('nome');
        });

        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table ->string('cnpj');
            $table ->string('nome');
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
