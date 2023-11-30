<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 60px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_REQUEST["saque"] ?? 0;
    ?>
    <header>
        <h1>Caixa Eletrônico</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
        <input type="number" name="saque" id="idsaque" value="<?=$saque?>" min="0" max="2000" step="5" required> 
        <p style="font-size: 0.8em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
        <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $sobra = $saque;
        $cem = floor($sobra / 100);
        $sobra %= 100;
        
        $cinquenta = floor($sobra / 50);
        $sobra %= 50;

        $dez = floor($sobra / 10);
        $sobra %= 10;

        $cinco = floor($sobra / 5);
        $sobra %= 5;
    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="100 reais" class="nota"> x<?=$cem?></li>
            <li><img src="imagens/50-reais.jpg" alt="50 reais" class="nota"> x<?=$cinquenta?></li>
            <li><img src="imagens/10-reais.jpg" alt="10 reais" class="nota"> x<?=$dez?></li>
            <li><img src="imagens/5-reais.jpg" alt="5 reais" class="nota"> x<?=$cinco?></li>
        </ul>
    </section>
</body>
</html>