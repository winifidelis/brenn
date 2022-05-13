<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu mb-3">
                <!--<li class="active"><a href="index.html">Inicio</a></li>!-->
                <li><a href="{{route('inicio')}}">Início</a></li>

                <li>
                    <a href="#">Produtos</a>
                    <ul>
                        <?php
                        $listaDepsMenu = \App\Models\Produtodepartamento::select("*")
                            ->where("habilitado", "=", "1")
                            ->orderby("descricao")
                            ->get();
                        ?>
                        @foreach($listaDepsMenu as $departamento)
                        <li><a href="{{route('verpartamento', $departamento->id)}}">{{ucfirst(mb_strtolower($departamento->descricaosite))}}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li>
                    <a href="#">Institucional</a>
                    <ul>
                        <li><a href="{{route('quemsomos')}}">Quem somos</a></li>
                        <li><a href="{{route('nossosservicos')}}">Nossos serviços</a></li>
                        <li><a href="{{route('contato')}}">Central de atendimento</a></li>
                        <li><a href="{{route('formardepagamento')}}">Formas de pagamento</a></li>
                        <li><a href="{{route('trocaedevolucao')}}">Troca e devolução</a></li>
                    </ul>
                </li>

                <li><a href="{{route('engenharia')}}">Engenharia</a></li>

                <li><a href="{{route('projetos')}}">Projetos</a></li>

                <li><a href="{{route('contato')}}">Entre em contato</a></li>

                <li><a href="{{route('trabalheconosco')}}">Trabalhe conosco</a></li>
                @if (Auth::check())
                @can('telabackend')
                <li><a href="{{route('dashbackend')}}">Administrar site </a></li>
                @endcan
                @endif
            </ul>

            <!--
            <ul class="mobile-menu">
                <li><a href="my-account.html">Track Order </a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="category.html">Our Stores</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Help &amp; FAQs</a></li>
            </ul>
            !-->
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            &nbsp;&nbsp;
            <a href="https://www.instagram.com/makroservice_1982/" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
            <a href="https://www.facebook.com/makroservice.oficial/" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
            <a href="https://www.youtube.com/channel/UCn-P60V1ktwfjRkCMb5CMug" class="social-icon social-youtube fab fa-youtube" target="_blank" title="YouTube"></a>
            <a href="https://www.linkedin.com/company/3478811/admin/" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
            <a href="{{route('contato')}}" class="social-icon social-mail icon-mail-alt" title="Mail"></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->