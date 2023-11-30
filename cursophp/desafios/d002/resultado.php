<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <h1>Trabalhando com números aleatórios</h1>
    <p>
        <?php
        $min = $_GET["min"] ?? 0;
        $max = $_GET["max"];
        $num = mt_rand($min, $max);
        echo "Gerando um número aleatório entre $min e $max...<br>";
        echo "O número gerado foi <strong>$num</strong>";
        ?>
    </p>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar novamente</button>
    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </section>
</body>
</html>