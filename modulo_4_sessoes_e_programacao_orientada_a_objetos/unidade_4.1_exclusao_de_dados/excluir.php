<?php
    include_once("./conectar.php");

    $nome = $_POST['nome'];

    $sql = "DELETE FROM Usuarios WHERE nome = '$nome'";

    $resultado = mysqli_query($conexao, $sql);

    echo "Exclusão realizada com sucesso!";

    mysqli_close($conexao);
?>