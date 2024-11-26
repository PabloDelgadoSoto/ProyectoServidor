@extends('layouts.plantilla')

@section('title', 'Creación de producto')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/formulario.css') }}">
@endsection

@section('content')
    <h1>Producto a añadir</h1>

    @component('productos._components.formulario')
        @slot('nombre', '')
        @slot('precio', '')
        @slot('descripcion', '')
        @slot('moneda', '')
        @slot('disponible', 0)
        @slot('categoria', '')
        @slot('producto', '')
        @slot('categorias', $categorias)
    @endcomponent

@endsection
