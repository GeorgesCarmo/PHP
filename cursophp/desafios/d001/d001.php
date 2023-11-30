<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>
    <main>
        <p>
            <?php
            $num = $_GET["numero"];
            echo "O número escolhido foi <strong>$num</strong><br>";
            echo "O seu antecessor é <strong>".($num -1)."</strong><br>";
            echo "O seu sucessor é <strong>".($num +1)."</strong>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>