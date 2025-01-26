<!DOCTYPE html>
<html>
    <head>
        <title>Concatenação de variáveis</title>
    </head>
    <body>
        <?php 
            $palavra = "teste";
            $frase_aspas_duplas = "frase com aspas duplas: $teste aprovado";
            $frase_aspas_simples = 'frase com aspas simples: $teste reprovado';

            echo $frase_aspas_duplas . " - " . $frase_aspas_simples;
        ?>
    </body>
</html>