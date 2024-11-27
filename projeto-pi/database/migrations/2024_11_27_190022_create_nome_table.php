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

        Schema::create('venda', function (Blueprint $table) {
            $table->id();
            $table -> string('valor_total');
            $table -> string('data');
            $table -> string('cliente_id');
            $table -> string('vendedor_id');
            $table -> string('pagamento_id');

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
