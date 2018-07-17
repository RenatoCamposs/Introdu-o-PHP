<?php
$array1 = array("Valor 1", "Valor 2", "Valor 3", "Valor 4", "Valor 5");
print "26.	Função &quot;array_pop&quot; — Retira um elemento do final do array.
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


print "</br> Usando o &quot;array_pop&quot; e retirando o último elemento: " . array_pop($array1) . "</br>";

?>








