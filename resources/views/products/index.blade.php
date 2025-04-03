@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Lista de Productos</h1>
    <div class="row">
        

        @foreach($list as $producto)
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $producto->imagen) }}" class="img-fluid" alt="{{ $producto->nombre }}">
                <h2 class="text-center">{{ $producto->nombre }}</h2>
                <p class="text-center">Precio: ${{ number_format($producto->precio, 2) }}</p>
                <div class="product-price">${{$producto->precio}}</div>
                <button class="btn btn-primary">Agregar al carrito></button>
            </div>
        @endforeach
        <div class="d-flex justify-content-center mt-4 mb-5">
            {{ $list->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
