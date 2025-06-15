<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando Foreach</title>
</head>
<body>
    <?php
        echo "<h1>Comando Foreach</h1>";
        $vetor = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        foreach ($vetor as $v) {
            echo $v;
            echo "<br>";
        }

    ?>
    
</body>
</html>