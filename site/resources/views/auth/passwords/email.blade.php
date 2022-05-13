@extends('layouts.site.siteLayout')

@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('inicio')}}"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Recuperar senha</li>
        </ol>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="heading">
                <h2 class="title">Recuperar senha</h2>
                <p>Digite o seu email para, você receberá um email para modificar a sua senha.</p>
            </div>

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                @captcha('pt-BR')
                <div class="form-group row">

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary">
                        Enviar email
                    </button>
                    <a href="{{ route('login') }}" class="forget-pass"> Efetuar login</a>
                </div>
            </form>

        </div>
        <div class="col-md-6">
            
        </div>

    </div>
</div>

<div class="mb-5"></div>
@endsection