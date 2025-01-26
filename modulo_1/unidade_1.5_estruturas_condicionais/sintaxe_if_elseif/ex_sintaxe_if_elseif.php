<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Se e Senão Se</title>
</head>
<body>
    <?php 
        $nota1 = 6;
        $nota2 = 8;
        $media = ($nota1 + $nota2) / 2;

        if ($media < 3) {
            echo "Média = $media <br/> Precisa ter mais gás";
        } elseif ($media < 6) {
            echo "Quase lá!";
        } elseif ($media < 9) {
            echo "Média = $media <br/> Mais atenção e você pode chegar no 10!";
        } else {
            echo "Você tem nota máxima!";
        }
    ?>
    
</body>
</html>