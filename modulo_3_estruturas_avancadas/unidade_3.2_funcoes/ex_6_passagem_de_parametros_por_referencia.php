<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de parâmetros por referência</title>
</head>
<body>

    <?php
        echo "<h1>Passagem de Parâmetros Por Referência</h1>";
        
        $n1 = 5;

        function soma (&$n1, $n2) {
            $n1 += $n2;
        }

        soma($n1, 6);
        echo $n1;
    ?>

</body>
</html>