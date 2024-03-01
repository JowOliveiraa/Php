<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <section>
        <h1>Resultado da conversão</h1>
        <?php 
        $brl = (float)$_REQUEST["money"] ?? 0;
        $dolar = $brl / 5.50;
        echo "<p>Seus R$".number_format($brl, 2, ",", ".")." equivalem a $".number_format($dolar, 2, ",", ".")."</p>";
        ?>
        <button onclick="javascript:history.back()" >Voltar</button>
    </section>
</body>
</html>