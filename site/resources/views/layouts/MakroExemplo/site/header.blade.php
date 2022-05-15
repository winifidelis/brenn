<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left d-none d-sm-block">
                <p class="top-message text-uppercase">MATERIAIS ELÉTRICOS DE CONFIANÇA</p>
            </div>

            <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
                <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                    <a href="#">Links</a>
                    <div class="header-menu">
                        <ul>
                            @if (Auth::check())
                            @can('telabackend')
                            <li><a href="{{route('dashbackend')}}">Administrar site </a></li>
                            @endcan
                            <li><a href="{{route('user.dashuser')}}">{{Auth::user()->email}} </a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">sair </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @else
                            <li><a href="{{ route('login') }}">Login </a></li>
                            <li><a href="{{ route('register') }}">Criar conta </a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                <!--
                <span class="separator"></span>
                <div class="header-dropdown ">
                    <a href="#">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                    <a href="#"><img src="{{asset('assets_site/assets/images/flags/en.png')}}" alt="England flag">ENG</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><img src="{{asset('assets_site/assets/images/flags/en.png')}}" alt="England flag">ENG</a></li>
                            <li><a href="#"><img src="{{asset('assets_site/assets/images/flags/fr.png')}}" alt="France flag">FRA</a></li>
                        </ul>
                    </div>
                </div>
                !-->

                <span class="separator"></span>

                <div class="social-icons">
                    <a href="https://www.instagram.com/makroservice_1982/" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                    <a href="https://www.facebook.com/makroservice.oficial/" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                    <a href="https://www.youtube.com/channel/UCn-P60V1ktwfjRkCMb5CMug" class="social-icon social-youtube fab fa-youtube" target="_blank" title="Google +"></a>
                    <a href="https://www.linkedin.com/company/3478811/admin/" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                    <a href="{{route('contato')}}" class="social-icon social-mail icon-mail-alt" title="Mail"></a>
                    <!--<a href="https://plus.google.com/+MakroserviceBr" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>!-->
                    <!--<a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>!-->
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="header-left col-lg-2 w-auto pl-0">
                <button class="mobile-menu-toggler text-primary mr-2" type="button">
                    <i class="icon-menu"></i>
                </button>
                <a href="{{route('inicio')}}" class="logo">
                    <img src="{{asset('assets_site/assets/images/logo.png')}}" alt="Makro Service">
                </a>
            </div>

            <div class="header-right w-lg-max">
                <div class="header-icon header-icon header-search header-search-inline header-search-category w-lg-max text-right">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                    <form action="{{route('setbuscaprodutos')}}" method="get">
                        <div class="header-search-wrapper">
                            <?php
                            $produtodepartamentos = \App\Models\Produtodepartamento::select("*")
                                ->where("habilitado", "=", "1")
                                ->orderby("descricao")
                                ->get();
                            ?>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Buscar produto" required>
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">Todas</option>
                                    @foreach($produtodepartamentos as $departamento)
                                    <option value="{{$departamento->codigo}}">{{$departamento->descricaosite}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn icon-search-3 p-0" type="submit"></button>
                        </div>
                    </form>
                </div>

                <div class="header-contact d-none d-lg-flex pl-4 ml-3 mr-xl-5 pr-4">
                    <img alt="phone" src="{{asset('assets_site/assets/images/phone.png')}}" width="30" height="30" class="pb-1">
                    <h6>Atendimento<a href="tel:6232164080" class="font1">(62) 3216-4080</a></h6>
                </div>

                <!-- ICONE USER !-->
                @if (Auth::check())
                <a href="{{route('user.dashuser')}}" class="header-icon"><i class="icon-user-2"></i></a>
                @else
                <a href="{{ route('login') }}" class="header-icon"><i class="icon-user-2"></i></a>
                @endif

                <!--
                <a href="#" class="header-icon"><i class="icon-wishlist-2"></i></a>
                !-->
                <?php
                $sessao = Illuminate\Support\Facades\Session::all();
                $totalDeItens = 0;
                if (isset($sessao['carrinho'])) {
                    $totalDeItens = count($sessao['carrinho']);
                    //dd($sessao['carrinho']);
                }
                $valorTotal = 0;
                ?>
                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="icon-cart"></i>
                        @if ($totalDeItens != 0)
                        <span class="cart-count badge-circle">{{$totalDeItens}}</span>
                        @endif
                    </a>

                    <div class="dropdown-menu">
                        @if ($totalDeItens != 0)
                        <div class="dropdownmenu-wrapper">
                            <div class="dropdown-cart-header">
                                <span>{{$totalDeItens}} Itens</span>
                                <a href="{{route('showCarrinho')}}" class="float-right">Ver orçamento</a>
                            </div>

                            <div class="dropdown-cart-products">
                                @foreach($sessao['carrinho'] as $item)
                                <?php
                                $produto = App\Models\Produto::find($item['produto_id']);
                                $imagem = '';
                                $x = explode("\\", $produto['dirfotoprod']);
                                $imagemExiste = Illuminate\Support\Facades\Storage::disk('disk_makro')->exists("imagens/normais/" . $x[count($x) - 1]);
                                if ($imagemExiste && count($x) != 0 && $x[count($x) - 1] != "" && $x[count($x) - 1] != null) {
                                    //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("imagens/normais/" . strtolower($x[count($x) - 1])));
                                    $imagem = "imagens/normais/" . $x[count($x) - 1];
                                } else {
                                    //$imagem = base64_encode(Illuminate\Support\Facades\Storage::get("imagens/normais/produto_default.jpg"));
                                    $imagem = "imagens/normais/produto_default.jpg";
                                }
                                ?>
                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="{{route('showproduto',$produto->id)}}">{{$produto->nomeecommerce}}</a>
                                        </h4>
                                        <!--
                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $99.00
                                        </span>
                                        !-->
                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">{{$item['produtoQuantidade']}}</span>
                                        </span>
                                    </div>

                                    <figure class="product-image-container">
                                        <a href="{{route('showproduto',$produto->id)}}" class="product-image">
                                            <!--<img src="{{asset('assets_site/assets/images/products/cart/product-1.jpg')}}" alt="product" width="80" height="80">!-->
                                            <img src="{{asset('uploads/'.$imagem)}}" width="80" height="80">
                                        </a>
                                        <a href="{{route('removerItemCarrinho',$produto->id)}}" class="btn-remove icon-cancel" title="Remove Product"></a>
                                    </figure>
                                </div>
                                @endforeach
                            </div>
                            <!--
                            <div class="dropdown-cart-total">
                                <span>Total</span>
                                <span class="cart-total-price float-right">R$134,00</span>
                            </div>
                            !-->

                            <div class="dropdown-cart-action">
                                <a href="{{route('showCarrinho')}}" class="btn btn-dark btn-block">Finalizar orçamento</a>
                            </div>
                        </div>
                        @else
                        <div class="dropdownmenu-wrapper">
                            <div class="dropdown-cart-header">
                                <span>{{$totalDeItens}} Itens</span>
                                <a href="#" class="float-right">Ver orçamento</a>
                            </div>
                            <!--
                            <div class="dropdown-cart-total">
                                <span>Total</span>
                                <span class="cart-total-price float-right">R$134,00</span>
                            </div>
                            !-->
                            <div class="dropdown-cart-action">
                                <a href="#" class="btn btn-dark btn-block">Orçamento vazio</a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.site.menu')
</header>