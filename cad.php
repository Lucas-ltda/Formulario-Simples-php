<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php
        
            $nome = $_GET["nome"]; //Varivel nome em php vai receber o elemento em php com name = nome
            $sobrenome = $_GET ["sobrenome"];
            $idade = $_GET["idade"];
            
            echo "<p>É um prazer te conhecer $nome $sobrenome, você tem $idade anos ";
        ?>
    </main>
</body>

</html>