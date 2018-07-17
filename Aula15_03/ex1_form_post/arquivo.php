<?php
	$vlogin = $_POST["login"];
	$vsenha = $_POST["senha"];
	
	if($vlogin == "admin" && $vsenha):
		echo "<h1>ACESSO OK<h1>";
	else:
		echo "<h1>ACESSO NEGADO<h1>";
	endif
	?>