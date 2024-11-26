<header>
    <nav>
        <ul>
            <li><a href={{route('home')}}><img src="{{ asset('assets/img/menu/home.png') }}"></a></li>
            <li><a href={{route('productos.index')}}><img src="{{ asset('assets/img/menu/productos.png') }}"></a></li>
            <li><a href={{route('categorias.index')}}><img src="{{ asset('assets/img/menu/categoria.png') }}"></a></li>
                @if(!Auth::check())
                    <li><a href={{route('login')}}><img src="{{ asset('assets/img/menu/usuario.png') }}"></a></li>
                @elseif(Auth::user()->hasRole('cliente'))
                    <li><a href={{route('users.index')}}><img src="{{ asset('assets/img/menu/carrito.png') }}"></a></li>
                    <li><a href={{route('profile.logout')}}><img src="{{ asset('assets/img/menu/Cerrar sesion.png') }}"></a></li>
                    <li style="text-align:right">{{Auth::user()->email}}</li>
                @elseif(Auth::user()->hasRole('administrador'))
                    <li><a href={{route('productos.create')}}><img src="{{ asset('assets/img/menu/Anadir producto.png') }}"></a></li>
                    <li><a href={{route('categorias.create')}}><img src="{{ asset('assets/img/menu/Anadir categoria.png') }}"></a></li>
                    <li><a href={{route('profile.logout')}}><img src="{{ asset('assets/img/menu/Cerrar sesion.png') }}"></a></li>
                    <li style="text-align:right">{{Auth::user()->email}}</li>
                @endif
        </ul>
    </nav>
</header>
