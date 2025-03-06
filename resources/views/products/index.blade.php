@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Lista de Productos</h1>
    <div class="row">
        @php
            $productos = [
                ['nombre' => 'Laptop Gamer', 'precio' => 4500],
                ['nombre' => 'Mouse Inalámbrico', 'precio' => 120],
                ['nombre' => 'Teclado Mecánico', 'precio' => 350],
                ['nombre' => 'Monitor 27" 144Hz', 'precio' => 1800],
                ['nombre' => 'Silla Ergonómica', 'precio' => 1200],
                ['nombre' => 'Audífonos Bluetooth', 'precio' => 500]
            ];
        @endphp

        @foreach($productos as $producto)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $producto['nombre'] }}</h5>
                        <p class="card-text">Precio: ${{ number_format($producto['precio'], 2) }}</p>
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
