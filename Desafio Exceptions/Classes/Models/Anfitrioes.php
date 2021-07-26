<?php

use Desafio\Excecao\Classes\Models\Pessoa;

class Anfitrioes extends Pessoa
{
    public function __construct(string $nome, int $idade, string $cpf)
    {
        parent::__construct($nome, $idade, $cpf);
    }
}
