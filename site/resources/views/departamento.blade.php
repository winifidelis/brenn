@extends('layouts.site.siteLayout')

@section('content')

<div class="container position-relative">
    <div class="row">
        <?php
        $imagem = null;
        $imagemExiste = \Illuminate\Support\Facades\Storage::disk('disk_makro')->exists("catbig/" . $produtodepartamento->imagembig);
        if ($imagemExiste) {
            //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("catbig/" . $produtodepartamento->imagembig));
            $imagem = "catbig/" . $produtodepartamento->imagembig;
        } else {
            //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("catbig/default.jpg"));
            $imagem = "catbig/default.jpg";
        }
        ?>
        <img src="{{asset('uploads/'.$imagem)}}">
    </div>
</div>

<div class="container">

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('inicio') }}"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">{{$produtodepartamento->descricaosite}}</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-9 main-content">
            <nav class="toolbox">
                <div class="toolbox-left">
                    <div class="toolbox-item toolbox-sort">
                        <label>Ordenado por:</label>
                        <div class="select-custom">
                            <select name="orderby" id="orderby" class="form-control" onchange="javascript:modificarQuantidadeApresentada('','')">
                                <option value="az" {{$listagemprodutoordem == 'az' ? ' selected' : '' }}>Selecione</option>
                                <option value="az" {{$listagemprodutoordem == 'az' ? ' selected' : '' }}>A - Z</option>
                                <option value="za" {{$listagemprodutoordem == 'za' ? ' selected' : '' }}>Z - A</option>
                                <option value="lancamento" {{$listagemprodutoordem == 'lancamento' ? ' selected' : '' }}>Data lançamento</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="toolbox-right">
                    <div class="toolbox-item toolbox-show">
                        <label>Apresentar:</label>
                        <div class="select-custom">
                            <select name="quantidadeApresentada" id="quantidadeApresentada" class="form-control" onchange="javascript:modificarQuantidadeApresentada('','')">
                                <option value="12" {{$listagemprodutoquantidade == '12' ? ' selected' : '' }}>12</option>
                                <option value="24" {{$listagemprodutoquantidade == '24' ? ' selected' : '' }}>24</option>
                                <option value="36" {{$listagemprodutoquantidade == '36' ? ' selected' : '' }}>36</option>
                                <option value="48" {{$listagemprodutoquantidade == '48' ? ' selected' : '' }}>48</option>
                                <option value="60" {{$listagemprodutoquantidade == '60' ? ' selected' : '' }}>60</option>
                            </select>
                        </div>
                    </div>
                    <!--
                    <div class="toolbox-item layout-modes">
                        <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                            <i class="icon-mode-grid"></i>
                        </a>
                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                            <i class="icon-mode-list"></i>
                        </a>
                    </div>
                    !-->
                </div>
            </nav>
            <form method="get" id="form_modifica_apresentacao" action="{{ route('modificarlistagemproduto') }}">
                <input type="hidden" name="listagemprodutoquantidade" id="listagemprodutoquantidade" value="{{$listagemprodutoquantidade}}">
                <input type="hidden" name="listagemprodutoordem" id="listagemprodutoordem" value="{{$listagemprodutoordem}}">
                <input type="hidden" name="departamento_id" id="departamento_id" value="{{$produtodepartamento->id}}">
                <input type="hidden" name="tipolista" id="tipolista" value="dep">

                <input type="hidden" name="getPorDepartamento" id="getPorDepartamento" value="">
                <input type="hidden" name="getPorSecao" id="getPorSecao" value="{{$listagemprodutoordemsecao}}">
                <input type="hidden" name="getPorMarca" id="getPorMarca" value="{{$listagemprodutoordemmarca}}">

            </form>
            <script>
                function modificarQuantidadeApresentada(getSec, getMar) {
                    if (getSec != '') {
                        if (getSec.indexOf("XXX") != -1) {
                            //document.getElementById('removePorDepartamento').value = getSec;
                            getSec = getSec.replace('XXX ', '');
                            x = document.getElementById('getPorSecao').value;
                            x = x.replace("-*-" + getSec, '');
                            document.getElementById('getPorSecao').value = x;
                        } else {
                            document.getElementById('getPorSecao').value += "-*-" + getSec;
                        }
                    }
                    if (getMar != '') {
                        if (getMar.indexOf("XXX") != -1) {
                            //document.getElementById('getPorMarca').value = getMar;
                            getMar = getMar.replace('XXX ', '');
                            x = document.getElementById('getPorMarca').value;
                            x = x.replace("-*-" + getMar, '');
                            document.getElementById('getPorMarca').value = x;
                        } else {
                            document.getElementById('getPorMarca').value += "-*-" + getMar;
                        }
                    }
                    document.getElementById('listagemprodutoquantidade').value = document.getElementById('quantidadeApresentada').value
                    document.getElementById('listagemprodutoordem').value = document.getElementById('orderby').value
                    document.getElementById('form_modifica_apresentacao').submit();
                }
            </script>

            <div class="row">

                @foreach ($produtosdepartamento as $produto)
                <div class="col-6 col-sm-4">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{route('showproduto',$produto->linkdescricao)}}">

                                <img src="{{asset('uploads/'.$produto->dirfotoprod)}}">
                            </a>
                            <div class="btn-icon-group">
                                <!--<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>!-->
                                <a href="javascript:addItemAoCarrinhoQuick({{$produto->linkdescricao}})" class="btn-icon btn-add-cart"><i class="icon-shopping-cart"></i></a>
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
                            <a href="{{route('showprodutoquick',$produto->linkdescricao)}}" class="btn-quickview" title="Quick View">Ver produto</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">

                                <div class="category-wrap">
                                    <div class="category-list">
                                        {{$produto->marca}}
                                    </div>
                                    <!--<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>!-->
                                </div>

                                <!--
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                !-->
                            </div>
                            <h2 class="product-title">
                                <a href="{{route('showproduto',$produto->linkdescricao)}}">{{$produto->nomeecommerce}}</a>
                            </h2>
                            <!--
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                            <div class="price-box">
                                <span class="old-price">$90.00</span>
                                <span class="product-price">$70.00</span>
                            </div>
                            !-->
                        </div>
                    </div>
                </div>
                @endforeach



            </div>

            {{ $produtosdepartamento->links('departamentoPaginacao') }}
        </div>

        <div class="sidebar-overlay"></div>
        <div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
        <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
            <div class="sidebar-wrapper">
                @if ($listagemprodutoordemsecao != "" || $listagemprodutoordemmarca != "")
                <?php
                $listagemprodutoordemsecao = explode("-*-", $listagemprodutoordemsecao);
                $listagemprodutoordemmarca = explode("-*-", $listagemprodutoordemmarca);
                unset($listagemprodutoordemsecao[0]);
                unset($listagemprodutoordemmarca[0]);
                ?>
                <div class="widget">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Filtro</a>
                    </h3>
                    <div class="collapse show" id="widget-body-2">
                        <div class="widget-body">
                            <ul class="cat-list">
                                @foreach ($listagemprodutoordemsecao as $secao)
                                <li><a href="javascript:modificarQuantidadeApresentada('XXX {{$secao}}','')">{{$secao}} <b>[X]</b></a></li>
                                @endforeach
                                @foreach ($listagemprodutoordemmarca as $marca)
                                <li><a href="javascript:modificarQuantidadeApresentada('','XXX {{$marca}}')">{{$marca}} <b>[X]</b></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
                <div class="widget">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Seções</a>
                    </h3>
                    <div class="collapse show" id="widget-body-2">
                        <div class="widget-body">
                            <ul class="cat-list">
                                @foreach ($secoes as $secao)
                                <li><a href="javascript:modificarQuantidadeApresentada('{{$secao->secao}}','')">{{$secao->secao}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Marcas</a>
                    </h3>
                    <div class="collapse show" id="widget-body-2">
                        <div class="widget-body">
                            <ul class="cat-list">
                                @foreach ($marcas as $marca)
                                <li><a href="javascript:modificarQuantidadeApresentada('','{{$marca->marca}}')">{{$marca->marca}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>

<div class="mb-3"></div>

@endsection