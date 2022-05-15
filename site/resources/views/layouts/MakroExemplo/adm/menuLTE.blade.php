<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <?php
        $endActive = request()->route()->getName();
        ?>

        <!-- https://fontawesome.com/icons?d=gallery&s=solid&m=free !-->
        <li class="nav-item {{ (request()->is('home*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-plus"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-item {{ (request()->is('home*')) ? 'menu-open' : '' }}">
            <a href="{{route('inicio')}}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Site
                </p>
            </a>
        </li>

        @can('enviarxml')
        <li class="nav-item {{ (request()->is('produto*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                    Produtos
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('produto.enviarxmlprodutos')}}" class="nav-link {{ $endActive=='produto.enviarxmlprodutos' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Atualizar lista de produtos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('produto.enviarImagensProdutos')}}" class="nav-link {{ $endActive=='produto.enviarImagensProdutos' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Enviar imagens</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @can('popupprincipal')
        <li class="nav-item {{ (request()->is('whatsappvendedores*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fab fa-whatsapp"></i>
                <p>
                    WhatsApp Vendedores
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('whatsappvendedores.index')}}" class="nav-link {{ $endActive=='whatsappvendedores.index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lista</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('whatsappvendedores.create')}}" class="nav-link {{ $endActive=='whatsappvendedores.create' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cadastrar</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @can('popupprincipal')
        <li class="nav-item {{ (request()->is('departamentoproduto*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-box"></i>
                <p>
                    Departamentos
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('departamentoproduto.index')}}" class="nav-link {{ $endActive=='departamentoproduto.index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lista</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @can('popupprincipal')
        <li class="nav-item {{ (request()->is('promocoes*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-star"></i>
                <p>
                    Promoções
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('promocoes.index')}}" class="nav-link {{ $endActive=='promocoes.index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lista</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @can('popupprincipal')
        <li class="nav-item {{ (request()->is('slider*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tv"></i>
                <p>
                    Slider principal
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('slider.index')}}" class="nav-link {{ $endActive=='slider.index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lista</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('slider.create')}}" class="nav-link {{ $endActive=='slider.create' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cadastrar</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @can('popupprincipal')
        <li class="nav-item {{ (request()->is('popupprincipal*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-fire"></i>
                <p>
                    PopUp principal
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('popupprincipal.index')}}" class="nav-link {{ $endActive=='popupprincipal.index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Modificar</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @can('popupprincipal')
        <li class="nav-item {{ (request()->is('tribanner*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-images"></i>
                <p>
                    Tri-banner
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('tribanner.index')}}" class="nav-link {{ $endActive=='tribanner.index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Modificar</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @can('popupprincipal')
        <li class="nav-item {{ (request()->is('maisvendidos*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-gifts"></i>
                <p>
                    Mais vendidos
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('maisvendidos.index')}}" class="nav-link {{ $endActive=='maisvendidos.index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lista</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @can('popupprincipal')
        <li class="nav-item {{ (request()->is('aliasbusca*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-keyboard"></i>
                <p>
                    Alias de busca
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('aliasbusca.index')}}" class="nav-link {{ $endActive=='aliasbusca.index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lista</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @can('administrador')
        <li class="nav-item {{ (request()->is('usuarios*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Usuários
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('usuarios.index')}}" class="nav-link {{ $endActive=='usuarios.index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lista</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('usuarios.emailsinscritos')}}" class="nav-link {{ $endActive=='usuarios.emailsinscritos' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Emails inscritos</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        

    </ul>
</nav>