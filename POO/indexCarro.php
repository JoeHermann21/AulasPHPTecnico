<html>
	<head>
		<meta charset="utf-8">
		<title>POO</title>
	</head>
	<body>
		<?php		
			require_once "Carro.php";
			$s1 = new Carro;
			$s1->marca = "Chevrolet";
			$s1->cor = "Preto";
			$s1->modelo = "Corsa";
			$s1->ano = 1994;
			$s1->ligado = false;
			$s1->andar();
			
			echo "<br>";		
			print_r($s1);
			echo "<br><br>";
			
			$s2 = new Carro;
			$s2->marca = "Fiat";
			$s2->cor = "Azul";
			$s2->modelo = "Uno";
			$s2->ano = 2000;
			$s2->ligado = false;
			$s2->ligar();
			$s2->andar();
		
			echo "<br>";
			print_r($s2);
		?>
	</body>
</html>