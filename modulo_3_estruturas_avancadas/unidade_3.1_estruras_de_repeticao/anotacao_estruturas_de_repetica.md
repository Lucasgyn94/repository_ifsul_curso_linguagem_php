# Estruturas de Repetição
* O php possui 4 comandos de repetição
  - While
  - do-While
  - For
  - Foreach

* Quando queremos que um trecho de código seja executado ENQUANTO uma condição for verdade:
  - While
  - Do/While

* Quando um trecho de código é repetido por um número determinado de vezes
  - For
  - Foreach

## Estrutura de repetição While
* Traduzindo para o português, __While__ significa __enquanto__.

  - O comando avalia a expressão e, __enquanto__ essa for __verdadeira__, a execução do bloco de comandos em questão será repetida.

* __while__ - executa um bloco de código sempre que a condição especificada for verdadeira.

### Sintaxe do comando While
```
While (condicao) {
    comandos;
}
```


## Estrutura de repetição Do / While
* Traduzindo para o português, __do / while__ significa __faça / enquanto__.
* A principal diferença entre o while e o do / while:
  - O __while__ avalia a expressão no __início do laço__.
  - O __do / while__ avalia a expressão no __final do laço__.

* Portando, utilizando o __do/while__ o laço será executado pelo menos uma vez!
* Pois a condição é testada apenas no final.

### Sintaxe do comando Do While
```
Do {
    comandos;
} While (condicao);

```

### For e Foreach
* Utilizado quando um trecho de código é repetido por um número determinado de vezes

## For

* O comando __for__ é utilizado para executar um conjunto de instruções por um __determinado__ número de vezes.

* É muito útil para operações, como a impressão de __todos os elementos__ de um __array__ ou de __todos os registros__ retornados de uma consulta a um banco de dados.

### Sintaxe do comando For
```
for (inicialização; condição; operador) {
    // bloco de instruções
}

```

## Foreach
* O comando __foreach__ oferece uma maneira mais fácil de "navegar" entre os elementos de um array.

### Sintaxe do comando Foreach
```
foreach ($nome_array as $elemento) {
    // bloco de instruções
}

```
