<footer class="footer bg-MakroService">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Contato</h4>
                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">Endereço</span><span class="contact-info-label-MakroService">Av Independência nº 5371, Setor Aeroporto / Goiânia Goiás - CEP 74070-010</span>
                            </li>
                            <li>
                                <span class="contact-info-label">Telefone</span><span class="contact-info-label-MakroService"><a href="tel:6232164080">(62) 3216-4080</a></span>
                            </li>
                            <li>
                                <span class="contact-info-label">Email</span><span class="contact-info-label-MakroService"><a href="mailto:vendas@makroservice.com.br">vendas@makroservice.com.br</a></span>
                            </li>
                            <li>
                                <span class="contact-info-label">Horário de funcionamento</span>
                                <span class="contact-info-label-MakroService">Segunda a sexta das 08h às 18h<br>Sábado das 08h às 12h</span>
                            </li>
                        </ul>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/makroservice_1982/" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                            <a href="https://www.facebook.com/makroservice.oficial/" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="https://www.youtube.com/channel/UCn-P60V1ktwfjRkCMb5CMug" class="social-icon social-youtube fab fa-youtube" target="_blank" title="YouTube"></a>
                            <a href="https://www.linkedin.com/company/3478811/admin/" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                            <a href="{{route('contato')}}" class="social-icon social-mail icon-mail-alt" title="Mail"></a>
                        </div><!-- End .social-icons -->
                    </div><!-- End .widget -->
                </div><!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Institucional</h4>
                        <ul class="links">
                            <li><span class="contact-info-label-MakroService"><a href="{{route('quemsomos')}}">Quem somos</a></span></li>
                            <li><span class="contact-info-label-MakroService"><a href="{{route('nossosservicos')}}">Nossos serviços</a></span></li>
                            <li><span class="contact-info-label-MakroService"><a href="{{route('contato')}}">Central de atendimento</a></span></li>
                            <li><span class="contact-info-label-MakroService"><a href="{{route('formardepagamento')}}">Formas de pagamento</a></span></li>
                            <li><span class="contact-info-label-MakroService"><a href="{{route('trocaedevolucao')}}">Troca e devolução</a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!--
                    <div class="widget">
                        <h4 class="widget-title">Departamentos</h4>

                        <div class="tagcloud">
                            <a href="#">Bag</a>
                            <a href="#">Black</a>
                            <a href="#">Blue</a>
                            <a href="#">Clothes</a>
                            <a href="#">Hub</a>
                            <a href="#">Shirt</a>
                            <a href="#">Shoes</a>
                            <a href="#">Skirt</a>
                            <a href="#">Sports</a>
                            <a href="#">Sweater</a>
                        </div>
                    </div>
                    !-->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">Assine nossa newsletter</h4>
                        <p><span class="contact-info-label-MakroService">Cadastre-se e receba nossas promoções</span></p>
                        <form class="mb-0">
                            <input type="email" id="emailSubscribeAddTxt" name="emailSubscribeAddTxt" class="form-control m-b-3" placeholder="Digite seu email" required>
                            <a href="javascript:gravarEmailSubscribe()" type="button" class="btn btn-primary shadow-none">Inscrever-se</a>
                        </form>
                    </div>
                </div>
                <script>
                    function gravarEmailSubscribe() {
                        if (validateEmail(document.getElementById('emailSubscribeAddTxt').value)) {
                            $.ajax({
                                'processing': true,
                                'serverSide': true,
                                type: "POST",
                                data: {
                                    emailAdd: document.getElementById('emailSubscribeAddTxt').value,
                                    '_token': "{{csrf_token()}}",
                                },
                                url: '{{URL::to("/addEmailSubscribe")}}',
                                datatype: "json",
                                success: function(modelo) {
                                    if (modelo === 'ok') {
                                        //não há resposta
                                        return;
                                    }
                                }
                            });
                            document.getElementById('infoAddEmailSubscribe').innerHTML = "Obrigado por inscrever seu email";
                        } else {
                            document.getElementById('infoAddEmailSubscribe').innerHTML = "Você digitou um email inválido";
                        }
                        $("#modalsubscribeemail").modal('show')
                    }

                    function validateEmail(email) {
                        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        return re.test(email);
                    }
                </script>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
            <p class="footer-copyright py-3 pr-4 mb-0"><span class="contact-info-label-MakroService">&copy; MakroService. 2021. All Rights Reserved</span></p>
            <p class=""><span class="contact-info-label-MakroService">Desenvolvido por <a href="http://domariatech.com.br/" target="_blank">DôMariaTech</a></span></p>
        </div>
    </div>
</footer>