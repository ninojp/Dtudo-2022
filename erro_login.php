<?php
session_start(); //deve ser a primeira linha de codigo da pagina(DICA), antes mesmo dos comentários kkkk
//Limpar o buffer de saida
ob_start();
// conecta com o banco de dados
include_once('conecta.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="animação, anime, animação 3d, filmes anime, ecchi, desenhos animados">
	<title>Erro no Login!</title>
	<!-- BOOTSTRAP CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- Favicon Imagem -->
	<link rel="icon" type="image/x-icon" sizes="128x128" href="imgs/favicon.ico">
	<!-- Meu CSS Geral para todas as paginas -->
	<link rel="stylesheet" type="text/css" href="css/erro_login.css">
</head>

<body>
	<?php
	include_once 'navbarra.php';
	include_once 'header.php';
	?>
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
						<a href="#" data-bs-target="#Modal_cadastrar" data-bs-toggle="modal" title="Link para Cadastrar umnovo Usuário">Cadastrado novo usuário?</a>
					</div>
				</div>
			</div>
		</div><!-- Fechamento da ROW CENTRAL  -->
	</main>
	<?php
	include_once('rodape.php');
	?>
<!-- Bliblioteca JavaScript do BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>