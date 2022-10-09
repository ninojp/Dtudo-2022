<?php session_start(); 
ob_start();
include_once('conecta.php');?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuário criado com Sucesso!</title>
	<!-- Favicon Imagem -->
	<link rel="icon" type="image/x-icon" sizes="128x128" href="imgs/favicon.ico">
	<!-- Meu CSS Geral para todas as paginas -->
	<link rel="stylesheet" type="text/css" href="css/avisos.css">
</head>
<body>
<?php include_once 'navbar/navbarra.php';
	include_once 'header.php';?>
<!-- MAIN -> DIV classe=main_cont -->
<main class="main_cont">
	<div class="div_row">
		<div class="div_col">
			<div class="div_topo">
				<div class="div_tit">
					<h2>Usuário criado com Sucesso!</h2>
				</div>
			</div>
			<div class="div_body">
				<h3>O usuário foi criado com Sucesso.</h3>
			</div>
			<div class="div_input_btn">			
				<input class="input_btn" type="submit" data-bs-target="#Modal_login" data-bs-toggle="modal" value="Fazer o Login">
			</div>
		</div>
	</div><!-- Fechamento da ROW CENTRAL  -->
</main>
<?php
include_once('rodape.php');
?>
</body>
</html>