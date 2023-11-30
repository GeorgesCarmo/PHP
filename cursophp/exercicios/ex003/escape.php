<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequências de escape</title>
</head>
<body>
    <h1>Sequências de escape</h1>
    <?php 
    $nome = "Georges";
    $sobrenome = "do Carmo";
    $apelido = "Gafanhoto";
    $curso = "PHP";
    $ano = date('Y');
    echo "$nome \"Gafanhoto\" $sobrenome <br>";
    echo "$nome \"$apelido\" $sobrenome <br>";
    echo "$nome '$apelido' $sobrenome <br>";
    echo "$nome \"$apelido\" $sobrenome <br>";
    echo "<h3> $nome  \"$apelido\" $sobrenome </h3>";
    echo "<p>Estou estudando <strong>$curso</strong> em $ano.</p>";
    ?>
</body>
</html>