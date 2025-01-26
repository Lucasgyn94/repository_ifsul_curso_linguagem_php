<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Se e Senão</title>
</head>
<body>
    <?php 
       $idade = 17;

       if ($idade >= 18) {
        $x = 'Você é maior de idade!';
       } else {
        $x = 'Você não é maior de idade!';
       }
       echo $x;
    ?>
    
</body>
</html>