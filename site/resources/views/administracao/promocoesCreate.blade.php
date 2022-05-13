@extends('layouts.adm.temaLTE')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Criar nova promoção</h1>
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
                <form method="POST" action="{{ route('promocoes.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="get_id_produto" name="get_id_produto">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_add_produto">
                                    Selecionar um produto
                                </button>
                                <div class="card-body">
                                    <strong>Nome</strong>
                                    <p class="text-muted" id="get_prod_nome">
                                    </p>
                                    <hr>
                                    <strong>Nome ecommerce</strong>
                                    <p class="text-muted" id="get_prod_nomeecommerce">
                                    </p>
                                    <hr>
                                    <strong>Código</strong>
                                    <p class="text-muted" id="get_prod_codprod">
                                    </p>
                                    <hr>
                                    <strong>Marca</strong>
                                    <p class="text-muted" id="get_prod_marca">
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="" value="">
                                <small><code>Descrição que aparecerá abaixo da imagem, pode ser o mesmo nome do produto.</code></small>
                            </div>
                            <div class="form-group">
                                <br>
                                <label for="imagem">Imagem</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="imagem" name="imagem">
                                        <label class="custom-file-label" for="imagem">Selecione uma nova imagem</label>
                                    </div>
                                </div>
                                <small><code>Imagem que será apresentada no conjunto de imagens em promoção no inicio do site. 600 X 600</code></small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <button type='submit' class='btn bg-gradient-success btn-block'>Adicionar nova promoção</button>
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