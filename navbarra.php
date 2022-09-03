<?php include('conecta.php');?>
<!-- BOOTSTRAP CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- AWESOME-FONTs com a CDNjs -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<!-- GOOGLE FONTs (Cinzel+Decorative, Cutive+Mono, Kalam, Ubuntu)-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cutive+Mono&family=Kalam:wght@300;400&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/NavBarra.css">
<nav id="nav_barra">
    <div id="div_container">
        <div id="div_logo_uls">
            <a href="https://localhost/dtudo/index.php" target="_new" title="Index ATUAL">
                <img id="img_logo_peq" src="imgs/Logo-Dtudo_30px.png" alt="Logo Dtudo" title="Logo Dtudo Pequeno"></a>
            <!----- Bloco PHP + HTML para o fazer a o LOGIN.PHP ------------>
            <?php  if (empty($_SESSION['id'])) { ?>
            <div id="div_dropd" class="dropdown">
                <div id="div_login">
                    <a class="dropdown-toggle nav-link" role="button" data-bs-toggle="dropdown" alt="Link para Login" title="Link para Login">
                    <i class="fa-duotone fa-users"></i> Login</a>
                </div>
                <ul class="dropdown-menu dropdown-menu-dark fundo_black_80 fonte_small" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item nav-link" href="" data-bs-toggle="modal" data-bs-target="#Modal_login"><i class="fa-solid fa-user"></i> Login</a></li>
                    <li><a class="dropdown-item nav-link" href="" data-bs-toggle="modal" data-bs-target="#Modal_cadastrar">Cadastrar</a></li>
                    <li><a class="dropdown-item nav-link" href="" data-bs-toggle="modal" data-bs-target="#Modal_recuperarSenha">Recuperar Senha</a></li>
                </ul>
            </div>
            <!-- SE USUARIO ESTIVER LOGADO como usuário comum --------->
            <?php } else {
            if($_SESSION['adm']==0) {
            $consulta_user=$conecta->query("SELECT nome FROM usuario WHERE id_usuario='$_SESSION[id]'");
            $exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC); ?>
            <div class="nav-item dropdown float-start fonte_small ms-2">
                <a class="dropdown-toggle nav-link" role="button" data-bs-toggle="dropdown"><?php echo $exibe_user['nome'];?></a>
                <ul class="dropdown-menu dropdown-menu-dark fundo_black_80 fonte_small">
                    <li><a class="dropdown-item nav-link" href="sair.php"><img class="" src="imgs/logout.png">Logout</a></li>
                </ul>
            </div>
            <!-- SE ESTIVER LOGADO COMO ADMINISTRADOR-->
            <?php } else { ?>
            <div class="dropdown fonte_small ms-2">
                <a class="dropdown-toggle nav-link" role="button" data-bs-toggle="dropdown">NinoJP</a>
                <ul class="dropdown-menu dropdown-menu-dark fundo_black_80 fonte_small" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item nav-link" href="anime_inserir_form.php" target="_blank">Inserir</a></li>
                    <li><a class="dropdown-item nav-link" href="anime_listar.php" target="_blank">Alterar</a></li>
                    <li><a class="dropdown-item nav-link" href="sair.php"><img class="" src="imgs/logout.png">Logout</a></li>
                </ul>
            </div>
            <?php } } ?>
        </div>
        <!-- UL=ul_menu com os links de MENU, para acessar as paginas secundarias  -->
        <ul id="ul_menu">
            <a class="link_btn" href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin"><li>$Ganhar$</li></a>
            <a class="link_btn" href="https://localhost/dtudo/t_i.php" target="_new" title="Informção sobre T.I"><li>T.I</li></a>
            <a class="link_btn" href="https://localhost/dtudo/animacao/animacao.php" target="_new" title="Pagina sobre Animes em Geral"><li>Animes</li></a>
            <a class="link_btn" href="https://localhost/dtudo/sobre.php" target="_new" title="Pagina sobre O Site e o Autor"><li>Sobre</li></a>
        </ul>
        <div id="div_btn">
            <i id="icon_menu" class="fa-solid fa-bars icon_menu"></i>
        </div>
    </div>
</nav>
<!-- Inicio do bloco da janela MODAL para fazer LOGIN -->
<div class="modal fade" id="Modal_login" tabindex="-1" aria-labelledby="Modal_loginLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="row topo_modal">
                <h2>Fazer o Login</h2>
				<div class="col-1 div_bt_fechar">
                    <button class="bt_fechar" type="button" data-bs-dismiss="modal" aria-label="Close">X</button>
				</div>
			</div>
			<div class="modal-body mt-3">
				<div class="container mt-4">
					<div class="row justify-content-center">
						<div class="col-lg-12 col-xl-12 col-xxl-12 fundo_black_40"><br>
							<form class="" method="post" action="validaUsuario.php" name="logon">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> Email: </span>
                                    <input name="email" type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required id="email">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> Senha: </span>
                                    <input name="senha" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required id="senha">
                                </div>			
								<button type="submit" class="meu_btn">Entrar</button>
							</form>
							<legend class="legend2">Ainda não sou cadastrado!</legend>
								<div class="form-group">
									<button type="submit" class="meu_btn" data-bs-target="#Modal_cadastrar" data-bs-toggle="modal">Cadastrar Novo Usuário</button>
								</div><br>
								<legend class="legend2">Recuperar Senha!</legend>
								<div class="form-group">
									<button type="submit" class="meu_btn" data-bs-target="#Modal_recuperarSenha" data-bs-toggle="modal">Esqueci minha senha!</button>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal para CADASTRAR NOVO usuário -->
<div class="modal fade fundo_black_40" id="Modal_cadastrar" aria-hidden="true" aria-labelledby="Modal_cadastrarLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content fundo_black_80">
    <div class="row position-relative">
        <div class="col-1 position-absolute top-0 end-0">
            <button type="button" class="meu_btn" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
    </div>
    <div class="modal-body"><br>
        <fieldset>
        <legend>Cadastrar um Novo Usuário</legend>
            <form method="post" action="inserirUsuario.php" name="logon">
                <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" required id="nome">
                </div>
                <div class="form-group">
                        <label for="apelido">Apelido</label>
                        <input name="apelido" type="text" class="form-control" required id="apelido">
                </div>
                <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" class="form-control" required id="email">
                </div>
                <div class="form-group">
                        <label for="senha">Senha</label>
                        <input name="senha" type="password" class="form-control" required id="senha">
                </div>
                <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <textarea name="endereco" rows="2" class="form-control" id="endereco"></textarea>
                </div>
                <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input name="telefone" type="text" class="form-control" id="telefone">
                </div>
                <button type="submit" class="meu_btn mt-4">Cadastrar</button>
            </form>
        </fieldset>
    </div>
    <div class="modal-footer">
        <button type="submit" class="meu_btn" data-bs-target="#Modal_recuperarSenha" data-bs-toggle="modal">
                    Recuperar Senha</button><br>
        <button class="meu_btn" data-bs-target="#Modal_login" data-bs-toggle="modal">Login</button>
    </div>
    </div>
</div>
</div>
<!-- Modal para RECUPERAR A SENHA -->
<div class="modal fade fundo_black_40" id="Modal_recuperarSenha" aria-hidden="true" aria-labelledby="Modal_recuperarSenhaLabel2" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content fundo_black_80">
    <div class="row position-relative">
        <div class="col-1 position-absolute top-0 end-0">
            <button type="button" class="meu_btn" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
    </div><br>
    <div class="modal-body">
    <fieldset>
        <legend>Para Recuperar sua senha:</legend>
            <div class="form-group">
                <div class="form-group">
                    <p>Basta digite o e-mail cadastrado no campo abaixo</p>
                </div>
                <div class="form-group">
                <form method="post" action="enviarEmail.php" name="logon">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" required id="email">
                    </div>
                    <div class="form-group">
                    <p>Sua senha será enviada para o seu e-mail</p>
                    <button type="submit" class="meu_btn">Enviar</button>
                    </div>
                </form>
                </div>
            </div>
    </fieldset>
    </div>
    <div class="modal-footer">
        <button type="submit" class="meu_btn" data-bs-target="#Modal_cadastrar" data-bs-toggle="modal">
                    Novo cadastro</button><br>
        <button class="meu_btn" data-bs-target="#Modal_login" data-bs-toggle="modal">Login</button>
    </div>
    </div>
</div>
</div>
<!-- Bliblioteca JavaScript do BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<!-- meu JS para controle do menu amburguer, responsivo -->
<script src="js/nav_barra.js"></script>