<link rel="stylesheet" type="text/css" href="css/NavBarra.css">
<nav id="nav_barra">
    <div id="container">
        <div id="img_logo_peq">
            <a href="https://localhost/dtudo/index.php" target="_new" title="Index ATUAL">
                <img class="img_logo_peq" src="imgs/Logo-Dtudo_30px.png" alt="Logo Dtudo" title="Logo Dtudo Pequeno">
            </a>
            <ul id="list_login">
                <?php if (empty($_SESSION['id'])) { ?>
                    <a href="login.php" alt="Link Log" title="Link Log">
                        <li class="li_logins">Fazer Login</li>
                    </a>
                    <?php } else {
                    if ($_SESSION['adm'] == 0) {
                        $consulta_user = $conexao->query("SELECT nome FROM usuarios WHERE id_user='$_SESSION[id]'");
                        $exibe_user = $consulta_user->fetch(PDO::FETCH_ASSOC);
                    ?>
                        <a href="areaUser.php">
                            <li class="li_logins"><?php echo $exibe_user['nome']; ?></li>
                        </a>
                        <a href="sair.php">
                            <li class="li_logins">Logout</li>
                        </a>
                    <?php } else { ?>
                        <a href="adm.php">
                            <li class="li_logins">NinoJP</li>
                        </a>
                        <a href="sair.php">
                            <li class="li_logins">Logout</li>
                        </a>
                <?php }
                } ?>
            </ul>
        </div>
        <ul id="list_menu">
            <a class="meu_btn" href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin">
                <li>$Ganhar$</li>
            </a>
            <a class="meu_btn" href="https://localhost/dtudo/t_i.php" target="_new" title="Informção sobre T.I">
                <li>T.I</li>
            </a>
            <a class="meu_btn" href="https://localhost/dtudo/animacao/animacao.php" target="_new" title="Pagina sobre Animes em Geral">
                <li>Animes</li>
            </a>
        </ul>
        <div id="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</nav>