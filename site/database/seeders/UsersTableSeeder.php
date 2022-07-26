<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Seeder;

use App\Models\User;

use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('pt_BR');
        //https://github.com/fzaninotto/Faker


        $user = User::create([
            'name' => 'Winicius Fidelis',
            'avatar' => 'default.png',
            'email' => 'winifidelis@gmail.com',
            'password' => password_hash('123456789', PASSWORD_DEFAULT),

            'tipopessoa' => 'f',
            'cpf' => $faker->numberBetween($min = 10000000001, $max = 99999999999),
            'cnpj' => $faker->numberBetween($min = 10000000001, $max = 99999999999),
            'telefone' => '123',
            'whatsapp' => '123',
            'cep' => '123',
            'endereco' => '123',
            'estado' => '123',
            'cidade' => '123',
            'bairro' => '123',
            'rua' => '123',
            'complemento' => '123',
            'checkboxemail' => true,
            'checkboxwhatsapp' => true,
            'checkboxregulamento' => true,

            'programador' => true,
            'telabackend' => true,
            'sliderprincipal' => true,
            'administrador' => true,
        ]);
        $nomes = [
            'Anne Paniago',
            'Pablo Henrique',
            'Franciely Jardim',
            'Silmara Santana'
        ];
        $emails = [
            'annepaniago@gmail.com',
            'pablohmsilva7@gmail.com',
            'francielyjardim@hotmail.com',
            'silmarasantana@yahoo.com'
        ];

        for ($i = 0; $i < sizeof($nomes); $i++) {
            $user = User::create([
                'name' => $nomes[$i],
                'avatar' => 'default.png',
                'email' => $emails[$i],
                'password' => password_hash('123456789', PASSWORD_DEFAULT),

                'tipopessoa' => 'f',
                'cpf' => $faker->numberBetween($min = 10000000001, $max = 99999999999),
                'cnpj' => $faker->numberBetween($min = 10000000000001, $max = 99999999999999),
                'telefone' => '123',
                'whatsapp' => '123',
                'cep' => '123',
                'endereco' => '123',
                'estado' => '123',
                'cidade' => '123',
                'bairro' => '123',
                'rua' => '123',
                'complemento' => '123',
                'checkboxemail' => true,
                'checkboxwhatsapp' => true,
                'checkboxregulamento' => true,

                'programador' => false,
                'telabackend' => true,
                'sliderprincipal' => true,
                'administrador' => true,
            ]);
        }
    }
}
