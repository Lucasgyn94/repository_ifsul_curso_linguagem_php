<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando For</title>
</head>
<body>
    <?php
        $posicao = 1;
        for ($contador = 10; $contador > 0; $contador--) {
            echo "Conntador na posição " . $posicao  . " = " . $contador;
            $posicao++;
            echo "</br>";
        }
    ?>
    
</body>
</html>