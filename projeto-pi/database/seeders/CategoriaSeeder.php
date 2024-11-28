<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria')->insert([
            [
            'nome' => 'Creatina',
            ],
            [
                'nome' => 'Whey Protein',
                ],
                [
                    'nome' => 'Vitaminas',
                    ],
                    [
                        'nome' => 'Pré Treinos',
                        ],
                        [
                            'nome' => 'Hipercalóricos',
                            ],
                            [
                                'nome' => 'Barrinhas',
                                ],
            
        ]);
    }
}
