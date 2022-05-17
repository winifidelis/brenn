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





    <!-- Main Slider Start -->
    <div class="ec-main-slider section section-space-pb">
        <div class="container">
            <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
                <!-- Main slider -->
                <div class="swiper-wrapper">
                    <div class="ec-slide-item swiper-slide d-flex slide-1">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-sm-12 align-self-center">
                                    <div class="ec-slide-content slider-animation">
                                        <h2 class="ec-slide-stitle">Sale offer</h2>
                                        <h1 class="ec-slide-title">New Fashion Summer Sale</h1>
                                        <div class="ec-slide-desc">
                                            <p>starting at $ <b>29</b>.99</p>
                                            <a href="#" class="btn btn-lg btn-primary">Shop Now <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-slide-item swiper-slide d-flex slide-2">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-sm-12 align-self-center">
                                    <div class="ec-slide-content slider-animation">
                                        <h2 class="ec-slide-stitle">Trending item</h2>
                                        <h1 class="ec-slide-title">Women's latest fashion sale</h1>
                                        <div class="ec-slide-desc">
                                            <p>starting at $ <b>20</b>.00</p>
                                            <a href="#" class="btn btn-lg btn-primary">Shop Now <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-slide-item swiper-slide d-flex slide-3">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-sm-12 align-self-center">
                                    <div class="ec-slide-content slider-animation">
                                        <h2 class="ec-slide-stitle">Trending accessories</h2>
                                        <h1 class="ec-slide-title">Modern Sunglasses</h1>
                                        <div class="ec-slide-desc">
                                            <p>starting at $ <b>15</b>.00</p>
                                            <a href="#" class="btn btn-lg btn-primary">Shop Now <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-white"></div>
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->




    <!--  category Section Start -->
    <!--  For developer (More icons find in https://www.svg')}}repo.com/) -->
    <section class="section ec-category-section section-space-p">
        <div class="container">
            <div class="row d-none">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title">Top Category</h2>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-15 margin-minus-t-15">
                <div id="ec-cat-slider" class="ec-cat-slider owl-carousel">
                    <div class="ec_cat_content ec_cat_content_1">
                        <div class="ec_cat_inner ec_cat_inner-1">
                            <div class="ec-category-image">
                                <img src="{{asset('assets_html/images/icons/dress-8.svg')}}" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>dress & frock <span title="Category Items">(53)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_2">
                        <div class="ec_cat_inner ec_cat_inner-2">
                            <div class="ec-category-image">
                                <img src="{{asset('assets_html/images/icons/coat-8.svg')}}" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>Winter wear <span title="Category Items">(58)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_3">
                        <div class="ec_cat_inner ec_cat_inner-3">
                            <div class="ec-category-image">
                                <img src="{{asset('assets_html/images/icons/glasses-8.svg')}}" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>glasses & lens <span title="Category Items">(76)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_4">
                        <div class="ec_cat_inner ec_cat_inner-4">
                            <div class="ec-category-image">
                                <img src="{{asset('assets_html/images/icons/shorts-8.svg')}}" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>shorts & jeans<span title="Category Items">(49)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_5">
                        <div class="ec_cat_inner ec_cat_inner-5">
                            <div class="ec-category-image">
                                <img src="{{asset('assets_html/images/icons/tee-8.svg')}}" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>T-shirts<span title="Category Items">(25)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_6">
                        <div class="ec_cat_inner ec_cat_inner-6">
                            <div class="ec-category-image">
                                <img src="{{asset('assets_html/images/icons/jacket-8.svg')}}" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>jacket<span title="Category Items">(35)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_7">
                        <div class="ec_cat_inner ec_cat_inner-7">
                            <div class="ec-category-image">
                                <img src="{{asset('assets_html/images/icons/watch-8.svg')}}" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>watch<span title="Category Items">(89)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_8">
                        <div class="ec_cat_inner ec_cat_inner-8">
                            <div class="ec-category-image">
                                <img src="{{asset('assets_html/images/icons/hat-8.svg')}}" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>hat & caps <span title="Category Items">(65)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">

                <!-- Sidebar area start -->
                <div class="ec-side-cat-overlay"></div>
                <div class="col-lg-3 sidebar-dis-991" data-animation="fadeIn">
                    <div class="cat-sidebar">
                        <div class="cat-sidebar-box">
                            <div class="ec-sidebar-wrap">
                                <!-- Sidebar Category Block -->
                                <div class="ec-sidebar-block">
                                    <div class="ec-sb-title">
                                        <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button></h3>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/dress-8.svg')}}" class="svg_img" alt="drink" />Cothes</div>
                                                <ul style="display: block;">
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Shirt <span title="Available Stock">- 25</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">shorts & jeans <span title="Available Stock">- 52</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">jacket<span title="Available Stock">- 500</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">dress & frock <span title="Available Stock">- 35</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/shoes-8.svg')}}" class="svg_img" alt="drink" />Footwear</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sports <span title="Available Stock">- 25</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Formal <span title="Available Stock">- 52</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Casual <span title="Available Stock">- 40</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">safety shoes <span title="Available Stock">- 35</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/jewelry-8.svg')}}" class="svg_img" alt="drink" />jewelry</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Earrings <span title="Available Stock">- 50</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Couple Rings <span title="Available Stock">- 35</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Necklace <span title="Available Stock">- 40</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/perfume-8.svg')}}" class="svg_img" alt="drink" />perfume</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Clothes perfume<span title="Available Stock">- 4 pcs</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">deodorant <span title="Available Stock">- 52 pcs</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Flower fragrance <span title="Available Stock">- 10 pack</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Air Freshener<span title="Available Stock">- 35 pack</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/cosmetics-8.svg')}}" class="svg_img" alt="drink" />cosmetics</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">shampoo<span title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sunscreen<span title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">body wash<span title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">makeup kit<span title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/glasses-8.svg')}}" class="svg_img" alt="drink" />glasses</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sunglasses <span title="Available Stock">- 20</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Lenses <span title="Available Stock">- 52</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/bag-8.svg')}}" class="svg_img" alt="drink" />bags</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">shopping bag <span title="Available Stock">- 25</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Gym backpack <span title="Available Stock">- 52</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">purse <span title="Available Stock">- 40</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">wallet <span title="Available Stock">- 35</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar Category Block -->
                                <!-- Sidebar Price Block -->
                                <div class="ec-sidebar-block ec-price-clock">
                                    <div class="ec-sb-title">
                                        <h3 class="ec-sidebar-title">Price</h3>
                                    </div>
                                    <div class="ec-sb-block-content es-price-slider">
                                        <div class="ec-price-filter">
                                            <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="250" data-step="5"></div>
                                            <div class="ec-price-input">
                                                <label class="filter__label"><input type="text" class="filter__input"></label>
                                                <span class="ec-price-divider"></span>
                                                <label class="filter__label"><input type="text" class="filter__input"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-sidebar-slider">
                            <div class="ec-sb-slider-title">Best Sellers</div>
                            <div class="ec-sb-pro-sl">
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/1.jpg')}}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">baby fabric shoes</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$5.00</span>
                                                <span class="new-price">$4.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/2.jpg')}}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's hoodies t-shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$10.00</span>
                                                <span class="new-price">$7.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/3.jpg')}}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Girls t-shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$5.00</span>
                                                <span class="new-price">$3.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/4.jpg')}}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">woolen hat for men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$12.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/5.jpg')}}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens purse</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$12.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/6.jpg')}}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy doctor kit</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                                <i class="ecicon eci-star"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$50.00</span>
                                                <span class="new-price">$45.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/7.jpg')}}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">teddy bear baby toy</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$35.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/2.jpg')}}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens hoodies blue</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$13.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product area start -->
                <div class="col-lg-9 col-md-12">

                    <!-- ec New Arrivals, ec Trending, ec Top Rated Start -->
                    <div class="row">
                        <!-- ec New Arrivals -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30" data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">New Arrivals</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/88_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Relaxed Short full Sleeve T-Shirt</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">clothes</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/89_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Girls pnk Embro design Top</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Clothes</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/90_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Black Floral Wrap Midi Skirt</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Clothes</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/91_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pure Garment Dyed Cotton Shirt</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Mens fashion</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/92_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">MEN Yarn Fleece Full-Zip Jacket</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">winter wear</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$10.00</span>
                                                        <span class="old-price">$11.00</span>
                                                        <span class="qty">- 500 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/93_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Winter wear</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$42.00</span>
                                                        <span class="old-price">$45.00</span>
                                                        <span class="qty">- 5 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/94_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">jackets</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$25.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 250 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/95_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Better Basics French Terry Sweatshorts</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">shorts</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$20.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 12 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec Trending -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30" data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Trending</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/96_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Running & Trekking Shoes - White</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">sports</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$42.00</span>
                                                        <span class="old-price">$45.00</span>
                                                        <span class="qty">- 5 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/97_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Trekking & Running Shoes - black</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Sports</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$25.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 250 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/98_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens Party Wear Shoes</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">party wear</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/99_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Sports Claw Women's Shoes</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">sports</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$10.00</span>
                                                        <span class="old-price">$11.00</span>
                                                        <span class="qty">- 500 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/100_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Air Trekking Shoes - white</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">sports</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/101_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Boot With Suede Detail</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">boots</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$20.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 12 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/102_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's Leather Formal Wear shoes</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">formal</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/103_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Casual Men's Brown shoes</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Casual</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec Top Rated -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content m-auto" data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Top Rated</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/112_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">platinum Zircon Classic Ring</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">jewellery</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/105_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Smart watche Vital Plus</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Watches</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/110_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">shampoo conditioner packs</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">cosmetics</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$25.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 250 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/111_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Rose Gold Peacock Earrings</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">jewellery</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$20.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 12 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/106_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pocket Watch Leather Pouch</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">watches</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/107_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Silver Deer Heart Necklace</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">jewellery</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/108_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Titan 100 Ml Womens Perfume</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">perfume</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$10.00</span>
                                                        <span class="old-price">$11.00</span>
                                                        <span class="qty">- 500 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('assets_html/images/product-image/109_1.jpg')}}" alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">men's Leather Reversible Belt</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">belts</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$42.00</span>
                                                        <span class="old-price">$45.00</span>
                                                        <span class="qty">- 5 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ec New Arrivals, ec Trending, ec Top Rated end -->

                    <!-- Deal of the day Start -->
                    <div class="row space-t-50" data-animation="fadeIn">
                        <!--  Special Section Start -->
                        <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 sectopn-spc-mb">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Deal of the day</h2>
                                </div>
                            </div>

                            <div class="ec-spe-products">
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive" src="{{asset('assets_html/images/product-image/111_1.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-rating">
                                                <span class="ec-spe-rating-icon">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">Rose Gold diamonds Earring</a></h5>
                                            <div class="ec-spe-pro-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                                dolor dolor sit amet consectetur Lorem ipsum dolor</div>
                                            <div class="ec-spe-price">
                                                <span class="new-price">$1990.00</span>
                                                <span class="old-price">$2000.00</span>
                                            </div>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Add To Cart</a>
                                            </div>
                                            <div class="ec-spe-pro-progress">
                                                <span class="ec-spe-pro-progress-desc"><span>Already Sold:
                                                        <b>15</b></span><span>Available: <b>40</b></span></span>
                                                <span class="ec-spe-pro-progressbar"></span>
                                            </div>
                                            <div class="countdowntimer">
                                                <span class="ec-spe-count-desc"> Hurry Up! Offer ends in:</span>
                                                <span id="ec-spe-count-1"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive" src="{{asset('assets_html/images/product-image/110_1.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-rating">
                                                <span class="ec-spe-rating-icon">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">shampoo, conditioner & facewash packs</a></h5>
                                            <div class="ec-spe-pro-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                                dolor dolor sit amet consectetur Lorem ipsum dolor</div>
                                            <div class="ec-spe-price">
                                                <span class="new-price">$150.00</span>
                                                <span class="old-price">$200.00</span>
                                            </div>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Add To Cart</a>
                                            </div>
                                            <div class="ec-spe-pro-progress">
                                                <span class="ec-spe-pro-progress-desc"><span>Already Sold:
                                                        <b>20</b></span><span>Available: <b>40</b></span></span>
                                                <span class="ec-spe-pro-progressbar"></span>
                                            </div>
                                            <div class="countdowntimer">
                                                <span class="ec-spe-count-desc"> Hurry Up! Offer ends in:</span>
                                                <span id="ec-spe-count-2"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Special Section End -->
                    </div>
                    <!-- Deal of the day end -->

                    <!-- Product tab area start -->
                    <div class="row space-t-50">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title">New Products</h2>
                            </div>
                        </div>

                        <!-- Tab Start -->
                        <div class="col-md-12 ec-pro-tab">
                            <ul class="ec-pro-tab-nav nav justify-content-end">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#all">All</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#clothes">Clothes</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#footwear">Footwear</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#accessories">accessories</a></li>
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                    <div class="row margin-minus-b-15">
                        <div class="col">
                            <div class="tab-content">
                                <!-- 1st Product tab start -->
                                <div class="tab-pane fade show active" id="all">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/88_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/88_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">T-Shirt</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Relaxed Short full Sleeve T-Shirt</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/97_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/97_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Sports</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Trekking & Running Shoes - black</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$64.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/107_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/107_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">jewellery</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Silver Deer Heart Necklace</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$650.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/108_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/108_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Perfume</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Titan 100 Ml Womens Perfume</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$20.00</span>
                                                            <span class="old-price">$21.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/110_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/110_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">cosmetics</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">shampoo conditioner packs</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$60.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/94_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/94_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">15%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Jackets</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$59.00</span>
                                                            <span class="old-price">$87.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/98_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/98_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">party wear</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens Party Wear Shoes</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$25.00</span>
                                                            <span class="old-price">$30.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/111_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/111_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">jewellery</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Rose Gold Peacock Earrings</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$10.00</span>
                                                            <span class="old-price">$12.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 1st Product tab end -->
                                <!-- ec 2nd Product tab start -->
                                <div class="tab-pane fade" id="clothes">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/94_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/94_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Jackets</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$59.00</span>
                                                            <span class="old-price">$87.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/95_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/95_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Shorts</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Better Basics French Terry Sweatshorts</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$78.00</span>
                                                            <span class="old-price">$85.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/88_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/88_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">T-Shirt</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Relaxed Short full Sleeve T-Shirt</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/89_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/89_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">top</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Girls pnk Embro design Top</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$45.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/90_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/90_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Skirt</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Black Floral Wrap Midi Skirt</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$25.00</span>
                                                            <span class="old-price">$35.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/91_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/91_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Shirt</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pure Garment Dyed Cotton Shirt</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$45.00</span>
                                                            <span class="old-price">$56.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/92_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/92_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Jacket</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">MEN Yarn Fleece Full-Zip Jacket</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$49.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/93_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/93_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Jacket</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$32.00</span>
                                                            <span class="old-price">$45.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 2nd Product tab end -->
                                <!-- ec 3rd Product tab start -->
                                <div class="tab-pane fade" id="footwear">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/96_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/96_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Sports</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Running & Trekking Shoes - White</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$89.00</span>
                                                            <span class="old-price">$95.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/97_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/97_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Sports</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Trekking & Running Shoes - black</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$64.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/98_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/98_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">party wear</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens Party Wear Shoes</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$25.00</span>
                                                            <span class="old-price">$30.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/99_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/99_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Sports</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Sports Claw Women's Shoes</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$70.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/100_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/100_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Sports</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Air Trekking Shoes - white</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$62.00</span>
                                                            <span class="old-price">$80.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/104_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/104_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Boots</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Boot With Suede Detail</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$65.00</span>
                                                            <span class="old-price">$70.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/102_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/102_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Formal</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's Leather Formal Wear shoes</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/103_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/103_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Casual</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Casual Men's Brown shoes</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$99.00</span>
                                                            <span class="old-price">$105.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 3rd Product tab end -->
                                <!-- ec 3rd Product tab start -->
                                <div class="tab-pane fade" id="accessories">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/105_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/105_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">watches</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Smart watche Vital Plus</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$100.00</span>
                                                            <span class="old-price">$120.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/106_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/106_2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Watches</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pocket Watch Leather Pouch</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$150.00</span>
                                                            <span class="old-price">$170.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/107_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/107_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">jewellery</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Silver Deer Heart Necklace</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$650.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/108_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/108_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Perfume</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Titan 100 Ml Womens Perfume</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$20.00</span>
                                                            <span class="old-price">$21.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/109_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/109_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">Belt</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">men's Leather Reversible Belt</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$25.00</span>
                                                            <span class="old-price">$35.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/110_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/110_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">cosmetics</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">shampoo conditioner packs</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$60.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/111_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/111_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">jewellery</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Rose Gold Peacock Earrings</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$10.00</span>
                                                            <span class="old-price">$12.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image" src="{{asset('assets_html/images/product-image/112_1.jpg')}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset('assets_html/images/product-image/112_1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html">
                                                        <h6 class="ec-pro-stitle">jewellery</h6>
                                                    </a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">platinum Zircon Classic Ring</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$850.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 3rd Product tab end -->
                            </div>
                        </div>
                    </div>
                    <!-- Product tab area end -->

                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->

    <!--  Testimonial, Banner & Service Section Start -->
    <section class="section ec-ser-spe-section section-space-p">
        <div class="container" data-animation="fadeIn">
            <div class="row">
                <!-- ec Testimonial Start -->
                <div class="ec-test-section col-lg-3 col-md-6 col-sm-12 col-xs-6 sectopn-spc-mb" data-animation="slideInRight">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Testimonial</h2>
                        </div>
                    </div>
                    <div class="ec-test-outer">
                        <ul id="ec-testimonial-slider">
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial" src="{{asset('assets_html/images/testimonial/1.jpg')}}" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="{{asset('assets_html/images/testimonial/quotes.svg')}}" class="svg_img test_svg" alt="" />
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial" src="{{asset('assets_html/images/testimonial/2.jpg')}}" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="{{asset('assets_html/images/testimonial/quotes.svg')}}" class="svg_img test_svg" alt="" />
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial" src="{{asset('assets_html/images/testimonial/3.jpg')}}" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="{{asset('assets_html/images/testimonial/quotes.svg')}}" class="svg_img test_svg" alt="" />
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ec Testimonial end -->
                <!-- ec Banner Start -->
                <div class="col-md-6 col-sm-12" data-animation="fadeIn">
                    <div class="ec-banner-inner">
                        <div class="ec-banner-block ec-banner-block-1">
                            <div class="banner-block">
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <span class="ec-banner-disc">25% discount</span>
                                        <span class="ec-banner-title">Vegetables & Fruits</span>
                                        <span class="ec-banner-stitle">Starting @ $10</span>
                                    </div>
                                    <span class="ec-banner-btn"><a href="shop-left-sidebar-col-3.html">Shop Now <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ec Banner End -->
                <!--  Service Section Start -->
                <div class="ec-services-section col-lg-3 col-md-3 col-sm-3" data-animation="slideInLeft">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Our Services</h2>
                        </div>
                    </div>
                    <div class="ec_ser_block">
                        <div class="ec_ser_content ec_ser_content_1 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{asset('assets_html/images/icons/service_4_1.svg')}}" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Worldwide Delivery</h2>
                                    <p>For Order Over $100</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_2 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{asset('assets_html/images/icons/service_4_2.svg')}}" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Next Day delivery</h2>
                                    <p>UK Orders Only</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_3 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{asset('assets_html/images/icons/service_4_3.svg')}}" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Best Online Support</h2>
                                    <p>Hours: 8AM -11PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_4 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{asset('assets_html/images/icons/service_4_4.svg')}}" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Return Policy</h2>
                                    <p>Easy & Free Return</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_5 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{asset('assets_html/images/icons/service_4_5.svg')}}" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>30% money back</h2>
                                    <p>For Order Over $100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ec Service End -->
            </div>
        </div>
    </section>
    <!--  End Testimonial, Banner & Service Section Start -->

    <!--  Blog Section Start -->
    <section class="section ec-blog-section section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-blog-slider owl-carousel" data-animation="fadeIn">
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('assets_html/images/blog-image/2.jpg')}}" alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Clothes</a></div>
                                <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">Curbside fashion Trends: How to Win the Pickup Battle.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Robin</span> / Jan 18, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('assets_html/images/blog-image/3.jpg')}}" alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Fashion</a></div>
                                <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">Clothes Retail KPIs 2021 Guide for Clothes Executives.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Admin</span> / Apr 06, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('assets_html/images/blog-image/4.jpg')}}" alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Shoes</a></div>
                                <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">EBT vendors: Claim Your Share of SNAP Online Revenue.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Selsa</span> / Feb 10, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('assets_html/images/blog-image/5.jpg')}}" alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Electronics</a></div>
                                <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">Curbside fashion Trends: How to Win the Pickup Battle.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Pawar</span> / Mar 15, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('assets_html/images/blog-image/6.jpg')}}" alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Glasses</a></div>
                                <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">6 fashion Retail Industry Digital Strategies for 2021.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Natly</span> / Jun 02, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('assets_html/images/blog-image/7.jpg')}}" alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Jewellery</a></div>
                                <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">Why Should be Concerned About Instacart Patents.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Admin</span> / Feb 10, 2022</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Blog Section End -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section section-space-pt">
        <div class="container">
            <h2 class="d-none">Instagram</h2>
            <div class="ec-insta-wrapper" data-animation="fadeIn">
                <div class="ec-insta-outer">
                    <div class="insta-auto">
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/1.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/2.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/3.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/4.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/5.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/6.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/7.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/3.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->





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

    <!-- Click To Call -->
    <div class="ec-cc-style cc-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="cc-panel">
            <!-- Panel Content -->
            <div class="cc-header">
                <img src="{{asset('assets_html/images/whatsapp/profile_01.jpg')}}" alt="profile image" />
                <h2>John Mark</h2>
                <p>Tachnical Manager</p>
            </div>
            <div class="cc-body">
                <p><b>Hey there &#128515;</b></p>
                <p>Need help ? just give me a call.</p>
            </div>
            <div class="cc-footer">
                <a href="tel:+919099153528" class="cc-call-button">
                    <span>Call me</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <!--/ End Floating Panel Container -->

        <!-- Start Right Floating Button-->
        <div class="cc-button cc-right-bottom">
            <img src="{{asset('assets_html/images/icons/call.svg')}}" class="svg_img cc-call-svg" alt="call image" />
        </div>
        <!--/ End Right Floating Button-->

    </div>
    <!-- Click To Call end -->

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

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img src="{{asset('assets_html/images/icons/menu.svg')}}" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img src="{{asset('assets_html/images/icons/cart.svg')}}" class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti ec-header-count ec-cart-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><img src="{{asset('assets_html/images/icons/home.svg')}}" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="{{asset('assets_html/images/icons/wishlist.svg')}}" class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-sidebar" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                        <img src="{{asset('assets_html/images/icons/category-icon.svg')}}" class="svg_img header_svg" alt="icon" />
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

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