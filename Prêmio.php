<html>
    <head>
	    <title>Sorteio</title>
	</head>
	<body>
		<h1>Sorteio</h1>
	<?php
		
		$nome = array(
			array("[nome 1]","[nome 2]","[nome 3]"),
			array("[nome 4]","[nome 5]","[nome 6]"),
			array("[nome 7]","[nome 8]","[nome 9]"),
		);
		
		echo "O Vencedor do prêmio é: <br><br>".$nome[rand(0,2)][rand(0,2)];
		
	?>
	</body>
</html>