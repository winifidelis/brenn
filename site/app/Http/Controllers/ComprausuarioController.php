<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Venda;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ComprausuarioController extends Controller
{
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

    public function checkOut(Request $request)
    {
        //verifico se o usuário está logado
        if (!session()->get('carrinho')) {
            //se não houve nada no carrinho eu envio o cliente para a página inicial
            return redirect()->route('inicio');
        }
        $user = Auth::user();
        if ($user) {
            /*REMOVI ISSO TUDO POIS EU NÃO ESTOU RECEBENDO PAGAMENTOS, ESTOU APENAS GRAVANDO UM PEDIDO DO CLIENTE
            $this->makePagSeguroSession();
            $pagSeguro = session()->get('pagseguro_session_code');
            //var_dump($pagSeguro);
            //aqui é onde o usuário digita as informações dele
            $total = 0;
            $itens = session()->get('carrinho');
            foreach ($itens as $item) {
                $produto = Produto::find($item['produto_id']);
                $totalMultiplicado = $produto->valor * $item['quantidade'];
                $total = $total + $totalMultiplicado;
            }
            return view('carrinhoCheckOut', compact('total'));
            */

            //guardo os itens que foram adicionados ao carrinho
            $itens = $request->session()->get('carrinho');

            //Guardar no banco de dados o pedido
            /*
            $serializedArray = serialize($array);
            $unserializedArray = unserialize($array);
            */
            $venda = new Venda();
            $venda['user_id'] = $user->id;
            $venda['listaprodutos'] = serialize($itens);
            $venda->save();



            $newDir = "xmlVendas\\";
            Storage::makeDirectory($newDir);
            $myfile = fopen(storage_path('app/xmlVendas/' . 'pedido' . $venda->id . '.xml'), "w");
            fwrite($myfile, "<soapenv:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:urn=\"urn:uPCPedidoIntf-PC_Pedido\">\n");
            fwrite($myfile, "   <soapenv:Header/>\n");
            fwrite($myfile, "   <soapenv:Body>\n");
            fwrite($myfile, "       <urn:InserirCabecalhoPedido soapenv:encodingStyle=\"http://schemas.xmlsoap.org/soap/encoding/\">\n");
            fwrite($myfile, "           <Numero_Pedido_Ecommerce xsi:type=\"xsd:double\">" . $venda->id . "</Numero_Pedido_Ecommerce>\n");
            fwrite($myfile, "           <Codigo_Filial xsi:type=\"xsd:string\">2</Codigo_Filial>\n");
            fwrite($myfile, "           <Codigo_Cliente xsi:type=\"xsd:int\">1</Codigo_Cliente>\n");
            fwrite($myfile, "           <Data xsi:type=\"xsd:dateTime\">" . date('Y-m-d') . "</Data>\n");
            fwrite($myfile, "           <Observacao1 xsi:type=\"xsd:string\">sem observações</Observacao1>\n");
            fwrite($myfile, "           <Observacao2 xsi:type=\"xsd:string\">sem observações</Observacao2>\n");
            fwrite($myfile, "           <Valor_Frete xsi:type=\"xsd:double\">0</Valor_Frete>\n");
            fwrite($myfile, "           <Numero_Cupom_Desconto xsi:type=\"xsd:string\"></Numero_Cupom_Desconto>\n");
            fwrite($myfile, "           <Valor_Desconto_Cupom xsi:type=\"xsd:double\">0</Valor_Desconto_Cupom>\n");
            fwrite($myfile, "           <Id_Transacao_TEF xsi:type=\"xsd:string\"></Id_Transacao_TEF>\n");
            fwrite($myfile, "           <Codigo_Autorizacao_TEF xsi:type=\"xsd:string\"></Codigo_Autorizacao_TEF>\n");
            fwrite($myfile, "           <Codigo_CLiente_Web xsi:type=\"xsd:int\">0</Codigo_CLiente_Web>\n");
            fwrite($myfile, "       </urn:InserirCabecalhoPedido>\n");
            fwrite($myfile, "   </soapenv:Body>\n");
            fwrite($myfile, "</soapenv:Envelope>\n");
            fclose($myfile);

            $myfile = fopen(storage_path('app/xmlVendas/' . 'pedido_item' . $venda->id . '.xml'), "w");
            fwrite($myfile, "<soapenv:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:urn=\"urn:uPCPedidoIntf-PC_Pedido\">\n");
            fwrite($myfile, "   <soapenv:Header/>\n");
            fwrite($myfile, "   <soapenv:Body>\n");
            for ($i = 0; $i < count($itens); $i++) {
                fwrite($myfile, "       <urn:InserirItemPedido soapenv:encodingStyle=\"http://schemas.xmlsoap.org/soap/encoding/\">\n");
                fwrite($myfile, "           <Numero_Pedido_Ecommerce xsi:type=\"xsd:double\">" . $venda->id . "</Numero_Pedido_Ecommerce>\n");
                fwrite($myfile, "           <Codigo_Produto xsi:type=\"xsd:int\">".$itens[$i]['produto_id']."</Codigo_Produto>\n");
                fwrite($myfile, "           <Quantidade xsi:type=\"xsd:double\">".$itens[$i]['produtoQuantidade']."</Quantidade>\n");
                fwrite($myfile, "           <Preco_Venda xsi:type=\"xsd:double\">0</Preco_Venda>\n");
                fwrite($myfile, "           <Numero_Sequencia xsi:type=\"xsd:int\">1</Numero_Sequencia>\n");
                fwrite($myfile, "       </urn:InserirItemPedido>\n");
            }
            fwrite($myfile, "   </soapenv:Body>\n");
            fwrite($myfile, "</soapenv:Envelope>\n");
            fclose($myfile);

            //Enviar email para os interessados
            EmailController::emailPedidoRealizadoNoSite($venda);

            //como aqui eu falizei o atendimento eu irei limpar o carrinho
            $carrinho = Session::get('carrinho');
            unset($carrinho);
            $request->session()->put('carrinho', null);


            //dd($itens);
            return view('pedidoenviado', compact('itens'));
        } else {
            //para fazer o usuário ir para o carrinho fechado
            //logo após o login veja o arquivo
            //app\Http\Controllers\Auth\LoginController.php     ---login
            //app\Http\Controllers\Auth\RegisterController.php  ---usuário novo
            return redirect()->route('login');
        }
    }
}
