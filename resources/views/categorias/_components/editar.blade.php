<div class="edicion">
    <h1>Editar categoría</h1>
    <form action={{route('categorias.edit', $categoria)}} method="get">
        @csrf
        <input type="submit" value="Modificar">
    </form>
    <form action={{route('categorias.destroy', $categoria)}} method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar">
    </form>
</div>
