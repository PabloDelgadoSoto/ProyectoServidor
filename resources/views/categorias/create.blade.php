@extends('layouts.plantilla')

@section('title', 'Creación de categoría')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/formulario.css') }}">
@endsection

@section('content')
    <h1>Categoría a añadir</h1>

    @component('categorias._components.formulario')
        @slot('nombre', '')
        @slot('posicion', '')
        @slot('descripcion', '')
    @endcomponent

@endsection
