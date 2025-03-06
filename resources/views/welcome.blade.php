@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
<div id="inicio" class="container text-center mt-4">
    <h2>Bienvenido a nuestra tienda</h2>
</div>

<div id="productos" class="container mt-5">
    <h2 class="text-center">Categorías</h2>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
        <div class="card text-center" style="width: 150px;">
            <img src="https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/c56212de-8309-4df1-9ce4-b34eda818b4a___6fbfe352b0a9e104c6a0b142063c73ce.jpg" class="card-img-top" alt="Celulares">
            <div class="card-body">
                <p class="card-text">Celulares</p>
            </div>
        </div>
        <div class="card text-center" style="width: 150px;">
            <img src="https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/11269666-484e-4f10-b08b-c73c90240dc1___89be76700076186b3ef48937ba8559f3.png" class="card-img-top" alt="Televisores">
            <div class="card-body">
                <p class="card-text">Televisores</p>
            </div>
        </div>
        <div class="card text-center" style="width: 150px;">
            <img src="https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/f31f7ddf-a17b-4f37-b4d9-b1cf00823764___8b4162f3df16e35310062fc4c896bd07.png" class="card-img-top" alt="Computadores">
            <div class="card-body">
                <p class="card-text">Computadores</p>
            </div>
        </div>
    </div>
</div>

<div class="container text-center mt-4">
    <a href="{{ url('/products/create') }}" class="btn btn-primary">Crear un Producto</a>
</div>
@endsection
