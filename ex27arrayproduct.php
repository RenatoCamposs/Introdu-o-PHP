<?php
$array1 = array(1, 2, 3, 4, 5,);
print "27.	Função &quot;array_product&quot; — Calcula o produto dos valores de um array.
</br>
______________________________
</br>
<h3> Exemplo de da função array_pop em funcionamento: </h3>
</br>
Todos os valores declarados:
</br>";

foreach($array1 as &$value){
	print $value . "</br>";
}


print "</br> Usando o &quot;array_product&quot; e calculando o produto dos elementos: " . array_product($array1) . "</br>";

?>








