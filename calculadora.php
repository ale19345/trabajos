<?php
	$cant1 = $_POST['n1'];
	$cant2 = $_POST['n2'];
	$Total;
	$OPERACION = $_POST['Operaciones'];

	if ($OPERACION=="Suma")
{
	$Total = $cant1 + $cant2;
	echo "Resultado: ".$Total;
}
if ($OPERACION=="Resta")
{
	$Total = $cant1 - $cant2;
	echo "Resultado: ".$Total;
}
if ($OPERACION=="Multiplicacion")
{
	$Total = $cant1 * $cant2;
	echo "Resultado: ".$Total;
}
if ($OPERACION=="Division")
{
	$Total = $cant1 / $cant2;
	echo "Resultado: ".$Total;
}
?>