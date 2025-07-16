<?php 
    $nome_cookie = "nome_usuario";
    $valor_cookie = "Lucas Ferreira da Silva";

    function criarCookie($nome_cookie, $valor_cookie) {
        return setcookie($nome_cookie, $valor_cookie, time() + 3600);
    }

    function limparCookies($nome_cookie) {
        return setcookie($nome_cookie, '', time() - 3600);
    }

    limparCookies($nome_cookie);
    criarCookie($nome_cookie, $valor_cookie);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php 
        if (!isset($_COOKIE[$nome_cookie])) {
            echo "Cookie " . $nome_cookie . " não está atribuido!"; 
        } else {
            echo "Cookie " . $nome_cookie . " está atribuido!" . "<br>";
            echo "Valor " . $_COOKIE[$nome_cookie];

        }
    ?>
</body>
</html>