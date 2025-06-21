<?php
	$conexao = mysqli_connect('127.0.0.1', 'root', '');
	mysqli_select_db($conexao, 'usuario');
	$nome = $_POST['nome'];
	$data_nascimento = $_POST['data_nascimento'];
	$query = "insert into aluno (nome, data_nascimento) values ('$nome', '$data_nascimento'); ";
	$result = mysqli_query($conexao, $query);
	if($result == true){
		echo "Cadastrado com sucesso";
	} else {
		echo "Não cadastrou, tente novamente!";
	}
	
	$maisvelho = "SELECT * FROM aluno ORDER BY data_nascimento; ";
	$result2 = mysqli_query($conexao, $maisvelho);
	echo "<br><br> A ordem de idade dos alunos do 2º A, do mais VELHO para o mais NOVO é: <br>";
	while($row = mysqli_fetch_row($result2))
	{
		printf('<br>Nome: %s' , $row[0]);
	}
?>