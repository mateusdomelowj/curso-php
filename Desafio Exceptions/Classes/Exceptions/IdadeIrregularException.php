<?php

namespace Desafio\Excecao\Classes\Exceptions;

use DomainException;

class IdadeIrregularException extends DomainException
{
    public function __construct($nome, $idade)
    {
        $mensagem = "Desculpe $nome, sua idade ($idade) é inferior a classificação permitida. Entrada somente para maiores de 18 anos!" . PHP_EOL . PHP_EOL;
        parent::__construct($mensagem);
    }
}
