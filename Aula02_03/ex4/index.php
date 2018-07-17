<?php
//Exibindo números pares e ímpares em colunas diferentes até um valor limitado

echo "Números pares <br>";
//Para váriavel $num, teremos o valor inicial "0", valor final maior ou igual a "20", e um intervalo de 2 números
for ($num = 0; $num <= 20; $num = $num+2)
{
echo  "Número " . $num . " <br>";
}
echo "<br> Números ímpares <br>";
//Para váriavel $num, teremos o valor inicial "1", valor final maior ou igual a "19", e um intervalo de 2 números
for ($num = 1; $num <= 19; $num = $num+2)
{
echo  "Número " . $num . " <br>";
}
?>
