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
        $salario = $_GET['salario']?? 0; //Capturando os dados do formulário retroalimentado
        $salarioMin = 1_380.60;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="idsalario" min="0" value="<?= $salario?>" step="0.01">
            <p>Considerando um salário mínimo de <strong>R$<?=number_format($salarioMin, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
            <?php 
                $quociente = intdiv($salario, $salarioMin);
                $resto = $salario % $salarioMin;
                echo "Quem recebe um salário de R$".number_format($salario, 2, ",", ".")." ganha <strong>$quociente salários mínimos</strong> + R$".number_format($resto, 2, ",", ".")."";
            ?>
    </section>
</body>
</html>