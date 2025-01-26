<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Switch</title>
</head>
<body>
    <?php 
        $entrada = 'nn';

        switch ($entrada) {
            case 's':
                echo "Você escolheu $entrada - SIM!";
                break;
            case 'n';
                echo "Você escolheu $entrada - NÃO!";
                break;
            default:
                echo 'Opção inválida';
                break;
        }
    ?>
    
</body>
</html>