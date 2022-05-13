@extends('layouts.site.siteLayout')

@section('content')

<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route ('inicio')}}"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Orçamento</li>
        </ol>
    </div><!-- End .container -->
</nav>

<div class="container">
    <div class="row">
        <?php
        $sessao = Illuminate\Support\Facades\Session::all();
        $totalDeItens = 0;
        if (isset($sessao['carrinho'])) {
            $totalDeItens = count($sessao['carrinho']);
            //dd($sessao['carrinho']);
        }
        $valorTotal = 0;
        ?>
        @if($totalDeItens != 0)
        <div class="col-lg-8">
            <div class="cart-table-container">
                <form method="GET" id="form_atualiza_itens" name="form_atualiza_itens" action="{{ route('atualizaItensCarrinho') }}">
                    @csrf
                    <table class="table table-cart">
                        <thead>
                            <tr>
                                <th class="product-col">Produto</th>
                                <th class="qty-col">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sessao['carrinho'] as $item)
                            <?php
                            //dd($item);
                            $produto = App\Models\Produto::find($item['produto_id']);
                            //dd($produto);

                            $imagem = '';
                            $x = explode("\\", $produto['dirfotoprod']);
                            $imagemExiste = Illuminate\Support\Facades\Storage::disk('disk_makro')->exists("imagens/normais/" . strtolower($x[count($x) - 1]));
                            //dd($x,$imagemExiste,$x[count($x) - 1],strtolower("imagens/normais/" . $x[count($x) - 1]));
                            if ($imagemExiste && count($x) != 0 && $x[count($x) - 1] != "" && $x[count($x) - 1] != null) {
                                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("imagens/normais/" . strtolower($x[count($x) - 1])));
                                $imagem = "imagens/normais/" . strtolower($x[count($x) - 1]);
                            } else {
                                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("imagens/normais/produto_default.jpg"));
                                $imagem = "imagens/normais/produto_default.jpg";
                            }


                            ?>
                            <tr class="product-row">
                                <td class="product-col">
                                    <figure class="product-image-container">
                                        <a href="{{route('showproduto',$produto->linkdescricao)}}" class="product-image">
                                            <img src="{{asset('uploads/'.$imagem)}}">
                                        </a>
                                    </figure>
                                    <h5 class="product-title">
                                        <a href="{{route('showproduto',$produto->linkdescricao)}}">{{$produto->nomeecommerce}}</a>
                                    </h5>
                                </td>
                                <td>
                                    <input class="vertical-quantity form-control" type="text" id="{{$produto->id}}" name="{{$produto->id}}" value="{{$item['produtoQuantidade']}}">
                                </td>
                            </tr>
                            <tr class="product-action-row">
                                <td colspan="2" class="clearfix">
                                    <div class="float-right">
                                        <a href="{{route('removerItemCarrinho',$produto->id)}}" title="Edit product" class="btn-edit">Remover item&nbsp;<i class="icon-cancel"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="4" class="clearfix">
                                    <div class="float-left">
                                        <a href="{{route('inicio')}}" class="btn btn-outline-secondary">Continuar navegando</a>
                                    </div>

                                    <div class="float-right">
                                        <a href="{{route('limparCarrinho')}}" class="btn btn-outline-secondary btn-clear-cart">Limpar orçamento</a>
                                        <a href="javascript:executarAtualizaItens()" class="btn btn-outline-secondary btn-update-cart">Atualizar quantidades</a>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
            <script>
                function executarAtualizaItens() {
                    document.getElementById('form_atualiza_itens').submit();
                }
            </script>

            <!--
            <div class="cart-discount">
                <h4>Aplicar código de desconto</h4>
                <form action="#">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Enter discount code" required>
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-primary" type="submit">Aplicar desconto</button>
                        </div>
                    </div>
                </form>
            </div>
            !-->

        </div>

        <div class="col-lg-4">
            <div class="cart-summary">
                <h3>Sumário</h3>
                <!--
                <h4>
                    <a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
                </h4>
                <div class="collapse" id="total-estimate-section">
                    <form action="#">
                        <div class="form-group form-group-sm">
                            <label>Country</label>
                            <div class="select-custom">
                                <select class="form-control form-control-sm">
                                    <option value="USA">United States</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="China">China</option>
                                    <option value="Germany">Germany</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label>State/Province</label>
                            <div class="select-custom">
                                <select class="form-control form-control-sm">
                                    <option value="CA">California</option>
                                    <option value="TX">Texas</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label>Zip/Postal Code</label>
                            <input type="text" class="form-control form-control-sm">
                        </div>

                        <div class="form-group form-group-custom-control">
                            <label>Flat Way</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="flat-rate">
                                <label class="custom-control-label" for="flat-rate">Fixed $5.00</label>
                            </div>
                        </div>

                        <div class="form-group form-group-custom-control">
                            <label>Best Rate</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="best-rate">
                                <label class="custom-control-label" for="best-rate">Table Rate $15.00</label>
                            </div>
                        </div>
                    </form>
                </div>
                !-->
                <!--
                <table class="table table-totals">
                    <tbody>
                        <tr>
                            <td>Subtotal</td>
                            <td>$17.90</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>$0.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Order Total</td>
                            <td>$17.90</td>
                        </tr>
                    </tfoot>
                </table>
                !-->
                <table class="table table-totals">
                    <tbody>
                        <tr>
                            <td>Total de itens</td>
                            <td>{{$totalDeItens}}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="checkout-methods">
                    <a href="{{route('checkOut')}}" class="btn btn-block btn-sm btn-primary">Enviar o orçamento a loja</a>
                    <!--
                    <a href="#" class="btn btn-link btn-block">Check Out with Multiple Addresses</a>
                    !-->
                </div>
            </div>
        </div>
        @else
        <div class="col-12">
            Orçamento vazio
        </div>
        @endif
    </div>
</div>

<div class="mb-6"></div>

@endsection