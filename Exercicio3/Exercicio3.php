<?php

		$nome = $_POST['nome'];
		$sexo = $_POST['sexo'];
		$idade = $_POST['idade'];
	
	function tratamento($nome,$sexo){
			if($sexo == 'Masculino'){
				return "Olá Senhor $nome, tudo bom? ";
			}elseif ($sexo == 'Feminino'){
				return "Olá Dona $nome, tudo bom? ";
			}else{
				return "Olá $nome, tudo bom? ";
			}
		}
	
		function exercito($sexo,$idade){
			if($sexo == 'Masculino' && $idade == 18){
				return "</br>Você DEVE se alistar no exército ";
			}else{
				return "</br>Não se preocupe com o exército =) ";
			}
		}
		
		function maioridade($idade){
			if($idade < 18){
				return "</br>Você ainda é menor de idade ";
			}elseif ($idade < 21){
				return "</br>Você é maior de idade na maior parte dos países do mundo ";
			}else{
				return "</br>Você é maior de idade em TODOS os países do mundo ";
			}
		}
		
		echo tratamento($nome,$sexo).exercito($sexo,$idade).maioridade($idade);
?>