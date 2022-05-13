<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class EmailController extends Controller
{
    public function emailContatoSite(Request $request)
    {
        $data = $request->all();
        try {
            $titulo = $data['assunto'];
            $conteudo  = $data['mensagem'];
            $nomeComprador = $data['nome'];
            $emailComprador = $data['email'];

            //$to_name = 'Winição';
            //$to_email = 'winifidelis@gmail.com';
            $dataArray = array(
                "assunto" => $data['assunto'],
                "nome" => $data['nome'],
                "email" => $data['email'],
                "telefone" => $data['telefone'],
                "celular" => $data['celular'],
                "estado" => $data['estado'],
                "cidade" => $data['cidade'],
                "mensagem" => $data['mensagem'],
            );

            /*
            Mail::send('emails.teste', $dataArray, function ($message) use ($nomeComprador, $emailComprador) {
                $message->to('winifidelis@gmail.com', 'Makro Service ')
                    ->subject('Site - Contato');
                $message->from('noreply@makroservice.com.br', 'Site Makro Service ');
            });
            */

            Mail::send('emails.teste', $dataArray, function ($message) use ($nomeComprador, $emailComprador) {
                $message->to('vendas@makroservice.com.br', 'Makro Service ')
                    ->subject('Site - Contato');
                $message->from('noreply@makroservice.com.br', 'Site Makro Service ');
            });



            $json = 'ok';
            return response()->json($json);
        } catch (\Throwable $th) {
            Log::gravarLog('Erro ao enviar email contato: ' . $th->getMessage(), 'EmailController', 'emailContatoSite(Request $request)');
            $json = $th->getMessage();
            return response()->json($json);
        }
    }

    public function emailTrabalheConosco(Request $request)
    {
        $data = $request->all();
        //dd($data);
        try {
            $titulo = $data['assunto'];
            $conteudo  = $data['mensagem'];
            $nomeComprador = $data['nome'];
            $emailComprador = $data['email'];

            //$to_name = 'Winição';
            //$to_email = 'winifidelis@gmail.com';
            $file = $request->file('fileCurriculo');
            $dataArray = array(
                "assunto" => $data['assunto'],
                "nome" => $data['nome'],
                "email" => $data['email'],
                "telefone" => $data['telefone'],
                "celular" => $data['celular'],
                "estado" => $data['estado'],
                "cidade" => $data['cidade'],
                "mensagem" => $data['mensagem'],
            );

            /*
            Mail::send('emails.teste', $dataArray, function ($message) use ($file, $emailComprador) {
                $message->to('winifidelis@gmail.com', 'Makro Service ')
                    ->subject('Site - Trabalhe conosco')
                    ->attach($file->getRealPath(), array(
                        'as' => $file->getClientOriginalName(),
                        'mime' => $file->getMimeType()
                    ));
                $message->from('noreply@makroservice.com.br', 'Site Makro Service ');
            });
            */

            Mail::send('emails.teste', $dataArray, function ($message) use ($file, $emailComprador) {
                $message->to('rh@makroservice.com.br', 'Makro Service ')
                    ->subject('Site - Trabalhe conosco')
                    ->attach($file->getRealPath(), array(
                        'as' => $file->getClientOriginalName(),
                        'mime' => $file->getMimeType()
                    ));
                $message->from('noreply@makroservice.com.br', 'Site Makro Service ');
            });



            $json = 'ok';
            return response()->json($json);
        } catch (\Throwable $th) {
            Log::gravarLog('Erro ao enviar email contato: ' . $th->getMessage(), 'EmailController', 'emailTrabalheConosco(Request $request)');
            $json = $th->getMessage();
            return response()->json($json);
        }
    }

    static function emailPedidoRealizadoNoSite(Venda $venda)
    {
        //dd($venda);
        //$arrayProdutos = unserialize($venda['listaprodutos']);
        //dd(unserialize($venda['listaprodutos']));
        try {
            $titulo = "Teste";
            $conteudo  = "Teste";
            $nomeComprador = "Teste";
            $emailComprador = "Teste";

            //$to_name = 'Winição';
            //$to_email = 'winifidelis@gmail.com';

            $file = storage_path('app/xmlVendas/' . 'pedido' . $venda->id . '.xml');
            $file2 = storage_path('app/xmlVendas/' . 'pedido_item' . $venda->id . '.xml');

            $dataArray = array(
                "user_id" => $venda['user_id'],
                "listaprodutos" => $venda['listaprodutos'],
                "updated_at" => $venda['updated_at'],
                "created_at" => $venda['created_at'],
                "id" => $venda['id'],
            );

            Mail::send('emails.pedido', $dataArray, function ($message) use ($file, $file2, $emailComprador) {
                $message->to('corporativomakro@gmail.com', 'Makro Service ')
                    ->subject('Site - Pedido')
                    ->attach($file)
                    ->attach($file2);
                $message->from('noreply@makroservice.com.br', 'Site Makro Service ');
            });

            Mail::send('emails.pedido', $dataArray, function ($message) use ($file, $file2, $emailComprador) {
                $message->to('vendas@makroservice.com.br', 'Makro Service ')
                    ->subject('Site - Pedido')
                    ->attach($file)
                    ->attach($file2);
                $message->from('noreply@makroservice.com.br', 'Site Makro Service ');
            });

            Mail::send('emails.pedido', $dataArray, function ($message) use ($file, $file2, $emailComprador) {
                $message->to('ti@makroservice.com.br', 'Makro Service ')
                    ->subject('Site - Pedido')
                    ->attach($file)
                    ->attach($file2);
                $message->from('noreply@makroservice.com.br', 'Site Makro Service ');
            });



            $json = 'ok';
            Log::gravarLog('Email de pedido enviado', 'EmailController', 'emailPedidoRealizadoNoSite(Venda $venda)');
            return response()->json($json);
        } catch (\Throwable $th) {
            $json = $th->getMessage();
            Log::gravarLog('Erro ao enviar pedido: ' . $th->getMessage(), 'EmailController', 'emailPedidoRealizadoNoSite(Venda $venda)');
            return response()->json($json);
        }
    }


    public function emailProjetos(Request $request)
    {
        set_time_limit(0);
        $data = $request->all();
        //dd($data);
        try {
            $titulo = $data['assunto'];
            $conteudo  = $data['mensagem'];
            $nomeComprador = $data['nome'];
            $emailComprador = $data['email'];

            //$file = $request->file('filesArquivosProjeto');
            $arquivos = [];
            $newDir = "arquivosProjetos\\";
            Storage::makeDirectory($newDir);
            if ($request->hasfile('filesArquivosProjeto')) {
                foreach ($request->file('filesArquivosProjeto') as $file) {
                    //$path = Storage::putFile($data['pastaSelecionadaUpload'], $file, $file->getClientOriginalName());
                    $nomeParaGravar = $file->getClientOriginalName();
                    $path = Storage::putFileAs(
                        'arquivosProjetos',
                        $file,
                        $nomeParaGravar
                    );
                    array_push($arquivos, storage_path('app/' . $path));
                }
            }

            $dataArray = array(
                "assunto" => $data['assunto'],
                "nome" => $data['nome'],
                "email" => $data['email'],
                "telefone" => $data['telefone'],
                "celular" => $data['celular'],
                "estado" => $data['estado'],
                "cidade" => $data['cidade'],
                "mensagem" => $data['mensagem'],
            );

            /*
            Mail::send('emails.projeto', $dataArray, function ($message) use ($arquivos, $emailComprador) {
                $message->to('winifidelis@gmail.com', 'Makro Service ')
                    ->subject('Site - Projeto');
                for ($i = 0; $i < count($arquivos); $i++) {
                    $message->attach($arquivos[$i]);
                }
                $message->from('noreply@makroservice.com.br', 'Site Makro Service ');
            });
            */


            Mail::send('emails.projeto', $dataArray, function ($message) use ($arquivos, $emailComprador) {
                $message->to('vendas@makroservice.com.br', 'Makro Service ')
                    ->subject('Site - Projeto');
                for ($i = 0; $i < count($arquivos); $i++) {
                    $message->attach($arquivos[$i]);
                }
                $message->from('noreply@makroservice.com.br', 'Site Makro Service ');
            });




            $json = 'ok';
            return response()->json($json);
        } catch (\Throwable $th) {
            Log::gravarLog('Erro ao enviar email contato: ' . $th->getMessage(), 'EmailController', 'emailTrabalheConosco(Request $request)');
            $json = $th->getMessage();
            return response()->json($json);
        }
    }
}
