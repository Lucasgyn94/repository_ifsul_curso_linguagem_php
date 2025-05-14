# FORMULÁRIOS

## METODO GET
* No __GET__, nós enviamos o formulário e os dados aparecem na URL.

### Exemplo
www.seusite.com.br/cadastro.php?nome=Lucas&endereco=avenida+contorno&cidade=goiania

* O caractere __?__ representa o início da passagem das informações do formulário.
* O símbolo & identifica o início de uma nova variável.

## METODO POST
* No __POST__, nós enviamos o formulário e os dados __NÃO__ aparecem na URL.

### Exemplo
localhost/php/M2/cadastro.php

## RECEBENDO DADOS VIA GET E POST
* Se a requisição for via __POST__.
```
$_POST['nome'];
```

* E se a requisição for via __GET__.
```
$_GET['nome'];
```

* O __nome dos campos__ do formulário é usado como __chave associativa__. E os valores dos campos são armazenados como valores do __aray__.

### EXEMPLO POST
```
$_POST['nome'];
$_POST['endereco'];
$_POST['cidade']
```

### EXEMPLO GET
```
$_GET['nome'];
$_GET['endereco'];
$_GET['cidade']
```

* Para facilitar a manipulação e o __envio dos dados__ para o __banco de dados__, podemos armazenar os arrays superglobais em variáveis comuns logo no início do script PHP que recebe os dados.

### EXEMPLO POST2
```
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade']
```

### EXEMPLO GET2
```
$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$cidade = $_GET['cidade']
```
* Para receber os valores do formulário no nosso arquivo.php chamamos o nome das variáveis de dentro de cada input.

```
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
```

* No arquivo.php fazemos:

```
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];

```