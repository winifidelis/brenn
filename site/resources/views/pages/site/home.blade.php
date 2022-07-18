@extends('layouts.site.layoutEkka')

@section('content')

<div class="ec-main-slider section section-space-pb">
    <div class="container">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">

            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex slide-1" style="background-image: url('{{asset('assets_html/images/main-slider-banner/20.jpg')}}');">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Teste</h2>
                                    <h1 class="ec-slide-title">Teste de venda</h1>
                                    <div class="ec-slide-desc">
                                        <p>a partir de R$ <b>29</b>,99</p>
                                        <a href="#" class="btn btn-lg btn-primary">Ver mais <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex slide-2" style="background-image: url('{{asset('assets_html/images/main-slider-banner/21.jpg')}}');">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Teste</h2>
                                    <h1 class="ec-slide-title">Teste de venda</h1>
                                    <div class="ec-slide-desc">
                                        <p>a partir de R$ <b>29</b>,99</p>
                                        <a href="#" class="btn btn-lg btn-primary">Ver mais <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex slide-3" style="background-image: url('{{asset('assets_html/images/main-slider-banner/22.jpg')}}');">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Teste</h2>
                                    <h1 class="ec-slide-title">Teste de venda</h1>
                                    <div class="ec-slide-desc">
                                        <p>a partir de R$ <b>29</b>,99</p>
                                        <a href="#" class="btn btn-lg btn-primary">Ver mais <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
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

<!--
<section class="section ec-category-section section-space-p">
    <div class="container">
        <div class="row d-none">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="ec-title_show">Top Category</h2>
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
!-->

@include('layouts.site.menuProdutosDireto')


<section class="section ec-ser-spe-section section-space-p">
    <div class="container" data-animation="fadeIn">
        <div class="row">

            <div class="ec-test-section col-lg-3 col-md-6 col-sm-12 col-xs-6 sectopn-spc-mb" data-animation="slideInRight">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title_show">Comentários</h2>
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
                                    <div class="ec-test-name">João exemplo 1</div>
                                    <div class="ec-test-designation">Organizados de eventos</div>
                                    <div class="ec-test-divider">
                                        <img src="{{asset('assets_html/images/testimonial/quotes.svg')}}" class="svg_img test_svg" alt="" />
                                    </div>
                                    <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit amet.
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
                                    <div class="ec-test-name">João exemplo 2</div>
                                    <div class="ec-test-designation">Proprietário Arena X</div>
                                    <div class="ec-test-divider">
                                        <img src="{{asset('assets_html/images/testimonial/quotes.svg')}}" class="svg_img test_svg" alt="" />
                                    </div>
                                    <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit amet.
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
                                    <div class="ec-test-name">João exemplo 3</div>
                                    <div class="ec-test-designation">Fundador de campeonatos</div>
                                    <div class="ec-test-divider">
                                        <img src="{{asset('assets_html/images/testimonial/quotes.svg')}}" class="svg_img test_svg" alt="" />
                                    </div>
                                    <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit amet.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- imagem em imagens/banner/23.jpg!-->
            <!-- modificar css!-->
            <div class="col-md-6 col-sm-12" data-animation="fadeIn">
                <div class="ec-banner-inner">
                    <div class="ec-banner-block ec-banner-block-1">
                        <div class="banner-block">
                            <div class="banner-content">
                                <div class="banner-text">
                                    <!--<span class="ec-banner-disc">25% discount</span>!-->
                                    <span class="ec-banner-title">
                                        <center>A Brenn este no Torneio Praia do Cerrado</center>
                                    </span>
                                    <!--<span class="ec-banner-stitle">Starting @ $10</span>!-->
                                </div>
                                <span class="ec-banner-btn"><a href="#">Veja como foi <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="ec-services-section col-lg-3 col-md-3 col-sm-3" data-animation="slideInLeft">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title_show">Nossos serviços</h2>
                    </div>
                </div>
                <div class="ec_ser_block">
                    <div class="ec_ser_content ec_ser_content_1 col-sm-12">
                        <div class="ec_ser_inner">
                            <div class="ec-service-image">
                                <img src="{{asset('assets_html/images/icons/service_4_1.svg')}}" class="svg_img ser_svg" alt="" />
                            </div>
                            <div class="ec-service-desc">
                                <h2>Entrega</h2>
                                <p>Acima de R$ 100,00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_ser_content ec_ser_content_2 col-sm-12">
                        <div class="ec_ser_inner">
                            <div class="ec-service-image">
                                <img src="{{asset('assets_html/images/icons/service_4_2.svg')}}" class="svg_img ser_svg" alt="" />
                            </div>
                            <div class="ec-service-desc">
                                <h2>Entregas rápida</h2>
                                <p>Para goiânia</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_ser_content ec_ser_content_3 col-sm-12">
                        <div class="ec_ser_inner">
                            <div class="ec-service-image">
                                <img src="{{asset('assets_html/images/icons/service_4_3.svg')}}" class="svg_img ser_svg" alt="" />
                            </div>
                            <div class="ec-service-desc">
                                <h2>Suporte online</h2>
                                <p>Das 08:00 as 17:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_ser_content ec_ser_content_4 col-sm-12">
                        <div class="ec_ser_inner">
                            <div class="ec-service-image">
                                <img src="{{asset('assets_html/images/icons/service_4_4.svg')}}" class="svg_img ser_svg" alt="" />
                            </div>
                            <div class="ec-service-desc">
                                <h2>Política de devolução</h2>
                                <p>Simples e sem custos</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_ser_content ec_ser_content_5 col-sm-12">
                        <div class="ec_ser_inner">
                            <div class="ec-service-image">
                                <img src="{{asset('assets_html/images/icons/service_4_5.svg')}}" class="svg_img ser_svg" alt="" />
                            </div>
                            <div class="ec-service-desc">
                                <h2>Desconto</h2>
                                <p>Cupons de descontos dos atletas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section ec-blog-section section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-blog-slider owl-carousel" data-animation="fadeIn">
                <div class="ec-blog-block">
                    <div class="ec-blog-inner">
                        <div class="ec-blog-image">
                            <a href="#">
                                <img class="blog-image" src="{{asset('assets_html/images/atletas/1.jpg')}}" alt="Blog" />
                            </a>
                        </div>
                        <div class="ec-blog-content">
                            <div class="ec-blog-cat"><a href="#">Thayrone</a></div>
                            <h5 class="ec-blog-title"><a href="#">Linha do atleta.</a></h5>
                            <div class="ec-blog-date">Jogador de futevolei</div>
                        </div>
                    </div>
                </div>
                <div class="ec-blog-block">
                    <div class="ec-blog-inner">
                        <div class="ec-blog-image">
                            <a href="#">
                                <img class="blog-image" src="{{asset('assets_html/images/atletas/2.jpg')}}" alt="Blog" />
                            </a>
                        </div>
                        <div class="ec-blog-content">
                            <div class="ec-blog-cat"><a href="#">Lana</a></div>
                            <h5 class="ec-blog-title"><a href="#">Linha do atleta.</a></h5>
                            <div class="ec-blog-date">Jogador de futevolei</div>
                        </div>
                    </div>
                </div>
                <div class="ec-blog-block">
                    <div class="ec-blog-inner">
                        <div class="ec-blog-image">
                            <a href="#">
                                <img class="blog-image" src="{{asset('assets_html/images/atletas/3.jpg')}}" alt="Blog" />
                            </a>
                        </div>
                        <div class="ec-blog-content">
                            <div class="ec-blog-cat"><a href="#">Mary Fidelis</a></div>
                            <h5 class="ec-blog-title"><a href="#">Linha do atleta.</a></h5>
                            <div class="ec-blog-date">Jogador de futevolei</div>
                        </div>
                    </div>
                </div>
                <div class="ec-blog-block">
                    <div class="ec-blog-inner">
                        <div class="ec-blog-image">
                            <a href="#">
                                <img class="blog-image" src="{{asset('assets_html/images/atletas/4.jpg')}}" alt="Blog" />
                            </a>
                        </div>
                        <div class="ec-blog-content">
                            <div class="ec-blog-cat"><a href="#">Thallis</a></div>
                            <h5 class="ec-blog-title"><a href="#">Linha do atleta.</a></h5>
                            <div class="ec-blog-date">Jogador de futevolei</div>
                        </div>
                    </div>
                </div>
                <div class="ec-blog-block">
                    <div class="ec-blog-inner">
                        <div class="ec-blog-image">
                            <a href="#">
                                <img class="blog-image" src="{{asset('assets_html/images/atletas/5.jpg')}}" alt="Blog" />
                            </a>
                        </div>
                        <div class="ec-blog-content">
                            <div class="ec-blog-cat"><a href="#">Sergio</a></div>
                            <h5 class="ec-blog-title"><a href="#">Linha do atleta.</a></h5>
                            <div class="ec-blog-date">Jogador de futevolei</div>
                        </div>
                    </div>
                </div>
                <div class="ec-blog-block">
                    <div class="ec-blog-inner">
                        <div class="ec-blog-image">
                            <a href="#">
                                <img class="blog-image" src="{{asset('assets_html/images/atletas/6.jpg')}}" alt="Blog" />
                            </a>
                        </div>
                        <div class="ec-blog-content">
                            <div class="ec-blog-cat"><a href="#">Lana</a></div>
                            <h5 class="ec-blog-title"><a href="#">Linha do atleta.</a></h5>
                            <div class="ec-blog-date">Jogador de futevolei</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section ec-instagram-section section-space-pt">
    <div class="container">
        <h2 class="d-none">Instagram</h2>
        <div class="ec-insta-wrapper" data-animation="fadeIn">
            <div class="ec-insta-outer">
                <div class="insta-auto">

                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/1.jpg')}}" alt="">

                            </a>
                        </div>
                    </div>

                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/2.jpg')}}" alt="">

                            </a>
                        </div>
                    </div>

                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/3.jpg')}}" alt="">

                            </a>
                        </div>
                    </div>

                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/4.jpg')}}" alt="">

                            </a>
                        </div>
                    </div>


                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/5.jpg')}}" alt="">

                            </a>
                        </div>
                    </div>

                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/6.jpg')}}" alt="">

                            </a>
                        </div>
                    </div>

                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/7.jpg')}}" alt="">

                            </a>
                        </div>
                    </div>

                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{asset('assets_html/images/instragram-image/3.jpg')}}" alt="">

                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection