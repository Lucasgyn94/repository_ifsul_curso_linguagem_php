<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função com parâmetro e sem retorno</title>
</head>
<body>
    <?php 
        echo "<h1>Funções</h1>";
        
        function exibir_mensagem($nome) {
            echo "Olá " . $nome;
        }

        exibir_mensagem("Lucas");
    

    ?>
    
</body>
</html>