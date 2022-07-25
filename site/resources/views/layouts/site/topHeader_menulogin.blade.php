<ul class="dropdown-menu dropdown-menu-right">
    @if (Auth::check())
    @can('telabackend')
    <li><a class="dropdown-item" href="{{route('dash.inicio')}}">Administração</a></li>
    @endcan
    <li><a class="dropdown-item" href="#">{{Auth::user()->email}} </a></li>
    <li><a class="dropdown-item" href="#">Checkout</a></li>
    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sair </a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    @else
    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
    <li><a class="dropdown-item" href="{{route('register')}}">Registrar</a></li>
    <li><a class="dropdown-item" href="#">Checkout</a></li>
    @endif
</ul>