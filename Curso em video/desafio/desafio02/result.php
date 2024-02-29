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
        $money = $_REQUEST["money"];
        echo "$money";
        ?>
    </section>
</body>
</html>