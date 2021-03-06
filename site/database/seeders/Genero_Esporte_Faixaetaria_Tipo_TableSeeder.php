<?php

namespace Database\Seeders;

use App\Models\Esporte;
use App\Models\Faixaetaria;
use App\Models\Genero;
use App\Models\Tamanho;
use App\Models\Tipo;
use App\Models\Unidade;
use Illuminate\Database\Seeder;

class Genero_Esporte_Faixaetaria_Tipo_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = Genero::create([
            'descricao' => 'feminino'
        ]);
        $genero = Genero::create([
            'descricao' => 'masculino'
        ]);
        //----------------------------------------------------

        $unidade = Unidade::create([
            'descricao' => 'unidade'
        ]);
        $unidade = Unidade::create([
            'descricao' => 'quilo'
        ]);
        $unidade = Unidade::create([
            'descricao' => 'litro'
        ]);
        //----------------------------------------------------

        $tamanho = Tamanho::create([
            'adicionaldevalor' => 0,
            'descricao' => 'pp'
        ]);
        $tamanho = Tamanho::create([
            'adicionaldevalor' => 0,
            'descricao' => 'p'
        ]);
        $tamanho = Tamanho::create([
            'adicionaldevalor' => 0,
            'descricao' => 'm'
        ]);
        $tamanho = Tamanho::create([
            'adicionaldevalor' => 0,
            'descricao' => 'g'
        ]);
        $tamanho = Tamanho::create([
            'adicionaldevalor' => 0,
            'descricao' => 'gg'
        ]);
        $tamanho = Tamanho::create([
            'adicionaldevalor' => 0,
            'descricao' => 'xg'
        ]);
        $tamanho = Tamanho::create([
            'adicionaldevalor' => 10.0,
            'descricao' => 'xxg'
        ]);
        //----------------------------------------------------

        $esporte = Esporte::create(['descricao' => mb_convert_case('Academia e Fitness', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Automobilismo', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Aventura e Esportes Radicais', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Basquete', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Beach Tennis', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Beisebol', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Bicicleta', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('C??meras Esportivas', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Camping', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Canoagem', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Casual', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Corrida e Caminhada', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('E-Sport', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Futebol', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Futebol Americano', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Handebol', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Hipismo e Equita????o', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Jogos de Mesa', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Lazer, Piscina e Praia', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Lutas e Artes Marciais', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Mergulho', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Monitores e Rel??gios GPS', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Motocross', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Muscula????o', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Nata????o', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Patins', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Pesca', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Pilates e Yoga', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Rugby', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Skate', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Suplementos', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Surf e Stand Up', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Tennis e Squash', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Treino Funcional', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('V??lei', MB_CASE_LOWER, "UTF-8")]);
        $esporte = Esporte::create(['descricao' => mb_convert_case('Futev??lei', MB_CASE_LOWER, "UTF-8")]);
        //----------------------------------------------------

        $faixaetaria = Faixaetaria::create([
            'descricao' => 'adulto'
        ]);
        $faixaetaria = Faixaetaria::create([
            'descricao' => 'adolescente'
        ]);
        $faixaetaria = Faixaetaria::create([
            'descricao' => 'infantil'
        ]);
        //----------------------------------------------------

        $tipo = Tipo::create(['descricao' => mb_convert_case('Manguito', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Agasalhos', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bermudas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Cal??as', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Cal??as T??rmicas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Cal????es', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Camisas de Compress??o', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Camisas de Time', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Camisas Polo', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Camisas T??rmicas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Camisetas Regatas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Camisetas Manga Longa', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Kimonos', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Macac??es Fitness', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Mai??s', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Meias e Mei??o', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Moletons e Jaquetas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Rash Guard', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Sungas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Blusas Cropped', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Body Fitness', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Cal??as Legging', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Camisetas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Mai??s e Macaquinhos', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Meias', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Short Saia', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Top Fitness', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Blusa de Frio', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Chinelos', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Chuteiras', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('T??nis Casual e Sapat??nis', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Botas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Chinelos', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('T??nis Casual e Sapat??nis', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('T??nis', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('T??nis para Academia', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('T??nis para Corrida', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bandagem', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bolas de Basquete', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bolas de Futebol', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bolas de Handebol', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bolas de Pilates', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bolas de T??nis', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bolas de V??lei', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bolsas de Academia', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bolsas T??rmicas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Bon??s Aba Reta e Curva', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Caneleiras', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Capacetes', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Colchonetes', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Coqueteleiras', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Joelheiras', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Luvas de Boxe', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Luvas de Goleiro', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Luvas para Academia', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Malas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Mochilas', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Monitores Card??acos', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Munhequeiras', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('??culos de Ciclismo', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('??culos de Nata????o', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('??culos de Sol', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Raquetes de T??nis', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Rel??gios de Pulso', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Squeezes', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Tornozeleiras', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Toucas de Nata????o', MB_CASE_LOWER, "UTF-8")]);
        $tipo = Tipo::create(['descricao' => mb_convert_case('Viseiras', MB_CASE_LOWER, "UTF-8")]);
    }
}
