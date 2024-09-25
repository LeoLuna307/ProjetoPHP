<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site - Clientes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; 
            font-family: Arial, sans-serif; 
        }
        .container {
            max-width: 800px; 
            margin: 2rem auto; 
            padding: 2rem; 
            background-color: #ffffff; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }
        h1 {
            color: #2c3e50; 
            text-align: center; 
            margin-bottom: 1rem; 
        }
        p {
            color: #34495e; 
            line-height: 1.6; 
            text-align: center; 
        }
    </style>
</head>
<body>

<?php include_once 'templates/topo.php'; ?>
<?php include_once 'templates/menu.php'; ?>

<div class="container">
    <h1>Agradecimento</h1>
    <p>
        Agradecemos por escolher nossa empresa! Sua confiança é muito importante para nós. 
        Estamos comprometidos em oferecer o melhor atendimento e a qualidade que você merece.
    </p>
    <p>
        Caso tenha alguma dúvida ou sugestão, não hesite em entrar em contato conosco. 
        Estamos aqui para ajudar!
    </p>
</div>
    <?php include_once 'templates/rodape.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
