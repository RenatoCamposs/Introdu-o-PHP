<?php
$frutas = array("limao", "laranja", "banana", "melancia");
sort($frutas);
foreach ($frutas as $chave => &$valor) {
    echo "frutas[".$chave."] = ".$valor."\n";
}
 
?>