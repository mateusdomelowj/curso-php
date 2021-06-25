<?php

$idade = 23;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho!\n";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar!\n";
} else {
    echo "Você só tem $idade anos. Você não pode entrar\n";
}