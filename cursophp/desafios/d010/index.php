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
        $nascimento = $_GET["nascimento"] ?? 1900;
        $anoFut = $_GET["anoFut"]?? date('Y');
    ?>
        <header>
            <h1>Calculando a sua idade</h1>
        </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="nasc">Em qual ano você nasceu?</label>
            <input type="number" name="nascimento" id="idnasc" value="<?=$nascimento?>" max="<?=date('Y')?>" min="1900">

            <label for="anoFut">Quer saber sua idade em qual ano? (atualmente estamos em <strong><?=date('Y')?></strong>)</label>
            <input type="number" name="anoFut" id="idAnoFut" value="<?=$anoFut?>" min="1900">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
            <?php 
                $idade = $anoFut - $nascimento;
                echo "Quem nasceu em ".$nascimento." vai ter <strong>".$idade." anos</strong> em $anoFut!";
            ?>
    </section>
</body>
</html>