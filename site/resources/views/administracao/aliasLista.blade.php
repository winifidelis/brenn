@extends('layouts.adm.temaLTE')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Lista de alias cadastrados para incorporar buscas</h1>
                </div>
                <!--
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Organizando</li>
                    </ol>
                </div>
                !-->
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header">
                    <h3 class="card-title">
                        Adicionar alias
                    </h3>
                    <div class="card-tools">
                        <!--
                        <a href="#">
                            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;Adicionar alais</button>
                        </a>
                        !-->
                    </div>
                </div>
                <div class="card-body">
                    @if($errors->all())
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Erro</h4>
                        @foreach($errors->all() as $erro => $value)
                        <li>{{$value}}</li>
                        @endforeach
                    </div>
                    @endif
                    <form method="POST" action="{{ route('aliasbusca.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="busca">Palavra a ser buscada</label>
                                    <input type="text" class="form-control" id="busca" name="busca" placeholder="" value="{{ old('busca') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="add">Palavra a ser adicionada a busca</label>
                                    <input type="text" class="form-control" id="add" name="add" placeholder="" value="{{ old('add') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6">
                                <button type='submit' class='btn bg-gradient-success btn-block'>Adicionar alias</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <h3 class="card-title">
                        Lista de alias
                    </h3>
                </div>
                <div class="card-body">
                    <table id="lista_alias" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Palavra buscada</th>
                                <th>Palavra adicionada a busca</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<form method="POST" action="{{ route('aliasbusca.destroy' , 1) }}" id="formExcluirAlias">
    @csrf
    <input name="_method" type="hidden" value="DELETE">
    <input name="id_alias" id="id_alias" type="hidden" value="">
</form>
@endsection

@section('scriptsfinais')
<script>
    function excluirAlias(id) {
        swalWithBootstrapButtons.fire({
            title: 'Opa?',
            text: "Você deseja mesmo excluir este alias?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim, exclua!',
            cancelButtonText: 'Não, cancele!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('id_alias').value = id;
                document.getElementById('formExcluirAlias').submit();
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

        $("#lista_alias").DataTable({
            "responsive": true,
            "lengthChange": true,
            "lengthMenu": [10, 20, 30, 50, 100],
            "autoWidth": false,
            processing: true,
            serverSide: true,
            //"pagingType": "simple",
            //"pagingType": "simple_numbers",
            //"pagingType": "numbers",
            //"pagingType": "full",
            ajax: "{{route('aliasbusca.listaaliasBusca_modal')}}",
            columns: [{
                    data: 'busca'
                },
                {
                    data: 'add'
                },
                {
                    data: 'acoes'
                },
            ],
            //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            oLanguage: {
                //"sSearch": "Digite aqui algo para refinar sua busca",
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Buscar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
            },
        }).buttons().container().appendTo('#lista_alias_wrapper .col-md-6:eq(0)');
        $.fn.DataTable.ext.pager.numbers_length = 10;

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