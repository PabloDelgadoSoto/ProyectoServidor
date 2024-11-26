@extends('layouts.plantilla')

@section('title', 'Edición de categoría')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/formulario.css') }}">
@endsection

@section('content')
    <h1>Categoría a modificar: {{$categoria->nombre}}</h1>

    @if(session('status'))
        <div class="alert alert-succes">
            {{session('status')}}
        </div>
    @endif

    @component('categorias._components.formulario')
        @slot('nombre', $categoria->nombre)
        @slot('posicion', $categoria->posicion)
        @slot('descripcion', $categoria->descripcion)
        @slot('categoria', $categoria)
    @endcomponent

@endsection
