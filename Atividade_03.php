<?php

$A = 10;
$B = 20;
$C = 30;
$D = 40;

$Soma = $A + $D;
$Divisao = $B / $C;

if ($Soma == $Divisao){
    echo "igual";
} else if ($Soma > $Divisao){
    echo "é maior";
} else if ($Soma < $Divisao){
    echo "é menor";
}

?>
