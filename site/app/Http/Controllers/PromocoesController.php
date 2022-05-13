<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Produto;
use App\Models\Promocoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PromocoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administracao.promocoesLista');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracao.promocoesCreate');
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
        //dd($data);
        $validacao = Validator::make($data, [
            'get_id_produto' => ['required'],
            'descricao' => ['required', 'string', 'max:255'],
            'imagem' => ['required'],
        ], [
            'required' => 'O campo :attribute é obrigatório',
        ], [
            'get_id_produto' => "Selecionar um produto",
            'descricao' => "Descrição",
            'imagem' => "Imagem",
        ]);
        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $produto = Produto::find($data['get_id_produto']);
        $promocao = new Promocoes();

        try {
            if ($request->hasfile('imagem')) {
                $file = $request->file('imagem');
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
                    $path = Storage::disk('disk_makro')->putFileAs(
                        'promo/',
                        $file,
                        $produto->id . "." . $extension
                    );
                    $promocao['imagem'] = $produto->id . "." . $extension;
                    Log::gravarLog('Enviou uma imagem: ' . $promocao['imagem'], 'PromocoesController', '$path = Storage::putFileAs();');
                }
            }

            $promocao['descricao'] = $data['descricao'];
            $promocao['produto_id'] = $data['get_id_produto'];
            $promocao->save();

            Log::gravarLog('Cadastrou promoção: ' . $promocao['descricao'] . ', id: ' . $promocao->id, 'PromocoesController', '$promocao->save();');
            return redirect()->route('promocoes.index')->with('toastSuccess', 'Promoção cadastrada com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO cadastrar promoção: ' . $data['descricao'] . ', id: ' . $data['get_id_produto'] . '. Motivo: ' . $th, 'PromocoesController', '$promocao->save();');
            return redirect()->route('promocoes.index')->with('toastErro', 'Erro ao cadastrar promoção!');
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
        $promocao = Promocoes::find($id);
        return view('administracao.promocoesEdit', compact('promocao'));
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
        //dd($data);
        $validacao = Validator::make($data, [
            'get_id_produto' => ['required'],
            'descricao' => ['required', 'string', 'max:255'],
        ], [
            'required' => 'O campo :attribute é obrigatório',
        ], [
            'get_id_produto' => "Selecionar um produto",
            'descricao' => "Descrição",
        ]);
        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $produto = Produto::find($data['get_id_produto']);
        $promocao = Promocoes::find($id);

        try {
            if ($request->hasfile('imagem')) {
                $file = $request->file('imagem');
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
                    $path = Storage::disk('disk_makro')->putFileAs(
                        'promo/',
                        $file,
                        $produto->id . "." . $extension
                    );
                    $promocao['imagem'] = $produto->id . "." . $extension;
                    Log::gravarLog('Enviou uma imagem: ' . $promocao['imagem'], 'PromocoesController', '$path = Storage::putFileAs();');
                }
            }

            $promocao['descricao'] = $data['descricao'];
            $promocao['produto_id'] = $data['get_id_produto'];
            $promocao->update();

            Log::gravarLog('Atualizou promoção: ' . $promocao['descricao'] . ', id: ' . $promocao->id, 'PromocoesController', '$promocao->update();');
            return redirect()->route('promocoes.index')->with('toastSuccess', 'Promoção atualizada com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO atualizar promoção: ' . $data['descricao'] . ', id: ' . $data['get_id_produto'] . '. Motivo: ' . $th, 'PromocoesController', '$promocao->update();');
            return redirect()->route('promocoes.index')->with('toastErro', 'Erro ao atualizar promoção!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = $request->all();
        $promocao = Promocoes::find($data['idPromocao']);

        try {
            Storage::disk('disk_makro')->delete('promo/' . $promocao->imagem);
            $promocao->delete();

            Log::gravarLog('Excluiu promoção: ' . $promocao['descricao'] . ', id: ' . $promocao->id, 'PromocoesController', '$promocao->delete();');
            return redirect()->route('promocoes.index')->with('toastSuccess', 'Promoção excluída com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO exclur promoção: ' . $data['descricao'] . ', id: ' . $data['get_id_produto'] . '. Motivo: ' . $th, 'PromocoesController', '$promocao->delete();');
            return redirect()->route('promocoes.index')->with('toastErro', 'Erro ao excluir promoção!');
        }
    }

    public function promocoes_modal(Request $request)
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
        $totalRecords = Promocoes::select('count(*) as allcount')
            ->count();
        $totalRecordswithFilter = Promocoes::select('count(*) as allcount')
            ->where('promocoes.descricao', 'like', '%' . $searchValue . '%')
            ->count();

        //dd($totalRecords, $totalRecordswithFilter);

        // Fetch records

        $records = Promocoes::select('*')
            ->where('promocoes.descricao', 'like', '%' . $searchValue . '%')
            ->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $sno = $start + 1;
        foreach ($records as $record) {
            $id = $record->id;
            $descricao = $record->descricao;

            //abaixo funciona
            //$record->escritorio
            //$record->clientes->pessoas['nome']

            $data_arr[] = array(

                "descricao" => $descricao,
                "acoes" => "
                " . "
                <center>
                <a href='" . route('promocoes.edit', $id) . "' type='button' class='btn bg-gradient-info'>Editar dados</a>
                <a href='javascript:excluirPromocao($id)' type='button' class='btn bg-danger'>Excluir</a>
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
