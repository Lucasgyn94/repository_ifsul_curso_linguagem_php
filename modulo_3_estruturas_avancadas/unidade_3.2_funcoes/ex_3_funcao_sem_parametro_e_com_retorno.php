<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função sem parâmetro e com retorno</title>
</head>
<body>

    <?php
        echo "<h1>Função sem parâmetro e com retorno</h1>";

        function dia_atual() {
            $hoje = getdate();
            switch($hoje["wday"]) {
                case 0:
                    return "Domingo";
                    break; 
                case 1:
                    return "Segunda-Feira";
                    break;
                case 2:
                    return "Terça-Feira";
                    break;
                case 3:
                    return "Quarta-Feira";
                    break;
                case 4:
                    return "Quinta-Feira";
                    break;
                case 5:
                    return "Sexta-Feira";
                    break;
                case 6:
                    return "Sábado";
                    break; 
            }
        }

        $dia = dia_atual();
        echo "Hoje é " . $dia;
    ?>

</body>
</html>