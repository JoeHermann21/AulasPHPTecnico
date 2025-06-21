<?php

	$real = $_POST['real'];
	
	$dolar = $real * 0.21;
	$euro = $real * 0.2;
	$iene = $real * 0.038;
	
	echo "Você tem R$ $real";
	echo "<br>Em dólares o valor é igual a R$ $dolar";
	echo "<br>Em euros o valor é igual a R$ $euro";
	echo "<br>Em ienes o valor é igual a R$ $iene";
?>