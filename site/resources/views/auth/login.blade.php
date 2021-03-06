@extends('layouts.site.layoutEkkaPadrao')

@section('content')

<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ec_breadcrumb_inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="ec-breadcrumb-title">Login</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="#">Home</a></li>
                            <li class="ec-breadcrumb-item active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Log In</h2>
                    <h2 class="ec-title">Log In</h2>
                    <p class="sub-title mb-3">Vista Brenn</p>
                </div>
            </div>
            <div class="ec-login-wrapper">
                <div class="ec-login-container">
                    <div class="ec-login-form">
                        <!-- https://www.flextool.com.br/tabela_cores.html !-->
                        @if($errors->all())
                        <div class="alert alert-danger alert-intro" style="background-color: #F08080">
                            <h4 class="alert-heading" style="color:white">Erro ao efetuar login</h4>
                            <ul class="ec-check-list">
                                @foreach($errors->all() as $erro => $value)
                                <li style="color:white"><i class="ecicon eci-exclamation-circle"></i>&nbsp;{{$value}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @captcha
                            @csrf
                            <span class="ec-login-wrap">
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Digite seu email" required />
                            </span>
                            <span class="ec-login-wrap">
                                <label>Senha</label>
                                <input type="password" name="password" placeholder="Digite sua senha" required />
                            </span>
                            <span class="ec-login-wrap ec-login-fp">
                                <label><a href="#">Perdeu a senha?</a></label>
                            </span>
                            <span class="ec-login-wrap ec-login-btn">
                                <button class="btn btn-primary" type="submit">Login</button>
                                <a href="{{route('register')}}" class="btn btn-secondary">Cadastrar</a>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection