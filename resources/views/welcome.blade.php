<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer vista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: white;
            color: black;
        }
        .content {
            flex: 1; /* Empuja el footer hacia abajo */
        }
        .navbar-brand img {
            max-height: 50px; /* Tamaño reducido del logo */
        }
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Tienda de la Esquina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/products')}}">Productos</a>
                    </li>
                </ul>
                <a class="navbar-brand" href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6mj0hhjL1tBjl_GKbBHUfvaTm8RifRrLlKQ&s" alt="Logo">
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="content">
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
    </div>

    <!-- Footer fijo -->
    <div class="footer">
        © 2025 Tienda de la esquina
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
