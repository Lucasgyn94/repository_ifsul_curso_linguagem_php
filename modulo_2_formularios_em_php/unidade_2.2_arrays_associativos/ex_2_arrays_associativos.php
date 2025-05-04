<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo em PHP</title>
    <style></style>
</head>
<body>
    <?php 
        # Adicionando elementos a nosso array $pessoa dinamicamente, sem definir sua chave. Assim, ela será gerada automaticamente.
        $pessoa[] = 'info';
        $pessoa[] = 'pessoa';

        echo $pessoa[1];
        echo '</br>';
        echo '</br>';
        # Adicionando elementos, definindo sua chave de acesso, chave associativa
        $pessoa['nome'] = 'Lucas';
        $pessoa['idade'] = 30;

        print_r($pessoa)



    ?>
    
</body>
</html>