<html>
	<head>
		<meta charset="utf-8">
		<title>POO</title>
	</head>
	<body>
		<?php		
			require_once "Sentimento.php";
			$s1 = new Sentimento;
			$s1->intensidade = "Muita";
			$s1->duracao = 1;
			$s1->tipo = "Tristeza";			
		
			echo ("Estou com ".$s1->intensidade." ".$s1->tipo);
			echo (" Já faz ".$s1->duracao." hora");
			echo "<br>";
			echo $s1->sofrer($s1->tipo);
			
			echo "<br><br>";			
			$s2 = new Sentimento;
			$s2->intensidade = "Um pouco de";
			$s2->duracao = 12;
			$s2->tipo = "Alegria";			
		
			echo ("Estou com ".$s2->intensidade." ".$s2->tipo);
			echo (" Já faz ".$s2->duracao." horas");
			echo "<br>";
			echo $s2->sofrer($s2->tipo);
		?>
	</body>
</html>