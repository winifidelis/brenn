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
                                        <p>starting at $ <b>29</b>.99</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
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
                <div class="ec-slide-item swiper-slide d-flex slide-3" style="background-image: url('{{asset('assets_html/images/main-slider-banner/22.jpg')}}');">
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

@include('layouts.site.menuProdutosDireto')


<section class="section ec-ser-spe-section section-space-p">
    <div class="container" data-animation="fadeIn">
        <div class="row">

            <div class="ec-test-section col-lg-3 col-md-6 col-sm-12 col-xs-6 sectopn-spc-mb" data-animation="slideInRight">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title_show">Testimonial</h2>
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


            <div class="ec-services-section col-lg-3 col-md-3 col-sm-3" data-animation="slideInLeft">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title_show">Our Services</h2>
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