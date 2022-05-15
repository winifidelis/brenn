@extends('layouts.adm.temaLTE')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Editar popup principal</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="card">
            @if($errors->all())
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Erro</h4>
                @foreach($errors->all() as $erro => $value)
                <li>{{$value}}</li>
                @endforeach
            </div>
            @endif
            <div class="card-body">
                <form method="POST" action="{{ route('popupprincipal.update' , $popupPrincipal->id) }}" enctype="multipart/form-data">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ativo">Status do popup</label>
                                <select class="form-control" id="ativo" name="ativo">
                                    <option value="0" {{$popupPrincipal->ativo==0?'selected':''}}>Desativado</option>
                                    <option value="1" {{$popupPrincipal->ativo==1?'selected':''}}>Ativado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            $imagem = null;
                            $imagemExiste = \Illuminate\Support\Facades\Storage::disk('disk_makro')->exists("imagempopup/" . $popupPrincipal->imagem);
                            if ($imagemExiste) {
                                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("imagempopup/" . $popupPrincipal->imagem));
                                $imagem = "imagempopup/" . $popupPrincipal->imagem;
                            } else {
                                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("imagempopup/default.jpg"));
                                $imagem = "imagempopup/default.jpg";
                            }
                            ?>
                            <div class="form-group">
                                <img src="{{asset('uploads/'.$imagem)}}">
                                <label for="imagem">Imagem do popup</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="imagem" name="imagem">
                                        <label class="custom-file-label" for="imagem">Selecione uma nova imagem</label>
                                    </div>
                                </div>
                                <small><code>Imagem que será apresentada no popup. 700 X 320</code></small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <button type='submit' class='btn bg-gradient-success btn-block'>Atualizar popup</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scriptsfinais')
<script>
    $(function() {
        bsCustomFileInput.init();

        $('[data-mask]').inputmask();

        //Date range picker
        $('#reservationdate').datetimepicker({
            format: 'DD/MM/YYYY',
        });

        @include('layouts.adm.toastLTE');
    });
</script>

<script>
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true
    })
</script>
@endsection