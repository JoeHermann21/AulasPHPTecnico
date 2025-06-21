<html>
	<head>
		<meta charset="utf-8">
		<title>Tela de Login</title>
	</head>
		<body>
			<form method="post">
				<input type="text" name="login"><br>
				<input type="password" name="senha"><br>
				<input type="submit" value="Logar">
			</form>
			<?php
			
				$login = "eXcript";
				$senha = "123";
				
				if(isset($_POST["login"])){
					if($_POST["login"] == $login and $_POST["senha"] == $senha){
						$valor_criptografado = sha1("senha");
						echo "Login efetuado com sucesso!<br> Login: $login <br> Senha: $valor_criptografado";
					}else{
						echo "Login ou senha inválidos!";
					}
				}
			
			?>
		</body>	
</html>

