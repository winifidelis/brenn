@extends('layouts.site.siteLayout')

@section('content')
<!--
<div class="page-header page-header-bg text-left" style="background: 70%/cover #D4E1EA url('{{asset('assets_site/assets/images/mks_NossosServicos.jpg')}}');">
    <div class="container">
        
        <h1>
            NOSSOS SERVIÇOS</h1>
            
    </div>
</div>
!-->
<div class="container position-relative">
    <div class="row">
        <img src="{{asset('assets_site/assets/images/mks_NossosServicos.jpg')}}">
    </div>
</div>

<div class="about-section">
    <div class="container">
        <h2 class="subtitle">Do projeto a finalização da obra</h2>
        <p>A Makro Service oferece produtos e serviços de qualidade, atendendo as necessidades do cliente de varejo e atacado, do projeto a finalização da obra. Com o objetivo de sempre estabelecer um relacionamento duradouro e sustentável com seus clientes, consolidando uma postura ética e confiável que beneficia tanto a empresa quanto o mercado.</p>
    </div>
</div>

<div class="about-section">
    <div class="container">
        <h2 class="subtitle">Soluções industriais e de infraestrutura</h2>
        <p>Temos um time de alto nível técnico, preparados para oferecer e analisar a melhor solução, aliando a alta produtividade com controle preciso de gastos em energia através da fabricação e montagem de painéis de automação, controle e proteção. Somos especializados em sistemas industriais, fornecemos toda linha de produtos de infraestrutura, painéis de proteção de circuitos, quadros de força, painéis de acionamento e controle de motores, sistemas de automação via CLP, Quadros de correção de fator de potencia, centros de medição e muito mais. Tudo de acordo com a necessidade de cada cliente. Trabalhamos com as mais conceituadas marcas para atender à demanda de projetos de implantação/reforma de plantas industriais, comerciais e residenciais, seguindo rígidos padrões de qualidade e segurança.</p>
        <div class="row">
            <img src="{{asset('assets_site/assets/images/imagens_rapidas/certttalegrand.png')}}" alt="servicos" width="147" height="146"><!-- 800,794 !-->
            &nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagens_rapidas/selo_ttw_02.jpg')}}" alt="servicos" width="202" height="129"><!-- 555,355 !-->
        </div>
    </div>
</div>

<div class="about-section">
    <div class="container">
        <h2 class="subtitle">Tecnologia de informação</h2>
        <p>Contamos com equipe que auxilia na especificação de produtos para seu projeto de rede estruturada, sistemas ativos e passivos de rede, controle de acesso, CFTV - segurança eletrônica e detecção de incêndios. Trabalhamos com produtos da mais alta qualidade e com marcas que proporcionam soluções aos nossos partners (projetistas, instaladores, construtoras) priorizando segurança, mobilidade, tráfego, voz e imagem. Garantindo o retorno de investimento ao seu cliente final.</p>
        <div class="row">
            <img src="{{asset('assets_site/assets/images/imagens_rapidas/certttalegrand.png')}}" alt="servicos" width="147" height="146"><!-- 800,794 !-->
            &nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagens_rapidas/rede1.jpg')}}" alt="servicos" width="147" height="150">
            &nbsp;&nbsp;
            <img src="{{asset('assets_site/assets/images/imagens_rapidas/rede2.jpg')}}" alt="servicos" width="147" height="150">
        </div>
    </div>
</div>

<div class="about-section">
    <div class="container">
        <h2 class="subtitle">Iluminação industrial e comercial</h2>
        <p>Desenvolvemos projetos e especificações para atender a necessidades luminotécnicas, de ambientes industriais, comerciais e específicos dentro das mais rígidas normas de segurança, conforto e racionalização de consumo de energia. Oferecendo sempre modernas soluções em produtos e serviços.</p>
        <div class="row">
            <img src="{{asset('assets_site/assets/images/imagens_rapidas/316605_orig.jpg')}}" alt="servicos" width="300" height="199">
        </div>
    </div>
</div>


@endsection