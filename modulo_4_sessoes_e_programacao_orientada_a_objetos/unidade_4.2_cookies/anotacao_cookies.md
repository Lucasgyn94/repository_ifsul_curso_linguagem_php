# Cookies
* Iremos compreender a utilização de cookies.
  - O que é um cookie
  - A importância
  - Como criamos e acessamos
  - Exemplos

* Entre algumas utilizades podemos citar:
  - Autenticação de usuários
  - Carrinho de compras
  - Exibição de anúncios ou imagens
  - Personalização de páginas

## O que é um cookie?
* Um __cookie__ é um pequeno arquivo incorporado pelo servidor no computador do usuário. Em outras palavras, e uma pequena quantidade de informação que persiste temporariamente pelo navegador.

## Características básicas:
  - Possui um nome;
  - Possui um conteúdo ou valor;
  - Possui um prazo de validade (que pode ser longo)

* O uso de Cookies em PHP envolve basicamente dois passos:
  - Criar o __Cookie__
  - Recuperar o valor do __Cookie__

* A função __setcookie()__ é utilizada para criar um __cookie__
* Sua sintaxe básica é simples e segue essa estrutura:
```
setcookie(nome, valor, validade);
```

## Exemplo
* Exemplificando, criaremos um arquivo __cookies.php__:
```
<?php
    $nome_cookie = "usuario";
    $valor_cookie = "Lucas Silva";
    $setcookie($nome_cookie, $valor_cookie, time() + 3600);
?>
```

* Uma vez definido o __Cookie__, podemos referenciá-lo, através da super gloal __$_COOKIE__, um __array__ associativo onde suas chaves são os nomes dados durante a criação do __Cookie__.
```
$_COOKIE['nome'].
```