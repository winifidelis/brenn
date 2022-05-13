<?php

namespace App\Http\Controllers;

use App\Models\Maisvendidos;
use App\Models\Produto;
use App\Models\Produtodepartamento;
use App\Models\Promocoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SiteLinksController extends Controller
{
    public function inicio()
    {
        $promocoes = Promocoes::select("*")
            ->inRandomOrder()
            ->limit(12)
            ->get();

        for ($i = 0; $i < count($promocoes); $i++) {
            $imagemExiste = Storage::disk('disk_makro')->exists("promo/" . strtolower($promocoes[$i]['imagem']));
            if ($imagemExiste) {
                //$promocoes[$i]['imagem'] = base64_encode(Storage::get("promo/" . strtolower($promocoes[$i]['imagem'])));
                $promocoes[$i]['imagem'] = "promo/" . strtolower($promocoes[$i]['imagem']);
            } else {
                //$promocoes[$i]['imagem'] = base64_encode(Storage::get("promo/produto_default.jpg"));
                $promocoes[$i]['imagem'] = "promo/produto_default.jpg";
            }
        }

        $maisVendidos = Maisvendidos::select(
            "produtos.id",
            "produtos.linkdescricao",
            "produtos.descricao",
            "produtos.departamento",
            "produtos.codigo_departamento",
            "produtos.nomeecommerce",
            "produtos.secao",
            "produtos.marca",
            "produtos.dirfotoprod",
        )
            ->join('produtos', 'produtos.id', '=', 'maisvendidos.produto_id')
            ->inRandomOrder()
            ->limit(6)
            ->get();

        for ($i = 0; $i < count($maisVendidos); $i++) {
            $x = explode("\\", $maisVendidos[$i]['dirfotoprod']);
            $imagemExiste = Storage::disk('disk_makro')->exists("imagens\\normais\\" . strtolower($x[count($x) - 1]));
            if ($imagemExiste && count($x) != 0 && $x[count($x) - 1] != "" && $x[count($x) - 1] != null) {
                //$maisVendidos[$i]['dirfotoprod'] = base64_encode(Storage::get("imagens\\normais\\" . strtolower($x[count($x) - 1])));
                $maisVendidos[$i]['dirfotoprod'] = "imagens\\normais\\" . strtolower($x[count($x) - 1]);
            } else {
                //$maisVendidos[$i]['dirfotoprod'] = base64_encode(Storage::get("imagens\\normais\\produto_default.jpg"));
                $maisVendidos[$i]['dirfotoprod'] = "imagens\\normais\\produto_default.jpg";
            }
        }

        return view('welcome', compact('promocoes', 'maisVendidos'));
    }

    public function home()
    {
        $promocoes = Promocoes::select("*")
            ->inRandomOrder()
            ->limit(12)
            ->get();

        for ($i = 0; $i < count($promocoes); $i++) {
            $imagemExiste = Storage::disk('disk_makro')->exists("promo/" . strtolower($promocoes[$i]['imagem']));
            if ($imagemExiste) {
                //$promocoes[$i]['imagem'] = base64_encode(Storage::get("promo/" . strtolower($promocoes[$i]['imagem'])));
                $promocoes[$i]['imagem'] = "promo/" . strtolower($promocoes[$i]['imagem']);
            } else {
                //$promocoes[$i]['imagem'] = base64_encode(Storage::get("promo/produto_default.jpg"));
                $promocoes[$i]['imagem'] = "promo/produto_default.jpg";
            }
        }

        $maisVendidos = Maisvendidos::select(
            "produtos.id",
            "produtos.descricao",
            "produtos.departamento",
            "produtos.codigo_departamento",
            "produtos.nomeecommerce",
            "produtos.secao",
            "produtos.marca",
            "produtos.dirfotoprod",
        )
            ->join('produtos', 'produtos.id', '=', 'maisvendidos.produto_id')
            ->inRandomOrder()
            ->limit(6)
            ->get();

        for ($i = 0; $i < count($maisVendidos); $i++) {
            $x = explode("\\", $maisVendidos[$i]['dirfotoprod']);
            $imagemExiste = Storage::disk('disk_makro')->exists("imagens\\normais\\" . strtolower($x[count($x) - 1]));
            if ($imagemExiste && count($x) != 0 && $x[count($x) - 1] != "" && $x[count($x) - 1] != null) {
                //$maisVendidos[$i]['dirfotoprod'] = base64_encode(Storage::get("imagens\\normais\\" . strtolower($x[count($x) - 1])));
                $maisVendidos[$i]['dirfotoprod'] = "imagens\\normais\\" . strtolower($x[count($x) - 1]);
            } else {
                //$maisVendidos[$i]['dirfotoprod'] = base64_encode(Storage::get("imagens\\normais\\produto_default.jpg"));
                $maisVendidos[$i]['dirfotoprod'] = "imagens\\normais\\produto_default.jpg";
            }
        }

        return view('welcome', compact('promocoes', 'maisVendidos'));
    }

    public function quemsomos()
    {
        return view('quemsomos');
    }

    public function nossosservicos()
    {
        return view('nossosservicos');
    }

    public function formardepagamento()
    {
        return view('formasdepagamento');
    }

    public function trocaedevolucao()
    {
        return view('trocaedevolucao');
    }

    public function engenharia()
    {
        return view('engenharia');
    }

    public function projetos()
    {
        return view('projetos');
    }

    public function contato()
    {
        return view('contato');
    }

    public function trabalheconosco()
    {
        return view('trabalheconosco');
    }

    public function dashuser()
    {
        $user = Auth::user();
        $ultimoPedido = $user->vendas;
        $listaUltimoPedido = '';
        if (count($ultimoPedido) != 0) {
            $ultimoPedido = $ultimoPedido[count($ultimoPedido) - 1];
            $listaUltimoPedido = unserialize($ultimoPedido->listaprodutos);
        }
        return view('dashuser', compact('ultimoPedido', 'listaUltimoPedido'));
    }

    public function dashuserpedidos()
    {
        $user = Auth::user();
        $ultimoPedido = $user->vendas;
        $pedidos = $user->vendas;
        for ($i = 0; $i < count($pedidos); $i++) {
            $pedidos[$i]['listaprodutos'] = unserialize($pedidos[$i]['listaprodutos']);
        }
        //dd($pedidos);
        $listaUltimoPedido = '';
        if (count($ultimoPedido) == 0) {
            return redirect()->route('user.dashuser');
        } else {
            $ultimoPedido = $ultimoPedido[count($ultimoPedido) - 1];
        }
        return view('dashuserpedidos', compact('ultimoPedido', 'pedidos'));
    }

    public function dashusertrocarsenha()
    {
        $user = Auth::user();
        return view('dashusertrocarsenha', compact('user'));
    }

    public function dashusertrocardados()
    {
        $user = Auth::user();
        return view('dashusertrocardados', compact('user'));
    }

    //a função abaixo é para limpar sempre que eu escolher outro departamento no menu
    public function verpartamento(Request $request, $id)
    {
        $request->session()->put('listagemprodutoordemsecao', [null]);
        $request->session()->put('listagemprodutoordemmarca', [null]);
        $request->session()->put('listagemprodutoordem', [null]);
        $request->session()->put('listagemprodutoquantidade', [null]);

        return $this->showdepartamento($request, $id);
    }

    public function showdepartamento(Request $request, $id)
    {
        $listagemprodutoordemsecao = "";
        if (Session::has('listagemprodutoordemsecao')) {
            $ord = $request->session()->get('listagemprodutoordemsecao');
            $listagemprodutoordemsecao = $ord[0];
        }
        $listagemprodutoordemmarca = "";
        if (Session::has('listagemprodutoordemmarca')) {
            $ord = $request->session()->get('listagemprodutoordemmarca');
            $listagemprodutoordemmarca = $ord[0];
        }

        $listagemprodutoordem = "alfabetica";
        if (Session::has('listagemprodutoordem')) {
            $ord = $request->session()->get('listagemprodutoordem');
            $listagemprodutoordem = $ord[0];
        }
        $listagemprodutoquantidade = 12;
        if (Session::has('listagemprodutoquantidade')) {
            $qtd = $request->session()->get('listagemprodutoquantidade');
            $listagemprodutoquantidade = $qtd[0];
        }

        $produtodepartamento = Produtodepartamento::find($id);
        if ($produtodepartamento == null) {
            //se for NULL significa que feio de um link com o codigo do departamento
            //então tenho que buscar o departamento pelo codigo
            $produtodepartamento = Produtodepartamento::select("*")
                ->where("codigo", "=", $id)
                ->first();
        }
        $produtosdepartamento = null;

        //dd($produtodepartamento);

        $produtosdepartamento = Produto::select(
            "produtos.id",
            "produtos.linkdescricao",
            "produtos.descricao",
            "produtos.departamento",
            "produtos.nomeecommerce",
            "produtos.secao",
            "produtos.marca",
            "produtos.dirfotoprod",
            'produtodepartamentos.descricaosite'
        )
            ->join('produtodepartamentos', 'produtos.departamento', '=', 'produtodepartamentos.descricao')
            ->Departamento($produtodepartamento->codigo)
            ->MarcaLink($listagemprodutoordemmarca)
            ->SecaoLink($listagemprodutoordemsecao)
            ->NomeEcommerce('')
            ->where("produtos.foralinha", "!=", "FL")
            ->OrdenarLista($listagemprodutoordem)
            //->toSql();
            ->paginate($listagemprodutoquantidade);
        //dd($produtosbusca);


        $marcas = Produto::select("marca")
            ->Departamento($produtodepartamento->codigo)
            ->NomeEcommerce('')
            ->where("foralinha", "!=", "FL")
            ->orderBy('marca', 'asc')
            ->distinct()
            ->get();
        $secoes = Produto::select("secao")
            ->Departamento($produtodepartamento->codigo)
            ->NomeEcommerce('')
            ->where("foralinha", "!=", "FL")
            ->orderBy('marca', 'asc')
            ->distinct()
            ->get();



        for ($i = 0; $i < count($produtosdepartamento); $i++) {
            $x = explode("\\", $produtosdepartamento[$i]['dirfotoprod']);
            $imagemExiste = Storage::disk('disk_makro')->exists("imagens\\normais\\" . strtolower($x[count($x) - 1]));
            if ($imagemExiste && count($x) != 0 && $x[count($x) - 1] != "" && $x[count($x) - 1] != null) {
                //$produtosdepartamento[$i]['dirfotoprod'] = base64_encode(Storage::get("imagens\\normais\\" . strtolower($x[count($x) - 1])));
                $produtosdepartamento[$i]['dirfotoprod'] = "imagens\\normais\\" . strtolower($x[count($x) - 1]);
            } else {
                //$produtosdepartamento[$i]['dirfotoprod'] = base64_encode(Storage::get("imagens\\normais\\produto_default.jpg"));
                $produtosdepartamento[$i]['dirfotoprod'] = "imagens\\normais\\produto_default.jpg";
            }
        }

        return view('departamento', compact('produtodepartamento', 'produtosdepartamento', 'listagemprodutoquantidade', 'listagemprodutoordem', 'marcas', 'secoes', 'listagemprodutoordemsecao', 'listagemprodutoordemmarca'));
    }

    public function modificarlistagemproduto(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $request->session()->put('listagemprodutoquantidade', [
            $data['listagemprodutoquantidade']
        ]);
        $request->session()->put('listagemprodutoordem', [
            $data['listagemprodutoordem']
        ]);

        $request->session()->put('listagemprodutoordemdepartamento', [
            $data['getPorDepartamento']
        ]);
        $request->session()->put('listagemprodutoordemmarca', [
            $data['getPorMarca']
        ]);

        //a seção abaixo não é utilizada na busca, então ela estavam e dando problemas de existencia
        //então adicionei este if
        //o else abaixo é para zerar total a seção caso ela tenha não tenah nada ou não exista
        if (isset($data['getPorSecao'])) {
            $request->session()->put('listagemprodutoordemsecao', [
                $data['getPorSecao']
            ]);
        } else {
            $request->session()->put('listagemprodutoordemsecao', [
                null
            ]);
        }


        if ($data['tipolista'] == "dep") {
            return redirect()->route('showdepartamento', $data['departamento_id']);
        } else if ($data['tipolista'] == "busca") {
            return redirect()->route('buscaproduto');
        }
    }





    public function buscaproduto(Request $request)
    {
        $listagemprodutoordemdepartamento = "";
        if (Session::has('listagemprodutoordemdepartamento')) {
            $ord = $request->session()->get('listagemprodutoordemdepartamento');
            $listagemprodutoordemdepartamento = $ord[0];
        }
        $listagemprodutoordemmarca = "";
        if (Session::has('listagemprodutoordemmarca')) {
            $ord = $request->session()->get('listagemprodutoordemmarca');
            $listagemprodutoordemmarca = $ord[0];
        }

        $listagemprodutoordem = "az";
        if (Session::has('listagemprodutoordem')) {
            $ord = $request->session()->get('listagemprodutoordem');
            $listagemprodutoordem = $ord[0];
        }
        $listagemprodutoquantidade = 12;
        if (Session::has('listagemprodutoquantidade')) {
            $qtd = $request->session()->get('listagemprodutoquantidade');
            $listagemprodutoquantidade = $qtd[0];
        }

        $produto_busca = "";
        if (Session::has('produtobusca')) {
            $ord = $request->session()->get('produtobusca');
            $produto_busca = $ord[0];
        }
        $departamento_busca = "";
        if (Session::has('departamentobusca')) {
            $ord = $request->session()->get('departamentobusca');
            $departamento_busca = $ord[0];
        }

        $produtosbusca = null;
        //utilizar scoope para melhrar essa busca
        //https://laravel.com/docs/8.x/eloquent#local-scopes


        $produtosbusca = Produto::select(
            "produtos.id",
            "produtos.descricao",
            "produtos.nomeecommerce",
            "produtos.departamento",
            "produtos.codigo_departamento",
            "produtos.dirfotoprod",
            "produtos.secao",
            "produtos.marca",
            'produtodepartamentos.descricaosite'
        )
            ->join('produtodepartamentos', 'produtos.departamento', '=', 'produtodepartamentos.descricao')
            ->Departamento($departamento_busca)
            ->NomeEcommerce($produto_busca)
            ->DepartamentoLink($listagemprodutoordemdepartamento)
            ->MarcaLink($listagemprodutoordemmarca)
            ->where("produtos.foralinha", "!=", "FL")
            ->orWhere('produtos.id', '=', $produto_busca)
            ->OrdenarLista($listagemprodutoordem)
            //->toSql();
            ->paginate($listagemprodutoquantidade);
        //dd($produtosbusca);

        $marcas = Produto::select("marca")
            ->Departamento($departamento_busca)
            ->NomeEcommerce($produto_busca)
            ->where("foralinha", "!=", "FL")
            ->orWhere('id', '=', $produto_busca)
            ->orderBy('marca', 'asc')
            ->distinct()
            ->get();
        $departamentos = Produto::select('produtos.departamento', 'produtodepartamentos.descricaosite')
            ->join('produtodepartamentos', 'produtos.departamento', '=', 'produtodepartamentos.descricao')
            ->Departamento($departamento_busca)
            ->NomeEcommerce($produto_busca)
            ->where("produtos.foralinha", "!=", "FL")
            ->orWhere('produtos.id', '=', $produto_busca)
            ->orderBy('produtos.departamento', 'asc')
            ->distinct()
            ->get();
        //dd($marcas, $departamentos);





        for ($i = 0; $i < count($produtosbusca); $i++) {
            $x = explode("\\", $produtosbusca[$i]['dirfotoprod']);
            $imagemExiste = Storage::disk('disk_makro')->exists("imagens\\normais\\" . strtolower($x[count($x) - 1]));
            if ($imagemExiste && count($x) != 0 && $x[count($x) - 1] != "" && $x[count($x) - 1] != null) {
                //$produtosbusca[$i]['dirfotoprod'] = base64_encode(Storage::get("imagens\\normais\\" . strtolower($x[count($x) - 1])));
                $produtosbusca[$i]['dirfotoprod'] = "imagens\\normais\\" . strtolower($x[count($x) - 1]);
            } else {
                //$produtosbusca[$i]['dirfotoprod'] = base64_encode(Storage::get("imagens\\normais\\produto_default.jpg"));
                $produtosbusca[$i]['dirfotoprod'] = "imagens\\normais\\produto_default.jpg";
            }
        }



        //$listagemprodutoordemdepartamento = explode(" ", $listagemprodutoordemdepartamento);
        //$listagemprodutoordemmarca = explode(" ", $listagemprodutoordemmarca);
        return view('buscaprodutos', compact('produtosbusca', 'produto_busca', 'listagemprodutoquantidade', 'listagemprodutoordem', 'marcas', 'departamentos', 'listagemprodutoordemdepartamento', 'listagemprodutoordemmarca'));
    }






    public function setbuscaprodutos(Request $request)
    {
        $data = $request->all();

        //LIMPANDO OS FILTROS DA BUSCA
        $request->session()->put('listagemprodutoordemdepartamento', [null]);
        $request->session()->put('listagemprodutoordemmarca', [null]);
        $request->session()->put('listagemprodutoordem', [null]);
        $request->session()->put('listagemprodutoquantidade', [null]);


        $request->session()->put('produtobusca', [
            $data['q']
        ]);
        $request->session()->put('departamentobusca', [
            $data['cat']
        ]);
        return redirect()->route('buscaproduto');
    }

    public function showproduto($id)
    {
        //$produto = Produto::find($id);
        $produto = Produto::select('*')
            ->where('linkdescricao', '=', $id)
            ->first();

        if (!$produto) {
            $produto = Produto::find($id);
        }

        if (!$produto) {
            return view('produtonaoencontrado');
        }
        $x = explode("\\", $produto['dirfotoprod']);


        $imagemExiste = Storage::disk('disk_makro')->exists("imagens/normais/" . strtolower($x[count($x) - 1]));
        //dd($x,$imagemExiste,$x[count($x) - 1],strtolower("imagens/normais/" . $x[count($x) - 1]));
        if ($imagemExiste && count($x) != 0 && $x[count($x) - 1] != "" && $x[count($x) - 1] != null) {
            //$imagem = base64_encode(Storage::get("imagens/normais/" . strtolower($x[count($x) - 1])));
            $imagem = "imagens/normais/" . strtolower($x[count($x) - 1]);
        } else {
            //$imagem = base64_encode(Storage::get("imagens/normais/produto_default.jpg"));
            $imagem = "imagens/normais/produto_default.jpg";
        }

        //obter uma lista com 8 produtos relacionados
        //pego a lista de itens da categoria e pego 8 ao acaso
        $relacionados = Produto::select("id", "linkdescricao", "descricao", "nomeecommerce", "departamento", "codigo_departamento", "dirfotoprod", "secao")
            ->where("foralinha", "!=", "FL")
            ->where("codigo_departamento", "=", $produto->codigo_departamento)
            ->inRandomOrder()
            ->limit(8)
            ->get();

        for ($i = 0; $i < count($relacionados); $i++) {
            $x = explode("\\", $relacionados[$i]['dirfotoprod']);
            $imagemExiste = Storage::disk('disk_makro')->exists("imagens/normais/" . strtolower($x[count($x) - 1]));
            if ($imagemExiste && count($x) != 0 && $x[count($x) - 1] != "" && $x[count($x) - 1] != null) {
                //$relacionados[$i]['dirfotoprod'] = base64_encode(Storage::get("imagens/normais/" . strtolower($x[count($x) - 1])));
                $relacionados[$i]['dirfotoprod'] = "imagens/normais/" . strtolower($x[count($x) - 1]);
            } else {
                //$relacionados[$i]['dirfotoprod'] = base64_encode(Storage::get("imagens/normais/produto_default.jpg"));
                $relacionados[$i]['dirfotoprod'] = "imagens/normais/produto_default.jpg";
            }
        }

        return view('showproduto', compact('produto', 'imagem', 'relacionados'));
    }

    public function showprodutoquick($id)
    {
        //$produto = Produto::find($id);
        $produto = Produto::select('*')
            ->where('linkdescricao', '=', $id)
            ->first();
        $x = explode("\\", $produto['dirfotoprod']);
        $imagem = null;


        $imagemExiste = Storage::disk('disk_makro')->exists("imagens/normais/" . strtolower($x[count($x) - 1]));
        //dd($x,$imagemExiste,$x[count($x) - 1],strtolower("imagens/normais/" . $x[count($x) - 1]));
        if ($imagemExiste && count($x) != 0 && $x[count($x) - 1] != "" && $x[count($x) - 1] != null) {
            //$imagem = base64_encode(Storage::get("imagens/normais/" . strtolower($x[count($x) - 1])));
            $imagem = "imagens/normais/" . strtolower($x[count($x) - 1]);
        } else {
            //$imagem = base64_encode(Storage::get("imagens/normais/produto_default.jpg"));
            $imagem = "imagens/normais/produto_default.jpg";
        }


        return view('showprodutoquick', compact('produto', 'imagem'));
    }


    /*  */
    public function showCarrinho()
    {
        return view('carrinho');
    }

    public function limparCarrinho(Request $request)
    {
        $carrinho = Session::get('carrinho');
        unset($carrinho);
        $request->session()->put('carrinho', null);
        //$request->session()->forget('termosAceitos');
        return redirect()->route('inicio');
    }

    public function addItemNocarrinho(Request $request)
    {
        $data = $request->all();
        //dd($data);
        //Adicionando item a sessão 
        $itens = [];
        $itens = $request->session()->get('carrinho');
        if ($itens) {
            //verifique se o item a ser adicionado existe na sessão
            $key = array_search($data['produto_id'], array_column($itens, 'produto_id'));

            if (is_numeric($key)) {
                //achei
                //irei adicionar itens ao produto que está na seção
                //dd($itens[$key]['produtoQuantidade']);
                $itens[$key]['produtoQuantidade'] = number_format($itens[$key]['produtoQuantidade']) + number_format($data['produtoQuantidade']);
            } else {
                //não existe o item no vetor
                $new['produto_id'] = $data['produto_id'];
                $new['produtoQuantidade'] = $data['produtoQuantidade'];
                array_push($itens, $new);
                //$request->session()->put('carrinho', $itens);
            }
            $request->session()->put('carrinho', $itens);
        } else {
            $itens['produto_id'] = $data['produto_id'];
            $itens['produtoQuantidade'] = $data['produtoQuantidade'];
            $request->session()->put('carrinho', [$itens]);
        }

        return redirect()->route('showCarrinho');
    }

    public function removerItemCarrinho(Request $request, $id)
    {
        $itens = $request->session()->get('carrinho');
        $geral = array_splice($itens, 0);
        $key = array_search($id, array_column($geral, 'produto_id'));
        if (is_numeric($key)) {
            unset($geral[$key]);
        }
        $geral = array_splice($geral, 0);

        $request->session()->put('carrinho', $geral);
        return redirect()->route('showCarrinho');
    }

    public function atualizaItensCarrinho(Request $request)
    {

        $data = $request->all();
        //dd($data);
        $itens = [];
        $itens = $request->session()->get('carrinho');
        for ($i = 0; $i < count($itens); $i++) {
            //dd($data,$itens[$i],$itens[$i]['produto_id'],$data[$itens[$i]['produto_id']]);
            $itens[$i]['produtoQuantidade'] = $data[$itens[$i]['produto_id']];
        }
        $request->session()->put('carrinho', $itens);
        return redirect()->route('showCarrinho');
    }

    public function addItemNocarrinhoAjax(Request $request)
    {
        $data = $request->all();
        //dd($data);
        //Adicionando item a sessão 
        $itens = [];
        $itens = $request->session()->get('carrinho');
        if ($itens) {
            //verifique se o item a ser adicionado existe na sessão
            $key = array_search($data['produto_id'], array_column($itens, 'produto_id'));

            if (is_numeric($key)) {
                //achei
                //irei adicionar itens ao produto que está na seção
                //dd($itens[$key]['produtoQuantidade']);
                $itens[$key]['produtoQuantidade'] = number_format($itens[$key]['produtoQuantidade']) + 1;
            } else {
                //não existe o item no vetor
                $new['produto_id'] = $data['produto_id'];
                $new['produtoQuantidade'] = 1;
                array_push($itens, $new);
                //$request->session()->put('carrinho', $itens);
            }
            $request->session()->put('carrinho', $itens);
        } else {
            $itens['produto_id'] = $data['produto_id'];
            $itens['produtoQuantidade'] = 1;
            $request->session()->put('carrinho', [$itens]);
        }

        return response()->json('ok');
    }

    public function aceitarTermos(Request $request)
    {
        $request->session()->put('termosAceitos', [
            [
                'termosAceitos'     => '1'
            ]
        ]);
        $json = 'ok';
        return response()->json($json);
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
