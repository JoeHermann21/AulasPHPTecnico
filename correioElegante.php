<?php
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	
	if($sexo == "Boy"){
		$lista = array(
				array("Te amo, lindo", "Te quero, meu querido"), 
				array("Você é meu melhor amigo", "Você é meu companheiro"),
				array("Meu príncipe encantado", "É nois, cachorro"),
				);

		echo "<h1>Oi, $nome <h1><br><h2>".$lista[rand(0,2)][rand(0,1)]."<h2>";		
	}
	
	if($sexo == "Mina"){
		$lista = array(
				array("Mais linda que gol de bicicleta", "Te quero, minha querida"), 
				array("Você é minha amiga", "Você é minha companheira"),
				array("Minha princesa", "Minha deusa"),
				);

		echo "<h1>Oi, $nome <h1><br><h2>".$lista[rand(0,2)][rand(0,1)]."<h2>";		
	}	
?>