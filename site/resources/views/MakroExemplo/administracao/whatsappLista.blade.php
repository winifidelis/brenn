@extends('layouts.adm.temaLTE')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Lista dos vendedores que atende por whatsapp</h1>
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
        <div class="card">
            <div class="card-body">
                <table id="lista_whatsappvendedores" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>WhatsApp</th>
                            <th>Email</th>
                            <th>Posição</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<form method="POST" action="{{ route('whatsappvendedores.bloquear') }}" id="formBloquearVendedor">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <input name="idVendedorB" id="idVendedorB" type="hidden" value="">
</form>
<form method="POST" action="{{ route('whatsappvendedores.desbloquear') }}" id="formDesBloquearVendedor">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <input name="idVendedorD" id="idVendedorD" type="hidden" value="">
</form>
@endsection

@section('scriptsfinais')
<script>
    function desbloquearVendedor(id) {
        swalWithBootstrapButtons.fire({
            title: 'Opa?',
            text: "Você deseja mesmo desbloquear este vendedor?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim, desbloqueie!',
            cancelButtonText: 'Não, cancele!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('idVendedorD').value = id
                document.getElementById('formDesBloquearVendedor').submit();
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

    function bloquearVendedor(id) {
        swalWithBootstrapButtons.fire({
            title: 'Opa?',
            text: "Você deseja mesmo bloquear este vendedor?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim, bloqueie!',
            cancelButtonText: 'Não, cancele!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('idVendedorB').value = id
                document.getElementById('formBloquearVendedor').submit();
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

        $("#lista_whatsappvendedores").DataTable({
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
            ajax: "{{route('whatsappvendedores.listawhatsappvendedoeres_modal')}}",
            columns: [{
                    data: 'nome'
                },
                {
                    data: 'whatsapp'
                },
                {
                    data: 'email'
                },
                {
                    data: 'posicao'
                },
                {
                    data: 'status'
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
        }).buttons().container().appendTo('#lista_whatsappvendedores_wrapper .col-md-6:eq(0)');
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