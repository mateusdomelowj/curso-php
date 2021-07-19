<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    // Método Constructor
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    // Informações Saldo
    public function sacar(float $valorSaque):void
    {
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
            
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDeposito):void
    {
        if ($valorDeposito < 0) {
            echo "Digite um valor positivo";
            return;
        }

        $this->saldo += $valorDeposito;
    }

    public function transferir(float $valorTransferencia, Conta $contaDestino):void
    {
        if ($valorTransferencia > $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }        
        
        $this->sacar($valorTransferencia);
        $contaDestino->saldo += $valorTransferencia;
    }

    public function exibirSaldo():float
    {
        return $this->saldo;
    }

    public static function exibirNumeroDeContas():int
    {
        return self::$numeroDeContas;
    }
}