<?php

namespace App\Http\Controllers;

use App\Models\ComentariosHome;
use App\Models\Maisvendidos;
use App\Models\PopupPrincipal;
use App\Models\Produto;
use App\Models\Produtodepartamento;
use App\Models\ProdutoMaisVendido;
use App\Models\ProdutoUserLinha;
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

        $linhas = UserLinha::select('id')
            ->where('ativa', '=', 1)
            ->get()
            ->toArray();
        //Obtenhos os produtos das linhas
        //pode ser que uma linha esteja desativada, então eu usei esse wherein
        $produtosLinhas = ProdutoUserLinha::select('*')
            ->whereIn('userlinha_id', $linhas)
            ->latest()
            ->limit(12)
            //->orderBy('id', 'DESC')
            ->get();
        //dd($linhas, $produtosLinhas[0]->produto);
        //dd($linhas, $produtosLinhas[0]->userlinha);
        //dd($linhas, $produtosLinhas[0]->userlinha->user);
        //dd($produtosLinhas);

        $produtosMaisVendidos = ProdutoMaisVendido::select('*')
            ->inRandomOrder()
            ->limit(8)
            ->get();
        //dd($produtosMaisVendidos);

        $popupPrincipal = PopupPrincipal::latest()
            ->first();

        $comentarios = ComentariosHome::select('*')
            ->inRandomOrder()
            ->limit(3)
            ->get();
        //dd($produtosMaisVendidos);

        return view(
            'pages.site.home',
            compact(
                'produtosOfertasEspeciais',
                'novosProdutosTodos',
                'produtosLinhas',
                'popupPrincipal',
                'produtosMaisVendidos',
                'comentarios'
            )
        );
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
