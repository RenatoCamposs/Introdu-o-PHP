<?php
//Exibindo n�meros pares e �mpares em colunas diferentes at� um valor limitado

echo "N�meros pares <br>";
//Para v�riavel $num, teremos o valor inicial "0", valor final maior ou igual a "20", e um intervalo de 2 n�meros
for ($num = 0; $num <= 20; $num = $num+2)
{
echo  "N�mero " . $num . " <br>";
}
echo "<br> N�meros �mpares <br>";
//Para v�riavel $num, teremos o valor inicial "1", valor final maior ou igual a "19", e um intervalo de 2 n�meros
for ($num = 1; $num <= 19; $num = $num+2)
{
echo  "N�mero " . $num . " <br>";
}
?>
