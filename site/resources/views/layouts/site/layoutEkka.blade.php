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
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/nouislider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/slick.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/plugins/bootstrap.css')}}" />

    <link rel="stylesheet" href="{{asset('assets_html/css/brenn.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_html/css/responsive.css')}}" />

</head>

<body>
    <!--
    carregador do site
    !-->
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <header class="ec-header">

        @include('layouts.site.topHeader')

        @include('layouts.site.menuComputador')

        @include('layouts.site.menuMobile')

    </header>

    @include('layouts.site.carrinho')


    @yield('content')

    @include('layouts.site.footer')

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/94_1.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/94_2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/93_1.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/93_2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/94_2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/94_1.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/94_2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/93_1.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/93_2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('assets_html/images/product-image/94_2.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="new-price">$199.00</span>
                                    <span class="old-price">$200.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span>250 g</span></li>
                                                <li><span>500 g</span></li>
                                                <li><span>1 kg</span></li>
                                                <li><span>2 kg</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    @include('layouts.site.popWhatsApp')


    <!-- Newsletter Modal Start -->
    <div id="ec-popnews-bg"></div>
    <div id="ec-popnews-box">
        <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
        <div class="row">
            <div class="col-md-7 disp-no-767">
                <img src="{{asset('assets_html/images/banner/newsletter-8.png')}}" alt="newsletter">
            </div>
            <div class="col-md-5">
                <div id="ec-popnews-box-content">
                    <h2>Subscribe Newsletter.</h2>
                    <p>Subscribe the ekka ecommerce to get in touch and get the future update. </p>
                    <form id="ec-popnews-form" action="#" method="post">
                        <input type="email" name="newsemail" placeholder="Email Address" required />
                        <button type="button" class="btn btn-primary" name="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Modal end -->

    @include('layouts.site.menuBarFooter')

    <!-- Usar isso aqui como aceitador de cookie  -->
    <!--
    <div class="recent-purchase">
        <img src="{{asset('assets_html/images/product-image/111_1.jpg')}}" alt="payment image">
        <div class="detail">
            <p>Transformar isso aqui</p>
            <h6>em um aceitador de</h6>
            <p>cookie</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    !-->








    <!-- Add to Cart successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
    <!-- Add to Cart successfully toast end -->

    <!-- Vendor JS -->
    <script src="{{asset('assets_html/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets_html/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets_html/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets_html/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets_html/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!--Plugins JS-->

    <script src="{{asset('assets_html/js/plugins/jquery.sticky-sidebar.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/countdownTimer.min.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/nouislider.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/slick.min.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/infiniteslidev2.js')}}"></script>
    <script src="{{asset('assets_html/js/plugins/click-to-call.js')}}"></script>

    <!-- Main Js -->
    <script src="{{asset('assets_html/js/vendor/index.js')}}"></script>
    <script src="{{asset('assets_html/js/brenn.js')}}"></script>
</body>

</html>