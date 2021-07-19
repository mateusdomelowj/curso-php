<?php

require_once "src/Conta.php";
require_once "src/Titular.php";

$mateus   = new Titular(new Cpf("111.222.333-00"), "Mateus");
$usuario2 = new Titular(new Cpf("999.888.777-22"), "Fulano");

$conta1 = new Conta($mateus);
$conta2 = new Conta($usuario2);

var_dump($conta1);
var_dump($conta2);

echo Conta::exibirNumeroDeContas();