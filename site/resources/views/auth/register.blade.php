@extends('layouts.site.layoutEkkaPadrao')

@section('content')

<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row ec_breadcrumb_inner">
          <div class="col-md-6 col-sm-12">
            <h2 class="ec-breadcrumb-title">Registro</h2>
          </div>
          <div class="col-md-6 col-sm-12">
            <ul class="ec-breadcrumb-list">
              <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="ec-breadcrumb-item active">Registro</li>
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

            <!-- https://www.flextool.com.br/tabela_cores.html !-->
            @if($errors->all())
            <div class="alert alert-danger alert-intro" style="background-color: #F08080">
              <h4 class="alert-heading" style="color:white">Erro ao cadastrar</h4>
              <ul class="ec-check-list">
                @foreach($errors->all() as $erro => $value)
                <li style="color:white"><i class="ecicon eci-exclamation-circle"></i>&nbsp;{{$value}}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
              @csrf
              @captcha('pt-BR')

              <div class="row">
                <div class="col-12">
                  <div class="ec-check-block-content">
                    <div class="ec-check-subtitle">Tipo do cadastro</div>
                    <span class="ec-new-option">
                      <span>
                        <input type="radio" id="checkfisica" name="tipoPessoaSelecionada" value="fisica" onclick="javascript:mudarTipoPessoa()" checked>
                        <label for="checkfisica">Física</label>
                      </span>
                      <span>
                        <input type="radio" id="checkjuridica" name="tipoPessoaSelecionada" value="juridica" onclick="javascript:mudarTipoPessoa()">
                        <label for="checkjuridica">Jurídica</label>
                      </span>
                    </span>
                  </div>
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

                <div class="col-lg-6 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Nome Completo</label>
                    <input type="text" id="name" name="name" placeholder="Digite seu nome" required value="{{ old('name') }}" />
                  </span>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="col-lg-3 col-sm-12">
                  <div id="divCPF" style="display: block;">
                    <span class="ec-register-wrap ec-register-half">
                      <label>CPF</label>
                      <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus placeholder="Informe seu CPF" maxlength="14" size="14" onkeydown="javascript: fMasc(this, mCPF);" />
                    </span>
                    @error('cpf')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div id="divCNPJ" style="display: none;">
                    <span class="ec-register-wrap ec-register-half">
                      <label>CNPJ</label>
                      <input type="text" id="cnpj" name="cnpj" value="123456789" required autocomplete="cnpj" autofocus placeholder="Informe seu CNPJ" maxlength="18" size="18" onkeydown="javascript: fMasc(this, mCNPJ);" />
                    </span>
                    @error('cnpj')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-3 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Email</label>
                    <input type="email" id="email" name="email" placeholder="Digiter seu email" required value="{{ old('email') }}" />
                  </span>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="col-lg-6 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Senha</label>
                    <input type="password" id="password" name="password" placeholder="Senha" required autocomplete="new-password" placeholder="Senha" />
                  </span>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="col-lg-6 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Confirme a senha</label>
                    <input type="password" id="password-confirm" name="password_confirmation" placeholder="Senha" required autocomplete="new-password" placeholder="Confirmar senha" />
                  </span>
                </div>


                <div class="col-lg-6 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Telefone</label>
                    <input type="text" id="telefone" name="telefone" value="{{ old('telefone') }}" autocomplete="telefone" autofocus placeholder="Informe seu telefone" maxlength="15" size="15" onkeydown="javascript: fMasc(this, mTel);" />
                  </span>
                </div>

                <div class="col-lg-6 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Whatsapp</label>
                    <input type="text" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}" autocomplete="whatsapp" autofocus placeholder="Informe seu whatsapp" maxlength="15" size="15" onkeydown="javascript: fMasc(this, mTel);" />
                  </span>
                  @error('whatsapp')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="col-lg-4 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>CEP</label>
                    <input type="text" id="cep" name="cep" value="{{ old('cep') }}" autocomplete="cep" autofocus placeholder="Informe seu CEP" maxlength="10" size="10" onkeydown="javascript: fMasc(this, mCEP);" onchange="javascript: fMasc(this, pesquisacep);" />
                  </span>
                </div>

                <div class="col-lg-8 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Endereço</label>
                    <input type="text" id="endereco" name="endereco" value="{{ old('endereco') }}" autocomplete="endereco" autofocus placeholder="Informe seu endereço" />
                  </span>
                </div>

                <div class="col-lg-3 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Bairro</label>
                    <input type="text" id="bairro" name="bairro" value="{{ old('bairro') }}" autocomplete="bairro" autofocus placeholder="Informe seu bairro" />
                  </span>
                </div>

                <div class="col-lg-3 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Rua</label>
                    <input type="text" id="rua" name="rua" value="{{ old('rua') }}" autocomplete="rua" autofocus placeholder="Informe sua rua" />
                  </span>
                </div>

                <div class="col-lg-6 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Complemento</label>
                    <input type="text" id="complemento" name="complemento" value="{{ old('complemento') }}" autocomplete="complemento" autofocus placeholder="Complemento de seu endereço" />
                  </span>
                </div>

                <div class="col-lg-6 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Estado</label>
                    <span class="ec-rg-select-inner">
                      <select name="estado" id="estado" class="ec-register-select">
                        <option value=""selected disabled>Selecione o estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
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
                    </span>
                  </span>
                </div>


                <div class="col-lg-6 col-sm-12">
                  <span class="ec-register-wrap ec-register-half">
                    <label>Cidade</label>
                    <input type="text" id="cidade" name="cidade" value="{{ old('cidade') }}" autocomplete="cidade" autofocus placeholder="Informe sua cidade" />
                  </span>
                </div>

                <div class="ec-sidebar-wrap" style="border: 0px; margin: 0px;">
                  <div class="ec-sidebar-block">
                    <div class="ec-sb-block-content">
                      <ul>
                        <li>
                          <div class="ec-sidebar-block-item">
                            <input type="checkbox" id="checkboxemail" name="checkboxemail" />
                            <label for="checkboxemail" style="margin-left: 25px;"> Desejo receber informações sobre novidade e promoções por email.</label>
                            <span class="checked"></span>
                          </div>
                        </li>
                        <li>
                          <div class="ec-sidebar-block-item">
                            <input type="checkbox" id="checkboxwhatsapp" name="checkboxwhatsapp" />
                            <label for="checkboxemail" style="margin-left: 25px;"> Desejo receber informações sobre novidade e promoções pelo whatsapp.</label>
                            <span class="checked"></span>
                          </div>
                        </li>
                        <li>
                          <div class="ec-sidebar-block-item">
                            <input type="checkbox" id="checkboxregulamento" name="checkboxregulamento" require />
                            <label for="checkboxregulamento" style="margin-left: 25px;">Li e concordo com a política de privacidade.</label>
                            <a href="" data-toggle="modal" data-target="#mostrarRegulamento">Ler a política de privacidade.</a>
                            <span class="checked"></span>
                          </div>
                          @error('checkboxregulamento')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="form-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                  <br><br>
                  <center>
                    <a href="{{ route('login') }}" class="forget-pass"> Já possui um cadastro?</a>
                  </center>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



</section>

@endsection