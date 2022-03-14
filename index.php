<?php require_once("funcao.php");?>

<!DOCTYPE html>
<html>

	<head>
		<title> A Leitura é para todos </title>

		<meta charset="UTF-8"/> 
		<meta name="description" content="Site facilitador da Leitura, proporionando empréstimo de livros."/>
		<meta name="author" content="Michele Gabardo Machado"/>
		<link rel="stylesheet" href="estilo.css"/>
	
	</head>

	<body>
		 	
		<div id="principal">
			<form action="perfilcadastro.php" method="post" name="login">
				<p>Login <input type="text">  
				<p>Senha <input type="password">
				<input type="submit" value="Entrar" name="enviar"></p></br>
	
		</form>
		</div >

		<h1>Quer ter acesso à vários <strong>livros</strong> ? </h1> 

		<img src="Livro.jpg" alt="livro"/></br>
		
		<a href="cadastro.php">CADASTRE-SE AQUI</a>	
		<h2> ESCOLHA O LIVRO E TE EMPRESTAMOS !!! </h2>
		
		
		<!--Lista para trazer Perguntas Frequentes-->
		<div id="perguntas">
			<dl> 
	 			<dt> 1. Quem pode pegar Livro emprestado? </dt>
	 				<dd> Pessoas acima de 18 anos podem pegar Livro emprestado.</dd>
	 			<dt> 2. Como é feita a busca e devolução do livro? </dt>
	 				<dd> O adulto reponsável pela solicitação de empréstimo deve comparecer presencialmente na loja para pegar e devolver o livro.</dd>
	 			<dt> 3. Por quanto tempo posso ficar com o livro? </dt>
	 				<dd> O período máximo para estadia com o livro é de 14 dias.</dd>
	 			<dt> 4. Qual o nosso diferencial? </dt>
	 				<dd> Compreendemos que a leitura é para todos !! Disponibilizamos uma diversidade de gêneros de livros, todos novos e bem cuidados. Ainda, mensalmente fazemos um encontro em nossa loja com convidados especiais para uma leitura guiada junto aos nossos clientes. </dd>
	 		</dl>
	 	
	 	</div>

	 	<footer>
	 		<h3> Ainda com dúvidas?
	 			<a href="contato.php"><strong>FALE CONOSCO</strong></a>
			</h3>
		</footer>
	</body>
</html>