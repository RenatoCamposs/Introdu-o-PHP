<?php
$array1 = array(1, 2, 3, 4, 5, 7, 8, 9, 10);

print "50.	Fun��o &quot;array&quot; � Cria um array.
</br>
______________________________
</br>
<h3> Exemplo de da fun��o array em funcionamento: </h3>";

foreach($array1 as &$value){
	print $value . "</br>";
}

?>