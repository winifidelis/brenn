<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col text-left header-top-left d-none d-lg-block">
                <div class="header-top-social">
                    <span class="social-text text-upper">Siga-nos:</span>
                    <ul class="mb-0">
                        <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                        <!--<li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>!-->
                    </ul>
                </div>
            </div>
            @if (request()->route()->getName() == 'inicio')
            <a href="#ec-mobile-sidebar" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                <img src="{{asset('assets_html/images/icons/category-icon.svg')}}" class="svg_img header_svg" alt="icon" />
            </a>
            @endif

            <!--
            <div class="col text-center header-top-center">
                <div class="header-top-message text-upper">
                    <span>Frete grátis</span> com valores acima de - R$75,00
                </div>
            </div>
            !-->
            <!--
            <div class="col header-top-right d-none d-lg-block">
                <div class="header-top-lan-curr d-flex justify-content-end">
                    <div class="header-top-curr dropdown">
                        <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                            <li><a class="dropdown-item" href="#">EUR €</a></li>
                        </ul>
                    </div>
                    <div class="header-top-lan dropdown">
                        <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Italiano</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            !-->
            <div class="col d-lg-none ">
                <div class="ec-header-bottons">
                    <div class="ec-header-user dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown"><img src="{{asset('assets_html/images/icons/user.svg')}}" class="svg_img header_svg" alt="" /></button>
                        @include('layouts.site.topHeader_menulogin')
                    </div>
                    <!--
                    <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                        <div class="header-icon"><img src="{{asset('assets_html/images/icons/wishlist.svg')}}" class="svg_img header_svg" alt="" /></div>
                        <span class="ec-header-count">4</span>
                    </a>
                    !-->
                    <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                        <div class="header-icon"><img src="{{asset('assets_html/images/icons/cart.svg')}}" class="svg_img header_svg" alt="" /></div>
                        <span class="ec-header-count ec-cart-count cart-count-lable">3</span>
                    </a>
                    <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                        <img src="{{asset('assets_html/images/icons/menu.svg')}}" class="svg_img header_svg" alt="icon" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ec-header-bottom d-none d-lg-block">
    <div class="container position-relative">
        <div class="row">
            <div class="ec-flex">
                <div class="align-self-center">
                    <div class="header-logo">
                        <a href="{{route('inicio')}}"><img src="{{asset('assets_html/images/logo/brenn.png')}}" alt="Site Logo" /></a>
                    </div>
                </div>
                <div class="align-self-center">
                    <div class="header-search">
                        <form class="ec-btn-group-form" action="#">
                            <input class="form-control" placeholder="Buscar produto" type="text">
                            <button class="submit" type="submit"><img src="{{asset('assets_html/images/icons/search.svg')}}" class="svg_img header_svg" alt="" /></button>
                        </form>
                    </div>
                </div>
                <div class="align-self-center">
                    <div class="ec-header-bottons">
                        <div class="ec-header-user dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown"><img src="{{asset('assets_html/images/icons/user.svg')}}" class="svg_img header_svg" alt="" /></button>
                            @include('layouts.site.topHeader_menulogin')
                        </div>
                        <!--
                        <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                            <div class="header-icon"><img src="{{asset('assets_html/images/icons/wishlist.svg')}}" class="svg_img header_svg" alt="" /></div>
                            <span class="ec-header-count">4</span>
                        </a>
                        !-->
                        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                            <div class="header-icon"><img src="{{asset('assets_html/images/icons/cart.svg')}}" class="svg_img header_svg" alt="" /></div>
                            <span class="ec-header-count ec-cart-count cart-count-lable">3</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="ec-header-bottom d-lg-none">
    <div class="container position-relative">
        <div class="row ">
            <div class="col">
                <div class="header-logo">
                    <a href="{{route('inicio')}}"><img src="{{asset('assets_html/images/logo/brenn.png')}}" alt="Site Logo" /></a>
                </div>
            </div>
            <div class="col">
                <div class="header-search">
                    <form class="ec-btn-group-form" action="#">
                        <input class="form-control" placeholder="Buscar produto..." type="text">
                        <button class="submit" type="submit"><img src="{{asset('assets_html/images/icons/search.svg')}}" class="svg_img header_svg" alt="icon" /></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>