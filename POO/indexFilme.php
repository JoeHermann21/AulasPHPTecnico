<html>
	<head>
		<meta charset="utf-8">
		<title>POO</title>
	</head>
	<body>
		<?php		
			require_once "Filme.php";
			$f1 = new Filme;
			$f1->nome = "Pulp Fiction";
			$f1->ano = 1994;
			$f1->diretor = "Quentin Tarantino";
			$f1->genero = "Drama";
			$f1->duracao = 154;
			$f1->favoritar();			
			
			echo "<br>";		
			echo ($f1->nome." é um filme de ".$f1->ano. " dirigido por ".$f1->diretor);
			echo (". Seu gênero é ".$f1->genero." e sua duração é de ".$f1->duracao." minutos");
			echo "<br>";
			$f1->assistir();
			echo "<br>";
			
			$f2 = new Filme;
			$f2->nome = "50 Tons de Cinza";
			$f2->ano = 2015;
			$f2->diretor = "Sam Taylor-Johnson";
			$f2->genero = "Romance";
			$f2->duracao = 125;
			$f2->hatear();			
			
			echo "<br>";		
			echo ($f2->nome." é um filme de ".$f2->ano. " dirigido por ".$f2->diretor);
			echo (". Seu gênero é ".$f2->genero." e sua duração é de ".$f2->duracao." minutos");
			echo "<br>";
			$f2->assistir();
			

		?>
	</body>
</html>