<?php

namespace App\Http\Controllers;

use App\Models\Emailsubscribe;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('administracao.usuariosLista', compact('usuarios'));
    }

    public function emailsinscritos()
    {
        $emails = Emailsubscribe::all();
        return view('administracao.usuariosEmailsInscritos', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::find($id);
        return view('administracao.usuariosEdit', compact('user'));
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
        //
    }

    public function atualizarDadosDeAcesso(Request $request, $id)
    {
        $data = $request->all();
        $user = User::find($id);

        try {

            if (isset($data['telabackend']) && $data['telabackend'] == "on") {
                $data['telabackend'] = 1;
            } else {
                $data['telabackend'] = 0;
            }
            if (isset($data['enviarxml']) && $data['enviarxml'] == "on") {
                $data['enviarxml'] = 1;
            } else {
                $data['enviarxml'] = 0;
            }
            if (isset($data['popupprincipal']) && $data['popupprincipal'] == "on") {
                $data['popupprincipal'] = 1;
            } else {
                $data['popupprincipal'] = 0;
            }
            if (isset($data['administrador']) && $data['administrador'] == "on") {
                $data['administrador'] = 1;
            } else {
                $data['administrador'] = 0;
            }

            $user['telabackend'] = $data['telabackend'];
            $user['enviarxml'] = $data['enviarxml'];
            $user['popupprincipal'] = $data['popupprincipal'];
            $user['administrador'] = $data['administrador'];
            $user->update();

            Log::gravarLog('Atualizou dados de acesso: ' . $user->name . ', id: ' . $user->id, 'UserController', 'atualizarDadosDeAcesso(Request $request, $id)');
            return redirect()->route('usuarios.index')->with('toastSuccess', 'Usuários atualizado com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao atualizar o usuário nome: ' . $user->name . ', id: ' . $user->id . '. Motivo: ' . $th, 'UserController', 'atualizarDadosDeAcesso(Request $request, $id)');
            return redirect()->route('usuarios.index')->with('toastErro', 'Erro ao atualizar o usuário!');
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
        //
    }

    public function atualizaSenha(Request $request)
    {
        //
        //dd('trocar senha');
        //return redirect()->back()->withErrors(['message'=>'Sua senha anterior está incorreta'])->withInput();
        //return redirect()->route('home')->with('updateUser', 'Usuário atualizado com sucesso!');

        $data = $request->all();
        //dd($data);
        $userLogado = Auth::user();

        $user = User::find($data['id_user']);

        $validacao = Validator::make($data, [
            'old_password' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            "password" => "Senha",
            "old_password" => "Senha",
        ]);

        //ENTREI AQUI QUERO MODIFICAR A SENHA
        if (!Hash::check($request->get('old_password'), Auth::user()->password)) {
            return redirect()->back()->with(['message' => 'Sua senha anterior está incorreta', 'cor' => 'danger'])->withInput();
        }

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $data['password'] = bcrypt($data['password']);
        $user['password'] = $data['password'];

        $user->update();

        Log::gravarLog('Modificou a senha', 'UserController', 'atualizaSenha(Request $request)');

        return redirect()->route('user.dashuser')->with(['message' => 'A sua senha foi modificada.', 'cor' => 'success']);
    }

    public function atualizarDados(Request $request)
    {
        $data = $request->all();
        $userLogado = Auth::user();

        $user = User::find($data['id_user']);
        $userDadosAntigos = serialize($user);

        $validacao = Validator::make($data, [
            'name' => ['required'],
        ], [
            "name" => "Nome",
        ]);

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $user["name"] = $data['name'];
        $user["cep"] = $data['cep'];
        $user["endereco"] = $data['endereco'];
        $user["estado"] = $data['estado'];
        $user["cidade"] = $data['cidade'];
        $user["bairro"] = $data['bairro'];
        $user["rua"] = $data['rua'];
        $user["complemento"] = $data['complemento'];

        $user->update();

        Log::gravarLog('Atualizou dados. Dados antigos:' . $userDadosAntigos, 'UserController', 'atualizarDados(Request $request)');

        return redirect()->route('user.dashuser')->with(['message' => 'Dados atualizados com sucesso.', 'cor' => 'success']);
    }

    public function listausuarios_modal(Request $request)
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
        $totalRecords = User::select('count(*) as allcount')
            ->count();
        $totalRecordswithFilter = User::select('count(*) as allcount')
            ->where('users.name', 'like', '%' . $searchValue . '%')
            ->count();

        //dd($totalRecords, $totalRecordswithFilter);

        // Fetch records

        $records = User::select('*')
            ->where('users.name', 'like', '%' . $searchValue . '%')
            ->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $sno = $start + 1;
        foreach ($records as $record) {
            $id = $record->id;
            $name = $record->name;
            $email = $record->email;

            //abaixo funciona
            //$record->escritorio
            //$record->clientes->pessoas['name']

            $data_arr[] = array(
                "name" => $name,
                "email" => $email,
                "acoes" => "
                " . "
                <center>
                <a href='" . route('usuarios.edit', $id) . "' type='button' class='btn bg-gradient-info'>Editar acesso</a>
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

    public function listausuariosemail_modal(Request $request)
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
        $totalRecords = Emailsubscribe::select('count(*) as allcount')
            ->count();
        $totalRecordswithFilter = Emailsubscribe::select('count(*) as allcount')
            ->where('emailsubscribes.email', 'like', '%' . $searchValue . '%')
            ->count();

        //dd($totalRecords, $totalRecordswithFilter);

        // Fetch records

        $records = Emailsubscribe::select('*')
            ->where('emailsubscribes.email', 'like', '%' . $searchValue . '%')
            ->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $sno = $start + 1;
        foreach ($records as $record) {
            $id = $record->id;
            $email = $record->email;
            $created_at = $record->created_at;

            //abaixo funciona
            //$record->escritorio
            //$record->clientes->pessoas['name']

            $data_arr[] = array(
                "email" => $email,
                "created_at" => date('d/m/Y H:i:s', strtotime($created_at))
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
