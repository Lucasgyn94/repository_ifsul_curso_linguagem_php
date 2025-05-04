<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional em PHP</title>
</head>
<body>
    <?php 
        $linguagens = array();

        $linguagens['PHP'] = array(
            "primeira_versao" => "1995",
            "ultima_versao" => "7.4.7",
            "desenvolvida_por" => "Rasmus Lerdof",
            "descrição" => array(
                "extensão" => ".php",
                "licença" => "PHP License (most of Zend engine under Zend Engine Licence)"
            )
        );
        $linguagens['Python'] = array(
            "primeira_versão" => "1991",
            "ultima_versão" => "3.8.0",
            "desenvolvida_por" => "Guido Van Rossum",
            "descrição" => array(
                "extensão" => ".py",
                "licença" => "Python Software Foundation Licence"
            )
        );
        echo "Informações sobre php";
        echo "<br>";
        print_r($linguagens['PHP']);
        echo '<br>';
        echo '<br>';
        echo "Informações sobre Python";
        echo "<br>";
        print_r($linguagens['Python']);


    ?>
    
</body>
</html>