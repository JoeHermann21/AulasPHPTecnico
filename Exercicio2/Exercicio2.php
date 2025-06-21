	<?php 
	
		$nome = $_POST['nome'];
		$disciplina = $_POST['disciplina'];
		$nota1 = $_POST['nota1'];
		$nota2 = $_POST['nota2'];
		$nota3 = $_POST['nota3'];
		
		function nomeDisciplina($nome, $disciplina){
			return echo "Olá, $nome, sua média total em $disciplina é:";
		}
	
		function media($n1,$n2,$n3){
			$media = ($n1 + $n2 + $n3)/3;
			return $media;
		}
	
		echo nomeDiosciplina($nome, $disciplina).media($nota1,$nota2,$nota3);
 ?>