<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vendas')->insert([
            [
                'valor_total' => 150.50,
            'data' => now(),
            'cliente_id' => 1,
            'vendedor_id' => 2,
            'pagamento_id' => 3
            ]
        ]);
    }
}
