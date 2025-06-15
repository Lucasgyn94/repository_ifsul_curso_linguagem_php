<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de parâmetros por valor</title>
</head>
<body>

    <?php
        function soma ($n1, $n2) {
            echo $n1 . " + " . $n2 . " = ";
            return $n1 + $n2;
        }

        $resultado = soma(4, 10);
        echo $resultado;
    ?>

</body>
</html>