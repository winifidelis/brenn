<?php

namespace Database\Seeders;

use App\Models\PopupPrincipal;
use Illuminate\Database\Seeder;

class PopupPrincipalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $popup = PopupPrincipal::create([
            'ativo' => false,
            'titulo' => 'Pop-up que pode ser escondido.',
            'texto1' => 'Este pop-up terá uma configuração para aparecer somente quando quiserem.',
            'texto2' => 'Mais de um tipo de pop-up poderá ser configurado.',
            'imagem' => 'bannerTeste.jpg',
        ]);
    }
}
