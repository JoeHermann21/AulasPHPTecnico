<?php
			
	$loginCadastrado = "zeze@gmail.com";
	$senhaCadastrada = "Zeze1234!";
    
    $loginFornecido = "eXcript";
    $senhaFornecida = "123";

	if($loginFornecido == "" and $senhaFornecida == ""){
    	echo "Digite login ou senha válidos!!!";
    }elseif($loginFornecido == $loginCadastrado and $senhaFornecida == $senhaCadastrada){
		echo "Login efetuado com sucesso!";
	}else{
		echo "Login ou senha inválidos!";
	}	
			
?>
