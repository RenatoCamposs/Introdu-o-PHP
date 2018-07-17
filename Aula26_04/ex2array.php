<?php
$a=array();

$a[0][0]="1";
$a[0][1]="2";
$a[1][0]="3";
$a[1][1]="4";

foreach ($a as & $value)
{
	foreach ($value as & $value2)
	{
			echo $value2;

	}
}




?>