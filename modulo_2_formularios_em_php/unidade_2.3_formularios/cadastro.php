<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];

        echo "<p>Nome digitado: " . htmlspecialchars($nome) . "</p>";
        echo "<p>Endereço digitado: " . htmlspecialchars($endereco) . "</p>";
        echo "<p>Cidade digitada: " . htmlspecialchars($cidade) . "</p>";

    ?>
    <p><a href="./index.php">Voltar</a></p>
</body>
</html>