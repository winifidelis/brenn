@extends('layouts.adm.temaLTE')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Editar dados do departamento {{$departamento->descricao}}</h1>
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
                <form method="POST" action="{{ route('departamentoproduto.update' , $departamento->id) }}" enctype="multipart/form-data">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="descricao">Descricao</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="" value="{{$departamento->descricao}}">
                                <small><code>Nome que está no WINTHOR, não poderá ser modificado</code></small>
                            </div>
                            <div class="form-group">
                                <label for="descricaosite">Descrição site</label>
                                <input type="text" class="form-control" id="descricaosite" name="descricaosite" placeholder="" value="{{$departamento->descricaosite}}">
                                <small><code>Nome que será apresentado no site, se estiver vzio será apresentado o nome do WINTHOR.</code></small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            $imagem = null;
                            $imagemExiste = \Illuminate\Support\Facades\Storage::disk('disk_makro')->exists("catbig/" . strtolower($departamento->imagembig));
                            //dd($x,$imagemExiste,$x[count($x) - 1],strtolower("imagens/normais/" . $x[count($x) - 1]));
                            if ($imagemExiste) {
                                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("catbig/" . strtolower($departamento->imagembig)));
                                $imagem = "catbig/" . $departamento->imagembig;
                            } else {
                                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("catbig/default.jpg"));
                                $imagem = "catbig/default.jpg";
                            }
                            ?>
                            <div class="form-group">
                                <img src="{{asset('uploads/'.$imagem)}}">
                                <label for="imagembig">Banner</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="imagembig" name="imagembig">
                                        <label class="custom-file-label" for="imagembig">Selecione uma nova imagem</label>
                                    </div>
                                </div>
                                <small><code>Imagem que será apresentada na página do departamento. 1920 X 370</code></small>
                            </div>

                            <?php
                            $imagem = null;
                            $imagemExiste = \Illuminate\Support\Facades\Storage::disk('disk_makro')->exists("catmini/" . strtolower($departamento->imagemmini));
                            //dd($x,$imagemExiste,$x[count($x) - 1],strtolower("imagens/normais/" . $x[count($x) - 1]));
                            if ($imagemExiste) {
                                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("catmini/" . strtolower($departamento->imagemmini)));
                                $imagem = "catmini/" . $departamento->imagemmini;
                            } else {
                                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("catmini/default.png"));
                                $imagem = "catmini/default.png";
                            }
                            ?>
                            <div class="form-group">
                                <img src="{{asset('uploads/'.$imagem)}}">
                                <br>
                                <label for="imagemmini">Icone</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="imagemmini" name="imagemmini">
                                        <label class="custom-file-label" for="imagemmini">Selecione uma nova imagem</label>
                                    </div>
                                </div>
                                <small><code>Imagem que será apresentada no conjunto de icones no inicio do site. 300 X 300</code></small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <button type='submit' class='btn bg-gradient-success btn-block'>Atualizar Departamento</button>
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