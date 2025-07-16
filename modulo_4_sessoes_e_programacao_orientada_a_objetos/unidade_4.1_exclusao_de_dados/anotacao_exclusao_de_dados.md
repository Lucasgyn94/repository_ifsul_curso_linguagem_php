# Exclusão de Dados em PHP
* Iremos aprender a acessar nosso banco de dados (mysql) para realizar a exclusão de dados.
* Podemos fazer isso com o comando:
```
DELETE FROM nomeTabela WHERE
idCampo = $id_variavel;
```

* Utilizando o banco de dados SistemaFic, iremos apagar dados da tabela Usuarios da seguinte forma em SQL:
  - DELETE FROM Usuarios WHERE nome='$nome';

* Onde $nome será um valor informado pelos usuários em formuário.

* Vamos criar dois arquivos:
  - Um para realizar a pesquisa, que chamaremos de __pesquisa-exclui.php__,
  - e outro para processar a exclusão e exibir seu resultado, de nome __excluir.php__
* Além disso, usaremos o arquivo para conexão ao banco de dados (__conectar.php__).