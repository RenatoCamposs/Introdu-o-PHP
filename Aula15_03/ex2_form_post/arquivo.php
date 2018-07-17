<?php
$frutas = array("1" => "limao", "2" => "laranja", "3" => "banana", "4" => "melancia");
arsort($frutas);
foreach ($frutas as $chave => $valor) {
    echo "$chave = $valor<br>";
}
?>