<?php

namespace App\Http\Controllers;

use App\Models\Aliasbusca;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AliasbuscaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administracao.aliasLista');
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
        $data = $request->all();
        $validacao = Validator::make($data, [
            'busca' => ['required', 'string', 'max:255'],
            'add' => ['required', 'string', 'max:255'],
        ], [
            'required' => 'O campo :attribute é obrigatório',
        ], [
            'busca' => "Palavra a ser buscada",
            'add' => "Palavra a ser adicionada a busca",
        ]);
        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        try {
            $alias = new Aliasbusca();
            $alias['busca'] = $data['busca'];
            $alias['add'] = $data['add'];
            $alias->save();

            Log::gravarLog('Cadastrou novo alias: ' . $alias->nome . ', id: ' . $alias->id, 'AliasbuscaController', 'store(Request $request)');
            return redirect()->route('aliasbusca.index')->with('toastSuccess', 'Alias cadastrado com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao cadastrar alias' . $data['busca'] . ', : ' . $data['add'] . '. Motivo: ' . $th->getMessage(), 'AliasbuscaController', 'store(Request $request)');
            return redirect()->route('aliasbusca.index')->with('toastErro', 'Erro ao cadastrar o alias!');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $data = $request->all();
        $alias = Aliasbusca::find($data['id_alias']);
        $aliasSafe = $alias;
        try {
            $alias->delete();
            Log::gravarLog('Excluiu o alais busca: ' . $alias->busca . ', id: ' . $alias->id, 'AliasbuscaController', 'destroy(Request $request, $id)');
            return redirect()->route('aliasbusca.index')->with('toastSuccess', 'Alias excluido com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao tentar excluir o alias busca: ' . $alias->busca . ', id: ' . $alias->id, 'AliasbuscaController', 'destroy(Request $request, $id)');
            return redirect()->route('aliasbusca.index')->with('toastErro', 'Erro ao excluir o alias!');
        }
    }

    public function listaaliasBusca_modal(Request $request)
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
        $totalRecords = Aliasbusca::select('count(*) as allcount')
            ->count();
        $totalRecordswithFilter = Aliasbusca::select('count(*) as allcount')
            ->where('aliasbuscas.busca', 'like', '%' . $searchValue . '%')
            ->count();

        //dd($totalRecords, $totalRecordswithFilter);

        // Fetch records

        $records = Aliasbusca::select('*')
            ->where('aliasbuscas.busca', 'like', '%' . $searchValue . '%')
            ->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        foreach ($records as $record) {
            $id = $record->id;
            $busca = $record->busca;
            $add = $record->add;

            $data_arr[] = array(
                "busca" => $busca,
                "add" => $add,
                "acoes" => "
                " . "
                <center>
                <a href='javascript:excluirAlias(".$id.")' type='button' class='btn bg-gradient-danger'>Excluir</a>
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
