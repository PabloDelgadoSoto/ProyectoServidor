@extends('layouts.plantilla')

@section('title', 'Carrito de la compra')

@section('content')
    <h1>Carrito de la compra</h1>

    @for($i=0; $i<count($comprados); $i++)
        @component('clientes._components.cesta')
                @slot('nombre', $comprados[$i]->nombre)
                @slot('precio', $comprados[$i]->precio)
                @slot('compra', $compras[$i])
                @slot('producto', $comprados[$i])
        @endcomponent
    @endfor
    @component('clientes._components.suma')
        @slot('total', $total)
    @endcomponent

@endsection
