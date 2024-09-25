<?php
    include_once 'templates/topo.php';
    include_once 'templates/menu.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Quem somos</title>
    <style>
        body {
            background-color: #e9ecef; 
            font-family: Arial, sans-serif; 
        }
        .container {
            max-width: 800px; 
            margin: 2rem auto; 
        }
        .custom-card {
            background-color: #ffffff; 
            border-radius: 8px; 
            padding: 20px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }
        h2 {
            text-align: center; 
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="custom-card text-center">
                <h2 class="mb-3">Quem somos</h2>
                <p>Bem-vindo! Acreditamos que a excelência está nos detalhes, nossa missão é oferecer produtos/serviços de alta qualidade que atendam às necessidades de nossos clientes e superem suas expectativas.</p>
            </div>
        </div>
    </div>
    
</div>
    <?php include_once 'templates/rodape.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
