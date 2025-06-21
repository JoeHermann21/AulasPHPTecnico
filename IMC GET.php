<html>
    <head>
	    <title>Cálculo do IMC</title>
	</head>
	<body bgcolor="blue">
		<h1>Cálculo do IMC</h1>
		<form action="" method="get">
			Digite sua Altura:  <input type="text" name="altura" /><br />
			Digite seu Peso:  <input type="text" name="peso" /><br />
		<input type="submit" name="submit" value="Calcular" />
		</form> 
	<?php
		$peso = $_GET['peso'];
		$altura = $_GET['altura'];
		
		$imc = $peso/($altura * $altura);
		echo "Seu peso é $peso e sua altura é $altura ";
		echo "<br>Seu IMC é: $imc</br>";
		
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