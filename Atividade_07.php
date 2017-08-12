<?php

$A = 1.70;
$S = 'M';

if ($S == 'M'){
   $IMC = (72.7 * $A) - 58;
} else if ($S == 'F'){
   $IMC = (62.1 * $A) - 44; 
}        
 echo "$IMC";       
?>

