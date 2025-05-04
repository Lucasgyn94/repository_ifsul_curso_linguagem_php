<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional em PHP</title>
</head>
<body>

    <?php 
        $arrayMulti = array( # <- Array principal sendo a primeira dimensão
            'arrayNumerico' => array( # <- Na primeira posição, temos um Array Numérico sendo a segunda dimensão.
                'item 1',
                'item 2',
                'item 3',
            
            ),
            'arrayAssociative' => array( # <- Na segunda posição, temos um Array Associativo sendo a segunda dimensão
                'chave 1' => 'valor 1',
                'chave 2' => 'valor 2',
                'chave 3' => 'valor 3',

            )
        );


        print_r($arrayMulti);
       
    ?>
    
</body>
</html>