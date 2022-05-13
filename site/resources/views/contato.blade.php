@extends('layouts.site.siteLayout')

@section('content')

<div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6428.066536561813!2d-49.27232791846688!3d-16.668428587576727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa4cce19148de89a!2sMakro%20Service%20Materiais%20El%C3%A9tricos!5e0!3m2!1spt-BR!2sbr!4v1620319632351!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <div class="mb-3"></div>

    <div class="row">
        <div class="col-md-8">
            <h2 class="light-title">Escreva uma mensagem</h2>

            <form action="#">
                @captcha('pt-BR')
                <div class="form-group required-field">
                    <label for="assunto">Assunto do contato</label>
                    <select name="assunto" id="assunto" class="form-control">
                        <option value="">Selecione o assunto</option>
                        <option value="elogio">Elogio</option>
                        <option value="duvida">Dúvida</option>
                        <option value="depoimento">Depoimento</option>
                    </select>
                </div>

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
                if (document.getElementById('assunto').value === '') {
                    document.getElementById('mensagemRetornoEmail').innerHTML = "Selecione o assunto do contato";
                    document.getElementById('mensagemRetornoEmail').style.display = "block";
                    return;
                }
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

                document.getElementById('mensagemRetornoEmail').innerHTML = "Enviando email...";
                document.getElementById('mensagemRetornoEmail').style.display = "block";
                $.ajax({
                    'processing': true,
                    'serverSide': true,
                    type: "POST",
                    data: {
                        '_token': "{{csrf_token()}}",
                        'assunto': document.getElementById('assunto').value,
                        'nome': document.getElementById('nome').value,
                        'email': document.getElementById('email').value,
                        'telefone': document.getElementById('telefone').value,
                        'celular': document.getElementById('celular').value,
                        'estado': document.getElementById('estado').value,
                        'cidade': document.getElementById('cidade').value,
                        'mensagem': document.getElementById('mensagem').value,
                    },
                    url: '{{URL::to("/emailContatoSite")}}',
                    datatype: "json",
                    success: function(modelo) {
                        if (modelo === 'ok') {
                            document.getElementById('mensagemRetornoEmail').innerHTML = "Email enviado com sucesso";
                        } else {
                            document.getElementById('mensagemRetornoEmail').innerHTML = "Erro ao enviar o email";
                        }
                    }
                });
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
                    <p><a href="mailto:vendas@makroservice.com.br">vendas@makroservice.com.br</a></p>
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