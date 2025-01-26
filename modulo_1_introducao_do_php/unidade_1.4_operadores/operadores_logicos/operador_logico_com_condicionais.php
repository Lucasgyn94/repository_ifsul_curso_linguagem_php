<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador com Estrutura Condicional</title>
</head>
<body>
    <?php 
        $a = 6;
        $b = 2;

        if ($a / $b == 2) {
            echo "O resultado da divisão é 2";
        } else {
            echo "O resultado da divisão não e 2, é " .  $a / $b;
        }
    
    ?>
</body>
</html>