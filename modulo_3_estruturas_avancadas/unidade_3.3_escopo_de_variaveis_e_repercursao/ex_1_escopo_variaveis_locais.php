<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopo de Variáveis</title>
</head>
<body>
    <?php
        function soma($n1, $n2) { /* $n1 e $n2 são variáveis locais da função soma */
            return $n1 + $n2;
        }

        $resultado = soma(1, 2); /*$resultado é uma variável local deste script. Se tentarmos acessá-la dentro da função soma, ela não irá reconhecer. */
        echo $resultado;
    ?>
    
</body>
</html>