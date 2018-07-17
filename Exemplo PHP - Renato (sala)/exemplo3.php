<?php
	Class calcular{
		Public function Somar($un1,$un2)
		{
			echo ($un1 + $un2);
		}
	}
	$obj = new calcular();
	$obj -> somar(1,4);
	
?>