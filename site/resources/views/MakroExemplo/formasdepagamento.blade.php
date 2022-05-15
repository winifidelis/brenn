@extends('layouts.site.siteLayout')

@section('content')
<!--
<div class="page-header page-header-bg text-left" style="background: 70%/cover #D4E1EA url('{{asset('assets_site/assets/images/mks_FormaPagamento.jpg')}}');">
    <div class="container">
        
        <h1>
            FORMAS DE PAGAMENTO</h1>
            
    </div>
</div>
!-->
<div class="container position-relative">
    <div class="row">
        <img src="{{asset('assets_site/assets/images/mks_FormaPagamento.jpg')}}">
    </div>
</div>

<div class="features-section">
    <div class="container">
        <h2 class="subtitle">Cartões</h2>
        <div class='row'>
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Visa.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Master.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Elo.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/electron.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Mastro.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Amex.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Diners.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
        </div>
    </div>
</div>

<div class="features-section">
    <div class="container">
        <h2 class="subtitle">Transações Bancárias</h2>
        <div class='row'>
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Pix.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Boleto.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/TedeDoc.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
        </div>
    </div>
</div>

<div class="features-section">
    <div class="container">
        <h2 class="subtitle">Demais Formas de Pagamentos</h2>
        <div class='row'>
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Dinheiro.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/BNDES.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/ChequeMoradia.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Construcard.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
        </div>
    </div>
</div>

<div class="features-section">
    <div class="container">
        <h2 class="subtitle">Bancos</h2>
        <div class='row'>
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/Bradesco.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/BancodoBrasil.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagensFormasPagamento/CEF.jpg')}}" style="height: 75px;">&nbsp;&nbsp;&nbsp;
        </div>
    </div>
</div>


@endsection