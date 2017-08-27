<?php

$valor_gas = 4.00;
$valor_alchool = 1.00;

$valor = $valor_gas * 0.7;

if ($valor > $valor_alchool) {
    echo "abasteça com álcool";
} else {
    echo "abasteça com gasolina";
}

?>

