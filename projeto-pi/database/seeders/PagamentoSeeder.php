<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pagamento')->insert([
            [
                'forma_pagamento' => 'Boleto Bancario',
            ],
            [
                'forma_pagamento' => 'Pix',
            ],
            [
                'forma_pagamento' => 'Cartão de Credito',
            ],
            ]);
    }
}
