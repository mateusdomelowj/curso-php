<?php

class Cpf
{
    private string $cpf;

    public function __construct($numcpf)
    {
        $this->cpf = $numcpf;
    }

    // Informações CPF
    public function exibirNumero():string
    {
        return $this->cpf;
    }
}