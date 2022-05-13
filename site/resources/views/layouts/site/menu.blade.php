<div class="header-bottom sticky-header d-none d-lg-block">
    <div class="container">
        <nav class="main-nav w-100">
            <ul class="menu">

                <?php
                $endActive = '';
                if (request()->route() != null) {
                    /* ESSE request()->route() != null É PARA FERIFICAR SE ESTOU EM UMA PÁGINA DE ERRO*/
                    $endActive = request()->route()->getName();
                }
                //$endActive = request()->route()->getName();
                $menuActiveInicio = false;
                $menuActiveInstitucional = false;
                $menuActiveContato = false;
                $menuActiveTrabalhe = false;
                $menuActiveDepartamento = false;
                $menuActiveEngenharia = false;
                $menuActiveProjetos = false;
                if ($endActive == '' || $endActive == 'inicio') {
                    $menuActiveInicio = true;
                }
                if ($endActive == 'quemsomos' || $endActive == 'nossosservicos' || $endActive == 'formardepagamento' || $endActive == 'trocaedevolucao') {
                    $menuActiveInstitucional = true;
                }
                if ($endActive == 'contato') {
                    $menuActiveContato = true;
                }
                if ($endActive == 'showdepartamento') {
                    $menuActiveDepartamento = true;
                }
                if ($endActive == 'trabalheconosco') {
                    $menuActiveTrabalhe = true;
                }
                if ($endActive == 'engenharia') {
                    $menuActiveEngenharia = true;
                }
                if ($endActive == 'projetos') {
                    $menuActiveProjetos = true;
                }

                ?>
                <li class="{{ $menuActiveInicio ? 'active' : '' }}">
                    <a href="{{route('inicio')}}">Início</a>
                </li>
                <?php
                $listaDepsMenu = \App\Models\Produtodepartamento::select("*")
                    ->where("habilitado", "=", "1")
                    ->orderby("descricao")
                    ->get();
                $qtdeDeps = count($listaDepsMenu);
                $qtdeDepsMeio = $qtdeDeps / 2;
                $qtdeDepsMeioZero = 0;
                /*
                O menu esá sendo criado assim para que os itens fiquem divididos na tela, pois estavam ocupando um lugar muito grande
                */
                ?>
                <li class="{{ $menuActiveDepartamento ? 'active' : '' }}">
                    <a href="#">PRODUTOS</a>
                    <div class="megamenu megamenu-fixed-width">
                        <div class="row">
                            <div class="col-4">
                                <ul class="submenu">
                                    @foreach($listaDepsMenu as $departamento)
                                    <?php
                                    if ($qtdeDepsMeioZero < $qtdeDepsMeio) {
                                        echo "<li><a href='" . route('verpartamento', $departamento->id) . "'>" . $departamento->descricaosite . "</a></li>";
                                    }
                                    $qtdeDepsMeioZero++;
                                    ?>
                                    @endforeach
                                </ul>
                            </div>
                            <?php
                            $qtdeDepsMeioZero = 0;
                            ?>
                            <div class="col-4">
                                <ul class="submenu">
                                    @foreach($listaDepsMenu as $departamento)
                                    <?php
                                    if ($qtdeDepsMeioZero >= $qtdeDepsMeio) {
                                        echo "<li><a href='" . route('verpartamento', $departamento->id) . "'>" . $departamento->descricaosite . "</a></li>";
                                    }
                                    $qtdeDepsMeioZero++;
                                    ?>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="{{ $menuActiveInstitucional ? 'active' : '' }}">
                    <a href="#">Institucional</a>
                    <ul>
                        <li><a href="{{route('quemsomos')}}">Quem somos</a></li>
                        <li><a href="{{route('nossosservicos')}}">Nossos serviços</a></li>
                        <li><a href="{{route('contato')}}">Central de atendimento</a></li>
                        <li><a href="{{route('formardepagamento')}}">Formas de pagamento</a></li>
                        <li><a href="{{route('trocaedevolucao')}}">Troca e devolução</a></li>
                        <!--
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="#">Checkout</a>
                            <ul>
                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                <li><a href="checkout-review.html">Checkout Review</a></li>
                            </ul>
                        </li>
                        !-->
                    </ul>
                </li>
                <li class="{{ $menuActiveEngenharia ? 'active' : '' }}">
                    <a href="{{route('engenharia')}}">Engenharia</a>
                </li>
                <li class="{{ $menuActiveProjetos ? 'active' : '' }}">
                    <a href="{{route('projetos')}}">Projetos</a>
                </li>
                <li class="{{ $menuActiveContato ? 'active' : '' }}">
                    <a href="{{route('contato')}}">Entre em contato</a>
                </li>
                <li class="{{ $menuActiveTrabalhe ? 'active' : '' }}">
                    <a href="{{route('trabalheconosco')}}">Trabalhe Conosco</a>
                </li>
                <!--
                <li class="float-right"><a href="https://1.envato.market/DdLk5" class="px-4" target="_blank">Buy Porto!<span class="tip tip-new tip-top">New</span></a></li>
                <li class="float-right mr-0"><a href="#" class="px-4">Special Offer!</a></li>
                !-->
            </ul>
        </nav>
    </div>
</div>