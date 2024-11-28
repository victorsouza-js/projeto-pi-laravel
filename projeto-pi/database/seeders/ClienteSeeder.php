<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        DB::table('cliente')->insert([
            [
                'nome' => 'João Silva',
                'telefone' => '99999-9999',
                'endereco' => 'Rua A, 123',
                'cpf' => '123.456.789-00',
                'email' => 'joao.silva@example.com',
                'cep' => '12345-678'
            ],
        ]);
    }
}
