<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_GET["numero"] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="numero">Número</label>
        <input type="number" name="numero" id="idnumero" min="0" value="<?=$numero?>">
        <input type="submit" value="Calcular raízes">
    </form>
    </main>
    <section>
        <?php 
        $quadrada = sqrt($numero);
        $cubica = $numero ** (1/3);
        ?>
        <h2>Resultado final</h2>
        <p>Analisando o <strong>número <?=$numero?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format($quadrada, 3, ",", ".")?></strong></li>
            <li>A sua raiz cúbica é <strong><?=number_format($cubica, 3, ",", ".")?></strong></li>
        </ul>
    </section>

</body>
</html>