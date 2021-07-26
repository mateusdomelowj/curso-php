<?php

use Desafio\Excecao\Classes\Exceptions\IdadeIrregularException;
use Desafio\Excecao\Classes\Exceptions\SenhaInvalidaException;
use Desafio\Excecao\Classes\Models\Convidado;

require_once "autoload.php";

// Tratamento de erros desenvolvido com um objeto da classe Convidado, e esse recebe 4 argumentos:
//         Primeiro argumento NOME
//         Segundo argumento IDADE
//         Terceiro argumento CPF
//         E Quarto argumento SENHA-VIP
try {
    $convidado1 = new Convidado("Mateus", 23, "123.123.321-12", "Abacaxi");
} catch (SenhaInvalidaException $exception) {
    echo $exception->getMessage();
} finally {
    echo "Próximo da fila..." . PHP_EOL . PHP_EOL;
}

try {
    $convidado1 = new Convidado("Angela", 16, "412.284.126-75", "Abacaxi");
} catch (IdadeIrregularException $exception) {
    echo $exception->getMessage();
} finally {
    echo "Próximo da fila..." . PHP_EOL . PHP_EOL;
}
