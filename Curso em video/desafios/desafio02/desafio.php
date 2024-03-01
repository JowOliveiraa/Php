<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <section>
        <h1>Gerando números aleatórios</h1>
        <?php 
            $min = 0;
            $max = 100;
            $randomNumber = mt_rand($min, $max);
            echo "<p>Gerando números aleatórios entre $min e $max...</p>";
            echo "O número gerado foi $randomNumber";    
        ?>
        <button onclick="javascript:document.location.reload()">&#9854;Gerar novamente</button>
    </section>
</body>
</html>