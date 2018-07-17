<?php

$nome2 = $_POST["vnome"];
$idade2 = $_POST["vidade"];
$fone2 = $_POST["vfone"];
$sexo2 = $_POST["vsexo"];


print $nome2 . "<br>" ;
print $idade2 . "<br>" ;
print $fone2 . "<br>" ;


if($sexo2 = "Masculino")
	print "Você é do sexo Masculino " ;
 
else
	print "Você é do sexo Feminino " ;
?>
