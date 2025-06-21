<?php

class Sentimento{

	var $intensidade;
	var $duracao;
	var $tipo;
	
	function sofrer($tipo){
		if ($tipo == "Tristeza"){
			return "Tô sofrendo!=(";
		}else{
			return "Estou de boa =)";
		}
	}
}
?>