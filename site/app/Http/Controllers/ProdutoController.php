<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Produto;
use App\Models\Produtodepartamento;
use App\Models\Produtoentrada;
use App\Models\Produtofornecedor;
use App\Models\Produtomarca;
use App\Models\Produtosecao;
use App\Models\Produtounidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function enviarImagensProdutos(Request $request)
    {
        return view('administracao.produtosEnviarImagens');
    }

    public function gravarImagens(Request $request)
    {
        try {
            $data = $request->all();
            //dd($data['imagensUpload']);
            if ($request->hasfile('imagensUpload')) {
                foreach ($request->file('imagensUpload') as $file) {
                    //$path = Storage::putFile($data['pastaSelecionadaUpload'], $file, $file->getClientOriginalName());
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
                            'imagens/normais',
                            $file,
                            $nomeParaGravar
                        );
                        Log::gravarLog('Enviou uma imagem: ' . $nomeParaGravar, 'ProdutoController', '$path = Storage::putFileAs();');
                    }
                }
            }
            return response()->json('ok');
        } catch (\Throwable $th) {
            return response()->json('erro');
        }
    }

    public function enviarxmlprodutos(Request $request)
    {
        return view('administracao.produtosEnviarXML');
    }

    public function processarArquivoXML(Request $request)
    {
        //aqui eu estou colocando um limite infinito para a execução desse processo
        set_time_limit(0);
        //https://github.com/orchestral/parser

        $data = $request->all();
        $user = Auth::user();

        $nomeParaGravar = "";
        $path = "";
        $upload = "";
        $nameFile = "";
        $xml = "";


        try {
            $newDir = "xml\\";
            Storage::makeDirectory($newDir);
            if ($request->hasfile('xml_produtos')) {
                $file = $request->file('xml_produtos');
                $nomeParaGravar = $file->getClientOriginalName();
                $path = Storage::putFileAs(
                    $newDir,
                    $file,
                    $nomeParaGravar
                );
            }
        } catch (\Throwable $th) {
            dd('deu ruim', $th);
            return response()->json('erro ao enviar o arquivo');
        }

        try {
            //$csv = Storage::get($path);
            //dd($csv);

            $filename = storage_path('app/xml/' . $nomeParaGravar);
            $file = fopen($filename, "r");
            //$fileArray = explode(";", $file);
            //dd($fileArray);

        } catch (\Throwable $th) {
            return response()->json('erro ao abrir arquivo. ' . $th);
        }





        try {
            /*
            //$xml = Storage::exists($path);
            $xml = Storage::get($path);
            dd($xml);
            */
            $filename = storage_path('app/xml/' . $nomeParaGravar);
            $file = fopen($filename, "r");
            $conteudo = fread($file, filesize($filename));

            $xml = simplexml_load_string($conteudo);
            //dd($xml);
            for ($i = 0; $i < count($xml->ROW); $i++) {

                $produto = Produto::firstOrCreate([
                    'codprod' => $xml->ROW[$i]->CODPROD->__toString(),
                    'id' => $xml->ROW[$i]->CODPROD->__toString(),
                ]);
                $produto['linkdescricao'] = '';
                $produto->update();

                //$produto['id'] = $xml->ROW[$i]->CODPROD->__toString();
                $produto['c0'] = $xml->ROW[$i]->C0->__toString();
                $produto['codprod'] = $xml->ROW[$i]->CODPROD->__toString();
                $produto['descricao'] = $xml->ROW[$i]->DESCRICAO->__toString();
                $produto['unidade'] = $xml->ROW[$i]->UNIDADE->__toString();
                $produto['embalagem'] = $xml->ROW[$i]->EMBALAGEM->__toString();
                $produto['codigobarras'] = $xml->ROW[$i]->CODIGOBARRAS->__toString();
                $produto['codigomaster'] = $xml->ROW[$i]->CODIGOMASTER->__toString();
                $produto['marca'] = $xml->ROW[$i]->MARCA->__toString();
                $produto['codigofabricante'] = $xml->ROW[$i]->CODIGOFABRICANTE->__toString();
                $produto['codigofornecedor'] = $xml->ROW[$i]->CODIGOFORNECEDOR->__toString();
                $produto['fornecedor'] = $xml->ROW[$i]->FORNECEDOR->__toString();
                $produto['codsec'] = $xml->ROW[$i]->CODSEC->__toString();
                $produto['secao'] = $xml->ROW[$i]->SECAO->__toString();
                $produto['codigo_departamento'] = $xml->ROW[$i]->CODIGO_DEPARTAMENTO->__toString();
                $produto['departamento'] = $xml->ROW[$i]->DEPARTAMENTO->__toString();
                $produto['informacoestecnicas'] = $xml->ROW[$i]->INFORMACOESTECNICAS->__toString();
                //$produto['dadostecnicos'] = $xml->ROW[$i]->DADOSTECNICOS->__toString();
                $produto['nomeecommerce'] = $xml->ROW[$i]->NOMEECOMMERCE->__toString();
                $produto['importado'] = $xml->ROW[$i]->IMPORTADO->__toString();

                $n = str_replace(",", ".", $xml->ROW[$i]->PESOLIQ->__toString());
                if ($n == "" || $n == " " || $n == "   ") {
                    $n = 0;
                }
                $produto['pesoliq'] = $n;
                $n = str_replace(",", ".", $xml->ROW[$i]->PESOBRUTO->__toString());
                if ($n == "" || $n == " " || $n == "   ") {
                    $n = 0;
                }
                $produto['pesobruto'] =  $n;
                $n = str_replace(",", ".", $xml->ROW[$i]->VOLUME->__toString());
                if ($n == "" || $n == " " || $n == "   ") {
                    $n = 0;
                }
                $produto['volume'] =  $n;

                //$produto['dtexclusao'] = $xml->ROW[$i]->DTEXCLUSAO->__toString();
                $produto['dtexclusao'] = null;
                $produto['foralinha'] = $xml->ROW[$i]->FORALINHA->__toString();
                $produto['dirfotoprod'] = $xml->ROW[$i]->DIRFOTOPROD->__toString();

                $defineLinkDescricao = mb_strtolower($produto['descricao']);
                //$defineLinkDescricao = $produto['descricao'];
                $defineLinkDescricao = str_replace("+", "_", $defineLinkDescricao);
                $defineLinkDescricao = str_replace("~", "_", $defineLinkDescricao);
                $defineLinkDescricao = str_replace("-", "_", $defineLinkDescricao);
                $defineLinkDescricao = str_replace(".", "_", $defineLinkDescricao);
                $defineLinkDescricao = str_replace(",", "_", $defineLinkDescricao);
                $defineLinkDescricao = str_replace("/", "_", $defineLinkDescricao);
                $defineLinkDescricao = str_replace(" ", "_", $defineLinkDescricao);
                $defineLinkDescricao = str_replace("__", "_", $defineLinkDescricao);
                $defineLinkDescricao = str_replace("___", "_", $defineLinkDescricao);
                $defineLinkDescricao = str_replace("___", "_", $defineLinkDescricao);
                $defineLinkDescricao = str_replace("___", "_", $defineLinkDescricao);
                $defineLinkDescricao = $this->sanitizeString($defineLinkDescricao);

                
                $segue = true;
                $contSegue = 0;
                $dldOriginal = $defineLinkDescricao;
                while ($segue) {
                    $pN = Produto::select('*')
                        ->where('linkdescricao', '=', $defineLinkDescricao)
                        ->count();
                    if ($pN == 0) {
                        $segue = false;
                    } else {
                        $contSegue++;
                        $defineLinkDescricao = $dldOriginal . "_" . $contSegue;
                    }
                }
                


                $produto['linkdescricao'] = $defineLinkDescricao;

                $produto->update();

                $produtoDepartamento = Produtodepartamento::firstOrCreate([
                    'codigo' => $xml->ROW[$i]->CODIGO_DEPARTAMENTO->__toString(),
                    'descricao' => $xml->ROW[$i]->DEPARTAMENTO->__toString(),
                    //'habilitado' => 1,
                    //'descricaosite' => $xml->ROW[$i]->DEPARTAMENTO->__toString()
                ]);
                $produtoFornecedor = Produtofornecedor::firstOrCreate([
                    'codigo' => $xml->ROW[$i]->CODIGOFORNECEDOR->__toString(),
                    'descricao' => $xml->ROW[$i]->FORNECEDOR->__toString()
                ]);
                $produtoMarca = Produtomarca::firstOrCreate([
                    'descricao' => $xml->ROW[$i]->MARCA->__toString(),
                ]);
                $produtoSecao = Produtosecao::firstOrCreate([
                    'codigo' => $xml->ROW[$i]->CODSEC->__toString(),
                    'descricao' => $xml->ROW[$i]->SECAO->__toString()
                ]);
                $produtoUnidade = Produtounidade::firstOrCreate([
                    'descricao' => $xml->ROW[$i]->UNIDADE->__toString(),
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json('erro ao processar arquivo. ' . $th);
        }

        Storage::delete("xml\\" . $nomeParaGravar);
        return response()->json('XML enviado e processado com sucesso');
    }

    function sanitizeString($str)
    {
        $str = preg_replace('/[áàãâä]/ui', 'a', $str);
        $str = preg_replace('/[éèêë]/ui', 'e', $str);
        $str = preg_replace('/[íìîï]/ui', 'i', $str);
        $str = preg_replace('/[óòõôö]/ui', 'o', $str);
        $str = preg_replace('/[úùûü]/ui', 'u', $str);
        $str = preg_replace('/[ç]/ui', 'c', $str);
        // $str = preg_replace('/[,(),;:|!"#$%&/=?~^><ªº-]/', '_', $str);
        $str = preg_replace('/[^a-z0-9]/i', '_', $str);
        $str = preg_replace('/_+/', '_', $str); // ideia do Bacco :)
        return $str;
    }





















































    public function saidaforcada(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $produtoPrevio = '0';
        if (isset($data['produto_id'])) {
            $produtoPrevio = Produto::find($data['produto_id']);
            if ($produtoPrevio == null) {
                $produtoPrevio = '0';
            } else {
                if ($produtoPrevio->clinica_id != $user->clinicauser->clinica_id) {
                    Log::gravarLog('Tentou entrar em produto alheio', 'ProdutoController', 'entrada(); ' . $produtoPrevio->id);
                    return redirect()->route('produto.index')->with('toastErro', 'Você não tem permissão para modificar este item.');
                }
                $produtoPrevio = $produtoPrevio->id;
            }
        }
        //dd($data, $produtoPrevio);

        $produtos = Produto::select('id', 'nome')
            ->where('clinica_id', '=', $user->clinicauser->clinica_id)
            ->orderBy('nome')
            ->get();
        //dd($produtos);
        return view('estoque.saidaforcada', compact('produtos', 'produtoPrevio'));
    }

    public function gravarSaidaDeProduto(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $produto = Produto::find($data['produto_id']);
        if ($produto->clinica_id != $user->clinicauser->clinica_id) {
            return response()->json('Você não tem acesso a esse produto');
        }
        $produto['quantidadeemestoque'] = $produto['quantidadeemestoque'] - $data['quantidadedesaida'];
        $produto->update();


        $produtoEntrada = new Produtoentrada();
        $produtoEntrada['observacoes'] = $data['observacoes'];
        $produtoEntrada['vencimento'] = date('Y-m-d');
        $produtoEntrada['tipomovimento'] = "saidaforcada";
        $produtoEntrada['quantidadedeentrada'] = $data['quantidadedesaida'];
        $produtoEntrada['quantidadedereal'] = $data['quantidadedesaida'];
        $produtoEntrada['clinica_id'] = $user->clinicauser->clinica_id;
        $produtoEntrada['produto_id'] = $produto->id;
        $produtoEntrada['valordecompra'] = $produto['valordecompra'];
        $produtoEntrada['valordevenda'] = $produto['valordevenda'];
        $produtoEntrada->save();
        //dd($produtoEntrada);

        Log::gravarLog('Saída de produto forçada', 'ProdutoController', 'gravarSaidaDeProduto(); ' . $data['produto_id']);
        return redirect()->route('produto.index')->with('toastSuccess', 'Saída de produto realizado com sucesso.');

        dd($data, $produto);
    }

    public function entrada(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $produtoPrevio = '0';
        if (isset($data['produto_id'])) {
            $produtoPrevio = Produto::find($data['produto_id']);
            if ($produtoPrevio == null) {
                $produtoPrevio = '0';
            } else {
                if ($produtoPrevio->clinica_id != $user->clinicauser->clinica_id) {
                    Log::gravarLog('Tentou entrar em produto alheio', 'ProdutoController', 'entrada(); ' . $produtoPrevio->id);
                    return redirect()->route('produto.index')->with('toastErro', 'Você não tem permissão para modificar este item.');
                }
                $produtoPrevio = $produtoPrevio->id;
            }
        }
        //dd($data, $produtoPrevio);

        $produtos = Produto::select('id', 'nome')
            ->where('clinica_id', '=', $user->clinicauser->clinica_id)
            ->orderBy('nome')
            ->get();
        //dd($produtos);
        return view('estoque.entrada', compact('produtos', 'produtoPrevio'));
    }

    public function getProdutoParaEntrada(Request $request)
    {
        //sleep(2);
        $id = $request->get('produto_id');
        $user = Auth::user();
        $produto = Produto::find($id);
        if ($produto->clinica_id != $user->clinicauser->clinica_id) {
            return response()->json('Você não tem acesso a esse produto');
        }
        $produto->valordecompra = "R$ " . number_format($produto->valordecompra, 2, ',', '.');
        $produto->valordevenda = "R$ " . number_format($produto->valordevenda, 2, ',', '.');
        $retorno = [];
        $retorno['produto'] = $produto;

        $produtoEntradas = Produtoentrada::select('*')
            ->where('produto_id', '=', $produto->id)
            ->where('tipomovimento', '=', 'entrada')
            ->get();

        $retorno['produtoentrada'] = $produtoEntradas;
        return response()->json($retorno);
    }

    public function produtoAjaxSelect2(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();

        $produtoDB = Produto::select('id', 'nome')
            ->where('nome', 'like', '%' . $data['term'] . '%')
            ->where("clinica_id", "=", $user->clinicauser['clinica_id'])
            ->get();

        $produtos = [];
        for ($i = 0; $i < count($produtoDB); $i++) {
            $cliente = [
                'id' => $produtoDB[$i]['id'],
                'text' => $produtoDB[$i]['nome'],
            ];
            array_push($produtos, $cliente);
        }
        $resultado = ['results' => $produtos];


        return response()->json($resultado);
    }

    public function gravarEntradaDeProduto(Request $request)
    {
        //Analisar colocar rollback aqui
        $data = $request->all();
        $user = Auth::user();
        $produto = Produto::find($data['produto_id']);
        if ($produto->clinica_id != $user->clinicauser->clinica_id) {
            Log::gravarLog('Tentou entrar em produto alheio', 'ProdutoController', 'gravarEntradaDeProduto(); ' . $data['produto_id']);
            return redirect()->route('produto.index')->with('toastErro', 'Você não tem permissão para modificar este item.');
        }

        if (!is_null($data['vencimento'])) {
            $data['vencimento'] = \DateTime::createFromFormat('d/m/Y', $data['vencimento'])->format('Y-m-d');
        }

        $produto['quantidadeemestoque'] = $produto['quantidadeemestoque'] + $data['quantidadedeentrada'];
        $produto['valordecompra'] = $data['valordecompra'];
        $produto['valordecompra'] = str_replace(".", "", $produto['valordecompra']);
        $produto['valordecompra'] = str_replace(",", ".", $produto['valordecompra']);
        $produto['valordecompra'] = str_replace("R$ ", "", $produto['valordecompra']);
        $produto['valordevenda'] = $data['valordevenda'];
        $produto['valordevenda'] = str_replace(".", "", $produto['valordevenda']);
        $produto['valordevenda'] = str_replace(",", ".", $produto['valordevenda']);
        $produto['valordevenda'] = str_replace("R$ ", "", $produto['valordevenda']);
        $produto->update();

        $produtoEntrada = new Produtoentrada();
        $produtoEntrada['observacoes'] = $data['observacoes'];
        $produtoEntrada['vencimento'] = $data['vencimento'];
        $produtoEntrada['tipomovimento'] = "entrada";
        $produtoEntrada['quantidadedeentrada'] = $data['quantidadedeentrada'];
        $produtoEntrada['quantidadedereal'] = $data['quantidadedeentrada'];
        $produtoEntrada['clinica_id'] = $user->clinicauser->clinica_id;
        $produtoEntrada['produto_id'] = $produto->id;
        $produtoEntrada['valordecompra'] = $produto['valordecompra'];
        $produtoEntrada['valordevenda'] = $produto['valordevenda'];
        $produtoEntrada->save();

        Log::gravarLog('Entrada de produto', 'ProdutoController', 'gravarEntradaDeProduto(); ' . $data['produto_id']);
        return redirect()->route('produto.index')->with('toastSuccess', 'Entrada de produto realizado com sucesso.');
    }

    public function produtoAjax(Request $request)
    {
        $id = $request->get('produto_id');
        $produto = Produto::find($id);
        $user = Auth::user();

        if ($produto->clinica_id == $user->clinicauser->clinica_id) {
            $produto->valordecompra = "R$ " . number_format($produto->valordecompra, 2, ',', '.');
            $produto->valordevenda = "R$ " . number_format($produto->valordevenda, 2, ',', '.');
            $json = $produto;
        } else {
            $response = array(
                "erro" => "erro"
            );
        }
        return response()->json($json);
    }

    public function produtosparadatatable_modal(Request $request)
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
        $totalRecords = Produto::select('count(*) as allcount')
            ->where("produtos.clinica_id", "=", $user->clinicauser['clinica_id'])
            ->count();
        $totalRecordswithFilter = Produto::select('count(*) as allcount')
            ->where("produtos.clinica_id", "=", $user->clinicauser['clinica_id'])
            ->where('produtos.nome', 'like', '%' . $searchValue . '%')
            ->count();

        //dd($totalRecords, $totalRecordswithFilter);

        // Fetch records
        $records = Produto::select('produtos.id', 'produtos.nome', 'produtos.descricao', 'produtos.unidade', 'produtos.quantidadeemestoque', 'produtos.valordecompra', 'produtos.valordevenda')
            ->where("produtos.clinica_id", "=", $user->clinicauser['clinica_id'])
            ->where('produtos.nome', 'like', '%' . $searchValue . '%')
            //->groupby('produtos.id')
            ->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $sno = $start + 1;
        foreach ($records as $record) {
            $id = $record->id;
            $nome = $record->nome;
            //$descricao = $record->descricao;
            $unidade = $record->unidade;
            $quantidadeemestoque = $record->quantidadeemestoque;
            $valordecompra = $record->valordecompra;
            $valordevenda = $record->valordevenda;

            //abaixo funciona
            //$record->escritorio
            //$record->clientes->pessoas['nome']

            $data_arr[] = array(
                "id" => $id,
                "nome" => $nome,
                //"descricao" => $descricao,
                "unidade" => $unidade,
                "quantidadeemestoque" => $quantidadeemestoque,
                "valordecompra" => "R$ " . number_format($valordecompra, 2, ',', '.'),
                "valordevenda" => "R$ " . number_format($valordevenda, 2, ',', '.'),

                "acoes" => "
                " . "
                <center>
                <a href=\"javascript:abrirModalDados('" . $id . "')\" type='button' class='btn bg-gradient-success'>Ver dados</a>
                <a href='" . route('produto.edit', $id) . "' type='button' class='btn bg-gradient-warning'>Editar dados</a>
                
                <a href='#' type='button' class='btn bg-gradient-info' onclick=\"event.preventDefault(); document.getElementById('form_to_add_estoque" . $id . "').submit();\"><i class='fas fa-plus'></i></a>
                <form id='form_to_add_estoque" . $id . "' action='" . route('produto.entrada') . "' method='GET' class='d-none'>
                <input type='hidden' id='produto_id' name='produto_id' value='" . $id . "'>
                </form>

                <a href='#' type='button' class='btn bg-gradient-danger' onclick=\"event.preventDefault(); document.getElementById('form_to_remove_estoque" . $id . "').submit();\"><i class='fas fa-minus'></i></a>
                <form id='form_to_remove_estoque" . $id . "' action='" . route('produto.saidaforcada') . "' method='GET' class='d-none'>
                <input type='hidden' id='produto_id' name='produto_id' value='" . $id . "'>
                </form>

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

    public function produtosGetPorCodigo_modal(Request $request)
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
        $totalRecords = Produto::select('count(*) as allcount')
            ->count();

        $totalRecordswithFilter = Produto::select('count(*) as allcount')
            ->where('produtos.codprod', 'like', '%' . $searchValue . '%')
            //->where('produtos.codprod', '=', $searchValue)
            ->where('produtos.foralinha', '!=', 'FL')
            ->count();

        //dd($totalRecords, $totalRecordswithFilter);

        // Fetch records
        $records = Produto::select('*')
            ->where('produtos.codprod', 'like', '%' . $searchValue . '%')
            //->where('produtos.codprod', '=', $searchValue)
            ->where('produtos.foralinha', '!=', 'FL')
            //->groupby('produtos.id')
            ->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $sno = $start + 1;
        foreach ($records as $record) {


            $id = $record->id;
            $codprod = $record->codprod;
            $descricao = $record->descricao;
            $marca = $record->marca;
            $nomeecommerce = $record->nomeecommerce;

            //removendo as aspas que estão nos nomes
            //&quot;
            $nomeecommerce = str_replace("\"", "&quot;", $nomeecommerce);
            $descricao = str_replace("\"", "&quot;", $descricao);


            $data_arr[] = array(
                "codprod" => $codprod,
                "descricao" => $descricao,
                "nomeecommerce" => $nomeecommerce,

                "acoes" => "
                " . "
                <center>
                <a href=\"javascript:selecionarProduto('$id','$codprod','$descricao','$marca','$nomeecommerce')\" type='button' class='btn bg-gradient-success'>Selecionar</a>

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
