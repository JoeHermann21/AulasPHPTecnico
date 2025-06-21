<?php
	$paises = $_POST['paises'];
	if($paises == "Os 5 maiores países do mundo"){
		$lista = array(	"Russia" => "Moscou",
						"Canada" => "Ottawa",
						"Estados Unidos" => "Washington D.C.",
						"China" => "Pequin",
						"Brasil" => "Brasília");
		$i = 0;
		foreach($lista as $pais => $capital){
			$i++;
			echo "</br>O $i º maior país do mundo é $pais e sua capital é $capital ";
		}
	}
	
	if($paises == "Os países do Mercosul"){
		$lista = array(	"Brasil" => "Brasil",
						"Paraguai" => "Assunção",
						"Uruguai" => "Montevideo",
						"Argentia" => "Buenos Aires");

		foreach($lista as $pais => $capital){
			echo "</br>$pais é parte do Mercosul e sua capital é $capital ";
		}
	}
	
	if($paises == "Países Árabes"){
		$lista = array(	"Marrocos" => "Rabat",
						"Argélia" => "Algeris",
						"Líbia" => "Tripoli",
						"Egito" => "Cairo");
						
		echo "Os países árabes do norte da África são: ";
		
		foreach($lista as $pais => $capital){
			echo "</br>$pais, cuja capital é $capital";
		}
	}
	
?>