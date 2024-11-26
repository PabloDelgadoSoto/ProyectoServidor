@extends('layouts.plantilla')

@section('title', 'Edición de producto')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/formulario.css') }}">
@endsection

@section('content')
    <h1>Producto a modificar: {{$producto->nombre}}</h1>

    @if(session('status'))
        <div class="alert alert-succes">
            {{session('status')}}
        </div>
    @endif

    @component('productos._components.formulario')
        @slot('nombre', $producto->nombre)
        @slot('precio', $producto->precio)
        @slot('descripcion', $producto->descripcion)
        @slot('moneda', $producto->moneda)
        @slot('disponible', $producto->disponible)
        @slot('categoria', $producto->categoria->id)
        @slot('producto', $producto)
        @slot('categorias', $categorias)
    @endcomponent

@endsection
