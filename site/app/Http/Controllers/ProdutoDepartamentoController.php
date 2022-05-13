<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Produtodepartamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProdutoDepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administracao.departamentoLista');
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
        $departamento = Produtodepartamento::find($id);
        return view('administracao.departamentoEdit', compact('departamento'));
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
        $departamento = Produtodepartamento::find($id);
        $data = $request->all();

        try {
            if ($request->hasfile('imagembig')) {
                $file = $request->file('imagembig');
                $nomeParaGravar = $file->getClientOriginalName();
                $extension = $file->extension();
                if (
                    $extension == "gif" ||
                    $extension == "png" ||
                    $extension == "bmp" ||
                    $extension == "tiff" ||
                    $extension == "sgv" ||
                    $extension == "jpg" ||
                    $extension == "jpeg"
                ) {
                    /*
                    if (Storage::exists($departamento['imagembig'])) {
                        Storage::delete($departamento['imagembig']);
                    }
                    */
                    $path = Storage::disk('disk_makro')->putFileAs(
                        'catbig/',
                        $file,
                        $departamento->id . "." . $extension
                    );
                    $departamento['imagembig'] = $departamento->id . "." . $extension;
                    Log::gravarLog('Enviou uma imagembig: ' . $nomeParaGravar, 'ProdutoDepartamentoController', '$path = Storage::putFileAs();');
                }
            }
            if ($request->hasfile('imagemmini')) {
                $file = $request->file('imagemmini');
                $nomeParaGravar = $file->getClientOriginalName();
                $extension = $file->extension();
                if (
                    $extension == "gif" ||
                    $extension == "png" ||
                    $extension == "bmp" ||
                    $extension == "tiff" ||
                    $extension == "sgv" ||
                    $extension == "jpg" ||
                    $extension == "jpeg"
                ) {
                    /*
                    if (Storage::exists($departamento['imagemmini'])) {
                        Storage::delete($departamento['imagemmini']);
                    }
                    */
                    $path = Storage::disk('disk_makro')->putFileAs(
                        'catmini/',
                        $file,
                        $departamento->id . "." . $extension
                    );
                    $departamento['imagemmini'] = $departamento->id . "." . $extension;
                    Log::gravarLog('Enviou uma imagemmini: ' . $nomeParaGravar, 'ProdutoDepartamentoController', '$path = Storage::putFileAs();');
                }
            }
            $departamento['descricaosite'] = $data['descricaosite'];
            $departamento->update();

            Log::gravarLog('Atualizou o departamento: ' . $departamento->descricaosite . ', id: ' . $departamento->id, 'ProdutoDepartamentoController', '$departamento->update();');
            return redirect()->route('departamentoproduto.index')->with('toastSuccess', 'Departamento atualizado com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao atualizar o departamento nome: ' . $departamento->descricaosite . ', id: ' . $departamento->id . '. Motivo: ' . $th, 'ProdutoDepartamentoController', '$departamento->update();');
            return redirect()->route('departamentoproduto.index')->with('toastErro', 'Erro ao atualizar o departamento!');
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

    public function listadepartamentos_modal(Request $request)
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
        $totalRecords = Produtodepartamento::select('count(*) as allcount')
            ->count();
        $totalRecordswithFilter = Produtodepartamento::select('count(*) as allcount')
            ->where('produtodepartamentos.descricao', 'like', '%' . $searchValue . '%')
            ->count();

        //dd($totalRecords, $totalRecordswithFilter);

        // Fetch records

        $records = Produtodepartamento::select('*')
            ->where('produtodepartamentos.descricao', 'like', '%' . $searchValue . '%')
            ->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $sno = $start + 1;
        foreach ($records as $record) {
            $id = $record->id;
            $descricao = $record->descricao;
            $descricaosite = $record->descricaosite;
            $habilitado = $record->habilitado;
            $codigo = $record->codigo;
            $imagemmini = $record->imagemmini;
            $imagembig = $record->imagembig;

            //abaixo funciona
            //$record->escritorio
            //$record->clientes->pessoas['nome']

            if ($habilitado == 1) {
                $habilitado = "sim";
            } else {
                $habilitado = "não";
            }

            $data_arr[] = array(

                "descricao" => $descricao,
                "descricaosite" => $descricaosite,
                "habilitado" => $habilitado,
                "acoes" => "
                " . "
                <center>
                <a href='" . route('departamentoproduto.edit', $id) . "' type='button' class='btn bg-gradient-info'>Editar dados</a>
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
