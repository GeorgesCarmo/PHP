<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de moedas</h1>
    <p>
    <?php 
    $valor = $_GET["qtdreais"] ?? 0;
    $cotacao = 5.23;
    $dolar = $valor / $cotacao;
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    //obs: tem que habilitar a biblioteca intl(internacionalizarion) no arquivo php.ini
//    echo "Seus R\$".number_format($valor, 2, ",", ".")." equivalem a US\$". number_format($dolar, 2, ",", ".");
    echo "Seus ".numfmt_format_currency($padrao, $valor, "BRL")." equivalem a <strong>".numfmt_format_currency($padrao, $dolar, "USD")."</strong>";
    ?>
    </p>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>