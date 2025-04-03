<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Tienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/products">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <div class="container content mt-5">
        <h2 class="text-center mb-4">Nuestros Productos</h2>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{$product->image_url}}" class="card-img-top" alt="Producto">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">Categoría: {{$product->category_id}}</p>
                        <p class="card-text">{{$product->description}}</p>
                        <div class="product-price">${{$product->price}}</div>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            
    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3 mt-auto">
        <p>© 2025 Mi Tienda. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
