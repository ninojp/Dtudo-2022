<?php session_start();
ob_start();
include_once('conecta.php');?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Erro! E-mail já Cadastrado!</title>
	<!-- Favicon Imagem -->
	<link rel="icon" type="image/x-icon" sizes="128x128" href="imgs/favicon.ico">
	<!-- Meu CSS INDEX -->
	<link rel="stylesheet" type="text/css" href="css/avisos.css">
</head>
<body>
<?php
	include_once 'navbar/navbarra.php';
	include_once 'header.php';
?>
<main class="main_cont">
	<div class="div_row">
		<div class="div_col">
			<div class="div_topo">
				<div class="div_tit">
					<h2>Erro ao Cadastrar!</h2>
				</div>
			</div>
			<div class="div_body">
				<h3>Email já Cadastrado neste Site!</h3>
			</div>
			<div class="div_input_btn">			
				<input class="input_btn" type="submit" data-bs-target="#Modal_cadastrar" data-bs-toggle="modal" value="Tentar Novamente">
			</div>
			<div class="row_links">
				<div class="div_link">
					<a href="#" data-bs-target="#Modal_recuperarSenha" data-bs-toggle="modal">Recuperar sua senha?</a>
				</div>
				<div class="div_link">
					<a href="#" data-bs-target="#Modal_login" data-bs-toggle="modal" title="Link para Cadastrar umnovo Usuário">Lembrou sua conta! Faze login</a>
				</div>
			</div>
		</div>
	</div><!-- Fechamento da ROW CENTRAL  -->
</main>
<?php include_once('rodape.php');?>
</body>
</html>