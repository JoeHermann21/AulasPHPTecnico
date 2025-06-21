<html>
	<head>
		<meta charset="utf-8">
		<title>POO</title>
	</head>
	<body>
		<?php
		
			require_once "Caneta.php";
			$c1 = new Caneta;
			$c1->cor = "Azul";
			$c1->ponta = 0.5;
			$c1->tampada = true;
			$c1->destampar();
			$c1->rabiscar();
			
			echo "<br>";
			print_r($c1);
		?>
	</body>
</html>