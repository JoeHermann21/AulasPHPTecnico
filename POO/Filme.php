<?php

class Filme{

	var $nome;
	var $ano;
	var $diretor;
	var $genero;
	var $duracao;
	var $bom;
	
	function favoritar(){
		$this->bom = true;	
	}
	
	function hatear(){
		$this->bom = false;	
	}
	
	function assistir(){
		if ($this->bom == true){
			echo "Estou assistindo!";
		}else{
			echo "Não assisto, muito ruim";
		}
	}
}
?>