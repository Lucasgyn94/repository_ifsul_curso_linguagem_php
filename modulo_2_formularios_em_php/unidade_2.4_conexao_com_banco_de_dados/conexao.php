<?php 

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'SistemaFic';
    $porta = 3306;

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $porta);

    if (!$conexao) {
        die("Erro de conexão com o banco de Dados.");
    }

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];

    $sql = "INSERT INTO Usuarios (nome, endereco, cidade)
            VALUES('$nome', '$endereco', '$cidade')";
    

    $resultado = mysqli_query($conexao, $sql);
    echo "<p>Parabéns, dados cadastrados com sucesso!</p>";
    mysqli_close($conexao);

?>

<button name="button" type="button"><a href="./form.php">Voltar</a></button>