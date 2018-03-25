@extends('layout')

@section('title')
    Todos Los Cierres
@endsection

@section('content')
    <div class="container">
        <h1 class="my-4">Nuestros Productos</h1>

        @include('layouts.productos_cards')
    </div>
@endsection