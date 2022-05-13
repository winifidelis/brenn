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
        <h2 class="title">Criar Nova Conta de Cliente</h2>
        <p>Informe seu dados.</p>
      </div>
      <!--
      primary
      secondary
      success
      info
      warning
      danger
      light
      dark
      !-->
      <!--
      <div class="alert alert-primary alert-intro" role="alert">
        Azul
      </div>
      <div class="alert alert-secondary alert-intro" role="alert">
        Cinza
      </div>
      <div class="alert alert-success alert-intro" role="alert">
        Verde
      </div>
      <div class="alert alert-info alert-intro" role="alert">
        Azulzinho
      </div>
      <div class="alert alert-warning alert-intro" role="alert">
        Amarelo
      </div>
      <div class="alert alert-danger alert-intro" role="alert">
        Vermelho
      </div>
      <div class="alert alert-light alert-intro" role="alert">
        Transparente
      </div>
      <div class="alert alert-dark alert-intro" role="alert">
        Cinza escuro
      </div>
      !-->
      
      @if($errors->all())
      <div class="alert alert-danger alert-intro" role="alert">
        <h4 class="alert-heading">Erro</h4>
        @foreach($errors->all() as $erro => $value)
        <li>{{$value}}</li>
        @endforeach
      </div>
      @endif

      <form method="POST" action="{{ route('register') }}">
        @csrf
        @captcha('pt-BR')
        <div class="checkout-step-shipping">
          <h2 class="step-title">Tipo do cadastro</h2>
          <table class="table table-step-shipping">
            <tbody>
              <tr>
                <td width=10%><input type="radio" name="tipoPessoaSelecionada" id="checkfisica" value="fisica" onclick="javascript:mudarTipoPessoa()" checked></td>
                <td width=90%><strong>Física</strong></td>
              </tr>
              <tr>
                <td width=10%><input type="radio" name="tipoPessoaSelecionada" id="checkjuridica" value="juridica" onclick="javascript:mudarTipoPessoa()"></td>
                <td width=90%><strong>Jurídica</strong></td>
              </tr>
            </tbody>
          </table>
        </div>

        <script>
          function mudarTipoPessoa() {
            if (document.getElementById('checkfisica').checked) {
              document.getElementById('divCPF').style.display = 'block';
              document.getElementById('divCNPJ').style.display = 'none';
              document.getElementById('cpf').value = '';
              document.getElementById('cnpj').value = '123456789';
            } else {
              document.getElementById('divCPF').style.display = 'none';
              document.getElementById('divCNPJ').style.display = 'block';
              document.getElementById('cpf').value = '123456789';
              document.getElementById('cnpj').value = '';
            }
          }
        </script>

        <label for="name">Nome completo</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome completo">
        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <div id="divCPF" style="display: block;">
        <label for="cpf">CPF</label>
          <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus placeholder="Informe seu CPF" maxlength="14" size="14" onkeydown="javascript: fMasc(this, mCPF);">
          @error('cpf')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div id="divCNPJ" style="display: none;">
        <label for="cnpj">CNPJ</label>
          <input id="cnpj" type="text" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="123456789" required autocomplete="cnpj" autofocus placeholder="Informe seu CNPJ" maxlength="18" size="18" onkeydown="javascript: fMasc(this, mCNPJ);">
          @error('cnpj')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <label for="email">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="password">Senha</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="password-confirm">Confirme a senha</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar senha">

        <label for="teleonfe">Telefone</label>
        <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" autocomplete="telefone" autofocus placeholder="Informe seu telefone" maxlength="15" size="15" onkeydown="javascript: fMasc(this, mTel);">

        <label for="whatsapp">Whatsapp</label>
        <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" autocomplete="whatsapp" autofocus placeholder="Informe seu whatsapp" maxlength="15" size="15" onkeydown="javascript: fMasc(this, mTel);">
        @error('whatsapp')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="cep">CEP</label>
        <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" autocomplete="cep" autofocus placeholder="Informe seu CEP" maxlength="10" size="10" onkeydown="javascript: fMasc(this, mCEP);" onchange="javascript: fMasc(this, pesquisacep);">

        <label for="endereco">Endereço</label>
        <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" autocomplete="endereco" autofocus placeholder="Informe seu endereço">

        <label for="estado">Estado</label>
        <select name="estado" id="estado" class="form-control">
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO" selected>Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>

        <label for="cidade">Cidade</label>
        <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}" autocomplete="cidade" autofocus placeholder="Informe sua cidade">

        <label for="bairro">Bairro</label>
        <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" autocomplete="bairro" autofocus placeholder="Informe seu bairro">

        <label for="rua">Rua</label>
        <input id="rua" type="text" class="form-control @error('rua') is-invalid @enderror" name="rua" value="{{ old('rua') }}" autocomplete="rua" autofocus placeholder="Informe sua rua">

        <label for="complemento">Complemento</label>
        <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}" autocomplete="complemento" autofocus placeholder="Complemento de seu endereço">

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="checkboxemail" name="checkboxemail">
          <label class="custom-control-label" for="checkboxemail">Desejo receber informações sobre novidade e promoções por email.</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="checkboxwhatsapp" name="checkboxwhatsapp">
          <label class="custom-control-label" for="checkboxwhatsapp">Desejo receber informações sobre novidade e promoções pelo whatsapp.</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="checkboxregulamento" name="checkboxregulamento" require>
          <label class="custom-control-label" for="checkboxregulamento">Li e concordo com a política de privacidade.</label>
          <a href="" data-toggle="modal" data-target="#mostrarRegulamento">Ler a política de privacidade.</a>
        </div>
        @error('checkboxregulamento')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror






        <div class="form-footer">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <a href="{{ route('login') }}" class="forget-pass"> Já possui um cadastro?</a>
        </div>
      </form>
    </div>
    <div class="col-md-6">

    </div>

  </div>
</div>

<div class="mb-5"></div>
@endsection