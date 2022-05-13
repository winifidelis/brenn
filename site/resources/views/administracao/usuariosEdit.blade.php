@extends('layouts.adm.temaLTE')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Editar acesso de {{$user->name}}</h1>
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
                <form method="POST" action="{{ route('usuarios.atualizarDadosDeAcesso' , $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    <!--
                    'telabackend', ACESSAR O PAINEL ADMINISTRADOR
                    'enviarxml', ADMINISTRADOS DADOS DOS PRODUTOS
                    'popupprincipal', ADMINISTRAR INFORMAÇÕES DO SITE WHATSAPP, DEPARTAMENTOS, PROMOÇÕES, SLIDER PRINCIPAL, POPUP PRINCIPAL, MAIS VENDIDOS
                    'administrador', ADMINISTRAR INFORMAÇÕES DE USUÁRIOS ,
                    !-->
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" id="get_id_produto" name="get_id_produto" value="{{$user->id}}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="telabackend" name="telabackend" {{$user->telabackend == '1'?'checked':''}}>
                                    <label for="telabackend" class="custom-control-label">Permitir acesso ao painel de administração</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="enviarxml" name="enviarxml" {{$user->enviarxml == '1'?'checked':''}}>
                                    <label for="enviarxml" class="custom-control-label">Permitir modificar informações dos produtos</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="popupprincipal" name="popupprincipal" {{$user->popupprincipal == '1'?'checked':''}}>
                                    <label for="popupprincipal" class="custom-control-label">Permitir modificar informações do site</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="administrador" name="administrador" {{$user->administrador == '1'?'checked':''}}>
                                    <label for="administrador" class="custom-control-label">Permitir modificar dados de usuários</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <button type='submit' class='btn bg-gradient-success btn-block'>Atualizar acesso</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="modal_add_produto">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lista de produtos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="lista_produtos" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Nome ecommerce</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    function selecionarProduto(id, codprod, descricao, marca, nomeecommerce) {
        document.getElementById('get_prod_nome').innerHTML = descricao;
        document.getElementById('get_prod_nomeecommerce').innerHTML = nomeecommerce;
        document.getElementById('get_prod_codprod').innerHTML = codprod;
        document.getElementById('get_prod_marca').innerHTML = marca;
        document.getElementById('get_id_produto').value = id;
        document.getElementById('descricao').value = nomeecommerce;
        $('#modal_add_produto').modal('hide');
    }
</script>
<!-- /.modal -->
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

        $("#lista_produtos").DataTable({
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
            ajax: "{{route('produto.produtosGetPorCodigo_modal')}}",
            columns: [{
                    data: 'codprod'
                },
                {
                    data: 'nomeecommerce'
                },
                {
                    data: 'nomeecommerce'
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
        }).buttons().container().appendTo('#lista_produtos_wrapper .col-md-6:eq(0)');
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