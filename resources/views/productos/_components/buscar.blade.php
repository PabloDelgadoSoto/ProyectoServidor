<div class="busqueda">
    @routes
    <form name="form" action="{{route('busquedas.buscar', $categoria)}}" method="post" onsubmit="busqueda();return false;">
        @csrf
            @if($categoria!=null)
                <input type="text" name="categoria" value="{{$categoria->id}}" hidden>
            @else
                <input type="text" name="categoria" value="{{null}}" hidden>
            @endif
        <input type="text" name="escrito">
        <div>
            <span style="padding-left:10%;padding-right:10%">Buscar</span>
            <span style="padding-left:10%;padding-right:10%">Ordenar</span>
        </div>
        <select name="buscar">
            <option value="like" selected>Nombre</option>
            <option value=">=">Precio ></option>
            <option value="<=">Precio <</option>
        </select>
        <select name="orden">
            <option value="nombre" selected>Nombre</option>
            <option value="precio">Precio</option>
        </select>
        <input type="submit" value="Buscar">
    </form>
</div>
