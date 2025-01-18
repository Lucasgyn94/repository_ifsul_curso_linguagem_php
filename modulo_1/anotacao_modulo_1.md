# Unidade 1.1 O que é PHP

## O que é PHP?
* PHP é uma linguagem de programação para a criação de aplicações web.
* Pode ser usada tanto em pequenas aplicações quanto em projetos de grande porte
* __Por exemplo__: wilkipedia, yahoo e outros
* Ela é uma linguagem __server-side__, e o que isto significa?
* Significa que nossos scripts, no nosso código, são executados no __lado do servidor__.

## Servidor
* É um computador que faz parte de uma rede e que fornece serviços e dados para os dispositivos, os chamados clientes.

## Cliente
* Um cliente pode ser qualquer dispositivo capaz de enviar __requisição__ para um servidor (incluindo outras aplicações).

## O que são requisições
* Requisições (envio dos dados)


## Arquitetura

* Requisição HTTP -> Interpreta o código -> Responde para o cliente -> fim

## Back-end x Front-end
### Front-end
* Envia dados do campo texto
### Back-end
* retorna uma resposta

## Vantagens e Desvantagens do PHP
### Vantagens
* Linguagem de script open source
* PHP é multiplataforma
* Suporte a várias bases de dados
* PHP é fácial de aprender

### Desvantagens
* Compatibilidade entre versões
* Sua evolução é mais lenta

# Unidade 1.2 - Preparando o ambiente PHP 

## Preparando nosso ambiente de desenvolvimento PHP
* Primeiramente, precisamos dos seguintes softwares:
  - Um __servidor__ para rodar os scripts;
  - um __interpretador__ da linguagem PHP
  
## Ambiente de programação PHP
* Para o ambiente de programação de PHP, precisaremos:
  - do servidor __Apache__
  - do interpretador __PHP__
* Porém, existem softwares que facilitam a nossa vida e trazem todo o pacote de softwares que iremos precisar, e é o que iremos escolher. Vamos trabalhar com o XAMPP.

## Estrutura php
<?php
    código
?>

__<?php__: abertura da tag php
__?>__: fechamento da tag php

# Unidade 1.3 - Variáveis

## Variáveis em PHP
* São representadas por um cifrão ($) seguido pelo nome da variável:
  - Podem ser caracteres alfanuméricos (além do _).
  - O primeiro caractere deve obrigatoriamente ser uma letra ou símbolo de undescore (_).
  - Não pode haver espaços em nomes de variáveis compostos - usamos um underline para ligar as palavras.
  - São case-sensitive
  - DICA: Sempre criar nomes de variáveis significativos

## Exemplificando
### Variáveis válidas 
* $nota, $taxa_juros, $bisc8;
### Variáveis inválidas
* $100nocao, $20assustar, $5

## Tipos básicos de variáveis em PHP
* inteiro;
* ponto flutuante
* String
* Booleanos

### Além disso, o PHP é case-sensitive
* $nota_aluno é diferente de $Nota_aluno;

# Unidade 1.4 - Operadores

# Unidade 1.5 - Estruturas Condicionais 
