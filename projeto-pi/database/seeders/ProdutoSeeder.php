<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        DB::table('produto')->insert([
            [
                'nome' => 'Creatina Dark Lab 300g',
                'preco' => '73.00',
                'qtd_estoque' => '670',
                'categoria' => 'Monohidratada',
                'status' => true,
                'codigo_sku' => 'PROD123456',
                'preco_promocional' => '60.00',
                'peso' => '0.300',
                'dimensoes' => '15x7x0.8 cm',
                'fornecedor' => 'Tech Supply Ltda.',
                'tags' => 'suplementos, creatinas, proteinas, monohidratadas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
            
        ]);
    }
}
