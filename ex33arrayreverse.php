<?php
$array1 = array(1, 2, 3, 4, 5,);
print "38.	array_sum — Calcula a soma dos elementos de um array
</br>
______________________________
</br>
<h3> Exemplo de da função array_reverse em funcionamento: </h3>
</br>
Todos os valores declarados:
</br>";

foreach($array1 as &$value){
	print $value . "</br>";
}


print "</br> Usando o &quot;array_sum&quot; e somando os elementos do array: " . array_reverse($array1) . "</br>";

?>








