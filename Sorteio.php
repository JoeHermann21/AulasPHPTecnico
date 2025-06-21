<html>
    <head>
	    <title>Sorteio</title>
	</head>
	<body>
	<form action="" method="get">
		Escolha um número de 1 a 10:  <input type="text" name="numero" /><br />
	<input type="submit" name="submit" value="Sortear" />
	</form> 
		<h1>Sorteio</h1>
	<?php
		$numero = $_GET['numero'];
		$gera = rand(0,10);

		if($gera == $numero) {
			echo "<br>Você venceu com o número: ".$numero;
		} else {
			echo "<br>Você perdeu, tente novamente.";
        }
	?>
	</body>
</html>