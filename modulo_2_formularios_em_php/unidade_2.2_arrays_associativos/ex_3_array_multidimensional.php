<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional em PHP</title>
</head>
<body>

    <?php 
        $matriz = array(
            array(2, 4, 6),
            array(1, 3, 5),
            array(0, 7, 8)
        );
        
        echo $matriz[0][0];
        echo '</br>';
        echo $matriz[0][1];
        echo '</br>';
        echo $matriz[0][2];
        
        echo '</br>';
        echo '</br>';

        echo $matriz[1][0];
        echo '</br>';
        echo $matriz[1][1];
        echo '</br>';
        echo $matriz[1][2];

        echo '</br>';
        echo '</br>';

        echo $matriz[2][0];
        echo '</br>';
        echo $matriz[2][1];
        echo '</br>';
        echo $matriz[2][2];
    ?>
    
</body>
</html>