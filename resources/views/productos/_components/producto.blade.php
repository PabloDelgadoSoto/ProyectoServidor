<div class="producto">
    <img src="{{asset('assets/img/productos/'.$producto->nombre.'.png')}}">
    <h3>{{$producto->nombre}}</h3>
    <h3>{{$producto->precio}}
    @if ($producto->moneda=='euro')
        €
    @elseif ($producto->moneda=='dolar')
        $
    @endif
    </h3>
    @if(!$producto->disponible)
        <span>No disponible</span><br><br>
    @endif
    <form action={{route('productos.show', $producto)}} method="get">
        <input type="submit" value="Ver detalles">
    </form>
</div>
