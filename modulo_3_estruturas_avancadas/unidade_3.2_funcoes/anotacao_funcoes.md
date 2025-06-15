# Funções

## O que são funções
* Um função é um __bloco de instruções__ que podem ser usadas repetidamente em um programa.

* Uma função __não será executada automaticamente__ quando uma página for carregada.

* Um função será executada por __chamada para a função__.

## Importância
* __Facilita o desenvolvimento__ (desenvolvimento modular);
* __Organização__
* __Reutilização__

* O PHP possui mais de __1000__ funções internas!

* __por exemplo__: Funções de __array__, funções de calendário, funções de banco de dados, e muitas outras.

* Para ter acesso à lista completa das funções em php : https://www.w3schools.com/php/.

## Sintaxe de uma função php
```
function nomeDaFuncao($arg1, $arg2, $arg3, ...., $argn) {
    codigo a ser executado
}
```

## Regras de Nomes
* O primeiro caractere deve, obrigatoriamente, ser uma letra ou o símbolo de underscore (_).

* Não pode haver espaços em nomes de variáveis compostos - use underline para ligar as palavras.

* São case-sensitive.

* __Dica__: Sempre crie nomes de funções significativos

## Retorno da Função
* As funções podem ser classificadas quanto ao seu retorno como vazias __(void)__ ou com retorno.
  - As funções __void__ ou __sem retorno__ apenas executas uma série de comandos __sem a obrigação de devolver um valor específico__ como resultado.
  - As funções com retorno, ao serem executadas, __resultam diretamente__ em __um dado valor__ que, no PHP, não tem tipo definido.

## Passagem de Parâmetros
* Existem duas formas de passagem de parâmetros para uma função:
  - Passagem de parâmetros por __valor__;
  - Passagem de parâmetros por __referência__;

### Exemplo Passagem de Parâmetros por valor
* __$numA__ e __$numB__, se alterados dentro da função soma, não mantém as alterações fora função

```
function soma ($n1, $n2) {
    return $n1 + $n2;
}

```

### Exemplo Passagem de Parâmetros por referência
* Usamos o __&$n1__ é acessada diretamente e pode sofrer alterações durante a execução.

```
function soma (&$n1, $n2) {
    $n1 += $n2;
}

```