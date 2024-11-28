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
                'nome' => 'Creatina 300g',
                'preco' => '72.90',
                'qtd_estoque' => '100',
            ],
            [
                'nome' => 'Whey protein 1kg',
                'preco' => '103.90',
                'qtd_estoque' => '60',
            ],
            [
                'nome' => 'Vitamina C 500mg',
                'preco' => '17.90',
                'qtd_estoque' => '80',
            ],
        ]);
    }
}
