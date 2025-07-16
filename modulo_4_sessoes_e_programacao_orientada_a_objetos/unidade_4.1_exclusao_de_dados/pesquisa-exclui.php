<?php
    include_once("./conectar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Usuários SistemaFic</title>
</head>
<body>
    <!--TABELA E CABEÇÃO DE DADOS: -->
    <table border="1" style="width: 50%;">
        <thead>
            <tr>
                <th>NOME</th>
                <th>ENDEREÇO</th>
                <th>CIDADE</th>
            </tr>
        </thead>
        <!-- PREENCHENDO DADOS DA TABELA-->
        <?php 
            $sql = "SELECT * FROM Usuarios";
            $resultado = mysqli_query($conexao, $sql); 

            echo "<tbody>"; 
            while ($registro = mysqli_fetch_array($resultado)) { 
                $nome = $registro['nome'];
                $endereco = $registro['endereco'];
                $cidade = $registro['cidade'];

                echo "<tr>";
                echo    "<td>" . $nome . "</td>";
                echo    "<td>" . $endereco . "</td>";
                echo    "<td>" . $cidade . "</td>";
                echo "</tr>"; 
            }
            echo "</tbody>"; // Mantenha o fechamento do tbody fora do loop
        echo "</table>";
        mysqli_close($conexao);
        ?>

    <form name="exclui" action="./excluir.php" method="post">
        <label for="nome">Digite o nome que deseja excluir: </label>
        <input type="text" name="nome">
        <div>
            <button type="submit" name="botao">Enviar</button>
            <button type="reset" name="botao">Limpar</button>
        </div>
    </form>
</body>
</html>
