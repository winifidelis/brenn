<?php
//For developer (More icons find in https://www.svgrepo.com/)
$rotaAtual = '';
if (request()->route() != null) {
    /* ESSE request()->route() != null É PARA FERIFICAR SE ESTOU EM UMA PÁGINA DE ERRO*/
    $rotaAtual = request()->route()->getName();
    $config1 = 'section ec-product-tab section-space-p';
    if ($rotaAtual != 'inicio') {
        $config1 = 'section ec-product-tab section-space-p';
    }
}
?>
<section class="section ec-product-tab section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-side-cat-overlay"></div>
            <div class="col-lg-3 sidebar-dis-991" data-animation="fadeIn">
                <div class="cat-sidebar">
                    <div class="cat-sidebar-box">
                        <div class="ec-sidebar-wrap">

                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Categorias<button class="ec-close">×</button></h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/menu_esquerdo_1.svg')}}" class="svg_img" alt="drink" />Futevôlei</div>
                                            <ul style="display: block;">
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Feminino <span title="Available Stock">- 25</span></a></div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Masculino <span title="Available Stock">- 52</span></a></div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Atletas<span title="Available Stock">- 500</span></a></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/menu_esquerdo_2.svg')}}" class="svg_img" alt="drink" />Esportes</div>
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Futevôlei <span title="Available Stock">- 25</span></a></div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Futebol <span title="Available Stock">- 52</span></a></div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Beach Tennis<span title="Available Stock">- 500</span></a></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/menu_esquerdo_3.svg')}}" class="svg_img" alt="drink" />Empresariais</div>
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Comemorativas <span title="Available Stock">- 25</span></a></div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Corporativas <span title="Available Stock">- 52</span></a></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/menu_esquerdo_4.svg')}}" class="svg_img" alt="drink" />Encomendas</div>
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Esportivas <span title="Available Stock">- 25</span></a></div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Empresarias <span title="Available Stock">- 52</span></a></div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Rurais<span title="Available Stock">- 500</span></a></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item"><img src="{{asset('assets_html/images/icons/menu_esquerdo_5.svg')}}" class="svg_img" alt="drink" />Atletas</div>
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Alan Calixto <span title="Available Stock">- 25</span></a></div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Lane <span title="Available Stock">- 52</span></a></div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Mary Fidelis<span title="Available Stock">- 500</span></a></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--
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
                            !-->
                        </div>
                    </div>









                    <div class="ec-sidebar-slider">
                        <div class="ec-sb-slider-title">Mais vendidos</div>
                        <div class="ec-sb-pro-sl">
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/mais_vendidas_ex_1.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Camiseta 1</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">R$ 15,00</span>
                                            <span class="new-price">R$ 10,00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/mais_vendidas_ex_2.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Camiseta 2</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">R$ 15,00</span>
                                            <span class="new-price">R$ 10,00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/mais_vendidas_ex_3.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Bermuda</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">R$ 15,00</span>
                                            <span class="new-price">R$ 10,00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/mais_vendidas_ex_4.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Camiseta 3</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">R$ 15,00</span>
                                            <span class="new-price">R$ 10,00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/mais_vendidas_ex_5.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Blusa</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">R$ 15,00</span>
                                            <span class="new-price">R$ 10,00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/mais_vendidas_ex_6.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Camiseta preto e branco</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                            <i class="ecicon eci-star"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">R$ 15,00</span>
                                            <span class="new-price">R$ 10,00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/mais_vendidas_ex_7.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Saia</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">R$ 15,00</span>
                                            <span class="new-price">R$ 10,00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img src="{{asset('assets_html/images/product-image/mais_vendidas_ex_8.jpg')}}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Regata</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">R$ 15,00</span>
                                            <span class="new-price">R$ 10,00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-9 col-md-12">

                <!--
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30" data-animation="fadeIn">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title_show">New Arrivals</h2>
                            </div>
                        </div>
                        <div class="ec-new-slider">
                            <div class="col-sm-12 ec-all-product-block">
                                <div class="ec-all-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30" data-animation="fadeIn">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title_show">Trending</h2>
                            </div>
                        </div>
                        <div class="ec-new-slider">
                            <div class="col-sm-12 ec-all-product-block">
                                <div class="ec-all-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
                                                <img class="main-image" src="{{asset('assets_html/images/product-image/97_1.jpg')}}" alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Produto exemplo</a></h5>
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content m-auto" data-animation="fadeIn">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title_show">Top Rated</h2>
                            </div>
                        </div>
                        <div class="ec-new-slider">
                            <div class="col-sm-12 ec-all-product-block">
                                <div class="ec-all-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                                            <a href="#" class="image">
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
                !-->



                <div class="row space-t-50" data-animation="fadeIn">

                    <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 sectopn-spc-mb">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title_show">Ofertas especiais</h2>
                            </div>
                        </div>

                        <div class="ec-spe-products">

                            @foreach($produtosOfertasEspeciais as $oferta)
                            <div class="ec-spe-product">
                                <div class="ec-spe-pro-inner">
                                    <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                        <div class="ec-spe-pro-image">
                                            <img class="img-responsive" src="{{asset('uploads/produtos/'.$oferta->produtoFoto[0]->endereco)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                        <!--
                                        <div class="ec-spe-pro-rating">
                                            <span class="ec-spe-rating-icon">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                                <i class="ecicon eci-star"></i>
                                            </span>
                                        </div>
                                        !-->
                                        <h5 class="ec-spe-pro-title"><a href="#">{{$oferta->nome}}</a></h5>
                                        <div class="ec-spe-pro-desc">{{$oferta->descricao}}</div>
                                        @if($oferta->temdesconto)
                                        <div class="ec-spe-price">
                                            <span class="new-price">R$ {{$oferta->valorcomdesconto}}</span>
                                            <span class="old-price">R$ {{$oferta->valor}}</span>
                                        </div>
                                        @else
                                        <div class="ec-spe-price">
                                            <span class="new-price">R$ {{$oferta->valor}}</span>
                                        </div>
                                        @endif
                                        <div class="ec-spe-pro-btn">
                                            <a href="#" class="btn btn-lg btn-primary">Adicionar ao carrinho</a>
                                        </div>
                                        <!--
                                        <div class="ec-spe-pro-progress">
                                            <span class="ec-spe-pro-progress-desc"><span>Disponível: <b>15</b></span><span>Vendido: <b>40</b></span></span>
                                            <span class="ec-spe-pro-progressbar"></span>
                                        </div>
                                        <div class="countdowntimer">
                                            <span class="ec-spe-count-desc"> Corra! Oferta acabará em:</span>
                                            <span id="ec-spe-count-1"></span>
                                        </div>
                                        !-->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>



                <div class="row space-t-50">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title_show">Novos Produtos</h2>
                        </div>
                    </div>


                    <div class="col-md-12 ec-pro-tab">
                        <ul class="ec-pro-tab-nav nav justify-content-end">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#all">Todos</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#atletas">Atletas</a></li>
                        </ul>
                    </div>

                </div>
                <div class="row margin-minus-b-15">
                    <div class="col">
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="all">
                                <div class="row">
                                    @foreach($novosProdutosTodos as $novoTodos)
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="#" class="image">
                                                        <img class="main-image" src="{{asset('uploads/produtos/'.$novoTodos->produtoFoto[0]->endereco)}}" alt="Product" />
                                                        <img class="hover-image" src="{{asset('uploads/produtos/'.$novoTodos->produtoFoto[0]->endereco)}}" alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6 class="ec-pro-stitle">
                                                        {{$novoTodos->produtoEsporte[0]->esporte->descricao}}
                                                    </h6>
                                                </a>
                                                <h5 class="ec-pro-title"><a href="#">{{$novoTodos->nome}}</a></h5>
                                                <div class="ec-pro-rat-price">
                                                    <!--
                                                    <span class="ec-pro-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star"></i>
                                                        <i class="ecicon eci-star"></i>
                                                    </span>
                                                    !-->
                                                    @if($oferta->temdesconto)
                                                    <span class="ec-price">
                                                        <span class="new-price">R$ {{$oferta->valorcomdesconto}}</span>
                                                        <span class="old-price">R$ {{$oferta->valor}}</span>
                                                    </span>
                                                    @else
                                                    <span class="ec-price">
                                                        <span class="old-price">R$ {{$oferta->valor}}</span>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>


                            <div class="tab-pane fade" id="atletas">
                                <div class="row">
                                    @for ($i = 0; $i != 8; $i++)
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="#" class="image">
                                                        <img class="main-image" src="{{asset('assets_html/images/product-image/produtos_esportes.jpg')}}" alt="Product" />
                                                        <img class="hover-image" src="{{asset('assets_html/images/product-image/produtos_esportes.jpg')}}" alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets_html/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('assets_html/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group compare" title="Compare"><img src="{{asset('assets_html/images/icons/compare.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('assets_html/images/icons/pro_cart.svg')}}" class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6 class="ec-pro-stitle">Esporte</h6>
                                                </a>
                                                <h5 class="ec-pro-title"><a href="#">Produto exemplo {{$i+1}}</a></h5>
                                                <div class="ec-pro-rat-price">
                                                    <span class="ec-pro-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star"></i>
                                                        <i class="ecicon eci-star"></i>
                                                    </span>
                                                    <span class="ec-price">
                                                        <span class="new-price">R$ 58,00</span>
                                                        <span class="old-price">R$ 64,00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>