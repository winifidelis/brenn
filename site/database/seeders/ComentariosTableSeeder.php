<?php

namespace Database\Seeders;

use App\Models\ComentariosHome;
use Illuminate\Database\Seeder;

use Faker\Factory;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('pt_BR');

        for ($i = 0; $i < 10; $i++) {
            $popup = ComentariosHome::create([
                'nome' => $faker->text(15),
                'titulo' => $faker->text(15),
                'texto' => $faker->text(100),
                'imagem' => $faker->randomElement($array = array('1.jpg', '2.jpg', '3.jpg')),
            ]);
        }
    }
}
