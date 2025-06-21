<html>
    <head>
	    <title>Recuperação</title>
	</head>
	<body>
		<h1>Alunos de recuperação</h1>
	<?php
		
		$nomes = array("Igor" => "Inglês",
				"Maria" => "Português",
				"João" => "Espanhol");
		asort($nomes) ;
		foreach($nomes as $nome => $materia)
		{
			echo "O aluno $nome está de recuperação em $materia</br>" ;
		}
	?>
	</body>
</html>