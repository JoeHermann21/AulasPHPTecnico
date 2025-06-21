<html>
	<head>
		<meta charset="utf-8">
		<title>POO</title>
	</head>
	<body>
		<?php
		
			require_once "Aluno.php";
			$c1 = new Aluno;
			$c1->nome = "Peterson De Souza";
			$c1->ra = 374659658;
			$c1->sala = "2º A";
			$c1->estudar();
			
			echo "<br>";
			print_r($c1);
		?>
	</body>
</html>