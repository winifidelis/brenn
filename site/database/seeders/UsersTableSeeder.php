<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\UserLinha;
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

        $nomes = [
            'Thayrone',
            'Alan Calixto',
            'Thallis',
            'Serginho',
            'Lane',
            'Mari',
            'Arena todos os cantos',
        ];
        $emails = [
            'atleta1@gmail.com',
            'atleta2@gmail.com',
            'atleta3@gmail.com',
            'atleta4@gmail.com',
            'atleta5@gmail.com',
            'atleta6@gmail.com',
            'atleta7@gmail.com',
        ];
        $descricao = [
            'Descrição da linha do atleta T',
            'Descrição da linha do atleta A',
            'Descrição da linha do atleta Th',
            'Descrição da linha do atleta S',
            'Descrição da linha do atleta L',
            'Descrição da linha do atleta M',
            'Descrição da linha do atleta Arena',
        ];
        $imagemLinhas = [
            'thaytone.jpg',
            'alan_calixto.jpg',
            'thallis.jpg',
            'serginho.jpg',
            'lane.jpg',
            'mari.jpg',
            'arenaTodosOsCantos.jpg',
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

                'possuilinha' => true,
                //'userlinha_id' => $userlinha->id,

                'programador' => false,
                'telabackend' => true,
                'sliderprincipal' => false,
                'administrador' => false,
            ]);

            $userlinha = UserLinha::create([
                'nome' => $nomes[$i],
                'descricao' => $descricao[$i],
                'imagem' => $imagemLinhas[$i],
                'ativa' => true,
                'user_id' => $user->id
            ]);

            $user->userlinha_id = $userlinha->id;
            $user->update();
        }
    }
}
