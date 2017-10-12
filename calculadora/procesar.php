<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>


<div class="centro">
<center>

<?php
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
$suma= $valor1 + $valor2;
$resta = $valor1-$valor2;
$multiplicacion = $valor1*$valor2;
$divicion = $valor1/$valor2;
echo "<h3>LOS RESULTADOS SON;</h3>";
echo 'LA SUMA DE:  '.$valor1.'+'.$valor2.'=  '.$suma;
echo "</br>";
echo 'LA RESTA DE:  '.$valor1.'-'.$valor2.'=  '.$resta;
echo "</br>";
echo 'LA MULTIPLICACION DE:  '.$valor1.'*'.$valor2.'=  '.$multiplicacion;
echo "</br>";
echo 'LA DIVICION DE:  '.$valor1.'/'.$valor2.'=  '.$divicion;
echo "</br>";
?>
</center>
</div>