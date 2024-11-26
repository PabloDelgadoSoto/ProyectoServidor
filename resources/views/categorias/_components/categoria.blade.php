<div class="producto">
    <h1>{{$categoria->nombre}}</h1>
    <a href="{{route('categorias.show', $categoria->id)}}">
        <img src="{{asset('assets/img/categorias/'.$categoria->nombre.'.png')}}">
    </a>
</div>
