<?php 
		$nome = $_POST['nome'];
		$nota1 = $_POST['nota1'];
		$nota2 = $_POST['nota2'];
		
		$media = ($nota1 + $nota2)/2;
		
	echo "Olá, $nome, sua média é: $media <br />";
	
	if($media<3){
		echo "Reprovado! Te vejo ano que vem =)";
	}elseif($media<5){
		echo "Recuperação! Estude mais";
	}else{
		echo "Aprovado! Parabéns";
	}
 ?>
