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
            <h2>Modificar dados</h2>

            @if($errors->all())
            <div class="alert alert-danger alert-intro" role="alert">
                <h4 class="alert-heading">Erro</h4>
                @foreach($errors->all() as $erro => $value)
                <li>{{$value}}</li>
                @endforeach
            </div>
            @endif

            <form method="POST" action="{{ route('atualizarDados') }}">
                @csrf
                <input type="hidden" class="form-control" name="id_user" id="id_user" value="{{$user->id}}">
                <input name="_method" type="hidden" value="PUT">

                <label for="name">Nome</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus placeholder="Nome completo">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="cpf">{{$user->tipopessoa == 'f'?'CPF':'CNPJ'}}</label>
                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{$user->tipopessoa == 'f'?$user->cpf:$user->cnpj}}" required autofocus disabled>
                @error('cpf')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email" placeholder="Email" disabled>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="cep">CEP</label>
                <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{$user->cep}}" autocomplete="cep" autofocus placeholder="Informe seu CEP" maxlength="10" size="10" onkeydown="javascript: fMasc(this, mCEP);" onchange="javascript: fMasc(this, pesquisacep);">

                <label for="endereco">Endereço</label>
                <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{$user->endereco}}" autocomplete="endereco" autofocus placeholder="Informe seu endereço">

                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="AC" {{$user->estado == 'AC'?'selected':''}}>Acre</option>
                    <option value="AL" {{$user->estado == 'AL'?'selected':''}}>Alagoas</option>
                    <option value="AP" {{$user->estado == 'AP'?'selected':''}}>Amapá</option>
                    <option value="AM" {{$user->estado == 'AM'?'selected':''}}>Amazonas</option>
                    <option value="BA" {{$user->estado == 'BA'?'selected':''}}>Bahia</option>
                    <option value="CE" {{$user->estado == 'CE'?'selected':''}}>Ceará</option>
                    <option value="DF" {{$user->estado == 'DF'?'selected':''}}>Distrito Federal</option>
                    <option value="ES" {{$user->estado == 'ES'?'selected':''}}>Espírito Santo</option>
                    <option value="GO" {{$user->estado == 'GO'?'selected':''}}>Goiás</option>
                    <option value="MA" {{$user->estado == 'MA'?'selected':''}}>Maranhão</option>
                    <option value="MT" {{$user->estado == 'MT'?'selected':''}}>Mato Grosso</option>
                    <option value="MS" {{$user->estado == 'MS'?'selected':''}}>Mato Grosso do Sul</option>
                    <option value="MG" {{$user->estado == 'MG'?'selected':''}}>Minas Gerais</option>
                    <option value="PA" {{$user->estado == 'PA'?'selected':''}}>Pará</option>
                    <option value="PB" {{$user->estado == 'PB'?'selected':''}}>Paraíba</option>
                    <option value="PR" {{$user->estado == 'PR'?'selected':''}}>Paraná</option>
                    <option value="PE" {{$user->estado == 'PE'?'selected':''}}>Pernambuco</option>
                    <option value="PI" {{$user->estado == 'PI'?'selected':''}}>Piauí</option>
                    <option value="RJ" {{$user->estado == 'RJ'?'selected':''}}>Rio de Janeiro</option>
                    <option value="RN" {{$user->estado == 'RN'?'selected':''}}>Rio Grande do Norte</option>
                    <option value="RS" {{$user->estado == 'RS'?'selected':''}}>Rio Grande do Sul</option>
                    <option value="RO" {{$user->estado == 'RO'?'selected':''}}>Rondônia</option>
                    <option value="RR" {{$user->estado == 'RR'?'selected':''}}>Roraima</option>
                    <option value="SC" {{$user->estado == 'SC'?'selected':''}}>Santa Catarina</option>
                    <option value="SP" {{$user->estado == 'SP'?'selected':''}}>São Paulo</option>
                    <option value="SE" {{$user->estado == 'SE'?'selected':''}}>Sergipe</option>
                    <option value="TO" {{$user->estado == 'TO'?'selected':''}}>Tocantins</option>
                </select>

                <label for="cidade">Cidade</label>
                <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{$user->cidade}}" autocomplete="cidade" autofocus placeholder="Informe sua cidade">

                <label for="bairro">Bairro</label>
                <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{$user->bairro}}" autocomplete="bairro" autofocus placeholder="Informe seu bairro">

                <label for="rua">Rua</label>
                <input id="rua" type="text" class="form-control @error('rua') is-invalid @enderror" name="rua" value="{{$user->rua}}" autocomplete="rua" autofocus placeholder="Informe sua rua">

                <label for="complemento">Complemento</label>
                <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{$user->complemento}}" autocomplete="complemento" autofocus placeholder="Complemento de seu endereço">

                <div class="form-footer">

                    <div class="form-footer-right">
                        <button type="submit" class="btn btn-primary">Atualizar dados</button>
                    </div>
                </div>
            </form>
        </div>

        @include('dashuserMENU')

    </div>
</div>

<div class="mb-5"></div>

@endsection