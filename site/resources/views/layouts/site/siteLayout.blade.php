<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="imagetoolbar" content="no">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>MATERIAIS ELÉTRICOS DE CONFIANÇA – Makro Service</title>
    @if(View::hasSection('metatags'))
    @yield('metatags')
    @else
    <meta name="description" content="Makro Service - Materiais Elétricos, Instalação, Comando e Distribuição, Automação e Drivers, Iluminação, Motores Elétricos e muito mais" />
    <meta name="keywords" content="Makro Service - Materiais Elétricos, Instalação, Comando e Distribuição, Automação e Drivers, Iluminação, Motores Elétricos e muito mais" />
    <meta name="robots" content="index, follow">
    <meta property="og:site_name" content="Makro Service Materiais Elétricos de Confiança">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="https://makroservice.com.br/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Material Elétrico Goiânia - Loja de Material Elétrico  | Makro Service Materiais Elétricos de Confiança">
    <meta property="og:image" content="https://makroservice.com.br/assets_site/assets/images/logo.png">
    <meta property="og:description" content="Makro Service - Materiais Elétricos, Instalação, Comando e Distribuição, Automação e Drivers, Iluminação, Motores Elétricos e muito mais">
    <meta property="article:author" content="Makro Service Materiais Elétricos de Confiança">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Material Elétrico Goiânia - Loja de Material Elétrico  | Makro Service Materiais Elétricos de Confiança">
    <meta name="twitter:description" content="Makro Service - Materiais Elétricos, Instalação, Comando e Distribuição, Automação e Drivers, Iluminação, Motores Elétricos e muito mais">
    @endif


    <meta name="author" content="winifidelis@gmail.com">

    <link rel="icon" type="image/x-icon" href="{{asset('assets_site/assets/images/icons/favicon.ico')}}">


    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '479219460443629');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=479219460443629&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Ads: 922213332 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-922213332"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-922213332');
    </script>

    <!-- Event snippet for Visualização de página conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-922213332/ygQUCIegj5MDENS337cD'
        });
    </script>




    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = "{{asset('assets_site/assets/js/webfont.js')}}";
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="stylesheet" href="{{asset('assets_site/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets_site/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets_site/assets/vendor/fontawesome-free/css/all.min.css')}}">

    <style type="text/css">
        .whatsappFlutuante {
            position: fixed;
            bottom: 1%;
            right: 1%;
            z-index: 10000000;
        }
    </style>

</head>

<body>
    <div class="page-wrapper">

        @include('layouts.site.header')

        <main class="main">
            @yield('content')
        </main>

        @include('layouts.site.rodape')

    </div>

    @include('layouts.site.menuMobile')

    @include('layouts.site.modalpopup')

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <script type="text/javascript" src="{{asset('assets_site/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_site/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_site/assets/js/optional/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_site/assets/js/plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_site/assets/js/main.js')}}"></script>

    <script src="{{asset('assets/util.js')}}"></script>

    <?php
    $whatsapp = \App\Models\Whatsappvendedores::select("*")
        ->where("bloqueado", "bloqueado", '0')
        ->orderby('posicao', "asc")
        ->first();
    ?>

    <div>
        <a href="javascript:executaBtnWhatsapp()"><img class="whatsappFlutuante" src="{{asset('assets_site/assets/images/contatowhats.png')}}" /></a>
    </div>
    <script>
        clique = true;

        function executaBtnWhatsapp() {
            window.open('https://api.whatsapp.com/send?phone=+{{$whatsapp->whatsapp}}&text={{$whatsapp->nome}}, {{$whatsapp->mensagem}}', '_blank');
            if (clique) {
                clique = false;
                $.ajax({
                    'processing': true,
                    'serverSide': true,
                    type: "POST",
                    data: {
                        vendedor_id: "{{$whatsapp->id}}",
                        '_token': "{{csrf_token()}}",
                    },
                    url: '{{URL::to("/whatsappvendedores.mudarPosicao")}}',
                    datatype: "json",
                    success: function(modelo) {
                        if (modelo === 'ok') {
                            //não há resposta
                            return;
                        }
                    }
                });
            }
        }
    </script>


    <style>
        section.termos-politica {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            background: #2D505E;
            padding: 5px 20px;
            line-height: 24px;
            font-size: 14px;
            color: #ffffff;
            box-shadow: 0 5px 12px 14px rgba(0, 0, 0, .06);
            z-index: 999;
        }

        .termos-politica p {
            margin: 20px;
            max-width: 900px;
            text-align: left;
        }

        section.termos-politica a {
            color: #ffffff;
            text-decoration: underline;
        }

        .termos-politica-acoes {
            margin-left: 40px;
            display: flex;
            flex-direction: column;
        }

        .termos-politica-acoes span.aceitar-termos-politica {
            margin: 5px 0;
            padding: 5px 30px;
            border-radius: 6px;
            color: #ffffff;
            font-size: 12px;
            cursor: pointer;
            border: 1px solid;
        }

        .termos-politica-acoes span.aceitar-termos-politica:hover {
            background: #ffffff;
            color: #1f4f66;
        }

        @media (max-width: 1024px) {
            section.termos-politica {
                width: initial;
                font-size: 14px;
            }

            section.termos-politica br {
                display: none;
            }
        }

        @media (max-width: 579px) {
            section.termos-politica {
                flex-direction: column;
                font-size: 14px;
            }

            .termos-politica p {
                margin: 0;
                text-align: center;
            }

            .termos-politica-acoes {
                margin: 10px 0 5px;
            }
        }
    </style>
    <?php
    $sessao = Illuminate\Support\Facades\Session::all();
    ?>
    @if(!isset($sessao['termosAceitos']))
    <?php
    if (request()->route() != null) {
        /* ESSE request()->route() != null É PARA FERIFICAR SE ESTOU EM UMA PÁGINA DE ERRO*/
    ?>
        <section class="termos-politica">
            <p>Utilizamos cookies para fornecer uma melhor experiência para nossos usuários. Para saber mais sobre o uso de cookies, <br>consulte nossa <a href="" data-toggle="modal" data-target="#mostrarRegulamento">política de privacidade</a>. Ao continuar navegando em nosso site, você concorda com a nossa política.</p>
            <div class="termos-politica-acoes">
                <span class="aceitar-termos-politica">ACEITAR</span>
            </div>
        </section>
    <?php
    }
    ?>
    @endif

    <script>
        $(document).on('click', '.aceitar-termos-politica', function(e) {
            $.ajax({
                'processing': true,
                'serverSide': true,
                type: "POST",
                data: {
                    '_token': "{{csrf_token()}}",
                },
                url: '{{URL::to("/aceitarTermos")}}',
                datatype: "json",
                success: function(modelo) {
                    if (modelo['erro'] === 'erro') {
                        //alert("Erro ao abrir modelo");
                        return;
                    }
                    $(".termos-politica").fadeOut();
                }
            });
        });
    </script>

</body>

</html>