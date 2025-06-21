<html>
    <head>
	    <title>Cálculo do IMC</title>
	</head>
	<body>
		<h1>Cálculo do IMC</h1>
	<?php
		$peso = 80;
		$altura = 1.90;
		
		$imc = $peso/($altura * $altura);
		
		echo "Seu peso é $peso e sua altura é $altura ";
		echo "<br>Seu IMC é: </br>";
		
		if ($imc < 18.5) {
			echo "Abaixo de peso";
		} elseif ($imc < 24.9) {
			echo "Normal";
		} elseif ($imc < 29.9) {
			echo "Sobrepeso";
		} elseif ($imc < 39.9) {
			echo "Obesidade";
		} else { 
			echo "Obesidade grave";			
		}
	?>
	</body>
</html>