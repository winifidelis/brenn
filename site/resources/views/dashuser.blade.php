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
            <h2>Minha conta</h2>

            <!--
            <div class="alert alert-success alert-intro" role="alert">
                Alerta
            </div>
            <div class="alert alert-warning alert-intro" role="alert">
                Alerta
            </div>
            <div class="alert alert-danger alert-intro" role="alert">
                Alerta
            </div>
            !-->

            @if(Session::has('message'))
            <div class="alert alert-{{Session::get('cor')}} alert-intro" role="alert">
                {{Session::get('message')}}
            </div>
            @endif

            <!--
            <div class="alert alert-success" role="alert">
                Oi, <strong>pessoa</strong> seja feliz.
            </div>
            !-->

            <div class="mb-4"></div>

            <h3>Informações da sua conta</h3>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Informações de contato
                            <a href="{{route('user.dashusertrocardados')}}" class="card-edit">Editar</a>
                        </div>

                        <div class="card-body">
                            <p>
                                {{Auth::user()->name}}<br>
                                {{Auth::user()->email}}<br>
                                <a href="{{route('user.dashusertrocarsenha')}}">Alterar senha</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Último orçamento realizado
                            @if (count(Auth::user()->vendas) != 0)
                            <a href="{{route('user.dashuserpedidos')}}" class="card-edit">Ver orçamento</a>
                            @endif
                        </div>

                        <div class="card-body">
                            <p>
                                @if (count(Auth::user()->vendas) != 0)
                            <table class="table table-step-shipping">
                                <tbody>
                                    @foreach($listaUltimoPedido as $item)
                                    <?php
                                    $produto = App\Models\Produto::find($item['produto_id']);
                                    ?>
                                    <tr>
                                        <td>{{$produto->nomeecommerce}}</td>
                                        <td>{{$item['produtoQuantidade']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            Você não possui nenhum orçamento
                            @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--
            <div class="card">
                <div class="card-header">
                    Address Book
                    <a href="#" class="card-edit">Edit</a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="">Default Billing Address</h4>
                            <address>
                                You have not set a default billing address.<br>
                                <a href="#">Edit Address</a>
                            </address>
                        </div>
                        <div class="col-md-6">
                            <h4 class="">Default Shipping Address</h4>
                            <address>
                                You have not set a default shipping address.<br>
                                <a href="#">Edit Address</a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            !-->
        </div>

        @include('dashuserMENU')


    </div>
</div>

<div class="mb-5"></div>

@endsection