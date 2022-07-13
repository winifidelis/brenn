<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Seeder;

use App\Models\Cliente;
use App\Models\Clinica;
use App\Models\Clinicauser;
use App\Models\Lembrete;
use App\Models\Movimentofinanceiro;
use App\Models\Popupprincipal;
use App\Models\Procedimento;
use App\Models\Produto;
use App\Models\Produtodepartamento;
use App\Models\Produtosprocedimento;
use App\Models\Profissional;
use App\Models\Profissionalprocedimento;
use App\Models\Sliderprincipal;
use App\Models\User;
use App\Models\Whatsappvendedores;
use Illuminate\Support\Str;

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
        $user = User::create([
            'name' => 'Winicius Fidelis',
            'avatar' => 'default.png',
            'email' => 'winifidelis@gmail.com',
            'password' => password_hash('123456789', PASSWORD_DEFAULT),

            'tipopessoa' => 'f',
            'cpf' => '000.000.000-01',
            'cnpj' => '000.000.000-01',
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
            'enviarxml' => true,
            'enviarimagens' => true,
            'popupprincipal' => true,
            'promocoes' => true,
            'sliderprincipal' => true,
            'userdashboard' => true,
            'nomesdepartamentos' => true,
            'administrador' => true,
        ]);

        $user = User::create([
            'name' => 'Adriano',
            'avatar' => 'default.png',
            'email' => 'comercial@makroservice.com.br ',
            'password' => password_hash('123456789', PASSWORD_DEFAULT),

            'tipopessoa' => 'f',
            'cpf' => '000.000.000-02',
            'cnpj' => '000.000.000-02',
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
            'enviarxml' => true,
            'enviarimagens' => false,
            'popupprincipal' => false,
            'promocoes' => false,
            'sliderprincipal' => false,
            'userdashboard' => false,
            'nomesdepartamentos' => false,
            'administrador' => false,
        ]);

        $user = User::create([
            'name' => 'Kleiton',
            'avatar' => 'default.png',
            'email' => 'ti@makroservice.com.br',
            'password' => password_hash('123456789', PASSWORD_DEFAULT),

            'tipopessoa' => 'f',
            'cpf' => '000.000.000-03',
            'cnpj' => '000.000.000-03',
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
            'enviarxml' => true,
            'enviarimagens' => false,
            'popupprincipal' => false,
            'promocoes' => false,
            'sliderprincipal' => false,
            'userdashboard' => false,
            'nomesdepartamentos' => false,
            'administrador' => false,
        ]);

        /*
        $departamento = Produtodepartamento::create([
            'descricao' => 'REDE ELÉTRICA',
            'descricaosite' => 'MÉDIA TENSÃO',
            'habilitado' => true,
            'codigo' => '103',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'UTILIDADES ELÉTRICAS',
            'descricaosite' => 'UTILIDADES ELÉTRICAS',
            'habilitado' => true,
            'codigo' => '105',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'LUMINÁRIAS',
            'descricaosite' => 'LUMINÁRIAS',
            'habilitado' => true,
            'codigo' => '99',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'INDUSTRIAL',
            'descricaosite' => 'INDUSTRIAL',
            'habilitado' => true,
            'codigo' => '96',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'INFRAESTRUTURA',
            'descricaosite' => 'INFRAESTRUTURA',
            'habilitado' => true,
            'codigo' => '97',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'ACESSÓRIO PARA MONTAGEM',
            'descricaosite' => 'ACESSÓRIO PARA MONTAGEM',
            'habilitado' => true,
            'codigo' => '94',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'CONDUTORES ELÉTRICOS',
            'descricaosite' => 'CONDUTORES ELÉTRICOS',
            'habilitado' => true,
            'codigo' => '95',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'VDI - VOZ/DADOS/IMAGEM',
            'descricaosite' => 'VDI - VOZ/DADOS/IMAGEM',
            'habilitado' => true,
            'codigo' => '106',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'LÂMPADAS ',
            'descricaosite' => 'LÂMPADAS ',
            'habilitado' => true,
            'codigo' => '98',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'REATORES',
            'descricaosite' => 'REATORES',
            'habilitado' => true,
            'codigo' => '102',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'PAINEIS E QUADROS',
            'descricaosite' => 'PAINEIS E QUADROS',
            'habilitado' => true,
            'codigo' => '100',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'ACABAMENTO ELÉTRICO',
            'descricaosite' => 'INTERRUPTORES, TOMADAS E ACABAMENTO ELÉTRICO',
            'habilitado' => true,
            'codigo' => '93',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'PROTEÇÃO ELÉTRICA',
            'descricaosite' => 'PROTEÇÃO ELÉTRICA',
            'habilitado' => true,
            'codigo' => '101',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'SPDA',
            'descricaosite' => 'SPDA',
            'habilitado' => true,
            'codigo' => '104',
        ]);
        $departamento = Produtodepartamento::create([
            'descricao' => 'USO E CONSUMO',
            'descricaosite' => 'USO E CONSUMO',
            'habilitado' => false,
            'codigo' => '108',
        ]);

        $whatsapp = Whatsappvendedores::create([
            'nome' => 'Adriano', 'email' => 'comercial@makroservice.com.br', 'whatsapp' => '5562991532769', 'mensagem' => 'estou entrando em contato pelo link do site da Makro Service', 'posicao' => '0', 'clique' => '0', 'bloqueado' => false
        ]);
        $whatsapp = Whatsappvendedores::create([
            'nome' => 'Adelaide Lima', 'email' => 'adelaide@makroservice.com.br', 'whatsapp' => '5562991532769', 'mensagem' => 'estou entrando em contato pelo link do site da Makro Service', 'posicao' => '0', 'clique' => '0', 'bloqueado' => false
        ]);
        $whatsapp = Whatsappvendedores::create([
            'nome' => 'Elisania Lopes', 'email' => 'elisania@makroservice.com.br', 'whatsapp' => '5562992251093', 'mensagem' => 'estou entrando em contato pelo link do site da Makro Service', 'posicao' => '0', 'clique' => '0', 'bloqueado' => false
        ]);
        $whatsapp = Whatsappvendedores::create([
            'nome' => 'Guilherme Borges', 'email' => 'guilherme@makroservice.com.br', 'whatsapp' => '5562991667457', 'mensagem' => 'estou entrando em contato pelo link do site da Makro Service', 'posicao' => '0', 'clique' => '0', 'bloqueado' => false
        ]);
        $whatsapp = Whatsappvendedores::create([
            'nome' => 'Jeverson Nunes', 'email' => 'vendas10@makroservice.com.br', 'whatsapp' => '5562992393995', 'mensagem' => 'estou entrando em contato pelo link do site da Makro Service', 'posicao' => '0', 'clique' => '0', 'bloqueado' => false
        ]);
        $whatsapp = Whatsappvendedores::create([
            'nome' => 'Julio Cesar', 'email' => 'julio@makroservice.com.br', 'whatsapp' => '5562991939263', 'mensagem' => 'estou entrando em contato pelo link do site da Makro Service', 'posicao' => '0', 'clique' => '0', 'bloqueado' => false
        ]);
        $whatsapp = Whatsappvendedores::create([
            'nome' => 'Loja - Auto Atendimento', 'email' => 'keila@makroservice.com.br', 'whatsapp' => '5562993772806', 'mensagem' => 'estou entrando em contato pelo link do site da Makro Service', 'posicao' => '0', 'clique' => '0', 'bloqueado' => false
        ]);
        $whatsapp = Whatsappvendedores::create([
            'nome' => 'Patricia Rosa', 'email' => 'patricia@makroservice.com.br', 'whatsapp' => '5562992469493', 'mensagem' => 'estou entrando em contato pelo link do site da Makro Service', 'posicao' => '0', 'clique' => '0', 'bloqueado' => false
        ]);
        $whatsapp = Whatsappvendedores::create([
            'nome' => 'Paulo Cesar', 'email' => 'paulo@makroservice.com.br', 'whatsapp' => '5562992390994', 'mensagem' => 'estou entrando em contato pelo link do site da Makro Service', 'posicao' => '0', 'clique' => '0', 'bloqueado' => false
        ]);
        $whatsapp = Whatsappvendedores::create([
            'nome' => 'Welma Alves', 'email' => 'welma@makroservice.com.br', 'whatsapp' => '5562992288171', 'mensagem' => 'estou entrando em contato pelo link do site da Makro Service', 'posicao' => '0', 'clique' => '0', 'bloqueado' => false
        ]);

        $slider = Sliderprincipal::create([
            'nome' => 'image 1',
            'imagem' => 'slide-1.jpg',
            'ordem' => 1
        ]);
        $slider = Sliderprincipal::create([
            'nome' => 'image 2',
            'imagem' => 'slide-2.jpg',
            'ordem' => 2
        ]);
        $slider = Sliderprincipal::create([
            'nome' => 'image 3',
            'imagem' => 'slide-3.jpg',
            'ordem' => 3
        ]);
        $slider = Sliderprincipal::create([
            'nome' => 'image 4',
            'imagem' => 'slide-4.jpg',
            'ordem' => 4
        ]);

        $slider = Popupprincipal::create([
            "ativo" => 0,
            "imagem" => "default.jpg",
        ]);
        */
    }
}
