<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis globais</title>
</head>
<body>
    <?php
        $saldo = 1000; /*Variável global */

        function depositar($valor) {
            global $saldo;
            $saldo = $saldo + $valor;
            if ($valor > 0) {
                echo "Valor de " . $valor . " reais depositado com sucesso!";
                return "<br>" . "Novo saldo: " . $saldo;
            }
        }

        function sacar($valor) {
            global $saldo;
            $saldo = $saldo - $valor;
            if ($valor < $saldo) {
                return "Saque de " . $valor . " efetuado com sucesso!" . "<br>" . "Novo Saldo: " . $saldo;
            } else {
                return "Valor de " . $valor . " insuficiente!" . "<br>" . "Saldo de: " . $saldo;
            }
        }

        echo depositar(500);
        
        echo "<br>";
        echo "<br>";

        echo sacar(150);
    ?>
    
</body>
</html>