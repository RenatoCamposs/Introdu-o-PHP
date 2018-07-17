<?php
$frutas = array ("limao", "laranja", "banana", "maчу");
rsort ($frutas);
foreach( $frutas as $chave => $valor ){
    echo "$chave = $valor\n";
}
?>