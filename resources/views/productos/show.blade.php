@extends('layouts.plantilla')

@section('title', 'Detalles')

@section('content')

<h1>Detalles del producto: {{$producto->nombre}}</h1>

    @component('productos._components.detalles')
        @slot('producto', $producto)
    @endcomponent

@endsection
