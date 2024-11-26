<div style="display:flex">
    @if(!Auth::check() || Auth::user()->hasRole('cliente'))
        @component('categorias._components.descripcion')
            @slot('categoria', $categoria)
        @endcomponent
    @else
    @component('categorias._components.editar')
        @slot('categoria', $categoria)
    @endcomponent
    @endif
    @component('productos._components.buscar')
        @slot('categoria', $categoria)
    @endcomponent

    @component('categorias._components.imagen')
        @slot('categoria', $categoria)
    @endcomponent
</div>
