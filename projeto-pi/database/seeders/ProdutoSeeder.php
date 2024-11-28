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
                'qtd_estoque' => '130',
            ],
            [
                'nome' => 'Whey protein 1kg',
                'preco' => '103.90',
                'qtd_estoque' => '345',
            ],
            [
                'nome' => 'Vitamina C 500mg',
                'preco' => '17.90',
                'qtd_estoque' => '120',
            ],
            [
                'nome' => 'Creatina Max 300mg',
                'preco' => '83.00',
                'qtd_estoque' => '530',
            ],
            [
                'nome' => 'Creatina Growth 300g',
                'preco' => '72.00',
                'qtd_estoque' => '150',
            ],
            [
                'nome' => 'Creatina IntegralMédica 300g',
                'preco' => '71.00',
                'qtd_estoque' => '163',
            ],
            [
                'nome' => 'Pré Treino Insanity Clow',
                'preco' => '124.00',
                'qtd_estoque' => '200',
            ],

           
            
        ]);
    }
}
