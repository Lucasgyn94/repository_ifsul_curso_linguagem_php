<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <form name="cadastro" action="conexao.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>

          <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco">
        </div>

          <div>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade">
        </div>

        <div>
            <input type="submit" name="botao" value="Enviar" >
            <input type="reset" name="botao" value="Limpar">
        </div>

    </form>
</body>
</html>