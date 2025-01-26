# Unidade 1.4 - Operadores

## Operadores em PHP
* Os operadores são utilizados para informar ao PHP o que deve ser executado:
  - atribuição de um valor a uma variável;
  - realização de operações aritméticas (soma, etc)
  - comparação de valores.
* Os principais operadores são: os __aritméticos__, os de __comparação__, de __atribuição__ e __lógico__.

### Operadores Aritméticos
---------------------------------------------------------------------------
|   OPERADOR    |   NOME        |   EXEMPLO  |                             |
----------------------------------------------------------------------------
|        -      | Negação       | -$a        | Oposto de a
|        +      | Adição        | $a + $b    | Soma de $a + $b
|        -      | Subtração     | $a - $b    | Diferença de $a - $b
|        *      | Multiplicação | $a * $b    | Multiplicação de $a * $b
|        /      | Divisão       | $a / $b    | Divisão de $a / $b
|        %      | Módulo        | $a % $b    | Resto de $a dividido por $b
---------------------------------------------------------------------------------

### Operadores Relacionais
---------------------------------------------------------------------------
|   OPERADOR    |   NOME        |   EXEMPLO   |                             |
----------------------------------------------------------------------------
|       ==      | Igual         | $a == $b    | __Verdadeiro__ se $a __é igual a__ $b
|       !=      | Diferente     | $a != $b    | __Verdadeiro__ se $a __é diferente de__ $b
|       <>      | Diferente     | $a <> $b    | __Verdadeiro__ se $a __é diferente de__ $b
|        <      | Menor que     | $a < $b     | __Verdadeiro__ se $a __é menor do que__ $b
|        >      | Maior que     | $a > $b     | __Verdadeiro__ se $a __é maior do que__ $b
|       <=      | Menor ou igual| $a <= $b    | __Verdadeiro__ se $a __é menor ou igual a__ $b
|       >=      | Maior ou igual| $a >= $b    | __Verdadeiro__ se $a __é maior ou igual a__ $b
---------------------------------------------------------------------------------

### Operadores de Atribuição
---------------------------------------------------------------------------
|   OPERADOR    |   Exemplo        |   Resultado   |                             |
----------------------------------------------------------------------------
|        =      | $a = $b          | $a __recebe o valor de $b__
|       +=      | $a += $b         | $a = __$a__ + $b
|       -=      | $a -= $b         | $a = __$a__ - $b
|       *=      | $a *= $b         | $a = __$a__ * $b
|       /=      | $a /= $b         | $a = __$a__ / $b
|       .=      | $a .= $b         | $a = __$a__ . $b
|       %=      | $a %= $b         | $a = __$a__ % $b
---------------------------------------------------------------------------------

### Operadores Lógicos
---------------------------------------------------------------------------
|   OPERADOR    |   Exemplo    |   Resultado                                |
----------------------------------------------------------------------------
|      AND      | $a and $b    | __Verdadeiro__ (TRUE) se tanto $a quanto $b são verdadeiros
|      OR       | $a or $b     | __Verdadeiro__ (TRUE) se $a ou $b são verdadeiros 
|      XOR      | $a xor $b    | $a = __$a__ - $b __Verdadeiro__ (TRUE) se $a ou $b são verdadeiros, mas não ambos
|      NOT      | !$a          | $a = __$a__ * $b __Verdadeiro__ se $a não é verdadeiro
|      &&       | $a && $b     | $a = __$a__ / $b __Verdadeiro__ se tanto $a quanto $b são verdadeiros.
|      ||       | $a || $b     | $a = __$a__ . $b __Verdadeiro__ se $a ou $b são verdadeiros.
---------------------------------------------------------------------------------
