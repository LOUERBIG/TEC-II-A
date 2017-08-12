<?php

$A = 7;
$B = 7;
$C = 7;
$D = 6;

$Nota = ($A + $B + $C + $D)/4;

if ($Nota >= 7){
    echo "Passou";
} else if ($Nota <= 5){
    echo "Reprovou";
} else if ($Nota>5 && $Nota<7) {
    echo "Recuperação"; 
}

?>

