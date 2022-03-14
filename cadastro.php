<?php require_once("funcao.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro </title>
		<meta charset="UTF-8"/> 
		<link rel="stylesheet" href="estilo3.css">
	</head>

	<body>
		<img src="cadastre-se.jpg" alt="Cadastre-se" id="cadastre-se"/></br>

		<form id="primcadastro" action="cadastro.php" method="post" name="cadastro">
			<!--Colocar como Obrigatório o preenchimento-->
			<label for="nome"> Nome Completo:</label>
			<input name="nome" type="text" size="22"  placeholder="Insira seu Nome"/></br>

			<label for="CPF"> CPF:</label>
			<input name="CPF" type="number" placeholder="Insira seu CPF" /></br>

			<label for="nascimento"> Data de Nascimento:</label> 
			<input name="nascimento" type="date" /></br>

			<label for="email"> E-mail:</label>
			<input name="email" type="email" placeholder="Insira seu e-mail" size="32"/></br>

			<label for="senha"> Senha: </label>
			<input name="senha" type="password" placeholder="Crie uma senha" size="33"/></br>

			<p> Concordo com os Termos do Contrato 	<input type="radio" value= "Concordo com os Termos do Contrato." /></br>
			<input type="submit" name="enviar" value="Confirmar Cadastro"/>
		</form>
		</br>
	</body>
</html>