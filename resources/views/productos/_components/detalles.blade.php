<artricle>
    <div class="producto">
        <h3>Nombre</h3>
        <p>{{$producto->nombre}}</p>
        <h3>Descripción</h3>
        <p>{{$producto->descripcion}}</p>
        <h3>Precio</h3>
        <p>{{$producto->precio}}</p>
        <h3>Moneda</h3>
        <p>{{$producto->moneda}}</p>
        <h3>Categoría</h3>
        <p>{{$producto->categoria->nombre}}</p>
            @if($producto->disponible)
                <h3>Disponible</h3>
            @else
                <h3>No disponible</h3>
            @endif
            @if(@Auth::user()->hasRole('administrador'))
            <form action={{route('productos.edit', $producto)}} method="get">
                @csrf
                <input type="submit" value="Modificar">
            </form>
            <form action={{route('productos.destroy', $producto)}} method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Eliminar">
            </form>
        @else
            @if($producto->disponible)
            <form action={{route('users.edit', $producto)}} method="post">
                @csrf
                <h3>Cantidad</h3>
                @error('cantidad')
                    <div>
                        <h4>{{$message}}</h4>
                    </div>
                @enderror
                <input type="number" name="cantidad">
                <input type="submit" value="Añadir a la cesta">
            </form>
            @endif
        @endif
    </div>
</article>
<img src="{{asset('assets/img/productos/'.$producto->nombre.'.png')}}" id="form" class="producto">

