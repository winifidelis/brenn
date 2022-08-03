<?php

namespace Database\Seeders;

use App\Models\PopupPrincipal;
use Illuminate\Database\Seeder;

use Symfony\Component\Console\Output\ConsoleOutput;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $output = new ConsoleOutput();
        $inicio = microtime(true);

        $this->call([
            UsersTableSeeder::class,
            PopupPrincipalTableSeeder::class,
            ComentariosTableSeeder::class,
            Genero_Esporte_Faixaetaria_Tipo_TableSeeder::class,
            ProdutosTableSeeder::class,
            //ClientesTableSeeder::class,
        ]);

        $fim = microtime(true);
        $duration = $fim - $inicio;
        $hours = (int)($duration / 60 / 60);
        $minutes = (int)($duration / 60) - $hours * 60;
        $seconds = (int)$duration - $hours * 60 * 60 - $minutes * 60;
        $output->writeln("<info>" . $hours . ":" . $minutes . ":" . $seconds . "</info>");
    }
}
