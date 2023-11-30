<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções matemáticas</title>
</head>
<body>
    <h1>Funções matemáticas</h1>
    <?php 
    $a = abs(-500);
    print "A resposta é $a<br>";
    $b = base_convert(254, 8, 16); //bases numéricas
    print "A resposta é $b<br>";
    $c = 5%2; // resto
    print "A resposta é $c<br>";
    $d = intdiv(5,2); // divisão inteira
    print "A resposta é $d<br>";
    $e = max(5,2,654,651,54,9,8,5,898,8,65,2); // maior valor
    print "A resposta é $e<br>";
    $f = min(5,2,654,651,54,9,8,5,898,8,65,2); // menor valor
    print "A resposta é $f<br>";
    $g = pi(); // fução PI
    echo "Valor de PI é $g<br>";
    $h = M_PI; // constante PI
    echo "Valor de PI é $h<br>";
    $i = pow(5, 2); // potência
    print "A resposta é $i<br>";
    $j = sqrt(81); // raiz quadrada
    print "A resposta é $j<br>";
    $k = 81 ** (1/2); // outra forma de raiz quadrada
    print "A resposta é $k<br>";
    $l = 27 ** (1/3); // raiz cúbica
    print "A resposta é $l<br>";
    ?>
</body>
</html>