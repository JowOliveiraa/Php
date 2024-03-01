<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <section>
        <h1>Resultado</h1>
        <p><strong>A conversão é feita em tempo real, consultando a api do Banco Central</strong></p>
        <?php 
            $date = date("m-d-Y");
            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='.$date.'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao";
            $information = json_decode(file_get_contents($url));
            $dolar = $information -> value[0] -> cotacaoCompra;
            $brl =(float) $_REQUEST["money"] ?? 0;
            $converting = $brl / $dolar;
            echo "<p><strong>Cotação do dolar hoje: </strong>R$ <i>".number_format($dolar, 2, ",", ".")."</i></p>";
            echo "<p><strong>Os seus</strong> R$ <i>".number_format($brl, 2, ",", ".")."</i> <strong>equivalem a</strong> U$ <i>".number_format($converting, 2, ",", ".")."</i></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>