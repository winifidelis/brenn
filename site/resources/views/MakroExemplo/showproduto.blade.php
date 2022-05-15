@extends('layouts.site.siteLayout')

@section('metatags')
<meta name="description" content="Makro Service - {{$produto->descricao}}" />
<meta name="keywords" content="{{$produto->informacoestecnicas}}" />
<meta name="robots" content="index, follow">
<meta property="og:site_name" content="Makro Service Materiais Elétricos de Confiança">
<meta property="og:locale" content="pt_BR">
<meta property="og:url" content="https://makroservice.com.br/">
<meta property="og:type" content="website">
<meta property="og:title" content="Makro Service - {{$produto->descricao}}">
<meta property="og:image" content="https://makroservice.com.br/assets_site/assets/images/logo.png">
<meta property="og:description" content="{{$produto->informacoestecnicas}}">
<meta property="article:author" content="Makro Service Materiais Elétricos de Confiança">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Makro Service - {{$produto->descricao}}">
<meta name="twitter:description" content="{{$produto->informacoestecnicas}}">
@endsection

@section('content')

<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{route('showdepartamento', $produto->codigo_departamento)}}">{{$produto->departamento}}</a></li>
        </ol>
    </nav>
    <div class="product-single-container product-single-default">
        <div class="row">
            <div class="col-md-5 product-single-gallery">
                <div class="product-slider-container">
                    <div class="product-single-carousel owl-carousel owl-theme">
                        <div class="product-item">
                            <img src="{{asset('uploads/'.$imagem)}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 product-single-details">
                <h1 class="product-title">{{$produto->nomeecommerce}}</h1>

                <!--
                <div class="ratings-container">
                    <div class="product-ratings">
                        <span class="ratings" style="width:60%"></span>
                    </div>
                    <a href="#" class="rating-link">( 6 Reviews )</a>
                </div>
                !-->
                <div class="ratings-container">
                    {{$produto->codprod}}
                </div>

                <hr class="short-divider">

                <!--
                <div class="price-box">
                    <span class="product-price">$49</span>
                </div>
                !-->

                <div class="product-desc">
                    <p>
                        <?php
                        if ($produto->informacoestecnicas != "<CLOB>") {
                            echo $produto->informacoestecnicas;
                        }
                        ?>
                    </p>
                </div>

                <div class="product-filters-container">
                    <div class="product-single-filter mb-2">
                        <label>Unidade:</label>
                        <label><b>{{$produto->unidade}}</b></label>
                    </div>
                </div>

                <!--
                <div class="product-filters-container">
                    <div class="product-single-filter mb-2">
                        <label>Sizes:</label>
                        <ul class="config-size-list">
                            <li class="active"><a href="#">S</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">X</a></li>
                        </ul>
                    </div>
                </div>
                !-->

                <hr class="divider">

                <div class="product-action">
                    <div class="product-single-qty">
                        <input class="horizontal-quantity form-control" type="text" id="qtdeSelecionada" name="qtdeSelecionada">
                    </div>
                    <a href="javascript:adicionarProdutoAoCarrinho()" class="btn btn-dark add-cart icon-shopping-cart" title="Add to Cart">Adicionar ao orçamento</a>
                </div>
                <form method="POST" id="addItem" name="addItem" action="{{ route('addItemNocarrinho') }}">
                    @csrf
                    <input type="hidden" class="form-control" name="produto_id" id="produto_id" value="{{ $produto->id }}">
                    <input type="hidden" class="form-control" name="produtoQuantidade" id="produtoQuantidade" value="">
                </form>
                <script>
                    function adicionarProdutoAoCarrinho() {
                        //alert(document.getElementById('qtdeSelecionada').value);
                        document.getElementById('produtoQuantidade').value = document.getElementById('qtdeSelecionada').value;
                        document.getElementById('addItem').submit();
                    }
                </script>

                <hr class="divider mb-1">

                <!--
                <div class="product-single-share">
                    <label class="sr-only">Share:</label>
                    <div class="social-icons mr-2">
                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                        <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                        <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                        <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                    </div>
                    <a href="#" class="add-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                </div>
                !-->

            </div>
        </div>
    </div>

    <div class="product-single-tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Especificações Técnicas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="product-tab-more-info" data-toggle="tab" href="#product-more-info-content" role="tab" aria-controls="product-more-info-content" aria-selected="false">Informações</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                <div class="product-desc-content">
                    <?php
                    //dd($produto->informacoestecnicas);
                    $x = explode("\r\n", $produto->dadostecnicos);
                    //dd($x);
                    //http://localhost:8000/showproduto/3725
                    ?>
                    <p>
                    <div class="" style="width: 100%;">
                        <table class="table">
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($x); $i++) {
                                    $p = explode("->", $x[$i]);
                                    //dd($p);
                                    if (count($p) == 2) {
                                        echo "<tr>";
                                        echo "<td style='width: 25%;'>" . $p[0] . "</td>";
                                        echo "<td style='width: 75%;'>" . $p[1] . "</td>";
                                        echo "</tr>";
                                    } else {
                                        echo "<tr>";
                                        echo "<td colspan='2'><b>" . $p[0] . "&nbsp;</b></td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </p>
                </div>
            </div>

            <div class="tab-pane fade fade" id="product-more-info-content" role="tabpanel" aria-labelledby="product-tab-more-info">
                <div class="product-desc-content">
                    <p>
                        <?php
                        if ($produto->informacoestecnicas != "<CLOB>") {
                            echo $produto->informacoestecnicas;
                        }
                        ?>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="products-section pt-0">
        <h2 class="section-title">Produtos relacionados</h2>

        <div class="products-slider owl-carousel owl-theme dots-top">


            @foreach ($relacionados as $relacionado)
            <div class="product-default inner-quickview inner-icon">
                <figure>
                    <a href="{{route('showproduto',$relacionado->linkdescricao)}}">
                        <img src="{{asset('uploads/'.$relacionado->dirfotoprod)}}">
                    </a>
                    <div class="btn-icon-group">
                        <!--<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>!-->
                        <a href="javascript:addItemAoCarrinhoQuick({{$relacionado->linkdescricao}})" class="btn-icon btn-add-cart"><i class="icon-shopping-cart"></i></a>
                    </div>
                    <script>
                        function addItemAoCarrinhoQuick(id) {
                            $('#addCartModal').modal('show');
                            $.ajax({
                                'processing': true,
                                'serverSide': true,
                                type: "GET",
                                data: {
                                    '_token': "{{csrf_token()}}",
                                    produto_id: id,
                                },
                                url: '{{URL::to("/addItemNocarrinhoAjax")}}',
                                datatype: "json",
                                success: function(modelo) {
                                    if (modelo === 'ok') {
                                        //deu bom
                                    } else {
                                        //deu erro
                                    }
                                }
                            });
                        }
                    </script>
                    <a href="{{route('showprodutoquick',$relacionado->linkdescricao)}}" class="btn-quickview" title="Quick View">Ver produto</a>
                </figure>
                <div class="product-details">
                    <!--
                    <div class="category-wrap">
                        <div class="category-list">
                            <a href="category.html" class="product-category">{{$relacionado->linkdescricao}}</a>
                        </div>
                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                    </div>
                    !-->
                    <h2 class="product-title">
                        <a href="{{route('showproduto',$relacionado->linkdescricao)}}">{{$relacionado->nomeecommerce}}</a>
                    </h2>
                    <!--
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                    </div>
                    <div class="price-box">
                        <span class="product-price">$33.00</span>
                    </div>
                    !-->
                </div>
            </div>
            @endforeach





        </div><!-- End .products-slider -->
    </div><!-- End .products-section -->
</div><!-- End .container -->

@endsection