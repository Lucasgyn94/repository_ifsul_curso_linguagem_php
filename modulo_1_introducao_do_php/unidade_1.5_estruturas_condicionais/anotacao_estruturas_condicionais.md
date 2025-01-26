# Unidade 1.5 - Estruturas Condicionais Vídeo

## Estruturas Condicionais no PHP
* No PHP temos as seguintes estruturas condicionais:
  - Estrutura condicional if-else;
  - Estrutura if-else e elseif (estrutura aninhada);
  - Estrutura Switch

## Sintaxe if else
<?php 
    if ($condicaoUm) {
        // codigo a ser executado se a condição for atendida
    } elseif($$condicaoDois) {
        // codigo a ser executado se a condição dois for atendida
    } else {
        // codigo a ser executado se nenhuma das condições forem atendidas.
    }

?>

## Sintaxe Switch
switch (Variável ou expressão a ser testada) {
    case 1:
        comandos
        break;
    case 2:
        comandos
        break;
    ...
    default: 
        comandos
}