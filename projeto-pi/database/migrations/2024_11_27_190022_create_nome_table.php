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
            $table->string('nome');
            $table->string('preco');
            $table->string('qtd_estoque');
            $table->string('categoria'); 
            $table->boolean('status')->default(true); 
            $table->string('codigo_sku')->unique();
            $table->decimal('preco_promocional', 10, 4)->nullable(); 
            $table->decimal('peso', 8, 4)->nullable();
            $table->string('dimensoes')->nullable();
            $table->string('fornecedor')->nullable(); 
            $table->string('tags')->nullable(); 
            $table->timestamps();
        });

        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor_total');
            $table->dateTime('data');
            $table->integer('cliente_id');
            $table->integer('vendedor_id');
            $table->integer('pagamento_id');
        });


        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cpf');
            $table->string('email');
            $table->string('cep');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('uf');
            $table->string('forma_de_pagamento');
            $table->boolean('compra_efetuada');
        });

        Schema::create('pagamento', function (Blueprint $table) {
            $table->id();
            $table->string('forma_pagamento');
        });


        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
        });

        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj');
            $table->string('nome');
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->integer('login');
            $table->string('nome');
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
