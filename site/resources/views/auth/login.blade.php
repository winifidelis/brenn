@extends('layouts.site.siteLayout')

@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="heading">
                <h2 class="title">Login</h2>
                <p>Você tem uma conta no site? Faça o login para ter uma experiência melhor.</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                @captcha('pt-BR')
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Seu email" required>
                <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
                @error('email')
                <strong style="color: red;">{{ $message }}</strong>
                @enderror
                @error('password')
                <strong style="color: red;">{{ $message }}</strong>
                @enderror

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                    <a href="{{ route('password.request') }}" class="forget-pass"> Esqueceu sua senha?</a>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="heading">
                <h2 class="title">Criar nova conta</h2>
                <p>Ao criar uma conta em nossa loja, você poderá passar pelo processo de finalização dos pedidos mais rapidamente, e ter um atendimento personalizado.</p>
            </div>

            <a href="{{route('register')}}" class="btn btn-primary">Criar conta</a>
        </div>

    </div>
</div>

<div class="mb-5"></div>
@endsection