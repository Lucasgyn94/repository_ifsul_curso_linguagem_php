<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Lógico And</title>
</head>
<body>
    <?php 
        $nota = 10;

        /*Operador Lógico And */
        if ($nota > 0 and  $nota <= 10) {
            echo "Nota válida!";
        } else {
            echo "Nota inválida!";
        }

       
    ?>
</body>
</html>