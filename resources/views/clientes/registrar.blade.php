@extends('layouts.plantilla')

@section('title', 'Registro')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/formulario.css') }}">
@endsection

@section('content')
    <h1>Registrarse</h1>

    @component('clientes._components.registrar')
    @endcomponent

@endsection
