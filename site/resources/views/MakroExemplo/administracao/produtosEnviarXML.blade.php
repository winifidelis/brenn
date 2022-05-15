@extends('layouts.adm.temaLTE')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Enviar arquivo XML dos produtos</h1>
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
        <form method="POST" id="form_xml_produto" name="form_xml_produto" action="" enctype="multipart/form-data">
            @csrf

            <div class="container-fluid">
                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Enviar arquivo XML para atualizar ou registrar novos produtos no site
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group col-md-12">
                                    <h3 class="lead">
                                        A atualização dos produtos do site Serão feita ao enviar o arquivo XML gerado no programa WINTHOR.
                                    </h3>
                                    <h3 class="lead">
                                        Ao enviar o arquivo as informaçãoes serão mantidas caso não exista modificação no produto. Se houver alguma modificação no produto a atualização automática.
                                    </h3>
                                    <h3 class="lead">
                                        Se algum produto novo for adicionar no WINTHOR, ele deverá constrar no arquivo XML para ser incluído no site.
                                    </h3>
                                </div>

                                <div class="form-group col-md-12" id="xml_produtos_div">
                                    <label for="xml_produtos">Selecione o arquivo XML para enviar ao site.</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="xml_produtos" name="xml_produtos">
                                            <label class="custom-file-label" for="xml_produtos">Selecione o arquivo</label>
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: none;" id="apresentadorProgressBarUpLoad">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary progress-bar-striped" id="ProgressBarUpLoad" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                        </div>
                                        <label id="label_enviando_e_processando_xml">Enviando e processando o arquivo XML</label>
                                    </div>
                                    <label id="label_teve_erro"></label>
                                </div>


                                <script>
                                    var inputElement = document.getElementById("xml_produtos");
                                    inputElement.addEventListener("change", handleFiles, false)

                                    function handleFiles() {
                                        swalWithBootstrapButtons.fire({
                                            title: 'Aviso!',
                                            text: "Deseja mesmo atualizar os produtos com este arquivo XML?",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'Sim, atualize!',
                                            cancelButtonText: 'Não, cancele!',
                                            reverseButtons: false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                enviarFormUploadArquivos()
                                            } else if (
                                                /* Read more about handling dismissals below */
                                                result.dismiss === Swal.DismissReason.cancel
                                            ) {
                                                inputElement.value = "";
                                                swalWithBootstrapButtons.fire(
                                                    'Cancelado',
                                                    'XML não será processado :)',
                                                    'error'
                                                )
                                                this.inputElement = document.getElementById("xml_produtos");
                                                inputElement.addEventListener("change", handleFiles, false)
                                            }
                                        })
                                    }

                                    function enviarFormUploadArquivos() {
                                        document.getElementById('label_enviando_e_processando_xml').innerHTML = "Enviando o arquivo XML";
                                        document.getElementById('apresentadorProgressBarUpLoad').style.display = 'block';
                                        document.getElementById('label_teve_erro').innerHTML = "";
                                        var formData = new FormData($("#form_xml_produto").get(0));
                                        $.ajax({
                                            contentType: false,
                                            processData: false,
                                            type: "POST",
                                            data: formData,
                                            url: '{{URL::to("/produto.processarArquivoXML")}}',
                                            datatype: "json",
                                            xhr: function() {
                                                var myXhr = $.ajaxSettings.xhr();
                                                if (myXhr.upload) {
                                                    myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
                                                }
                                                return myXhr;
                                            },
                                        }).done(function(response) {
                                            console.log(response);
                                            //if (response != "erro") {
                                            if (!response.match(/erro/)) {
                                                //toastr.success('Arquivo enviado com sucesso')
                                                swalWithBootstrapButtons.fire({
                                                    title: 'Aviso!',
                                                    text: "XML enviado e processado com sucesso",
                                                    icon: 'success',
                                                    confirmButtonText: 'OK',
                                                })
                                                document.getElementById('apresentadorProgressBarUpLoad').style.display = 'none';
                                                document.getElementById('ProgressBarUpLoad').style.width = "0%";
                                                document.getElementById('label_teve_erro').innerHTML = response;
                                                //inputElement.value = "";
                                            } else {
                                                //toastr.error('Erro ao enviar arquivo')
                                                swalWithBootstrapButtons.fire({
                                                    title: 'Aviso!',
                                                    text: "Erro ao enviar arquivo XML?",
                                                    icon: 'warning',
                                                    confirmButtonText: 'OK',
                                                })
                                                document.getElementById('label_teve_erro').innerHTML = response;
                                            }
                                        }).fail(function(response) {
                                            document.getElementById('apresentadorProgressBarUpLoad').style.display = 'none';
                                            document.getElementById('ProgressBarUpLoad').style.width = "0%";
                                            //inputElement.value = "";
                                        }).always(function(response) {
                                            document.getElementById('apresentadorProgressBarUpLoad').style.display = 'none';
                                            document.getElementById('ProgressBarUpLoad').style.width = "0%";
                                            $("#form_xml_produto")[0].reset();
                                            //inputElement.value = "";
                                        });
                                    }

                                    function progressHandlingFunction(e) {
                                        if (e.lengthComputable) {
                                            p = ((e.loaded * 100) / e.total)
                                            console.log(e.loaded + ' - ' + e.total + ' = ' + (e.total - e.loaded) + " -> " + p)
                                            document.getElementById('ProgressBarUpLoad').style.width = p + "%";
                                            if (p === 100) {
                                                document.getElementById('label_enviando_e_processando_xml').innerHTML = "Processando o arquivo XML";
                                            }
                                        }
                                    }
                                </script>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </form>
    </section>
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

        @include('layouts.adm.toastLTE');
    });
</script>

<script>
    function excluir() {
        swalWithBootstrapButtons.fire({
            title: 'Opa?',
            text: "Você deseja mesmo excluir esse produto?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim, exclua!',
            cancelButtonText: 'Não, cancele!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                /*
                swalWithBootstrapButtons.fire(
                    'Ok!',
                    'Vou excluir o cliente.',
                    'success'
                )
                */
                document.getElementById('formExcluirProduto').submit();
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {

                swalWithBootstrapButtons.fire(
                    'Cancelado',
                    'O produto não será excluido :)',
                    'error'
                )

            }
        })
    }
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true
    })
</script>
@endsection