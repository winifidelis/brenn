@extends('layouts.site.siteLayout')

@section('content')
<!--
<div class="page-header page-header-bg text-left" style="background: 70%/cover #D4E1EA url('{{asset('assets_site/assets/images/mks_TrocaDevolucao.jpg')}}');">
    <div class="container">
        
        <h1>
            TROCA E DEVOLUÇÃO</h1>
            
    </div>
</div>
!-->
<div class="container position-relative">
    <div class="row">
        <img src="{{asset('assets_site/assets/images/mks_TrocaDevolucao.jpg')}}">
    </div>
</div>

<div class="about-section">
    <div class="container">
        <p>A equipe da <strong>Makro Service</strong> quer garantir sua satisfação através de um bom atendimento. Para isso, apresentamos nossa política de troca e devolução. Sempre que houver qualquer dúvida, você poderá entrar em contato com um de nossos consultores através do telefone <strong>(62) 3216-4080</strong> ou pelo e-mail: <a href="{{route('contato')}}">vendas@makroservice.com.br</a>. Atendemos de segunda a sexta-feira (exceto feriados nacionais), das 8h às 18h, no horário de Brasília.</p>

        <h2 class="subtitle">Informações Gerais:</h2>
        <div class="product-desc-content">
            <ul>
                <li><i class="fa fa-check-circle"></i>Leia atentamente a descrição do produto. Caso tenha dúvidas sobre alguma característica, entre em contato por telefone ou e-mail antes de finalizar a compra.</li>
                <li><i class="fa fa-check-circle"></i>Verifique se a voltagem e as características técnicas do produto correspondem à região onde você irá utilizá-lo;</li>
                <li><i class="fa fa-check-circle"></i>Observe a cor do produto. Quando não especificada, entre em contato por telefone ou e-mail;</li>
                <li><i class="fa fa-check-circle"></i>Verifique atentamente as dimensões do produto e as instruções que o acompanham;</li>
                <li><i class="fa fa-check-circle"></i>Evite transtornos e confie a instalação dos seus produtos a um profissional tecnicamente capacitado.</li>
            </ul>
        </div>

        <h2 class="subtitle">Antes de solicitar a troca ou devolução de algum produto deve-se observar:</h2>
        <p><strong>1 – O que conferir na entrega do produto/material?</strong></p>
        <div class="product-desc-content">
            <ul>
                <li><i class="fa fa-check-circle"></i>Embalagem violada;</li>
                <li><i class="fa fa-check-circle"></i>Produto avariado;</li>
                <li><i class="fa fa-check-circle"></i>Produto em desacordo com o pedido;</li>
                <li><i class="fa fa-check-circle"></i>Falta de acessórios.</li>
            </ul>
        </div>
        <p>Caso a divergência não seja aparente ou de fácil constatação, o cliente terá o período de 72 horas para entrar em contato por telefone ou e-mail. Solicitações fora desse prazo não serão aceitas e, nesse caso, o cliente será responsável pelo pagamento do frete.</p>
        <p>A troca só será efetivada após o recebimento e análise do(s) produto(s) devolvido(s). Se houver divergência entre o produto adquirido e o produto entregue, avarias, indícios de mau uso e ausência de manual, acessórios e nota fiscal, a Makro Service ficará isenta de aceitar a devolução e realizar a troca. Neste caso, o produto poderá ser reenviado ao cliente sem consulta prévia e com frete a pagar. Salientamos a importância de avaliar o produto no ato da entrega a fim de constatar se ele não sofreu avarias durante o transporte.</p>
        <p><strong>2 – Comprei um produto e ele apresentou defeito, o que devo fazer?</strong></p>
        <p>A Makro Service trabalha apenas com parceiros que fornecem produtos de qualidade, entretanto, eventualmente, podem ocorrer falhas. Caso isso aconteça, fique tranquilo, nós vamos te ajudar.</p>
        <p>Na hipótese de mau funcionamento do produto, a Makro Service tem 30 (trinta) dias corridos, a contar da data de recebimento do produto, para resolver a ocorrência comunicada pelo cliente através do telefone ou e-mail. Caso o fabricante não tenha assistência técnica, a solução será a troca na loja por outro produto. Se o fabricante tiver assistência técnica, o cliente será encaminhado para que a solução seja através deste canal oferecido. Não haverá troca na loja de produtos que o fabricante somente garante pela assistência técnica.</p>

        <h2 class="subtitle">Procedimentos para devoluções e trocas:</h2>
        <div class="product-desc-content">
            <ul>
                <li><i class="fa fa-check-circle"></i>As trocas serão realizadas de segunda a sexta-feira, das 8h às 18h;</li>
                <li><i class="fa fa-check-circle"></i>Não realizamos trocas aos sábados;</li>
                <li><i class="fa fa-check-circle"></i>Prazo máximo de 30 dias após a emissão do documento fiscal para trocas;</li>
                <li><i class="fa fa-check-circle"></i>Obrigatória a apresentação do documento fiscal para trocas e devoluções. Empresas contribuintes de ICMS devem obrigatoriamente emitir nota fiscal de devolução;</li>
                <li><i class="fa fa-check-circle"></i>Para produtos garantidos por assistência técnica, as trocas serão somente nos canais disponibilizados pelo fabricante.</li>
            </ul>
        </div>

        <h2 class="subtitle">NÃO TROCAMOS:</h2>
        <div class="product-desc-content">
            <ul>
                <li><i class="fa fa-check-circle"></i>Cabos, fios, mangueiras, barramentos de cobre e outros adquiridos em metros (avulsos);</li>
                <li><i class="fa fa-check-circle"></i>Produtos avariados, com marcas de uso, cabos cortados, embalagens violadas ou sem a embalagem original;</li>
                <li><i class="fa fa-check-circle"></i>Não aceitamos trocas e devoluções de revendas;</li>
                <li><i class="fa fa-check-circle"></i>Não aceitamos trocas e devoluções sem o documento fiscal.</li>
            </ul>
        </div>

        <p><strong>ATENÇÃO!</strong> Toda ocorrência deve ser comunicada através do telefone (62) 3216 4080 ou pelo e-mail vendas@makroservice.com.br dentro do prazo estabelecido. Procedendo a ocorrência, o atendente autorizará a devolução. Caso o produto seja devolvido fora do prazo ou sem comunicação prévia, ele será reenviado sem consulta e com frete a pagar. O novo produto será entregue após o recebimento e análise do item defeituoso em nosso Centro de Distribuição.</p>
        <p>A Makro Service fica isenta da responsabilidade de trocar qualquer produto cujo defeito tenha ocorrido devido ao mau uso. O mesmo será devolvido ao cliente sem restituição de valores pagos. Caso o defeito seja constatado após o prazo, o consumidor deverá encaminhar o produto à assistência técnica do fabricante. A garantia contratual é de inteira responsabilidade do mesmo e seu prazo e forma de utilização constam no termo que acompanha o produto.</p>
    </div>
</div>

@endsection