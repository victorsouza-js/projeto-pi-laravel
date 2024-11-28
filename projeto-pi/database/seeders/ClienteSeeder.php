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
            [
                'nome' => 'Maria Santos',
                'telefone' => '99999-9999',
                'endereco' => 'Rua B, 456',
                'cpf' => '987.654.321-00',
                'email' => 'maria.santos@example.com',
                'cep' => '12345-678'
            ],
            [
                'nome' => 'Pedro Souza',
                'telefone' => '99999-9999',
                'endereco' => 'Rua C, 789',
                'cpf' => '456.789.123-00',
                'email' => 'pedro.souza@example.com',
                'cep' => '12345-678'
            ],
            
        ]);
    }
}
