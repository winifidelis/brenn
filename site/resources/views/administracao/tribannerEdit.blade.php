@extends('layouts.adm.temaLTE')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Editar tri-banner</h1>
                    <h5 class="m-0">Atualize uma imagem por vez.</h5>
                    <h5 class="m-0">Atenção ao tamanho das imagens para não desconfigurar o site.</h5>
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
                <form method="POST" name="form_tribanner" id="form_tribanner" action="{{ route('tribanner.update' , 1) }}" enctype="multipart/form-data">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                    <input name="id_tribanner" id="id_tribanner" value="" type="hidden" value="PUT">

                    <div class="row">
                        @foreach($tribanners as $fig)
                        <div class="col-4">
                            <div class="col-12 text-center">
                                <?php
                                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get('tribanner/' . $fig->imagem));
                                ?>

                                <img src="{{asset('uploads/'.'tribanner/' . $fig->imagem)}}">
                            </div>
                            <small><code>Selecione uma imagem com largura máxima de 360.</code></small>
                            <div class="input-group py-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imagem{{$fig->id}}" name="imagem{{$fig->id}}">
                                    <label class="custom-file-label" for="imagem">Selecione uma nova imagem</label>
                                </div>
                            </div>
                            <div class="form-group pt-3">
                                <label for="descricao">Link interno</label>
                                <select class="form-control" name="link{{$fig->id}}" id="link{{$fig->id}}">
                                    <option value="semlink" {{$fig->link=='semlink'?'selected':''}}>Sem link</option>
                                    <option value="quemsomos" {{$fig->link=='quemsomos'?'selected':''}}>Quem Somos</option>
                                    <option value="nossosservicos" {{$fig->link=='nossosservicos'?'selected':''}}>Nossos serviços</option>
                                    <option value="formardepagamento" {{$fig->link=='formardepagamento'?'selected':''}}>Formas de pagamento</option>
                                    <option value="trocaedevolucao" {{$fig->link=='trocaedevolucao'?'selected':''}}>Troca e devolução</option>
                                    <option value="engenharia" {{$fig->link=='engenharia'?'selected':''}}>Engenharia</option>
                                    <option value="projetos" {{$fig->link=='projetos'?'selected':''}}>Projetos</option>
                                    <option value="contato" {{$fig->link=='contato'?'selected':''}}>Contato</option>
                                    <option value="trabalheconosco" {{$fig->link=='trabalheconosco'?'selected':''}}>Trabalhe conosco</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Link externo</label>
                                <input class="form-control" type="text" name="linkexterno{{$fig->id}}" id="linkexterno{{$fig->id}}" value="{{$fig->linkexterno}}">
                                <small><code>Atenção, ao colocar o link externo utilize o endereço completo. Ex: https://www.google.com.br/</code></small><br />
                                <small><code>Caso não tenha nada digitado no link externo o programa usará o link interno, caso tenha algo digitado no link externo o programa usará o link externo.</code></small>
                            </div>
                            <a href="javascript:atualizartribanner({{$fig->id}})" class='btn bg-gradient-success btn-block'>Atualizar tribanner</a>
                        </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script>
    function atualizartribanner(id) {
        if (document.getElementById('imagem' + id).value == "") {
            swalWithBootstrapButtons.fire({
                title: 'Aviso!',
                text: "Você não selecionou imagem para o item " + id,
                icon: 'error',
                confirmButtonText: 'OK',
            })
            return;
        }
        document.getElementById('id_tribanner').value = id;
        document.getElementById('form_tribanner').submit();
    }
</script>
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