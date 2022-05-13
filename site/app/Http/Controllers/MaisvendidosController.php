<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Maisvendidos;
use Illuminate\Http\Request;

class MaisvendidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maisVendidos = Maisvendidos::select(
            "maisvendidos.id",
            "produtos.descricao",
            "produtos.departamento",
            "produtos.nomeecommerce"
        )
            ->join('produtos', 'produtos.id', '=', 'maisvendidos.produto_id')
            ->get();



        return view('administracao.maisvendidosLista', compact('maisVendidos'));
    }

    public function adicionarProduto()
    {
    }

    public function removerProduto()
    {
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

    public function criarProdutoMaisVendido(Request $request)
    {
        $data = $request->all();
        try {
            //$maisvendido = new Maisvendidos();
            //$maisvendido['produto_id'] = $data['produto_id'];
            //$maisvendido->save();
            $maisvendido = Maisvendidos::firstOrCreate([
                'produto_id' => $data['produto_id']
            ]);
            Log::gravarLog('Adicionou produto mais vendido:' . $data['produto_id'], 'MaisvendidosController', '$maisvendido->save();');
            return response()->json('ok');
        } catch (\Throwable $th) {
            return response()->json('erro');
        }
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
        $data = $request->all();
        
        $maisvendido = Maisvendidos::find($data['id_maisvendido']);
        
        try {
            $maisvendido->delete();
            Log::gravarLog('Excluiu item mais vendido', 'MaisvendidosController', 'destroy(Request $request, $id)');
            return redirect()->route('maisvendidos.index')->with('toastSuccess', 'Mais vendido excluido com sucesso!');
        } catch (\Throwable $th) {
            Log::gravarLog('ERRO ao tentar excluir item mais vendido '.$th->getMessage(), 'MaisvendidosController', 'destroy(Request $request, $id)');
            return redirect()->route('maisvendidos.index')->with('toastErro', 'Erro ao excluir o item mais vendido!');
        }
    }
}
