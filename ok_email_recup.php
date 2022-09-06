<?php session_start();
      include('conecta.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Mail enviado com sucesso!</title>
    <link rel="stylesheet" type="text/css" href="css/avisos.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body>
<?php include('navbarra.php');
      include('header.php');?> 
<main class="main_cont">
	<div class="div_row">
		<div class="div_col">
			<div class="div_topo">
				<div class="div_tit">
					<h2>E-Mail de Rucuperação enviado</h2>
				</div>
			</div>
			<div class="div_body">
				<h3>O E-Mail com sua senha foi enviado com sucesso!!!</h3>
			</div>
			<div class="div_input_btn">			
				<input class="input_btn" type="submit" data-bs-target="#Modal_login" data-bs-toggle="modal" value="Fazer o Login">
			</div>
			<div class="row_links">
				<div class="div_link">
					<a href="#" data-bs-target="#Modal_recuperarSenha" data-bs-toggle="modal" title="Recuperar sua Senha">Recuperar outra senha?</a>
				</div>
				<div class="div_link">
					<a href="#" data-bs-target="#Modal_cadastrar" data-bs-toggle="modal" title="Link para Cadastrar um novo Usuário">Cadastrar novo usuário?</a>
				</div>
			</div>
		</div>
	</div><!-- Fechamento da ROW CENTRAL  -->
</main>
<?php include 'rodape.php' ?>
</body>
</html>