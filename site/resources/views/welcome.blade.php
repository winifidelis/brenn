@extends('layouts.site.siteLayout')

@section('content')
<?php
$listaSliders = \App\Models\Sliderprincipal::select("*")
    //->where("habilitado", "=", "1")
    ->orderby("ordem")
    ->get();
?>

<div class="home-slider owl-carousel owl-theme owl-carousel-lazy show-nav-hover mb-2 text-uppercase" data-owl-options="{
				'loop': true,
                'autoplay': true
			}">
    @foreach($listaSliders as $slider)
    <div class="home-slide {{$slider->id}} banner">
        <img class="owl-lazy slide-bg" src="{{asset('assets_site/assets/images/lazy.png')}}" data-src="{{asset('uploads/slider/'.$slider->imagem)}}">
    </div>
    @endforeach
</div>

<div class="container">
    <div class="info-boxes-slider owl-carousel owl-theme mb-2" data-owl-options="{
					'dots': false,
					'loop': true,
                    'autoplayTimeout':3000,
					'responsive': {
						'576': {
							'items': 2
						},
						'992': {
							'items': 5
						}
					}
				}">
        <div class="info-box info-box-icon-left">
            <i class="icon-shipped"></i>
            <div class="info-box-content">
                <h4>ATENDIMENTO EM TODO BRASIL</h4>
                <!--<p class="text-body">Texto menor</p>!-->
            </div>
        </div>
        <div class="info-box info-box-icon-left">
            <i class="icon-online-support"></i>
            <div class="info-box-content">
                <h4>ATENDIMENTO PERSONALIZADO</h4>
                <!--<p class="text-body">Texto menor</p>!-->
            </div>
        </div>
        <div class="info-box info-box-icon-left">
            <i class="icon-shipping"></i>
            <div class="info-box-content">
                <h4>FACILIDADE NA ENTREGA</h4>
                <!--<p class="text-body">Texto menor</p>!-->
            </div>
        </div>
        <div class="info-box info-box-icon-left">
            <i class="icon-money"></i>
            <div class="info-box-content">
                <h4>DIVIDIMOS EM ATÉ 12X</h4>
                <!--<p class="text-body">Texto menor</p>!-->
            </div>
        </div>
        <div class="info-box info-box-icon-left">
            <i class="icon-user"></i>
            <div class="info-box-content">
                <h4>CONSULTORES CERTIFICADOS</h4>
                <!--<p class="text-body">Texto menor</p>!-->
            </div>
        </div>
    </div>

    <!--
    <div class="banners-container">
        <div class="banners-slider owl-carousel owl-theme">
            <div class="banner banner1 banner-sm-vw">
                <figure>
                    <img src="{{asset('assets_site/assets/images/banners/banner-1.jpg')}}" alt="banner">
                </figure>
            </div>

            <div class="banner banner2 banner-sm-vw text-uppercase">
                <figure>
                    <img src="{{asset('assets_site/assets/images/banners/banner-2.jpg')}}" alt="banner">
                </figure>
            </div>

            <div class="banner banner3 banner-sm-vw">
                <figure>
                    <img src="{{asset('assets_site/assets/images/banners/banner-3.jpg')}}" alt="banner">
                </figure>
            </div>
        </div>
    </div>
    !-->
    <?php
    $tribanner = \App\Models\Tribanner::all();
    ?>

    <div class="row">
        @foreach($tribanner as $fig)
        <div class="col-4">
            @if (strlen($fig->linkexterno) != 0)
            <a href="javascript:linkExterno{{$fig->id}}()">
                <img src="{{asset('uploads/'.'tribanner/' . $fig->imagem)}}">
            </a>
            <script>
                function linkExterno{{$fig->id}}() {
                    window.open('{{$fig->linkexterno}}', '_blank');
                }
            </script>
            @else
            <!-- entra aqui caso não tenha nada no link externo!-->
            @if ($fig->link == 'semlink')
            <img src="{{asset('uploads/'.'tribanner/' . $fig->imagem)}}">
            @else
            <a href="{{route($fig->link)}}">
                <img src="{{asset('uploads/'.'tribanner/' . $fig->imagem)}}">
            </a>
            @endif
            @endif

        </div>
        @endforeach
    </div>

</div>

<section class="featured-products-section">
    <div class="container">
        <h2 class="section-title heading-border ls-20 border-0">Promoções</h2>

        <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
						'dots': false,
						'nav': true
					}">
            @foreach($promocoes as $promocao)
            <div class="product-default">
                <figure>
                    <a href="{{route('showproduto',$promocao->produto->linkdescricao)}}">
                        <img src="{{asset('uploads/'.$promocao->imagem)}}">
                    </a>
                    <!--
                    <div class="label-group">
                        <div class="product-label label-hot">HOT</div>
                        <div class="product-label label-sale">20% Off</div>
                    </div>
                    !-->
                </figure>
                <div class="product-details">
                    <div class="category-list">
                        <a href="{{route('showdepartamento', $promocao->produto->codigo_departamento)}}" class="product-category">{{$promocao->produto->departamento}}</a>
                    </div>
                    <h3 class="product-title">
                        <a href="{{route('showproduto',$promocao->produto->linkdescricao)}}">{{$promocao->descricao}}</a>
                    </h3>
                    <!--
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:80%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                    </div>
                    !-->
                    <!--
                    <div class="price-box">
                        <del class="old-price">$59.00</del>
                        <span class="product-price">$49.00</span>
                    </div>
                    !-->
                    <div class="product-action">
                        <!--<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>!-->
                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal" onclick="javascript:addItemAoCarrinhoQuick({{$promocao->produto->id}})">Adicionar ao orçamento</button>
                        <a href="{{route('showprodutoquick',$promocao->produto->linkdescricao)}}" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="new-products-section">
    <div class="container">
        <h2 class="section-title heading-border ls-20 border-0">Produtos mais vendidos</h2>

        <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
						'dots': true,
                        'autoplay': true,
						'responsive': {
							'992': {
								'items': 6
							}
						}
					}">
            @foreach($maisVendidos as $maisvendido)
            <div class="product-default">
                <figure>
                    <a href="{{route('showproduto',$maisvendido->linkdescricao)}}">
                        <img src="{{asset('uploads/'.$maisvendido->dirfotoprod)}}">
                    </a>
                    <!--
                    <div class="label-group">
                        <div class="product-label label-hot">HOT</div>
                    </div>
                    !-->
                </figure>
                <div class="product-details">
                    <div class="category-list">
                        <a href="{{route('showdepartamento', $maisvendido->codigo_departamento)}}" class="product-category">{{$maisvendido->departamento}}</a>
                    </div>
                    <h3 class="product-title">
                        <a href="{{route('showproduto',$maisvendido->linkdescricao)}}">{{$maisvendido->nomeecommerce}}</a>
                    </h3>
                    <!--
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:80%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                    </div>
                    !-->
                    <!--
                    <div class="price-box">
                        <del class="old-price">$59.00</del>
                        <span class="product-price">$49.00</span>
                    </div>
                    !-->
                    <div class="product-action">
                        <!--<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>!-->
                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal" onclick="javascript:addItemAoCarrinhoQuick({{$maisvendido->id}})">Adicionar ao orçamento</button>
                        <!--<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>!-->
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <!--
        <div class="banner banner-big-sale mb-5" style="background: #2A95CB center/cover url('assets/images/banners/banner-4.jpg');">
            <div class="banner-content row align-items-center py-4 mx-0">
                <div class="col-md-9">
                    <h2 class="text-white text-uppercase ls-n-20 mb-md-0 px-4">
                        <b class="d-inline-block mr-4 mb-1 mb-md-0">Big Sale</b>
                        All new fashion brands items up to 70% off
                        <small class="text-transform-none align-middle">Online Purchases Only</small>
                    </h2>
                </div>
                <div class="col-md-3 text-center text-md-right">
                    <a class="btn btn-light btn-white btn-lg mr-3" href="#">View Sale</a>
                </div>
            </div>
        </div>
        !-->


        <h2 class="section-title heading-border border-0 mb-5">Departamentos</h2>
        <!--<div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer"!-->
        <div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer" data-owl-options="{
						'dots': false,
                        'loop': true,
                        'autoplay': true,
                        'items':2,
                        'autoplayTimeout':3000,
						'responsive': {
							'992': {
								'items': 6
							}
						}
					}">
            <?php
            $listaDepsCategorias = \App\Models\Produtodepartamento::select("*")
                ->where("habilitado", "=", "1")
                ->orderby("descricao")
                ->get();
            ?>
            @foreach($listaDepsCategorias as $departamento)
            <?php
            $imagem = null;
            $imagemExiste = \Illuminate\Support\Facades\Storage::disk('disk_makro')->exists("catmini/" . strtolower($departamento->imagemmini));
            //dd($x,$imagemExiste,$x[count($x) - 1],strtolower("imagens/normais/" . $x[count($x) - 1]));
            if ($imagemExiste) {
                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("catmini/" . strtolower($departamento->imagemmini)));
                $imagem = "catmini/" . $departamento->imagemmini;
            } else {
                //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("catmini/default.png"));
                $imagem = "catmini/default.png";
            }
            ?>
            <div class="product-category">
                <a href="{{route('showdepartamento', $departamento->id)}}">
                    <figure>
                        <img src="{{asset('uploads/'.$imagem)}}">
                    </figure>
                    <!--
                    <div class="category-content">
                        <h3>{{ucfirst(mb_strtolower($departamento->descricaosite))}}</h3>
                    </div>
                    !-->
                    <div class="text-center">
                        <h5>{{ucfirst(mb_strtolower($departamento->descricaosite))}}</h5>
                        <!--<span><mark class="count">3</mark> products</span>!-->
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--
<section class="feature-boxes-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box px-sm-5 feature-box-simple text-center">
                    <i class="icon-earphones-alt"></i>
                    <div class="feature-box-content">
                        <h3 class="m-b-1">Customer Support</h3>
                        <h5 class="m-b-3">You Won't Be Alone</h5>
                        <p>We really care about you and your website as much as you do. Purchasing Porto or any other theme from us you get 100% free support.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box px-sm-5 feature-box-simple text-center">
                    <i class="icon-credit-card"></i>
                    <div class="feature-box-content">
                        <h3 class="m-b-1">Fully Customizable</h3>
                        <h5 class="m-b-3">Tons Of Options</h5>
                        <p>With Porto you can customize the layout, colors and styles within only a few minutes. Start creating an amazing website right now!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box px-sm-5 feature-box-simple text-center">
                    <i class="icon-action-undo"></i>
                    <div class="feature-box-content">
                        <h3 class="m-b-1">Powerful Admin</h3>
                        <h5 class="m-b-3">Made To Help You</h5>
                        <p>Porto has very powerful admin features to help customer to build their own shop in minutes without any special skills in web development.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
!-->

<!--
<section class="promo-section bg-dark" data-parallax="{'speed': 1.8, 'enableOnMobile': true}" data-image-src="{{asset('assets_site/assets/images/banners/banner-5.jpg')}}">
    <div class="promo-banner banner container text-uppercase">
        <div class="banner-content row align-items-center text-center">
            <div class="col-md-4 ml-xl-auto text-md-right">
                <h2 class="mb-md-0 text-white">Top Fashion<br>Deals</h2>
            </div>
            <div class="col-md-4 col-xl-3 pb-4 pb-md-0">
                <a href="#" class="btn btn-dark btn-black ls-10">View Sale</a>
            </div>
            <div class="col-md-4 mr-xl-auto text-md-left">
                <h4 class="mb-1 coupon-sale-text p-0 d-block ls-10 text-transform-none"><b>Exclusive COUPON</b></h4>
                <h5 class="mb-2 coupon-sale-text text-white ls-10 p-0"><i class="ls-0">UP TO</i><b class="text-white bg-secondary">$100</b> OFF</h5>
            </div>
        </div>
    </div>
</section>
!-->

<section class="blog-section">
    <div class="container">
        <!--
        <h2 class="section-title heading-border border-0 mb-2">Latest News</h2>
        <div class="owl-carousel owl-theme" data-owl-options="{
						'loop': false,
						'margin': 20,
						'autoHeight': true,
						'autoplay': false,
						'dots': false,
						'items': 2,
						'responsive': {
							'576': {
								'items': 3
							},
							'768': {
								'items': 4
							}
						}
					}">
            <article class="post">
                <div class="post-media">
                    <a href="single.html">
                        <img src="{{asset('assets_site/assets/images/blog/home/post-1.jpg')}}" alt="Post" width="225" height="280">
                    </a>
                    <div class="post-date">
                        <span class="day">26</span>
                        <span class="month">Feb</span>
                    </div>
                </div>

                <div class="post-body">
                    <h2 class="post-title">
                        <a href="single.html">Top New Collection</a>
                    </h2>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                    </div>
                    <a href="single.html" class="post-comment">0 Comments</a>
                </div>
            </article>

            <article class="post">
                <div class="post-media">
                    <a href="single.html">
                        <img src="{{asset('assets_site/assets/images/blog/home/post-2.jpg')}}" alt="Post" width="225" height="280">
                    </a>
                    <div class="post-date">
                        <span class="day">26</span>
                        <span class="month">Feb</span>
                    </div>
                </div>

                <div class="post-body">
                    <h2 class="post-title">
                        <a href="single.html">Fashion Trends</a>
                    </h2>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                    </div>
                    <a href="single.html" class="post-comment">0 Comments</a>
                </div>
            </article>

            <article class="post">
                <div class="post-media">
                    <a href="single.html">
                        <img src="{{asset('assets_site/assets/images/blog/home/post-3.jpg')}}" alt="Post" width="225" height="280">
                    </a>
                    <div class="post-date">
                        <span class="day">26</span>
                        <span class="month">Feb</span>
                    </div>
                </div>

                <div class="post-body">
                    <h2 class="post-title">
                        <a href="single.html">Right Choices</a>
                    </h2>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                    </div>
                    <a href="single.html" class="post-comment">0 Comments</a>
                </div>
            </article>

            <article class="post">
                <div class="post-media">
                    <a href="single.html">
                        <img src="{{asset('assets_site/assets/images/blog/home/post-4.jpg')}}" alt="Post" width="225" height="280">
                    </a>
                    <div class="post-date">
                        <span class="day">26</span>
                        <span class="month">Feb</span>
                    </div>
                </div>

                <div class="post-body">
                    <h2 class="post-title">
                        <a href="single.html">Perfect Accessories</a>
                    </h2>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                    </div>
                    <a href="single.html" class="post-comment">0 Comments</a>
                </div>
            </article>
        </div>
        !-->

        <!--<hr class="mt-0 m-b-5">!-->

        <div class="brands-slider owl-carousel owl-theme images-center pb-2" data-owl-options="{
						'dots': false,
                        'loop': true,
                        'autoplay': true,
                        'items':2,
                        'autoplayTimeout':3000,
						'responsive': {
							'992': {
								'items': 6
							}
						}
					}">
            <img src="{{asset('assets_site/assets/images/brands/3m.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/eaton.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/kian.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/philips.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/tigre.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/avant.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/elecon.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/lamesa.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/prysmian.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/tramontina.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/blumenau.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/eletropoll.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/ledvance.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/siemens.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/wago.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/cobrecom.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/intelbras.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/legrand.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/sil.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/weg.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/corfio.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/intelli.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/lorenzetti.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/simon.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/weidmuller.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/dutotec.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/itamonte.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/minipa.jpg')}}" width="140" height="60" alt="brand">
            <img src="{{asset('assets_site/assets/images/brands/steck.jpg')}}" width="140" height="60" alt="brand">
        </div>
        <hr class="mt-4 m-b-5">
        <img src="{{asset('assets_site/assets/images/banner-horizontal-bndes.jpg')}}" width="100%" height="60" alt="brand">
        <?php
        /*
        <div class="product-widgets-container row mb-2 pb-2">
            <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                <h4 class="section-sub-title mb-2">Featured Products</h4>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-1.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-2.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-3.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                <h4 class="section-sub-title mb-2">Best Selling Products</h4>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-4.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-5.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-6.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                <h4 class="section-sub-title mb-2">Latest Products</h4>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-7.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-8.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-9.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                <h4 class="section-sub-title mb-2">Top Rated Products</h4>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-10.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-1.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('assets_site/assets/images/products/small/product-2.jpg')}}">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        */
        ?>
    </div>
</section>

<script>
    function addItemAoCarrinhoQuick(id) {
        $('#addCartModal').modal('show');
        $.ajax({
            'processing': true,
            'serverSide': true,
            type: "GET",
            data: {
                '_token': "{{csrf_token()}}",
                produto_id: id,
            },
            url: '{{URL::to("/addItemNocarrinhoAjax")}}',
            datatype: "json",
            success: function(modelo) {
                if (modelo === 'ok') {
                    //deu bom
                } else {
                    //deu erro
                }
            }
        });
    }
</script>

@endsection