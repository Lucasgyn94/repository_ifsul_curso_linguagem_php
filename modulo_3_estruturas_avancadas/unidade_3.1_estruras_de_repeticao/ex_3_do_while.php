<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando Do While</title>
</head>
<body>
    <?php
        echo "<div><p>Utilizando Do While</p></div>"; 
        $x = 11;
        do {
            echo $x."</br>";
            $x++;
        } While ($x <= 10);
    ?>
    
</body>
</html>