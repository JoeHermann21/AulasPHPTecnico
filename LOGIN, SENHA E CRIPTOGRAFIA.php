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
						echo "Login efetuado com sucesso!";
					}else{
						echo "Login ou senha inválidos!";
					}
				}
			
			?>
		</body>	
</html>

// Métodos de Criptografia PHP (md5, shal e base64)

// Nesse artigo veremos algumas formas de criptografar em PHP.
// É um ótimo recurso para armazenar senhas em banco de dados.
// Vejamos alguns tipos:

//MD5
//Retorna um hash de 32 caracteres hexadecimal.
//A vantagem de utiliza-la é que por conter um hash de 32 caracteres, fica muito dificil de alguem que tenha acesso descriptografar o mesmo. Não existe função pronta no php que realize a descripptografia.
//A forma de usar o md5 é a seguinte

<?php
    $valor_criptografado = md5("suasenha");
    echo $valor_criptografado; //fb8da69afd458b1b3b4dec5194c564d6
?>

SHA1
É mais segura que o MD5.
Um exemplo de utilização do sha1 é a seguinte:
<?php
    $valor_criptografado = sha1("suasenha");
    echo $valor_criptografado; //3d9128fb024eff2a0ea8be2cadcd96522f1af53e
?>

Base 64
Codifica dados em hash MIME base64.
A criptografia é fraca e de fácil descriptografia.

Criptografar com Base 64:
<?php
   $valor_criptografado = base64_encode("suasenha");
    echo $valor_criptografado; //c3Vhc2VuaGE=
?>

Descriptografar com Base 64:
<?php
   $valor_descriptografado = base64_decode($valor_criptografado);
    echo $valor_descriptografado; //suasenha
?>