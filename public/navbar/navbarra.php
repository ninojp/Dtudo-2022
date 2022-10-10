<!--------------- BOOTSTRAP CSS - Local agora --------------------------------------------------->
<link href="https://localhost/dtudo/public/css/bootstrap.min.css" rel="stylesheet">
<!--------------- AWESOME-FONTs com a CDNjs ----------------------------------------------------->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<!-------------- GOOGLE FONTs (Cinzel+Decorative, Cutive+Mono, Kalam, Ubuntu)-------------------->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cutive+Mono&family=Kalam:wght@300;400&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
<!-------------- Meu CSS local NAVBARRA.CSS ------------------------------------------------------>
<link rel="stylesheet" type="text/css" href="https://localhost/dtudo/public/navbar/css/navbarra.css">
<!--============================================================================================-->
<nav id="nav_barra">
    <div id="div_container">
        <div id="div_logo_uls">
            <div id="div_img_login">
                <a href="https://localhost/dtudo/public/index.php" target="_new" title="Index ATUAL"><img id="img_logo_peq" src="https://localhost/dtudo/public/imgs/Logo-Dtudo_30px.png" alt="Logo Dtudo" title="Logo Dtudo Pequeno"></a>
            </div>
<!--------------- Bloco PHP + HTML para o fazer a o LOGIN.PHP ------------------------------------->
            <?php if (empty($_SESSION['id'])) { ?>
            <div class="dropdown div_drop_login">
                <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" alt="Link para Login" title="Link para Login"><i class="fa-solid fa-users"></i> Login</a>
                <ul class="dropdown-menu ul_drop_login">
                    <li class="li_drop_login"><a class="dropdown-item nav-link" href="" data-bs-toggle="modal" data-bs-target="#Modal_login"><i class="fa-solid fa-user"></i> Login</a></li>
                    <li class="li_drop_login"><a class="dropdown-item nav-link" href="" data-bs-toggle="modal" data-bs-target="#Modal_cadastrar"><i class="fa-solid fa-user-plus"></i> Cadastrar</a></li>
                    <li class="li_drop_login"><a class="dropdown-item nav-link" href="" data-bs-toggle="modal" data-bs-target="#Modal_recuperarSenha"><i class="fa-solid fa-user-lock"></i> Recuperar Senha</a></li>
                </ul>
            </div>
<!--------------------SE USUARIO ESTIVER LOGADO como usuário comum ----------------------------->
            <?php } else {
            if($_SESSION['adm']==0) {
            $consulta_user=$conecta->query("SELECT nome, apelido FROM usuario WHERE id_usuario='$_SESSION[id]'");
            $exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC); ?>
            <div class="dropdown div_drop_login">
                <a class="dropdown-toggle nav-link" role="button" data-bs-toggle="dropdown"><?php echo $exibe_user['apelido'];?></a>
                <ul class="dropdown-menu ul_drop_login">
                    <li class="li_drop_login"><a class="dropdown-item nav-link" href="sair.php"><i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i> Logout</a></li>
                </ul>
            </div>
<!-------------------------- SE ESTIVER LOGADO COMO ADMINISTRADOR --------------------------->
            <?php } else { ?>
            <div class="div_drop_login dropdown">
                <a class="dropdown-toggle nav-link" role="button" data-bs-toggle="dropdown">Nino JP</a>
                <ul class="dropdown-menu ul_drop_login">
                    <li class="li_drop_login"><a class="dropdown-item nav-link" href="https://localhost/dtudo/public/animacao/anime_inserir_form.php" target="_blank"><i class="fa-solid fa-photo-film"></i> Inserir Anime</a></li>
                    <li class="li_drop_login"><a class="dropdown-item nav-link" href="https://localhost/dtudo/public/animacao/anime_listar.php" target="_blank"><i class="fa-solid fa-file-signature"></i> Alterar Anime</a></li>
                    <li class="li_drop_login"><a class="dropdown-item nav-link" href="adm.php" target="_blank"><i class="fa-solid fa-gear"></i> Area Administrativa</a></li>
                    <li class="li_drop_login"><a class="dropdown-item nav-link" href="sair.php"><i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i> Logout</a></li>
                </ul>
            </div>
            <?php } } ?>
        </div>
<!--========== UL = ul_menu com os links de MENU, para acessar as paginas secundarias ===========-->
        <ul class="ul_menu_nav">
            <li class="li_menu_nav">
                <div class="dropdown ">
                <a class="link_btn dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">T. I.</a>
                    <ul class="dropdown-menu ul_drop_menu">    
                        <li><a class="dropdown-item a_drop_menu"  href="https://localhost/dtudo/public/ti/t_i.php" target="_self" title="Pagina sobre Tecnologia da Informação">T.I.</a></li>
                        <li><a class="dropdown-item a_drop_menu" href="https://localhost/dtudo/public/ti/php/php.php" target="_self" title="Pagina com Informações sobre PHP">PHP</a></li>
                        <li><a class="dropdown-item a_drop_menu" href="">Hardware</a></li>
                    </ul>
                </div>
            </li>
            <li class="li_menu_nav"><a class="link_btn" href="https://localhost/dtudo/public/ganhar/bitcoin.php" target="_new" title="Como ganhar dinheiro com T.I.">Ganhar<span id="destaq">$</span></a></li>
            <li class="li_menu_nav"><a class="link_btn" href="https://localhost/dtudo/public/animacao/animacao.php" target="_new" title="Pagina sobre Animes em Geral">Animes</a></li>
            <li class="li_menu_nav"><a class="link_btn" href="https://localhost/dtudo/public/sobre.php" target="_new" title="Pagina sobre O Site e o Autor">Sobre</a></li>
        </ul>
        <div id="div_btn">
            <i id="icon_menu" class="fa-solid fa-bars icon_menu"></i>
        </div>
    </div>
</nav>
<!--====== Inicio do bloco da janela MODAL para fazer LOGIN ==================================== -->
<div class="modal fade" id="Modal_login" tabindex="-1" aria-labelledby="Modal_loginLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="topo_modal">
                <div class="div_tit_modal"><h2>Fazer o Login</h2></div>
				<button class="bt_fechar" type="button" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="div_body_modal modal-body container">
                <div class="body_row_modal row justify-content-center">
                    <div class="col-lg-12 col-xl-12 col-xxl-12">
                        <form class="form_modal" method="post" action="validaUsuario.php" name="logon">
                            <div class="div_input_form">
                                <i class="icon_input fa-solid fa-envelope-circle-check"></i>
                                <input class="input_form_modal" name="email" type="email" aria-label="Sizing example input" placeholder="Digite seu @e-mail" aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                            <div class="div_input_form">
                                <i class="icon_input fa-solid fa-key"></i>
                                <input class="input_form_modal" name="senha" type="current-password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required placeholder="Digite sua Senha!">
                            </div>
                            <div class="div_input_form">			
                                <input class="btn_submit_modal" type="submit" value="Fazer o Login">
                            </div>
                        </form>
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
			</div>
		</div>
	</div>
</div>
<!--======= Modal para CADASTRAR NOVO usuário ===================================================-->
<div class="modal fade" id="Modal_cadastrar" aria-hidden="true" aria-labelledby="Modal_cadastrarLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="topo_modal">
                <div class="div_tit_modal"><h2>Cadastrar Novo Usuário</h2></div>
                <button class="bt_fechar" type="button" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="div_body_modal modal-body container">
                <div class="body_row_modal row justify-content-center">
                    <div class="col-lg-12 col-xl-12 col-xxl-12">
                        <form method="post" action="inserirUsuario.php" name="logon">
                            <div class="div_input_form">
                            <i class="icon_input fa-solid fa-envelope"></i>
                                <input name="email" type="email" class="input_form_modal" required placeholder="Digite seu @E-mail">
                            </div>
                            <div class="div_input_form">
                            <i class="icon_input fa-solid fa-key"></i>
                                <input name="senha" type="current-password" class="input_form_modal" required placeholder="Criar uma senha">
                            </div>
                            <div class="div_input_form">
                                <i class="icon_input fa-solid fa-file-signature"></i>
                                <input name="nome" type="text" class="input_form_modal" required id="nome" placeholder="Digite seu Nome">
                            </div>
                            <div class="div_input_form">
                                <i class="icon_input fa-solid fa-file-signature"></i>
                                <input name="apelido" type="text" class="input_form_modal" required id="apelido" placeholder="Digite como deseja ser chamado">
                            </div>
                            <div class="div_input_form">
                                <i class="icon_input fa-solid fa-location-dot"></i>
                                <input name="endereco" type="text" class="input_form_modal" id="endereco" placeholder="Digite seu endereço (opcional)">
                            </div>
                            <div class="div_input_form">
                                <i class="icon_input fa-solid fa-mobile-screen"></i>
                                <input name="telefone" type="text" class="input_form_modal" id="telefone" placeholder="Digite seu telefone (opcional)">
                            </div>
                            <div class="div_input_form">			
                                <input class="btn_submit_modal" type="submit" value="Cadastrar Usuário">
                            </div>
                        </form>
                    </div>
                    <div class="row_recup_senha row">
                        <div class="recup_senha">
                            <a href="" data-bs-target="#Modal_recuperarSenha" data-bs-toggle="modal">Recuperar sua senha?</a>
                        </div>
                        <div class="cadast_usuario">
                            <a href="#" data-bs-target="#Modal_login" data-bs-toggle="modal" title="Link para Cadastrar umnovo Usuário">Lembrou seus dados? Fazer Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============== Modal para RECUPERAR A SENHA =================================================-->
<div class="modal fade" id="Modal_recuperarSenha" aria-hidden="true" aria-labelledby="Modal_recuperarSenhaLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="topo_modal">
                <div class="div_tit_modal"><h2>Recuperar sua senha</h2></div>
			    <button class="bt_fechar" type="button" data-bs-dismiss="modal" aria-label="Close">X</button>
		    </div>
            <div class="div_body_modal modal-body container">
                <div class="body_row_modal row justify-content-center">
                    <div class="col-lg-12 col-xl-12 col-xxl-12">
                        <form method="post" action="enviarEmail.php" name="logon">
                            <div class="div_aviso">
                                <p>Para recuperar sua senha digite seu email</p>
                                <p>Sua senha será enviada para o seu email cadastrado</p>
                            </div>
                            <div class="div_input_form">
                                <i class="icon_input fa-solid fa-envelope"></i>
                                <input name="email" type="email" class="input_form_modal" required placeholder="Digite seu @E-mail">
                            </div>
                            <div class="div_input_form">			
                                <input class="btn_submit_modal" type="submit" value="Recuperar Senha">
                            </div>
                        </form>
                    </div>
                    <div class="row_recup_senha row">
                        <div class="recup_senha">
                            <a href="" data-bs-target="#Modal_cadastrar" data-bs-toggle="modal" title="Link para Cadastrar um novo Usuário">Cadastrar um novo usuário?</a>
                        </div>
                        <div class="cadast_usuario">
                            <a href="#" data-bs-target="#Modal_login" data-bs-toggle="modal" title="Fazer o Login">Lembrou seus dados? Fazer Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== Bliblioteca JavaScript do BOOTSTRAP - Local com o Bundle ===========================-->
<script src="https://localhost/dtudo/public/js/bootstrap.bundle.min.js"></script>

<!-- Meu JS para controle do menu amburguer, responsivo ========================================-->
<script src="https://localhost/dtudo/public/navbar/js/nav_barra.js"></script>