<?php require_once("funcao.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title> Fale Conosco </title>
		<link rel="stylesheet" href="estilo3.css">
		
	</head>

	<body>
		<h1>Aproveite esta oportunidade !</br>
		A leitura é para todos ! </h1>

		<div id="dadoslocais">
			<p> Endereço:  Rua dos Bobos, número 0 </p>
			<p> Telefone:   (xx) 0000-0000 </p>
			<p> What's app: (xx) 0 0000-0000 </p>
			<p> Siga e Compartilhe  nossas novidades: </p>
			<img src="redes.jpeg" alt="redes sociais"/></br>
		</div>
		 <!-- Formulário para a sociedade fazer contato em caso de dúvidas ou solicitações-->
 		<div id="mensagem">
 			<p>Escreva sua dúvida, solicitação ou mensagem. </br> Nos comprometemos a responder sua mensagem em até 5 dias úteis.</p>
	 		
	 		<form action="contato.php" method="post" name="contato">
	 			<h3> Fale Conosco</h3>
	 			<label for="nome">Nome Completo: </label>
	 			<input id="nome" type="text" placeholder="Insira seu Nome" size="25"></br> 
	 			
	 			<label for="email">E-mail:</label>
	 			<input id="email" type="email" placeholder="E-mail" size="34"></br>
	 			
	 			<label for="assunto"> Assunto: </label>
	 			<input id="assunto" type="text" placeholder="Assunto" size="33"> </br>

	 			<label for="duvida"> Insira sua dúvida ou solicitação: </label></br>
	 			<textarea id="duvida"></textarea></br>
	 			
	 			<input type="submit" value="Enviar"></td>
	 		</form>
 		</div>

 		<footer>
 			<a href="index.php">Volte ao menu inicial</a>
 		</footer>
	</body>
</html>	