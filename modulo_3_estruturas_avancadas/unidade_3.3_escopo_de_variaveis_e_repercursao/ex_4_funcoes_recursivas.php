<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
        function calcularFatorial($numFatorial) {
            if ($numFatorial <= 1) {
                $numFatorial = $numFatorial;
            } else {
                $numFatorial *= calcularFatorial($numFatorial - 1);
            }
            return $numFatorial;
        }

        $num = 4;
        echo calcularFatorial($num);
    ?>
    
</body>
</html>