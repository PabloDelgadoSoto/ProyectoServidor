<div class="producto">
    <img src="{{asset('assets/img/productos/'.$nombre.'.png')}}">
    <h3>{{$nombre}}</h3>
    <h3>{{$precio}}
    @if ($producto->moneda=='euro')
        €
    @elseif ($producto->moneda=='dolar')
        $
    @endif
    </h3>
    <h3>Cantidad</h3>
    <p>{{$compra->cantidad}}</p><br>
    <form action={{route('users.destroy', $compra)}} method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar de la cesta">
    </form>
</div>
