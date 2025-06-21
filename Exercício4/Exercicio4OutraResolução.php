<?php

		$numero1 = $_POST['numero1'];
		$numero2 = $_POST['numero1'];
	
		function soma($numero1, $numero2){
			$soma = $numero1 + $numero2
			return $soma;
		}
		
		echo "A soma dos valoes $numero1 e $numero2 é igual a ".soma($numero1, $numero2);
?>