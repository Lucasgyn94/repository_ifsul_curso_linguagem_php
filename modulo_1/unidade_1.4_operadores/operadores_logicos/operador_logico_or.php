<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Lógico Or</title>
</head>
<body>
    <?php 
        /*Operador Lógico Or */
        if ($nota < 0 or $nota > 10) {
            echo "Nota inválida!";
        } else {
            echo "Nota válida";
        }
    ?>
</body>
</html>