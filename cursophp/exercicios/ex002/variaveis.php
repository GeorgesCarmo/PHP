<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <h1>Aula de variáveis</h1>
    <?php 
    $nome = 'Georges';
    $sobrenome = "Pereira";
    const PAIS = "Brasil";
    echo "Muito prazer, $nome $sobrenome! Você mora no ". PAIS;
    
    ?>
<br>
    <?php 
        if($nome == 'Georges'){
            echo'O nome confere';
        }else{
            echo"O nome não confere";
        }
    ?>
<br>
       <?php 
        for($num = 0; $num < 10; $num++){
            echo "$num";
        }
       ?>
</body>
</html>