<?php
$sessao = Illuminate\Support\Facades\Session::all();
$popupPrincipal = App\Models\Popupprincipal::first();
$imagem = null;
$imagemExiste = \Illuminate\Support\Facades\Storage::disk('disk_makro')->exists("imagempopup/" . $popupPrincipal->imagem);
if ($imagemExiste) {
    //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("imagempopup/" . $popupPrincipal->imagem));
    $imagem = "imagempopup/" . $popupPrincipal->imagem;
} else {
    //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("imagempopup/default.jpg"));
    $imagem = "imagempopup/default.jpg";
}
?>
<?php
if (request()->route() != null) {
    /* ESSE request()->route() != null É PARA FERIFICAR SE ESTOU EM UMA PÁGINA DE ERRO*/
?>
    @if(!isset($sessao['popUpSite']) && $popupPrincipal['ativo'] == 1)
    <?php
    //&& date('d/m/Y H:i:s',strtotime($poppop[0]['dataUpdate'])) != date('d/m/Y H:i:s',strtotime($popupPrincipal['updated_at']))
    //verificar depoios uma forma de colocar a data de modificação do popup

    request()->session()->put('popUpSite', [
        [
            'popUpSite'     => '1',
            'dataUpdate'     => $popupPrincipal['updated_at']
        ]
    ]);

    ?>
    <!-- ADICIONAR UM PHP AQUI QUE ADICIONE ALGO NA SESSÃO DA PESSOA QUE ELA JA VIU O POPUP!-->
    <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="width: 700px; /*height: 420px;*/ background: #f1f1f1 no-repeat center/cover">
        <img src="{{asset('uploads/'.$imagem)}}">
        <!--
    <div class="newsletter-popup-content">
        <img src="{{asset('assets_site/assets/images/logo-black.png')}}" alt="Logo" class="logo-newsletter">
        <h2>BE THE FIRST TO KNOW</h2>
        <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
        <form action="#">
            <div class="input-group">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                <input type="submit" class="btn" value="Go!">
            </div>
        </form>
        <div class="newsletter-subscribe">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1">
                    Don't show this popup again
                </label>
            </div>
        </div>
    </div>
    !-->
    </div>
    @endif
<?php
}
?>


<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body add-cart-box text-center">
                <p>O produto foi adicionado ao seu carrinho</p>
                <h4 id="productTitle"></h4>
                <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
                <div class="btn-actions">
                    <a href="{{route('showCarrinho')}}"><button class="btn-primary">Ver meu orçamento</button></a>
                    <a href="#"><button class="btn-primary" data-dismiss="modal">Continuar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalsubscribeemail" tabindex="-1" role="dialog" aria-labelledby="modalsubscribeemail" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body add-cart-box text-center">
                <p id="infoAddEmailSubscribe">Obrigado por inscrever seu email.</p>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="mostrarRegulamento" tabindex="-1" role="dialog" aria-labelledby="mostrarRegulamento" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body add-cart-box">
                <h2>Política de Privacidade Makro Service</h2>

                <p>Quando você realiza uma compra ou contrata um serviço na Makro Service Materiais Elétricos nos fornece alguns dados pessoais com o objetivo de viabilizar a sua operação. A Makro Service preza pela segurança dos seus dados, pelo respeito a sua privacidade e pela transparência e, por isso, dedicamos este documento para explicar como seus dados pessoais serão tratados por nós e quais são as medidas que aplicamos para mantê-los seguros.</p>

                <p>Antes de mais nada, vamos nos apresentar: nós somos a Saêta Indústria e Comércio Eletroeletrônico Ltda, inscrito no CNPJ 00.103.788/0006-76, com sede na Cidade de Goiânia, Estado de Goiás, na Av. Independência, Nº 5.371, Setor Aeroporto, e segundo a definição trazida pela Lei Geral de Proteção de Dados “LGPD” (Lei Federal nº 13.709.2018), na maior parte do tempo seremos o controlador das suas informações, sendo assim, responsável por definir o que acontece com estes dados e por protegê-los.</p>

                <p>Para facilitar a compreensão desta política, todas as vezes que encontrar os termos “Makro Service”, “nós” ou “nossos”, estamos nos referindo ao controlador dos seus dados pessoais, ou seja, as empresas do Grupo Makro Service Materiais Elétricos ou simplesmente Makro Service e todas as vezes que ler “usuário”, “você”, “seu” ou “sua”, nos referimos a você, nosso cliente ou usuário das nossas plataformas.</p>

                <p><b>QUAIS DADOS SÃO COLETADOS PELA MAKRO SERVICE?</b></p>
                <p>Durante sua experiência em nossa loja, site ou em outros aplicativos/sistemas de nossa empresa, podemos coletar diferentes tipos de dados pessoais, de forma automática com o objetivo de conferência, monitoramento e controle, ou fornecidas diretamente por você, como por exemplo, para a realização de seu cadastro. Veja abaixo quais dados pessoais nós podemos coletar e em cada situação:</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<i>Durante o cadastro:</i></p>
                <p>Nome completo, Número de CPF ou CNPJ, Inscrição Estadual, Endereço de e-mail, Número de celular, Dados referentes aos seus endereços.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<i>Durante o preenchimento do local de entrega e forma de pagamento:</i></p>
                <p>Nome completo, Número de CPF ou CNPJ, Inscrição Estadual, Endereço de e-mail, Número de celular, Dados referentes aos seus endereços.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<i>Durante a análise e o monitoramento de suas compras ou outras transações financeiras:</i></p>
                <p>Dados cadastrais, Tipo de produto, Quantidade, Valor da mercadoria (unitário), Valor total da compra ou transação, Natureza da transação financeira, Informações da conta bancária e outros meios utilizados, Informações de renda.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<i>Abaixo apresentamos as informações que poderão ser coletadas mesmo que o Usuário não esteja cadastrado em nosso site ou em outros aplicativos/sistemas durante a navegação na plataforma:</i></p>
                <p>Endereço de IP, Informações sobre o dispositivo utilizado para a navegação, produtos e categorias pesquisados ou visualizados, contagem de visualizações, páginas visitadas em outros sites.</p>
                <p>Logo abaixo apresentamos algumas informações que somente serão acessadas se você nos autorizar. A qualquer momento, você poderá revogar essa autorização utilizando os nossos canais de atendimento.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<i>Outras informações que poderão ser coletadas:</i></p>
                <p>Geolocalização, Informações de login social, caso você realize seu cadastro por meio de uma conta em rede social, como Facebook, Instagram, Twiter ou Google, e autorize essa coleta;</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<i>Informações sobre você que se tornaram públicas por você ou que estejam disponíveis publicamente;</i></p>
                <p>Informações que coletamos de terceiros como, por exemplo, complementos dos seus dados cadastrais (nome, filiação, data de nascimento, CPF, número de telefone, endereço, entre outros), score gerado por agências de crédito, se você faz parte de alguma lista de Pessoa Exposta Politicamente (PEP) ou de alguma lista de alerta (como, OFAC, CSNU e outras listas internacionais), entre outras.</p>
                <p>Informações que recebemos de parceiros para entrega de produtos adquiridos nas plataformas parceiras da Makro Service como, por exemplo, resgate de produtos em programas de fidelidade ou qualquer outra plataforma em que a Makro Service possa ofertar seu catálogo de produtos e serviços.</p>
                <p>Informações fornecidas por você, voluntariamente, como por meio de comunicações com a Makro Service em redes sociais ou em comentários e avaliações de produtos.</p>
                <p>Cópias de documentos enviados por você como comprovante de residência, dados bancários ou cópia de um documento de identidade, geralmente utilizados para comprovação de seu cadastro ou validação de sua identidade.</p>


                <p><b>COMO NÓS UTILIZAMOS OS SEUS DADOS PESSOAIS?</b></p>
                <p>Nós utilizamos os dados pessoais para garantir um atendimento de qualidade e uma melhor experiência na sua compra. Listamos abaixo as finalidades que poderemos utilizar seus dados pessoais:</p>
                <p><i>Dados cadastrais:</i></p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para viabilizar a prestação de diferentes serviços disponíveis em nossa loja, no site e demais sistemas da empresa (e-commerce, marketplace, cash-in, cashback, chargeback, pagamento de contas, recargas, transferência entre contas de pagamento, pagamentos em loja física da Makro Service e transações off-us).</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para realizar o atendimento de solicitações e dúvidas em nossa Central de Atendimento.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para identificar corretamente o Usuário.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para enviar os produtos adquiridos ou comunicações de ofertas.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para entrar em contato com você, quando necessário. Esse contato pode contemplar diversos assuntos, como por exemplo, comunicação sobre promoções, ofertas, respostas a dúvidas, respostas de reclamações e solicitações, atualizações dos pedidos realizados e informações de entrega.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para auxiliar no diagnóstico e solução de problemas técnicos.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para desenvolver novas funcionalidades e melhorias, melhorando a sua experiência com nossos serviços disponíveis.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para consultar suas informações nas bases de dados de agências de crédito.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para realizar investigações e medidas de prevenção e combate a ilícitos, fraudes, crimes financeiros e crimes de lavagem de dinheiro e/ou de financiamento ao terrorismo.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para garantir o cumprimento de obrigação legal, regulatória ou garantir o exercício regular de direitos da Makro Service. Nesses casos, podemos inclusive utilizar e apresentar as informações em processos judiciais e administrativos, se necessário.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para colaborar com o cumprimento de ordem judicial, de autoridade competente ou de órgão fiscalizador.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para viabilizar o cadastro na Makro Service e realizar a abertura de sua conta de pagamento.</p>
                <p><i>Geolocalização:</i></p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para identificar a loja física mais próxima de você.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Exibir anúncios personalizados.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para envio de mensagens contextualizadas via push (1).</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para auxiliar nas análises que possam ser utilizadas para proteger sua conta e aumentar o nível de segurança dos seus dados cadastrais ou ainda prevenir possíveis fraudes.</p>
                <p>É importante esclarecer que a Makro Service usa a tecnologia de geolocalização de parceiros, que permite a captura dos dados de localização, sem que você seja identificado diretamente, para as finalidades citadas acima.</p>
                <p><i>Dados de Navegação</i></p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para auxiliar no diagnóstico e solução de problemas técnicos.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Para desenvolver novas funcionalidades e melhorias, melhorando a sua experiência com nossos serviços disponíveis.</p>


                <p><b>QUEM NÓS PODEMOS COMPARTILHAR OS DADOS PESSOAIS?</b></p>
                <p>Para a execução das atividades acima listadas, sempre que necessário, nós poderemos compartilhar os seus dados pessoais com outras empresas do nosso grupo, com prestadores de serviço, parceiros ou com órgãos reguladores. Jamais comercializamos dados pessoais. </p>
                <p><i>Apresentamos a seguir um resumo destas possibilidades:</i></p>
                <p>Prestadores de serviço - Para que possamos disponibilizar nossos produtos e prestar os nossos serviços com qualidade, contamos com a colaboração de diversos prestadores de serviço, que tratam os dados pessoais coletados em nosso nome e de acordo com nossas instruções. Esses prestadores de serviço atuam principalmente para nos auxiliar nas análises antifraude, intermediação de pagamentos, gestão de campanhas de marketing, enriquecimento de base de dados e armazenamento em nuvem.</p>
                <p>Outras empresas do Grupo Makro Service - Os seus dados pessoais podem ser compartilhados com outras empresas do Grupo, que operam sob o mesmo nível de segurança e privacidade. Assim compreendidas nossas afiliadas, coligadas, controladas e controladoras para que possamos aprimorar os nossos produtos, serviços e soluções oferecidos aos nossos Clientes e/ou Usuários das nossas plataformas, bem como permitir uma gestão unificada de todo o nosso portfólio. </p>
                <p>Autoridades judiciais, policiais ou governamentais - Nós devemos fornecer dados pessoais de Clientes e/ou Usuários, em atendimento à ordem judicial, solicitações de autoridades administrativas, obrigação legal ou regulatória, bem como para agir de forma colaborativa com autoridades governamentais, em geral em investigações envolvendo atos ilícitos.</p>
                <p>Potenciais compradores - Podemos compartilhar seus dados pessoais com outras empresas às quais a Makro Service conclua uma negociação de venda ou transferência de parte ou da totalidade da atividade comercial, negócio ou operação da Makro Service. Caso a venda ou transferência não sejam consumadas, solicitaremos ao potencial comprador que não faça uso e não divulgue seus dados pessoais de qualquer maneira ou forma, apagando-os por completo.</p>


                <p><b>ARMAZENAMENTO E SEGURANÇA DOS DADOS PESSOAIS</b></p>
                <p>Nós armazenamos seus dados de forma segura em data centers localizados no Brasil, bem como no exterior. Neste caso de armazenamento no exterior, são adotadas todas as medidas legais aplicáveis, em conformidade com a Lei Geral de Proteção de Dados e suas futuras regulamentações, garantindo a proteção e privacidade dos seus dados pessoais.</p>
                <p>Nós adotamos as melhores técnicas para proteger os dados pessoais coletados de acessos não autorizados, destruição, perda, alteração, comunicação ou qualquer forma de tratamento inadequado ou ilícito, inclusive mecanismos de criptografia. Ressaltamos, contudo, que nenhuma plataforma é completamente segura. Se você tiver qualquer preocupação ou suspeita de que os seus dados estejam em risco, por favor, entre em contato conosco por meio dos nossos canais de atendimento que ficaremos felizes em te ou auxiliar prontamente.</p>
                <p>Seus dados pessoais serão mantidos durante todo o período que for um cliente ativo da Makro Service. Após esse período, podemos armazenar os seus dados pessoais por um período adicional para fins de auditoria, para possibilitar o cumprimento de obrigações legais ou regulatórias. Faremos a retenção dos seus dados pelo prazo necessário, respeitando os prazos estabelecidos na legislação aplicável.</p>


                <p><b>COOKIES E TECNOLOGIAS DE MONITORAMENTO</b></p>
                <p>Podemos utilizar certas tecnologias de monitoramento para coletar as informações das atividades realizadas nas nossas plataformas de forma automatizada. As informações coletadas por meio de tais tecnologias são utilizadas para realizar métricas de performance do aplicativo, identificar problemas no uso, captar o comportamento dos Usuários de forma geral e coletar dados de impressão de conteúdos.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Veja abaixo algumas das tecnologias que poderão estar presentes no site da Makro Service:</p>
                <p><b>Cookies</b> - Cookie é um pequeno arquivo adicionado ao dispositivo do Usuário para fornecer uma experiência personalizada de acesso à plataforma. Os cookies ajudam a analisar o tráfego de internet e nos permite saber quando o Usuário visitou um site específico. Um cookie não dá acesso a um computador ou revela informações além dos dados que o usuário escolhe compartilhar conosco.</p>
                <p><b>Pixels</b> - Pixels são partes do código JavaScript instalados adicionados em nossas aplicações, websites ou no corpo de um e-mail, com a finalidade de rastrear coletar informações sobre as atividades dos usuários, permitindo a identificação dos seus padrões de acesso, navegação, interesse e compras de produtos, utilizados para otimizar o direcionamento de conteúdo.</p>
                <p><b>Web beacon</b> - Web beacon é uma técnica que permite mapear quem está visitando uma determinada página da web, identificando o comportamento do usuário com diferentes sites ou servidores da web.</p>
                <p><b>Ferramentas de analytics</b> - Essas ferramentas podem coletar informações sobre a forma como os Usuários visitam nossa loja, quais páginas eles visitam e quando visitam tais páginas, outros sites que foram visitados antes, entre outras.</p>


                <p><b>TRANSFERÊNCIA INTERNACIONAL DE DADOS PESSOAIS</b></p>
                <p>Alguns de seus dados pessoais poderão ser transferidos para outros países, por exemplo, quando utilizarmos serviços computacionais em nuvem para processamento ou armazenamento de dados, localizados fora do Brasil. Mas não se preocupe, a Makro Service observa também nestas situações todos os requisitos estabelecidos na legislação vigente, e adota as melhores práticas de mercado a fim de garantir a proteção e privacidade dos seus dados pessoais.</p>


                <p><b>SEUS DIREITOS COMO TITULAR DOS DADOS PESSOAIS</p></b>
                <p>A transparência sobre o tratamento dos seus dados pessoais é prioridade para o Makro Service. Além das informações disponibilizadas nesta Política de Privacidade, você pode também exercer os direitos previstos na Lei Geral de Proteção de Dados, entre eles:</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Confirmação da existência de tratamento de dados pessoais.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Acesso aos dados pessoais.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Revogação do consentimento.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Correção de dados pessoais incompletos, inexatos ou desatualizados.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Eliminação dos dados pessoais tratados com o consentimento ou desnecessários, excessivos ou quando entender que algum ponto da LGPD não foi atendido.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Informação sobre as hipóteses e com quais empresas, parceiros e outras instituições podemos compartilhar, ou receber dados pessoais referentes a você.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Informação sobre a possibilidade de não fornecer consentimento e sobre as consequências da negativa, quando aplicável.</p>
                <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Todas as solicitações serão tratadas de forma gratuita, e serão submetidas a uma prévia avaliação da sua identidade e da viabilidade do atendimento, a fim de cumprir com eventuais obrigações que impeçam o completo atendimento das requisições dos titulares de direito.</p>

                <p><b>RETENÇÃO E EXCLUSÃO DOS SEUS DADOS PESSOAIS</p></b>
                <p>Nós trataremos seus dados pessoais com elevados níveis de proteção e garantindo sua privacidade, durante todo o período que você for nosso cliente, navegando em nossas plataformas e utilizando nossos serviços, ou potencial cliente com quem dividimos nossas ofertas de produtos e serviços.</p>
                <p>Quando aplicável, e mesmo se você optar por excluir seus dados pessoais da nossa base de cadastro, a Makro Service poderá reter alguns ou todos os seus dados pessoais por períodos adicionais para cumprimento de obrigações legais ou regulatórias, para o exercício regular de direitos de nossa empresa, eventuais ações judiciais, fins de auditoria de diversas naturezas, ou outros prazos definidos e fundamentados por bases legais que justifiquem a retenção destes dados.</p>

                <p><b>ALTERAÇÕES DESTA POLÍTICA DE PRIVACIDADE</p></b>
                <p>Estamos constantemente buscando aprimorar a experiência de nossos clientes. Assim, nossas práticas de tratamento de dados pessoais poderão sofrer alterações com a inclusão de novas funcionalidades e serviços.</p>
                <p>Valorizamos a transparência no modo em que tratamos seus dados pessoais. Toda vez que alguma condição relevante desta Política de Privacidade for alterada, essas alterações serão válidas, eficazes e vinculantes após a nova versão ser publicada em nosso site. Estas alterações serão comunicadas por meio de um dos canais disponibilizados por você durante o seu cadastro (E-mail, SMS, WhatsApp e outros).</p>


                <p><b>FALE CONOSCO</p></b>
                <p>Sempre que você tiver alguma dúvida sobre esta Política de Privacidade, mesmo após sua leitura, ou precisar interagir conosco sobre assuntos envolvendo os seus dados pessoais, poderá fazê-lo:</p>
                <p>Por meio dos nossos canais de atendimento disponíveis em <a href="https://www.makroservice.com.br/">makroservice.com.br</a>, solicitando as opções sobre a privacidade dos seus dados pessoais, sempre que disponível ou pelo e-mail do encarregado de dados ti@makroservice.com.br</p>
                <p>Recomendamos que verifiquem a versão atualizada desta Política de Privacidade sempre que navegarem em nosso site ou qualquer um de nossos aplicativos e/ou sistemas.</p>
                <p>Estamos sempre à disposição para esclarecer suas dúvidas e colocar você no controle dos seus dados pessoais.</p>

                <h3><i>Contem conosco para mantê-los informados!</i></h3>

                <p>Atualização: 07 de Julho de 2021.</p>
                <p>Razão Social: Saêta Indústria e Comércio Eletroeletrônico Ltda</p>
                <p>Nome Fantasia: Makro Service Materiais Elétricos</p>




                <div class="btn-actions">
                    <a href="#"><button class="btn-primary" data-dismiss="modal">Fechar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>