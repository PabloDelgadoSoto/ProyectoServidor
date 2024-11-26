@php
    use App\Models\Categoria;

    $modoCreacion = true;
    if (isset($categoria->nombre)) {
        $modoCreacion = false;
    }

    $rutaAction = route('categorias.store');
    if(!$modoCreacion){
        $rutaAction = route('categorias.update', $categoria);

    }
@endphp

<article>
    <form action="{{$rutaAction}}" method="post">
        @csrf
        @if(!$modoCreacion)
            @method('put')
            <input name="producto" value="{{$categoria->id}}" hidden>
        @endif

        <label>Nombre</label><br>
        <span>La imagen se carga si su nombre.png y el nombre de la categoría son el mismo, modificar si es necesario</span>
        <input type="text" name="nombre" value="{{old('nombre', $nombre )}}" required><br>
        <label>Posicion</label><br>
        <input type="number" name="posicion" value="{{old('posicion', $posicion )}}" required><br>
        @error('posicion')
            <div>
                <h4>{{$message}}</h4>
            </div>
        @enderror
        <label>Descripción</label><br>
        <textarea name="descripcion" required>{{old('descripcion', $descripcion )}}</textarea><br><br>
        <input type="submit" value="Guardar cambios">
    </form>
</article>
