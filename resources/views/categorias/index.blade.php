@extends('layouts.plantilla')

@section('title', 'Categorías')

@section('content')
    <h1>Categorías</h1>

    @foreach($categorias as $c)
        @component('categorias._components.categoria')
            @slot('categoria', $c)
        @endcomponent
    @endforeach

@endsection
