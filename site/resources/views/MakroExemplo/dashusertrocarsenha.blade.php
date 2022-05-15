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
            <h2>Modificar senha</h2>

            @if(Session::has('message'))
            <div class="alert alert-{{Session::get('cor')}} alert-intro" role="alert">
                {{Session::get('message')}}
            </div>
            @endif

            @if($errors->all())
            <div class="alert alert-danger alert-intro" role="alert">
                @foreach($errors->all() as $erro => $value)
                <li>{{$value}}</li>
                @endforeach
            </div>
            @endif

            <form method="POST" action="{{ route('atualizaSenha') }}">
                @csrf
                <input type="hidden" class="form-control" name="id_user" id="id_user" value="{{$user->id}}">
                <input name="_method" type="hidden" value="PUT">

                <div class="form-group required-field">
                    <label for="old_password">Senha anterior</label>
                    <input type="password" class="form-control" id="old_password" name="old_password" required>
                </div>

                <div class="form-group required-field">
                    <label for="password">Nova senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group required-field">
                    <label for="password_confirmation">Confirme a nova senha</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="mb-2"></div>

                <div id="account-chage-pass">
                    <h3 class="mb-2">Change Password</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group required-field">
                                <label for="acc-pass2">Password</label>
                                <input type="password" class="form-control" id="acc-pass2" name="acc-pass2">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group required-field">
                                <label for="acc-pass3">Confirm Password</label>
                                <input type="password" class="form-control" id="acc-pass3" name="acc-pass3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-footer">
                    <div class="form-footer-right">
                        <button type="submit" class="btn btn-primary">Salvar nova senha</button>
                    </div>
                </div>
            </form>
        </div>

        @include('dashuserMENU')

    </div>
</div>

<div class="mb-5"></div>

@endsection