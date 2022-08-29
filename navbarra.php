<?php include('conecta.php');?>
<link rel="stylesheet" type="text/css" href="css/NavBarra.css">
<nav id="nav_barra">
    <div id="div_container">
        <div id="div_logo_ul">
            <a href="https://localhost/dtudo/index.php" target="_new" title="Index ATUAL">
                <img id="img_logo_peq" src="imgs/Logo-Dtudo_30px.png" alt="Logo Dtudo" title="Logo Dtudo Pequeno"></a>
            <ul id="ul_login">
                <?php if (empty($_SESSION['id'])) { ?>
                    <a href="login.php" alt="Link Log" title="Link Log"><li class="li_logins">Fazer Login</li></a>
                <?php } else {
                    if ($_SESSION['adm'] == 0) {
                        $consulta_user = $conexao->query("SELECT nome FROM usuarios WHERE id_user='$_SESSION[id]'");
                        $exibe_user = $consulta_user->fetch(PDO::FETCH_ASSOC); ?>
                        <a href="areaUser.php"><li class="li_logins"><?php echo $exibe_user['nome']; ?></li></a>
                        <a href="sair.php"><li class="li_logins">Logout</li></a>
                    <?php } else { ?>
                        <a href="adm.php"><li class="li_logins">NinoJP</li></a>
                        <a href="sair.php"><li class="li_logins">Logout</li></a>
                <?php }
                } ?>
            </ul>
        </div>
        <ul id="list_menu">
            <a class="link_btn" href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin"><li class="li_logins">$Ganhar$</li></a>
            <a class="link_btn" href="https://localhost/dtudo/t_i.php" target="_new" title="Informção sobre T.I"><li>T.I</li></a>
            <a class="link_btn" href="https://localhost/dtudo/animacao/animacao.php" target="_new" title="Pagina sobre Animes em Geral"><li>Animes</li></a>
        </ul>
        <div id="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</nav>