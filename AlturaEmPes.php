<html>
	<head>
		<title>Função</title>
	</head>
	<body>
	<form action="" method="post">
		Digite sua altura em metros :  <input type="text" name="altura" /><br />
	<input type="submit" name="submit" value="Testar" />
	</form> 
	<?php 
		$altura = $_POST['altura'];
		
		function converteAltura($altura){
			$alturaEmPes = $altura * 3.2808;
			return $alturaEmPes;
		}

	echo "Sua altua em metros é $altura";
	echo "<br>Sua altua em pés, a medida dos EUA é ".converteAltura($altura);

 ?>
 </body>
</html>