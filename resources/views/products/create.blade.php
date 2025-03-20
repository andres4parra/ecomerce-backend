@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Crear Nuevo Producto</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del Producto</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio ($)</label>
                            <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad Disponible</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                        </div>

                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <select class="form-control" id="categoria" name="categoria" required>
                                <option value="Tecnología">Tecnología</option>
                                <option value="Hogar">Hogar</option>
                                <option value="Moda">Moda</option>
                                <option value="Salud">Salud</option>
                                <option value="Deportes">Deportes</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="imagen" class="form-label">Imagen del Producto</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Guardar Producto</button>
                        </div>
                        
                    </form>
                    <div class="mb-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
