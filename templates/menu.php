<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Meu Site</title>
    <link rel="stylesheet" href="/templates/estilos.css">
    <style>
        .topo {
            background-color: #ffffff; 
            color: #333333; 
            padding: 40px 0; 
            text-align: center; 
            border-bottom: 2px solid #e0e0e0; 
        }
        .topo h1 {
            font-size: 2.5rem; 
            margin-bottom: 0.5rem; 
        }
        .topo p {
            font-size: 1rem; 
            margin-top: 0.5rem; 
        }

        .navbar {
            background-color: #f8f9fa; 
            padding: 10px 0; 
        }
        .navbar ul {
            list-style-type: none; 
            padding: 0; 
            margin: 0;
            display: flex; 
            justify-content: center; 
            width: 100%; 
        }
        .navbar li {
            margin: 0 15px; 
        }
        .navbar a {
            color: #333333; 
            text-decoration: none; 
            font-weight: bold; 
        }
        .navbar a:hover {
            color: #007bff; 
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="container">
            <ul>
                <li><a href="principal.php">Principal</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="faleconosco.php">Fale conosco</a></li>
                <li><a href="quemsomos.php">Quem somos</a></li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
