<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão</title>
</head>
<body>
    <?php
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco = 'SistemaFic';
        $porta = 3306;

        /**criação da conexão */
        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $porta);

        /*Verificação da conexão */
        if (!$conexao) {
            die('Erro de conexão com o banco de dados.' . mysqli_connect_error());
        }
        echo "Sucesso na conexão!";

    ?>
    
</body>
</html>