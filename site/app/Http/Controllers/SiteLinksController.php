<?php

namespace App\Http\Controllers;

use App\Models\Maisvendidos;
use App\Models\Produto;
use App\Models\Produtodepartamento;
use App\Models\Promocoes;
use App\Models\UserLinha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SiteLinksController extends Controller
{
    public function inicio()
    {
        $produtosOfertasEspeciais = Produto::select("*")
            ->inRandomOrder()
            ->limit(4)
            ->get();
        //dd($produtosOfertasEspeciais[0]->produtoFoto[0]->endereco);
        //dd($produtosOfertasEspeciais[0]);

        $novosProdutosTodos  = Produto::select("*")
            ->latest()
            ->limit(12)
            ->get();
        //dd($novosProdutosTodos[0]->produtoEsporte[0]->esporte);

        $linhas = UserLinha::select('user_id')->get();
        dd($linhas);


        return view('pages.site.home', compact('produtosOfertasEspeciais', 'novosProdutosTodos'));
    }

    public function produto()
    {
        return view('pages.site.produto');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
