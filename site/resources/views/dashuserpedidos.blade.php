@extends('layouts.site.siteLayout')

@section('content')

<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-9 order-lg-last dashboard-content">
            <h2>Meus orçamentos</h2>

            <!--
            <div class="alert alert-success alert-intro" role="alert">
                Alerta
            </div>
            !-->

            <!--
            <div class="alert alert-success" role="alert">
                Oi, <strong>pessoa</strong> seja feliz.
            </div>
            !-->

            <div class="mb-4"></div>

            <h3>Informações de seus orçamentos</h3>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Lista de orçamentos
                        </div>

                        <div class="card-body">
                            <ul class="list">
                                @foreach($pedidos as $item)
                                <li><a href="javascript:mostrarTabelaItens('{{$item->id}}')">{{date('d/m/Y H:i:s',strtotime($item['created_at']))}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <script>
                    function mostrarTabelaItens(id) {
                        //apagar todos
                        @foreach($pedidos as $item)
                        document.getElementById("tabela_itens_" + {{$item->id}}).style.display = 'none';
                        @endforeach
                        //mostrar o que eu quero
                        document.getElementById("tabela_itens_" + id).style.display = 'block';
                    }
                </script>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Lista de itens
                        </div>

                        <div class="card-body">
                            @foreach($pedidos as $item)
                            <table class="table table-step-shipping" style="display: none;" id="tabela_itens_{{$item->id}}">
                                <tbody>
                                    @foreach($item['listaprodutos'] as $lista)
                                    <?php
                                    $produto = App\Models\Produto::find($lista['produto_id']);
                                    ?>
                                    <tr>
                                        <td>{{$produto->nomeecommerce}}</td>
                                        <td>{{$lista['produtoQuantidade']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('dashuserMENU')

    </div>
</div>

<div class="mb-5"></div>

@endsection