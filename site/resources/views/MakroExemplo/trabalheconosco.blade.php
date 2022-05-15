@extends('layouts.site.siteLayout')

@section('content')

<div class="container">

    <div class="mb-3"></div>

    <div class="row">
        <div class="col-md-8">
            <h2 class="light-title">Trabalhe Conosco</h2>

            <form method="POST" id="form_envia_curriculo" name="form_envia_curriculo" action="#" enctype="multipart/form-data">
                @csrf
                @captcha('pt-BR')
                <input type="hidden" name="assunto" id="assunto" value="Trabalhe conosco" />

                <div class="form-group required-field">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="form-group required-field">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="celular">Celular</label>
                        <input type="tel" class="form-control" id="celular" name="celular">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group  col-sm-6">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>

                    <div class="form-group  col-sm-6">
                        <label for="cidade">Cidade</label>
                        <input type="tel" class="form-control" id="cidade" name="cidade" required>
                    </div>
                </div>

                <div class="form-group required-field">
                    <label for="fileCurriculo">Currículo</label>
                    <input type="file" class="form-control" id="fileCurriculo" name="fileCurriculo" required>
                </div>

                <div class="form-group required-field">
                    <label for="mensagem">Mensagem</label>
                    <textarea rows="1" id="mensagem" class="form-control" name="mensagem" required></textarea>
                </div>

                <label id="mensagemRetornoEmail" style="display: none;"></label>
                <div class="form-footer">
                    <!--<button type="submit" class="btn btn-primary">Enviar mensagem</button>!-->
                    <a href="javascript:enviarEmail()" class="btn btn-primary">Enviar mensagem</a>
                </div>
            </form>
        </div>

        <script>
            function enviarEmail() {
                if (document.getElementById('nome').value === '') {
                    document.getElementById('mensagemRetornoEmail').innerHTML = "Digite o seu nome";
                    document.getElementById('mensagemRetornoEmail').style.display = "block";
                    return;
                }
                if (document.getElementById('email').value === '') {
                    document.getElementById('mensagemRetornoEmail').innerHTML = "Digite o seu email";
                    document.getElementById('mensagemRetornoEmail').style.display = "block";
                    return;
                }
                /*
                if (document.getElementById('telefone').value == '') {
                    document.getElementById('mensagemRetornoEmail').innerHTML = "";
                    document.getElementById('mensagemRetornoEmail').style.display = "block";
                }
                if (document.getElementById('celular').value == '') {
                    document.getElementById('mensagemRetornoEmail').innerHTML = "";
                    document.getElementById('mensagemRetornoEmail').style.display = "block";
                }
                if (document.getElementById('estado').value == '') {
                    document.getElementById('mensagemRetornoEmail').innerHTML = "";
                    document.getElementById('mensagemRetornoEmail').style.display = "block";
                }
                if (document.getElementById('cidade').value == '') {
                    document.getElementById('mensagemRetornoEmail').innerHTML = "";
                    document.getElementById('mensagemRetornoEmail').style.display = "block";
                }
                */
                if (document.getElementById('mensagem').value === '') {
                    document.getElementById('mensagemRetornoEmail').innerHTML = "Digite uma mensagem";
                    document.getElementById('mensagemRetornoEmail').style.display = "block";
                    return;
                }

                if (document.getElementById('fileCurriculo').value === '') {
                    document.getElementById('mensagemRetornoEmail').innerHTML = "Adicione seu currículo";
                    document.getElementById('mensagemRetornoEmail').style.display = "block";
                    return;
                }

                document.getElementById('mensagemRetornoEmail').innerHTML = "Enviando email...";
                document.getElementById('mensagemRetornoEmail').style.display = "block";

                var formData = new FormData($("#form_envia_curriculo").get(0));
                $.ajax({
                    contentType: false,
                    processData: false,
                    type: "POST",
                    data: formData,
                    url: '{{URL::to("/emailTrabalheConosco")}}',
                    datatype: "json",
                    xhr: function() {
                        var myXhr = $.ajaxSettings.xhr();
                        if (myXhr.upload) {
                            myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
                        }
                        return myXhr;
                    },
                }).done(function(response) {
                    if (response === 'ok') {
                        document.getElementById('mensagemRetornoEmail').innerHTML = "Currículo enviado com sucesso";
                    } else {
                        document.getElementById('mensagemRetornoEmail').innerHTML = "Erro ao enviar seu currículo";
                    }
                }).fail(function() {
                    document.getElementById('mensagemRetornoEmail').innerHTML = "Erro ao enviar seu currículo";
                }).always(function() {
                    //nada
                });
            }

            function progressHandlingFunction(e) {
                if (e.lengthComputable) {
                    //let p = ((e.loaded * 100) / e.total)
                    //console.log(e.loaded + ' - ' + e.total + ' = ' + (e.total - e.loaded) + " -> " + p)
                    //document.getElementById('ProgressBarUpLoad').style.width = p + "%";
                }
            }
        </script>

        <div class="col-md-4">
            <h2 class="light-title">Atendimento</strong></h2>

            <div class="contact-info">
                <div>
                    <i class="icon-clock"></i>
                    <p>Segunda a sexta das 08h às 18h</p>
                    <p>Sábado das 08h às 12h</p>
                </div>
                <div>
                    <i class="icon-phone"></i>
                    <p><a href="tel:6232164080">(62) 3216-4080</a></p>
                </div>
                <div>
                    <i class="icon-mail-alt"></i>
                    <p><a href="mailto:rh@makroservice.com.br">rh@makroservice.com.br</a></p>
                </div>
                <!--
                <div>
                    <i class="icon-skype"></i>
                    <p>porto_skype</p>
                    <p>porto_template</p>
                </div>
                !-->
            </div>
        </div>
    </div>
</div>

<div class="mb-8"></div>

@endsection