@php
    use App\Models\Producto;

    $modoCreacion = true;
    if (isset($producto->nombre)) {
        $modoCreacion = false;
    }

    $rutaAction = route('productos.store');
    if(!$modoCreacion){
        $rutaAction = route('productos.update', $producto);
    }
@endphp

<article>
    <form action="{{$rutaAction}}" method="post">
        @csrf
        @if(!$modoCreacion)
            @method('put')
            <input name="producto" value="{{$categoria}}" hidden>
        @endif
        <label>Nombre</label><br>
        <input type="text" name="nombre" value="{{old('nombre', $nombre )}}" required><br>
        <label>Precio</label><br>
        <input type="number" name="precio" value="{{old('precio', $precio )}}" required><br>
        @error('precio')
            <div>
                <h4>{{$message}}</h4>
            </div>
        @enderror
        <label>Descripción</label><br>
        <textarea name="descripcion" required>{{old('descripcion', $descripcion )}}</textarea><br><br>
        <label>Moneda</label>
        <select name="moneda" value="{{old('moneda', $moneda )}}"  required>
            <option value="euro"
                @if ($moneda=="euro") selected @endif>Euro</option>
            <option value="dolar"
                @if ($moneda=="dolar") selected @endif>Dólar</option>
        </select><br><br>
        <label>Categoría</label>
        <select name="categoria_id" value="{{old('categoria', $categoria )}}" required>
            @foreach($categorias as $c)
                <option value={{$c->id}} @if ($categoria==$c->id) selected @endif>{{$c->nombre}}</option>
            @endforeach
        </select><br>
        <label>Disponible</label>
        <input type="checkbox" name="disponible" value="{{old('disponible', $disponible )}}" @if ($disponible==1) checked @endif>
        <input type="submit" value="Guardar cambios">
    </form>
</article>
