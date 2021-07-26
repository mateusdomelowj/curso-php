<?php

$altura = 1.70;
$peso = 68;
$resCalculo = $peso / ($altura ** 2);

echo "Seu IMC é de $resCalculo. Portanto, isso indica ";


if ($resCalculo > 30) {
    echo "obesidade." . PHP_EOL;
} elseif (($resCalculo > 24.9) && ($resCalculo <= 30)) {
    echo "sobrepeso." . PHP_EOL;
} elseif (($resCalculo >= 18.5) && ($resCalculo <= 24.9)) {
    echo "normal." . PHP_EOL;
} else {
    echo "magreza." . PHP_EOL;
}