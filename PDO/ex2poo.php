
<?php

class carro
{
	public $cor;
	public $placa;
}

$obj = new carro();
$obj->cor = "Vermelha";
$obj->placa = "XAB-5555";

echo $obj->cor;
echo $obj->placa;
?>
