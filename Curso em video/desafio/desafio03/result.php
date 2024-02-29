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
        // $money = $_REQUEST["money"];
        // echo "$money";
        $url = "https://www3.bcb.gov.br/sgspub/JSP/sgsgeral/FachadaWSSGS.wsdl";
$codigoSerie = 1; // Código para a cotação de venda do dólar

$client = new SoapClient($url);
$parameters = ["codigoSerie" => $codigoSerie];
$response = $client->__soapCall("getUltimoValorXML", $parameters);

echo $response;

        ?>
    </section>
</body>
</html>