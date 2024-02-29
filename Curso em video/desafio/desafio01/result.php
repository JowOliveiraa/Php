<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado desafio 01</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <?php
            $chosedNumber = $_GET["number"];
            echo "O número escolhido foi <bold>$chosedNumber</bold><br>";
            echo "O seu antecessor é " .$chosedNumber - 1 ."<br>";
            echo "O seu sucessor é " .$chosedNumber + 1 ."<br>";
        ?>
        <a href="desafio.php">
            <button>&#8592;Voltar</button>
        </a>
    </main>
</body>
</html>