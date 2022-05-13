<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Whatsappvendedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class WhatsappvendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administracao.whatsappLista');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracao.whatsappCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validacao = Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'whatsapp' => ['required', 'string', 'max:255'],
            'mensagem' => ['required', 'string', 'max:255'],
        ], [
            'required' => 'O campo :attribute é obrigatório',
        ], [
            'nome' => "Nome",
            'email' => "Email",
            'whatsapp' => "WhatApp",
            'mensagem' => "Mensagem",
        ]);
        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $whatsappVelho = \App\Models\Whatsappvendedores::select("*")
            ->where("bloqueado", "bloqueado", '0')
            ->orderby('posicao', "desc")
            ->first();

        try {
            $whatsapp = new Whatsappvendedores();
            $whatsapp['nome'] = $data['nome'];
            $whatsapp['email'] = $data['email'];
            $whatsapp['whatsapp'] = $data['whatsapp'];
            $whatsapp['mensagem'] = $data['mensagem'];
            $whatsapp['posicao'] = $whatsappVelho['posicao'];
            $whatsapp['clique'] = $whatsappVelho['clique'];
            $whatsapp['bloqueado'] = 0;
            $whatsapp->save();

            Log::gravarLog('Cadastrou o vendedor nome: ' . $whatsapp->nome . ', id: ' . $whatsapp->id, 'WhatsappvendedoresController', '$whatsapp->update();');
            return redirect()->route('whatsappvendedores.index')->with('toastSuccess', 'WhatsApp cadastrado com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao cadastrar o vendedor nome: ' . $data['nome'] . '. Motivo: ' . $th->getMessage(), 'WhatsappvendedoresController', '$whatsapp->update();');
            return redirect()->route('whatsappvendedores.index')->with('toastErro', 'Erro ao cadastrar o Whatsapp!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $whatsapp = Whatsappvendedores::find($id);
        return view('administracao.whatsappEdit', compact('whatsapp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validacao = Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'whatsapp' => ['required', 'string', 'max:255'],
            'mensagem' => ['required', 'string', 'max:255'],
        ], [
            'required' => 'O campo :attribute é obrigatório',
        ], [
            'nome' => "Nome",
            'email' => "Email",
            'whatsapp' => "WhatApp",
            'mensagem' => "Mensagem",
        ]);
        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        try {
            $whatsapp = Whatsappvendedores::find($id);
            $whatsapp['nome'] = $data['nome'];
            $whatsapp['email'] = $data['email'];
            $whatsapp['whatsapp'] = $data['whatsapp'];
            $whatsapp['mensagem'] = $data['mensagem'];
            $whatsapp->update();

            Log::gravarLog('Atualizou o vendedor nome: ' . $whatsapp->nome . ', id: ' . $whatsapp->id, 'WhatsappvendedoresController', '$whatsapp->update();');
            return redirect()->route('whatsappvendedores.index')->with('toastSuccess', 'WhatsApp atualizado com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao atualizar o vendedor nome: ' . $whatsapp->nome . ', id: ' . $whatsapp->id . '. Motivo: ' . $th, 'WhatsappvendedoresController', '$whatsapp->update();');
            return redirect()->route('whatsappvendedores.index')->with('toastErro', 'Erro ao atualizar o Whatsapp!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $whatsapp = Whatsappvendedores::find($id);
        $whatsappSafe = $whatsapp;
        try {
            $whatsapp->delete();
            Log::gravarLog('Excluiu o vendedor nome: ' . $whatsappSafe->nome . ', id: ' . $whatsappSafe->id, 'WhatsappvendedoresController', '$whatsapp->delete();');
            return redirect()->route('whatsappvendedores.index')->with('toastSuccess', 'Whatsapp excluido com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao tentar excluir o vendedor nome: ' . $whatsappSafe->nome . ', id: ' . $whatsapp->id, 'WhatsappvendedoresController', '$whatsapp->delete();');
            return redirect()->route('whatsappvendedores.index')->with('toastErro', 'Erro ao excluir o vendedor!');
        }
    }

    public function mudarPosicao(Request $request)
    {
        $data = $request->all();
        try {
            $whatsapp = Whatsappvendedores::find($data['vendedor_id']);
            $whatsapp->posicao = $whatsapp->posicao + 1;
            $whatsapp->update();
            dd($data['vendedor_id']);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function bloquear(Request $request)
    {
        $data = $request->all();
        try {
            $whatsapp = Whatsappvendedores::find($data['idVendedorB']);
            $whatsapp->bloqueado = 1;
            $whatsapp->update();
            Log::gravarLog('Bloqueou o vendedor nome: ' . $whatsapp->nome . ', id: ' . $whatsapp->id, 'WhatsappvendedoresController', '$whatsapp->update();');
            return redirect()->route('whatsappvendedores.index')->with('toastSuccess', 'WhatsApp bloqueado com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao bloquear o vendedor nome: ' . $whatsapp->nome . ', id: ' . $whatsapp->id, 'WhatsappvendedoresController', '$whatsapp->update();');
            return redirect()->route('whatsappvendedores.index')->with('toastErro', 'Erro ao bloquear WhatsApp!');
        }
    }
    public function desbloquear(Request $request)
    {
        $data = $request->all();
        try {
            $whatsappVelho = \App\Models\Whatsappvendedores::select("*")
                ->where("bloqueado", "bloqueado", '0')
                ->orderby('posicao', "desc")
                ->first();

            $whatsapp = Whatsappvendedores::find($data['idVendedorD']);
            $whatsapp->bloqueado = 0;
            $whatsapp['posicao'] = $whatsappVelho['posicao'];
            $whatsapp->update();
            Log::gravarLog('Desbloqueou o vendedor nome: ' . $whatsapp->nome . ', id: ' . $whatsapp->id, 'WhatsappvendedoresController', '$whatsapp->update();');
            return redirect()->route('whatsappvendedores.index')->with('toastSuccess', 'WhatsApp desbloqueado com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao desbloquear o vendedor id: ' . $data['idVendedorD'], 'WhatsappvendedoresController', '$whatsapp->update();');
            return redirect()->route('whatsappvendedores.index')->with('toastErro', 'Erro ao desbloquear WhatsApp!');
        }
    }

    public function listawhatsappvendedoeres_modal(Request $request)
    {
        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        $user = Auth::user();

        //dd($user->clinicauser['clinica_id']);

        // Total records
        $totalRecords = Whatsappvendedores::select('count(*) as allcount')
            ->count();
        $totalRecordswithFilter = Whatsappvendedores::select('count(*) as allcount')
            ->where('whatsappvendedores.nome', 'like', '%' . $searchValue . '%')
            ->count();

        //dd($totalRecords, $totalRecordswithFilter);

        // Fetch records

        $records = Whatsappvendedores::select('*')
            ->where('whatsappvendedores.nome', 'like', '%' . $searchValue . '%')
            ->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $sno = $start + 1;
        foreach ($records as $record) {
            $id = $record->id;
            $nome = $record->nome;
            $email = $record->email;
            $whatsapp = $record->whatsapp;
            $mensagem = $record->mensagem;
            $posicao = $record->posicao;
            $clique = $record->clique;
            $bloqueado = $record->bloqueado;

            //abaixo funciona
            //$record->escritorio
            //$record->clientes->pessoas['nome']

            $seBloqueio = "";
            if ($bloqueado) {
                $seBloqueio = "<a href='javascript:desbloquearVendedor(" . $id . ")' type='button' class='btn bg-gradient-warning'>Desbloquear</a>";
            } else {
                $seBloqueio = "<a href='javascript:bloquearVendedor(" . $id . ")' type='button' class='btn bg-gradient-danger'>Bloquear</a>";
            }

            $data_arr[] = array(
                "nome" => $nome,
                "whatsapp" => $whatsapp,
                "email" => $email,
                "posicao" => $posicao,
                "status" => $bloqueado,
                "acoes" => "
                " . "
                <center>
                <a href='" . route('whatsappvendedores.edit', $id) . "' type='button' class='btn bg-gradient-info'>Editar dados</a>
                " . $seBloqueio . "
                </center>
                "
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }
}
