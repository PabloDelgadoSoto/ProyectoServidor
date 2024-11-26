@extends('layouts.plantilla')

@section('title', 'Productos')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/busqueda.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/ajax.js') }}"></script>
@endsection

@section('content')
    @if($categoria==null || $categoria->id==null)
        <h1>Productos</h1>
        <div style="margin-left:38%">
            @component('productos._components.buscar')
                @slot('categoria', $categoria)
            @endcomponent
        </div>
    @else
        <h1>{{$categoria->nombre}}</h1>
        @component('categorias._components.conjunto')
            @slot('categoria', $categoria)
        @endcomponent
    @endif

    @if(session('status'))
        <div class="alert alert-succes">
            {{session('status')}}
        </div>
    @endif
    @foreach($productos as $p)
        @component('productos._components.producto')
            @slot('producto', $p)
        @endcomponent
    @endforeach
@endsection
