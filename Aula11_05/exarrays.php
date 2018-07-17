<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Supermercado</title>
</head>
<body>
<?php

$listamercado =  array("Arroz","Feijao", "Macarrao", "Leite", "Farinha de trigo", "Agua","Sabonete","Shampoo", "Cafe", "Pessego", "Maca", "Limao");

echo "A - Criado!" . "<br>";

echo "B - " . $listamercado[1] . "<br>";

echo "C - " . $listamercado[2]. "<br>";

echo "D - $listamercado[10]". "<br>";

echo "E - " . count($listamercado). "<br>";

echo "F - Retira um elemento do final do array ::" . array_pop($listamercado). "<br>";

echo "G - ";

rsort($listamercado);

foreach($listamercado as $value){
echo $value . "; ";
}

echo "<br>";
echo "H - Criado!"."<br>";

$novoarray = array(1001,1002,1003,1004,1005,1006,1007,1008,1009,1010,1011,1012);

echo "I - " . count($novoarray). "<br>";


?>
</body>
</html>