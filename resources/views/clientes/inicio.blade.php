@extends('layouts.plantilla')

@section('title', 'Inicio de sesión')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/formulario.css') }}">
@endsection

@section('content')
    <h1>Inicio de sesión</h1>

    @component('clientes._components.inicio')
    @endcomponent

@endsection
