<?php session_start(); 
ob_start();
include_once('conecta.php');?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Erro no Login!</title>
	<!-- Favicon Imagem -->
	<link rel="icon" type="image/x-icon" sizes="128x128" href="imgs/favicon.ico">
	<!-- Meu CSS Geral para todas as paginas -->
	<link rel="stylesheet" type="text/css" href="css/erro_login.css">
</head>
<body>
<?php include_once 'navbarra.php';
	include_once 'header.php';?>
<!-- MAIN -> DIV classe CONTAINER-FLUID -->
<main class="main_cont_erro">
	<div class="div_row_erro">
		<div class="div_col_erro col-6">
			<div class="topo_modal">
				<div class="div_tit_modal">Erro no Login</div>
			</div>
			<div class="div_body_modal">
				<h3>E-mail do usuário ou senha incorreto!!</h3>
			</div>
			<div class="div_input_form">			
				<input class="btn_submit_modal" type="submit" data-bs-target="#Modal_login" data-bs-toggle="modal" value="Tentar Novamente">
			</div>
			<div class="row_recup_senha row">
				<div class="recup_senha">
					<a href="" data-bs-target="#Modal_recuperarSenha" data-bs-toggle="modal">Recuperar sua senha?</a>
				</div>
				<div class="cadast_usuario">
					<a href="#" data-bs-target="#Modal_cadastrar" data-bs-toggle="modal" title="Link para Cadastrar umnovo Usuário">Cadastrar novo usuário?</a>
				</div>
			</div>
		</div>
	</div><!-- Fechamento da ROW CENTRAL  -->
</main>
<?php
include_once('rodape.php');
?>
</body>
</html>