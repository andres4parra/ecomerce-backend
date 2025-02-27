<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer vista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            color: black;
        }
        .logo-container {
            text-align: center;
            padding: 10px;
            background-color: white;
        }
        .logo-container img {
            max-width: 100%;
            height: auto;
        }
        .banner {
            background-color: orange;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 1.5rem;
        }
        .categories {
            margin: 20px 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .category-card {
            background-color: orange;
            color: white;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            width: 150px;
        }
        .category-card img {
            max-width: 100%;
            border-radius: 5px;
        }
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="logo-container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6mj0hhjL1tBjl_GKbBHUfvaTm8RifRrLlKQ&s" alt="Logo de la tienda">
    </div>
    
    <div id="carouselPromociones" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://tpc.googlesyndication.com/simgad/18391743897663665494" class="d-block w-100" alt="Promoción 1">
            </div>
            <div class="carousel-item">
                <img src="https://tpc.googlesyndication.com/simgad/17196315236791169181" class="d-block w-100" alt="Promoción 2">
            </div>
            <div class="carousel-item">
                <img src="https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/051ee271-5be4-4ce2-99a7-6196f0a75b4e___a7fe146637066226cab478b90c0d96ea.png" class="d-block w-100" alt="Promoción 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromociones" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselPromociones" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
    
    <div class="container">
        <h2 class="text-center mt-4">Categorías</h2>
        <div class="categories">
            <div class="category-card">
                <img src="https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/c56212de-8309-4df1-9ce4-b34eda818b4a___6fbfe352b0a9e104c6a0b142063c73ce.jpg" alt="Celulares">
                <p>Celulares</p>
            </div>
            <div class="category-card">
                <img src="https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/11269666-484e-4f10-b08b-c73c90240dc1___89be76700076186b3ef48937ba8559f3.png" alt="Televisores">
                <p>Televisores</p>
            </div>
            <div class="category-card">
                <img src="https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/f31f7ddf-a17b-4f37-b4d9-b1cf00823764___8b4162f3df16e35310062fc4c896bd07.png" alt="Computadores">
                <p>Computadores</p>
            </div>
            <div class="category-card">
                <img src="https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/fad55e28-743c-4bda-844a-0b901ea171f9___6c1fdba73081ca299476bdac23380560.png" alt="Consolas">
                <p>Consolas</p>
            </div>
        </div>
    </div>
    
    <div class="footer">
        © 2025 Tienda de la esquina 
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
