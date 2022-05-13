@extends('layouts.adm.temaLTE')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Lista dos produtos mais vendidos</h1>
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
                <div class="form-group">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_add_produto">
                        Selecionar um produto
                    </button>
                </div>
                <table id="lista_produtos_mais_vendidos" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width='40%'>Descrição</th>
                            <th width='40%'>Nome Ecommerce</th>
                            <th width='20%'></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <script>
                var maisVendidos = [];

                function desenhaProdutosMaisVendidos() {
                    var t1 = $('#lista_produtos_mais_vendidos').DataTable();
                    t1.clear().draw();
                    cont = 0;
                    while (cont != maisVendidos.length) {
                        var rowNode = t1.row.add([
                            maisVendidos[cont]['descricao'],
                            maisVendidos[cont]['nomeecommerce'],
                            "<div class='text-center'>" +
                            "<a class='btn btn-danger' href='javascript:excluirMaisVendido(\"" + maisVendidos[cont]['id'] + "\")'>Excluir</a>" +
                            "</div>"
                        ]).draw().node();
                        cont = cont + 1;
                    }
                }


                function selecionarProduto(id, codprod, descricao, marca, nomeecommerce) {
                    //document.getElementById('get_prod_nome').innerHTML = descricao;
                    //document.getElementById('get_prod_nomeecommerce').innerHTML = nomeecommerce;
                    //document.getElementById('get_prod_codprod').innerHTML = codprod;
                    //document.getElementById('get_prod_marca').innerHTML = marca;
                    //document.getElementById('get_id_produto').value = id;
                    //document.getElementById('descricao').value = nomeecommerce;
                    //console.log(codprod);                    
                    $('#modal_add_produto').modal('hide');
                    $.ajax({
                        'processing': true,
                        'serverSide': true,
                        type: "PUT",
                        data: {
                            '_token': "{{csrf_token()}}",
                            produto_id: id,
                        },
                        url: '{{URL::to("/maisvendidos.criarProdutoMaisVendido")}}',
                        datatype: "json",
                        success: function(modelo) {
                            if (modelo === 'ok') {
                                var result = maisVendidos.find(item => item.id === id);
                                //console.log(result);
                                if (result === null || result === undefined) {
                                    var mais = {
                                        id: id,
                                        descricao: descricao,
                                        nomeecommerce: nomeecommerce,
                                    };
                                    maisVendidos.push(mais);
                                    desenhaProdutosMaisVendidos();
                                    Swal.fire({
                                        title: "Yes!",
                                        text: "Produto adicionado com sucesso",
                                        icon: 'success',
                                        confirmButtonText: "Ok",
                                    });
                                } else {
                                    Swal.fire({
                                        title: "Ops!",
                                        text: "Produto já existe na lista",
                                        icon: 'info',
                                        confirmButtonText: "Ok",
                                    });
                                }

                                return;
                            } else {
                                Swal.fire({
                                    title: "Oh ohu!",
                                    text: "Erro ao adicionar produto",
                                    icon: 'error',
                                    confirmButtonText: "Ok",
                                });
                            }
                        }
                    });

                }
            </script>
            <form method="POST" id="form_criar_produto_mais_vendido" name="form_criar_produto_mais_vendido" action="#">
                @csrf
                <input name="_method" type="hidden" value="PUT">
            </form>
            <form method="POST" id="form_excluir_produto_mais_vendido" name="form_excluir_produto_mais_vendido" action="{{ route('maisvendidos.destroy' , 1) }}">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <input name="id_maisvendido" id="id_maisvendido" type="hidden" value="">
            </form>
            <script>
                function excluirMaisVendido(id) {
                    swalWithBootstrapButtons.fire({
                        title: 'Opa?',
                        text: "Você deseja mesmo excluir este item?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Sim, exclua!',
                        cancelButtonText: 'Não, cancele!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('id_maisvendido').value = id;
                            document.getElementById('form_excluir_produto_mais_vendido').submit();
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
            </script>

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
    </div>
</div>
@endsection

@section('scriptsfinais')
<script>
    $(function() {
        $('[data-mask]').inputmask();

        //Date range picker
        $('#reservationdate').datetimepicker({
            format: 'DD/MM/YYYY',
        });

        $('#lista_produtos_mais_vendidos').DataTable({
            "responsive": true,
            "lengthChange": true,
            "lengthMenu": [10, 20, 30, 50, 100],
            "autoWidth": false,
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
        }).buttons().container().appendTo('#lista_produtos_mais_vendidos_wrapper .col-md-6:eq(0)');
        $.fn.DataTable.ext.pager.numbers_length = 10;


        @foreach($maisVendidos as $mais)
        <?php
        ?>
        var mais = {
            id: "{{$mais->id}}",
            descricao: "{{$mais->descricao}}",
            nomeecommerce: "{{$mais->nomeecommerce}}",
        };
        maisVendidos.push(mais);
        @endforeach
        desenhaProdutosMaisVendidos();

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