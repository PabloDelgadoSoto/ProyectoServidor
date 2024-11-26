@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido a SuperTierno</h1><br>

    <h1 style="text-align: left;margin-left:7%">Lo más popular</h1>
    @foreach($populares as $productos)
        @foreach($productos as $p)
            @component('productos._components.producto')
                @slot('producto', $p)
            @endcomponent
        @endforeach
    @endforeach
    <h1 style="text-align: left;margin-left:7%">Lo más económico</h1>
    @foreach($baratos as $p)
        @component('productos._components.producto')
            @slot('producto', $p)
        @endcomponent
    @endforeach
@endsection
