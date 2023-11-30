<pre>
    <?php
        $url = 'http://economia.awesomeapi.com.br/json/last/USD-BRL';
    
        $dados = json_decode(file_get_contents($url), true);

//        var_dump($dados);

        $cotacao = $dados["USDBRL"]["bid"];
        $momento = $dados["USDBRL"]["create_date"];

        echo "A cotação foi $cotacao"."<br>";
        echo "$momento";
    ?>
</pre>