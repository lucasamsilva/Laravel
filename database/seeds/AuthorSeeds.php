<?php

use App\Author;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AuthorSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Author $registro)
    {
        
        $registro->create([
            'nome' => 'Lucas Andrei Moraes da Silva',
            'pseudonimo' => 'Menitles',
            'data_nascimento' => Carbon::yesterday(),
            'sexo' => 'M',
            'rg' => '530242345',
            'cpf' => '46545807862',
            'endereco' => 'Rua Tiradentes',
            'cep' => '16202024',
            'cidade' => 'Birigui',
            'bairro' => 'Costa Rica',
            'email' => 'lucas@lucas.com',
            'telefone' => '36442549',
            'celular' => '996796395'
        ]);

    }
}
