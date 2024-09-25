<?php include_once 'templates/topo.php'; ?>
<?php include_once 'templates/menu.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <style>
        body {
            background-color: #e9ecef; 
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
        section {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            margin: 20px 0;
        }
        h2 {
            text-align: center; 
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: center; 
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            text-align: center; 
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            margin-bottom: 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block; 
            margin-left: auto; 
            margin-right: auto; 
        }
        p {
            text-align: center; 
            color: #333;
        }
    </style>
</head>
<body>
<div class="container">
    <section>
        <h2>Fale Conosco</h2>
        <form action="faleconosco.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $mensagem = htmlspecialchars($_POST['mensagem']);

            echo "<p>Obrigado, $nome! Estaremos lendo sua mensagem, desde já agradeço!!</p>";
        }
        ?>
    </section>
</div>
<?php include_once 'templates/rodape.php'; ?>
</body>
</html>
