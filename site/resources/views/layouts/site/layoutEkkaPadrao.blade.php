<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Brenn sports</title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <link rel="icon" href="{{asset('assets_html/images/favicon/brenn.png')}}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{asset('assets_html/images/favicon/brenn.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('assets_html/images/favicon/brenn.png')}}" />

    <link rel="stylesheet" href="{{asset('assets_html/css/vendor/ecicons.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/countdownTimer.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/slick.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/nouislider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/bootstrap.css')}}" />


    <link rel="stylesheet" href="{{asset('assets_html/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/skin-05.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/responsive.css')}}" />

    <link rel="stylesheet" id="bg-switcher-css" href="{{asset('assets_html/css/backgrounds/bg-4.css')}}">

</head>

<?php
//Definindo as classes da p??gina baseado nas rotas
$classeCSS = "product_page";
if (request()->route()->getName() == "register") {
    $classeCSS = "blog_page checkout_page";
}
?>

<body class="{{$classeCSS}}">
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <header class="ec-header">

        @include('layouts.site.topHeader')

        @include('layouts.site.menuComputador')

        @include('layouts.site.menuMobile')

    </header>

    @include('layouts.site.carrinho')


    @yield('content')

    @include('layouts.site.footerPadrao')

    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/produto_modal_1.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/produto_modal_2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/produto_modal_3.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/produto_modal_4.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/produto_modal_5.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/produto_modal_1.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/produto_modal_2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/produto_modal_3.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/produto_modal_4.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/produto_modal_5.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="#">Uniforme Fazenda Ararate</a></h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="new-price">R$ 120,00</span>
                                    <span class="old-price">R$ 99,90</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-size">
                                        <span>Tamanhos</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span>P</span></li>
                                                <li><span>M</span></li>
                                                <li><span>G</span></li>
                                                <li><span>GG</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary">Adicionar ao carrinho</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.site.menuBarFooterPadrao')

    <!-- Usar isso aqui como aceitador de cookie  -->
    <!--
    <div class="recent-purchase">
        <img src="{{asset('assets_html/images/product-image/1.jpg')}}" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>stylish baby shoes</h6>
            <p>10 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">??</a>
    </div>
    !-->

    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><img src="{{asset('assets_html/images/icons/cart.svg')}}" class="svg_img header_svg" alt="" /></div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>

    <div class="ec-style ec-right-bottom">
        <div class="ec-right-bottom">
            <div class="ec-box">
                <div class="ec-button rotateBackward">
                    <img class="whatsapp" src="{{asset('assets_html/images/common/whatsapp.png')}}" alt="whatsapp icon" />
                </div>
            </div>
        </div>
    </div>





    <script src="{{asset('assets_html/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets_html/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets_html/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets_html/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets_html/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!--Plugins JS-->
    <script src="{{asset('assets_html/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/countdownTimer.min.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/slick.min.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/infiniteslidev2.js')}}"></script>
    <script src="{{asset('assets_html/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/jquery.sticky-sidebar.js')}}"></script>
    <script src="{{asset('assets_html/js/vendor/google-translate.js')}}"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script src="{{asset('assets_html/js/vendor/index.js')}}"></script>
    <script src="{{asset('assets_html/js/main.js')}}"></script>

    <script src="{{asset('assets_html/util.js')}}"></script>

</body>

</html>