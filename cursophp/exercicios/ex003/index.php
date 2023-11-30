<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    // 0x = hexadecimal   0b = binário   0 = Octal 
 //   $a = 300;
 //   var_dump($a);

 //   $b = "Georges";
 //   var_dump($b);

 //   $c = 3e2;
 //   var_dump($c);

 //   $d = (integer) 3e2; //3 x 10(2) coerção
 //   var_dump($d);

 //   $e = (int) "950"; // forçando string para inteiro
 //   var_dump($e);

 //   $casado = false;
 //   var_dump($casado);

//    $vet = [6,2.5,"Maria",3,false];
//    var_dump($vet);

    class Pessoa{
        private string $nome = "Georges";
        private int $idade = 28;
    }

    $p = new Pessoa;
    var_dump($p);

    
    ?>
</body>
</html>