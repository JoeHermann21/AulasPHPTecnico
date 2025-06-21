<?php 
		$nome = $_POST['nome'];
		$nota1 = $_POST['nota1'];
		$nota2 = $_POST['nota2'];
		
		function media($nota1,$nota2){
			return ($nota1 + $nota2)/2;
		}
		
	echo "Olá, $nome, sua média é: ".media($nota1,$nota2)."<br />";
	
	if(media($nota1,$nota2)<3){
		echo "Reprovado! Te vejo ano que vem =)";
	}elseif(media($nota1,$nota2)<5){
		echo "Recuperação! Estude mais";
	}else{
		echo "Aprovado! Parabéns";
	}
 ?>
