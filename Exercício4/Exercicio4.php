<?php

		$numero1 = $_POST['numero1'];
		$numero2 = $_POST['numero1'];
	
		function soma($numero1, $numero2){
			return $numero1 + $numero2;
		}
		
		echo "A soma dos valoes $numero1 e $numero2 é igual a ".soma($numero1, $numero2);
?>