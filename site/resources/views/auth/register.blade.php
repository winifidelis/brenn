@extends('layouts.site.layoutEkka')

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
          <h2 class="ec-bg-title">Register</h2>
          <h2 class="ec-title">Register</h2>
          <p class="sub-title mb-3">Vista Brenn</p>
        </div>
      </div>
      <div class="ec-register-wrapper">
        <div class="ec-register-container">
          <div class="ec-register-form">
            <form action="#" method="post">
              <span class="ec-register-wrap ec-register-half">
                <label>Nome</label>
                <input type="text" name="firstname" placeholder="Digite seu nome" required />
              </span>
              <span class="ec-register-wrap ec-register-half">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digiter seu email" required />
              </span>
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
                <button class="btn btn-primary" type="submit">Register</button>
              </span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
//esse include deve sempre ser inserido no final da página
//é ele que mostra o menu lateral que mostra todos os produtos de uma vez só
//é o menu que em os 4 quadradinhos
?>
@include('layouts.site.menuProdutosDireto')

@endsection