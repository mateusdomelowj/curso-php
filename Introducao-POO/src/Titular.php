<?php

require_once "src/Cpf.php";

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNomeDoTitular($nome);
        $this->nome = $nome;
    }
    
    // Informações CPF
    public function exibirCpf():string
    {
        return $this->cpf->exibirNumero();
    }

    // Informações Nome do Titular
    public function exibirNome():string
    {
        return $this->nome;
    }

    // Método privado para Validar Nome do Titular
    private function validarNomeDoTitular(string $nome)
    {
        if (strlen($nome) < 5)
        {
            echo "Nome curto. Digite pelo menos um sobrenome";
            exit();
        }
    }
}