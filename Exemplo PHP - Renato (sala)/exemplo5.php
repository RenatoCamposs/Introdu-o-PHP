<?php
	Class divisão{
		Public function Dividir($un1,$un2)
		{
			echo ($un1 / $un2);
		}
	}
	$obj = new divisão();
	$obj -> dividir(100,4);
	
?>