@extends('layouts.adm.temaLTE')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Editar dados do Whatapp do vendedor {{$whatsapp->nome}}</h1>
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
                <form method="POST" action="{{ route('whatsappvendedores.update' , $whatsapp->id) }}">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="{{$whatsapp->nome}}">
                                <small><code>&nbsp;</code></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="" value="{{$whatsapp->email}}">
                                <small><code>&nbsp;</code></small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">WhatsApp</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="" value="{{$whatsapp->whatsapp}}">
                                <small><code>Digite o número no formato: 5562999999999</code></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mensagem</label>
                                <input type="text" class="form-control" id="mensagem" name="mensagem" placeholder="" value="{{$whatsapp->mensagem}}">
                                <small><code>Escreva somente a mensagem</code></small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <button type='submit' class='btn bg-gradient-success btn-block'>Atualizar dados</button>
                            <a href="javascript:excluir()" type='submit' class='btn bg-gradient-danger btn-block'>Excluir vendedor</a>
                        </div>

                    </div>
                </form>
                <form method="POST" action="{{ route('whatsappvendedores.destroy' , $whatsapp->id) }}" id="formExcluirVendedor">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scriptsfinais')
<script>
    function excluir() {
        swalWithBootstrapButtons.fire({
            title: 'Opa?',
            text: "Você deseja mesmo excluir este vendedor?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim, exclua!',
            cancelButtonText: 'Não, cancele!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('formExcluirVendedor').submit();
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelado',
                    'O cliente não será excluido :)',
                    'error'
                )
            }
        })
    }

    $(function() {
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