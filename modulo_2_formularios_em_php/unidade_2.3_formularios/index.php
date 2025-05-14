<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
    <form name="cadastro" action="cadastro.php" method="post">
        <label for="/nome">Nome</label>
        <input type="text" name="nome">

        <label for="/endereco">Endereço</label>
        <input type="text" name="endereco">
        
        <label for="/cidade">Cidade</label>
        <input type="text" name="cidade">

        <input type="submit" name="botao" value="Enviar">
        <input type="reset" name="botao" value="Limpar">

    </form>
    
</body>
</html>