@extends('layouts.site.layoutEkkaPadrao')

@section('content')

<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row ec_breadcrumb_inner">
          <div class="col-md-6 col-sm-12">
            <h2 class="ec-breadcrumb-title">Register</h2>
          </div>
          <div class="col-md-6 col-sm-12">
            <ul class="ec-breadcrumb-list">
              <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="ec-breadcrumb-item active">Register</li>
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
          <h2 class="ec-bg-title">Registro</h2>
          <h2 class="ec-title">Registro</h2>
          <p class="sub-title mb-3">Vista Brenn</p>
        </div>
      </div>
      <div class="ec-register-wrapper">
        <div class="ec-register-container">
          <div class="ec-register-form">

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

              <span class="ec-register-wrap ec-register-half">
                <label>Nome Completo</label>
                <input type="text" id="name" name="name" placeholder="Digite seu nome" required value="{{ old('name') }}"/>
              </span>
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

              <!-- arrumar !-->
              <div id="divCPF" style="display: block;">
                <label for="cpf">CPF</label>
                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus placeholder="Informe seu CPF" maxlength="14" size="14" onkeydown="javascript: fMasc(this, mCPF);">
                @error('cpf')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <!-- arrumar !-->
              <div id="divCNPJ" style="display: none;">
                <label for="cnpj">CNPJ</label>
                <input id="cnpj" type="text" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="123456789" required autocomplete="cnpj" autofocus placeholder="Informe seu CNPJ" maxlength="18" size="18" onkeydown="javascript: fMasc(this, mCNPJ);">
                @error('cnpj')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <span class="ec-register-wrap ec-register-half">
                <label>Email</label>
                <input type="email" id="email" name="email" placeholder="Digiter seu email" required value="{{ old('email') }}"/>
              </span>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

              <!-- arrumar !-->
              <label for="password">Senha</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

              <!-- arrumar !-->
              <label for="password-confirm">Confirme a senha</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar senha">

              <!-- arrumar !-->
              <label for="teleonfe">Telefone</label>
              <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" autocomplete="telefone" autofocus placeholder="Informe seu telefone" maxlength="15" size="15" onkeydown="javascript: fMasc(this, mTel);">

              <!-- arrumar !-->
              <label for="whatsapp">Whatsapp</label>
              <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" autocomplete="whatsapp" autofocus placeholder="Informe seu whatsapp" maxlength="15" size="15" onkeydown="javascript: fMasc(this, mTel);">
              @error('whatsapp')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

              <!-- arrumar !-->
              <label for="cep">CEP</label>
              <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" autocomplete="cep" autofocus placeholder="Informe seu CEP" maxlength="10" size="10" onkeydown="javascript: fMasc(this, mCEP);" onchange="javascript: fMasc(this, pesquisacep);">

              <!-- arrumar !-->
              <label for="endereco">Endereço</label>
              <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" autocomplete="endereco" autofocus placeholder="Informe seu endereço">

              <!-- arrumar !-->
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

              <!-- arrumar !-->
              <label for="cidade">Cidade</label>
              <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}" autocomplete="cidade" autofocus placeholder="Informe sua cidade">

              <!-- arrumar !-->
              <label for="bairro">Bairro</label>
              <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" autocomplete="bairro" autofocus placeholder="Informe seu bairro">

              <!-- arrumar !-->
              <label for="rua">Rua</label>
              <input id="rua" type="text" class="form-control @error('rua') is-invalid @enderror" name="rua" value="{{ old('rua') }}" autocomplete="rua" autofocus placeholder="Informe sua rua">

              <!-- arrumar !-->
              <label for="complemento">Complemento</label>
              <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}" autocomplete="complemento" autofocus placeholder="Complemento de seu endereço">

              <!-- arrumar !-->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="checkboxemail" name="checkboxemail">
                <label class="custom-control-label" for="checkboxemail">Desejo receber informações sobre novidade e promoções por email.</label>
              </div>

              <!-- arrumar !-->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="checkboxwhatsapp" name="checkboxwhatsapp">
                <label class="custom-control-label" for="checkboxwhatsapp">Desejo receber informações sobre novidade e promoções pelo whatsapp.</label>
              </div>

              <!-- arrumar !-->
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













            <form action="#" method="post">

              
              <span class="ec-register-wrap ec-register-half">
                <label>Telefone</label>
                <input type="text" name="phonenumber" placeholder="Digite seu telefone (whatsapp)" required />
              </span>
              <span class="ec-register-wrap">
                <label>Endereço</label>
                <input type="text" name="address" placeholder="Digite seu endereço" />
              </span>
              <span class="ec-register-wrap ec-register-half">
                <label>Estado</label>
                <span class="ec-rg-select-inner">
                  <select name="ec_select_city" id="ec-select-city" class="ec-register-select">
                    <option selected disabled>City</option>
                    <option value="1">City 1</option>
                    <option value="2">City 2</option>
                    <option value="3">City 3</option>
                    <option value="4">City 4</option>
                    <option value="5">City 5</option>
                  </select>
                </span>
              </span>
              <span class="ec-register-wrap ec-register-half">
                <label>Post Code</label>
                <input type="text" name="postalcode" placeholder="Post Code" />
              </span>
              <span class="ec-register-wrap ec-register-half">
                <label>Country *</label>
                <span class="ec-rg-select-inner">
                  <select name="ec_select_country" id="ec-select-country" class="ec-register-select">
                    <option selected disabled>Country</option>
                    <option value="1">Country 1</option>
                    <option value="2">Country 2</option>
                    <option value="3">Country 3</option>
                    <option value="4">Country 4</option>
                    <option value="5">Country 5</option>
                  </select>
                </span>
              </span>
              <span class="ec-register-wrap ec-register-half">
                <label>Region State</label>
                <span class="ec-rg-select-inner">
                  <select name="ec_select_state" id="ec-select-state" class="ec-register-select">
                    <option selected disabled>Region/State</option>
                    <option value="1">Region/State 1</option>
                    <option value="2">Region/State 2</option>
                    <option value="3">Region/State 3</option>
                    <option value="4">Region/State 4</option>
                    <option value="5">Region/State 5</option>
                  </select>
                </span>
              </span>
              <span class="ec-register-wrap ec-recaptcha">
                <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></span>
                <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                <span class="help-block with-errors"></span>
              </span>
              <span class="ec-register-wrap ec-register-btn">
                <button class="btn btn-primary" type="submit">Registrar</button>
              </span>
            </form>



















          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection