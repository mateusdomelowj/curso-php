<?php

namespace Desafio\Excecao\Classes\Models;

use Desafio\Excecao\Classes\Exceptions\IdadeIrregularException;
use Desafio\Excecao\Classes\Exceptions\SenhaInvalidaException;

class Convidado extends Pessoa
{
    private string $vip;

    public function __construct(string $nome, int $idade, string $cpf, string $senhaSecreta)
    {
        parent::__construct($nome, $idade, $cpf);
        $this->validarIdade($idade, $nome);
        $this->validarVip(ucfirst($senhaSecreta), $nome);
    }

    public function recuperarVip(): string
    {
        return $this->vip;
    }

    final protected function validarIdade(int $idade, string $nome)
    {
        if ($idade < 18) {
            throw new IdadeIrregularException($nome, $idade);
        }
    }

    final protected function validarVip(string $senha, string $nome)
    {
        if ($senha != "Abacaxi") {

            // Lançar erro se o argumento (senha) passado for diferente da palavra "Abacaxi"
            throw new SenhaInvalidaException($nome);
            $this->vip = "Inativo";
        } else {
            echo "Seja bem vindo, $nome! Você foi classificado como VIP! Entre e fique a vontade!" . PHP_EOL . "Bebida e comida por nossa conta! ;) \n \n";
            $this->vip = "Ativo";
        }
    }
}
