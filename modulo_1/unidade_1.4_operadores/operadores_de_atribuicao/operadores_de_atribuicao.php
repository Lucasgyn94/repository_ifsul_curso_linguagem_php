<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>
<body>
    <?php 
        $a = 20;
        $b = 10;

        $a += $b; /*$a = $a + $b, ou seja, $a = 10 + 20 */
        echo $a . "<br />";

        $a -= $b;
        echo $a . "<br />";

        $a *= $b;
        echo $a . "<br/>";

        $a /= $b;
        echo $a . "<br/>";

        $a %= $b;
        echo $a . "<br/>"

    ?>
    
</body>
</html>