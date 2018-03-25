@extends('layout')

@section('title')
    Cercos Los Lagos
@endsection

@section('content')

    @include('layouts.carousel')

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Nuestros Productos</h1>

        <!-- Marketing Icons Section -->
        @include('layouts.productos_cards')
        <!-- /.row -->
    </div>
@endsection