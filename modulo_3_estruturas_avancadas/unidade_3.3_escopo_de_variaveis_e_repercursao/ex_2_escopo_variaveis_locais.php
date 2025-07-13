<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>
    <?php
        function par_ou_impar($n) {
            $resto = $n % 2;
            if ($resto == 0) {
                return "Número " . $n . " é par!";
            } else {
                return "Número " . $n . " é ímpar!";
            }
        }

        $resultado = par_ou_impar(5);
        echo $resultado;

    ?>
    
</body>
</html>