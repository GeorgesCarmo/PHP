<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Reajustador de preços</h1>
    </header>
    <?php 
        $preco = $_REQUEST['preco'] ?? '0';
        $reajuste = $_REQUEST['reaj'] ?? '0';
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="idPreco" value="<?=$preco?>" step="0.01" min="0.10">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><output id="rangevalue"><?=$reajuste?></output>%</strong>)</label>
            <input type="range" name="reaj" id="idReaj" min="0" max="100" step="1" value="<?=$reajuste?>" oninput="rangevalue.value=value">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $aumento = $preco * $reajuste / 100;
        $novo = $preco + $aumento;
    ?>
    <section>
        <h2>Resultado do reajuste</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong>R$<?=$reajuste?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novo, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>
</body>
</html>