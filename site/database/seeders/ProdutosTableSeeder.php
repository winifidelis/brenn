<?php

namespace Database\Seeders;

use App\Models\Esporte;
use App\Models\Faixaetaria;
use App\Models\Genero;
use App\Models\Produto;
use App\Models\ProdutoEsporte;
use App\Models\ProdutoFaixaetaria;
use App\Models\ProdutoFoto;
use App\Models\ProdutoGenero;
use App\Models\ProdutoTamanho;
use App\Models\ProdutoTipo;
use App\Models\Tamanho;
use App\Models\Tipo;
use App\Models\Unidade;
use Illuminate\Database\Seeder;

use Symfony\Component\Console\Output\ConsoleOutput;

use Faker\Factory;

class ProdutosTableSeeder extends Seeder
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
        $output = new ConsoleOutput();

        $totalUnidade = Unidade::count();
        //$output->writeln('Quantidade unidade' . $totalUnidade);

        $totalTipo = Tipo::count();
        $tipoArray = Tipo::select('id')->get()->toArray();
        //$output->writeln('Quantidade unidade' . $totalTipo);
        //shuffle($tipoArray);
        //$output->writeln('Array tipo' . json_encode($tipoArray));

        $totalGenero = Genero::count();
        $generoArray = Genero::select('id')->get()->toArray();
        //$output->writeln('Quantidade gereno' . $totalGenero);
        //shuffle($generoArray);
        //$output->writeln('Array genero' . json_encode($generoArray));

        //$totalEsporte = Esporte::count();
        $totalEsporte = Esporte::select('id')->whereIn('id', [1, 5, 11, 12, 14, 24, 35, 36])->count();
        $esporteArray = Esporte::select('id')->whereIn('id', [1, 5, 11, 12, 14, 24, 35, 36])->get()->toArray();
        //$output->writeln('Quantidade Esporte' . $totalEsporte);
        //shuffle($esporteArray);
        //$output->writeln('Array esporte' . json_encode($esporteArray));
        /*
            1  - academia e fitness
            5  - beach tennis
            11 - casual
            12 - corrida e caminhada
            14 - futebol
            24 - musculação
            35 - vôlei
            36 - Futevôlei
            */

        $totalFaixaetaria = Faixaetaria::count();
        $faixaetariaArray = Faixaetaria::select('id')->get()->toArray();
        //$output->writeln('Quantidade faixa etária' . $totalFaixaetaria);
        //shuffle($faixaetariaArray);
        //$output->writeln('Array faixaetaria' . json_encode($faixaetariaArray));

        $totalTamanho = Tamanho::count();
        $tamanhoArray = Tamanho::select('id')->get()->toArray();
        //$output->writeln('Quantidade tamanho' . $totalTamanho);
        //shuffle($tamanhoArray);
        //$output->writeln('Array tamanho' . json_encode($tamanhoArray));


        for ($i = 0; $i < 25; $i++) {

            $nome = $faker->text(15);
            $valor = $faker->randomFloat($nbMaxDecimals = 2, $min = 50.00, $max = 100.00);
            $produto = Produto::create([
                'nome'                => $nome,
                'linknome'            => Produto::geraNomeLink($nome),
                //'linkdescricao'     => vai gravar null,
                'descricao'           => $faker->text(120),
                'unidade'             => $faker->numberBetween(1, $totalUnidade),
                'codigobarras'        => $faker->ean13,
                'informacoestecnicas' => $faker->text(120),
                'dadostecnicos'       => $faker->text(120),
                'pesoliq'             => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.00, $max = 1.00),
                'pesobruto'           => $faker->randomFloat($nbMaxDecimals = 2, $min = 1.01, $max = 3.00),
                'volume'              => $faker->randomFloat($nbMaxDecimals = 2, $min = 1.00, $max = 5.00),
                //'dataexclusao'      => vai gravar null,
                'foralinha'           => false,
                'valor'               => $valor,
                'temdesconto'         => $faker->randomElement($array = array(true, false)),
                'valorcomdesconto'    => $valor - 10,
            ]);

            //atribuir o produto as classes

            //tamanho
            $tamanho = $faker->numberBetween(1, $totalTamanho);
            shuffle($tamanhoArray);
            for ($t = 0; $t < $tamanho; $t++) {
                $produtoTamanho = ProdutoTamanho::create([
                    'produto_id' => $produto->id,
                    'tamanho_id'  => $tamanhoArray[$t]['id']
                ]);
            }
            //tipo
            $tipo = $faker->numberBetween(1, $totalTipo);
            $produtoTipo = ProdutoTipo::create([
                'produto_id' => $produto->id,
                'tipo_id'  => $tipo
            ]);

            //genero
            $genero = $faker->numberBetween(1, $totalGenero);
            $produtoGenero = ProdutoGenero::create([
                'produto_id' => $produto->id,
                'genero_id'  => $genero
            ]);

            //esporte
            $esporte = $faker->numberBetween(1, $totalEsporte);
            shuffle($esporteArray);
            for ($e = 0; $e < $esporte; $e++) {
                $produtoEsporte = ProdutoEsporte::create([
                    'produto_id' => $produto->id,
                    'esporte_id'  => $esporteArray[$e]['id']
                ]);
            }

            //faixaetaria
            $faixa = $faker->numberBetween(1, $totalFaixaetaria);
            shuffle($faixaetariaArray);
            for ($f = 0; $f < $faixa; $f++) {
                $produtoFaixaetaria = ProdutoFaixaetaria::create([
                    'produto_id' => $produto->id,
                    'faixaetaria_id'  => $faixaetariaArray[$f]['id']
                ]);
            }

            //fotos
            $fotos = [
                'produto_1.jpg',
                'produto_2.jpg',
                'produto_3.jpg',
                'produto_4.jpg',
                'produto_5.jpg',
                'produto_6.jpg',
                'produto_7.jpg',
                'produto_8.jpg',
                'produto_9.jpg',
                'produto_10.jpg',
            ];
            shuffle($fotos);
            shuffle($fotos);
            shuffle($fotos);
            for ($fo = 0; $fo < 5; $fo++) {
                $produtoFoto = ProdutoFoto::create([
                    'produto_id' => $produto->id,
                    'endereco'  => $fotos[$fo]
                ]);
            }
        }
    }
}
