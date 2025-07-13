<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Pesquisa por Cidade</title>
</head>
<body>
    <?php
        include_once("conectar.php"); /**A declaração include_once inclui e avalia o arquivo informado durante a execução do script. */

        $pesquisa = $_POST['cidade']; /*A cidade para a pesquisa */

        $sql = "SELECT * FROM Usuarios Where cidade = '$pesquisa'";
        $resultado = mysqli_query($conexao, $sql);

        if (!$resultado) {
            echo "Erro na consulta" . mysqli_error($conexao);
        }

    ?>

    <table border="1" style="width: 50%;">
        <tr>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>CIDADE</th>
        </tr>
        <?php
            /* mysqli_query() retorna em forma de array os resultados da busca (SELECT) para $resultado, que é extraído registro a registro. */
            while($registro = mysqli_fetch_array($resultado)) {
                 $nome = $registro['nome'];
                $endereco = $registro['endereco']; // Corrigido
                $cidade = $registro['cidade'];

                echo "<tr>";
                echo "<td>" . $nome . "</td>";
                echo "<td>" . $endereco . "</td>"; // Corrigido
                echo "<td>" . $cidade . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>
