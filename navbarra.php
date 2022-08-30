<?php include('conecta.php');?>
<link rel="stylesheet" type="text/css" href="css/NavBarra.css">
<nav id="nav_barra">
    <div id="div_container">
        <div id="div_logo_uls">
            <a href="https://localhost/dtudo/index.php" target="_new" title="Index ATUAL">
                <img id="img_logo_peq" src="imgs/Logo-Dtudo_30px.png" alt="Logo Dtudo" title="Logo Dtudo Pequeno"></a>
            <ul class="ul_login" id="ul_login">
                <?php if (empty($_SESSION['id'])) { ?>
                    <a class="link_login" href="login.php" alt="Link Log" title="Link Log"><li class="li_login">Fazer Login</li></a>
                <?php } else {
                    if ($_SESSION['adm'] == 0) {
                        $consulta_user = $conexao->query("SELECT nome FROM usuarios WHERE id_user='$_SESSION[id]'");
                        $exibe_user = $consulta_user->fetch(PDO::FETCH_ASSOC); ?>
                        <a class="link_login" href="areaUser.php"><li class="li_login"><?php echo $exibe_user['nome']; ?></li></a>
                        <a href="sair.php"><li class="li_login">Logout</li></a>
                    <?php } else { ?>
                        <a class="link_login" href="adm.php"><li class="li_login">NinoJP</li></a>
                        <a class="link_login" href="sair.php"><li class="li_login">Logout</li></a>
                <?php }
                } ?>
            </ul>
        </div>
        <ul class="ul_menu" id="ul_menu">
            <a class="link_btn" href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin"><li>$Ganhar$</li></a>
            <a class="link_btn" href="https://localhost/dtudo/t_i.php" target="_new" title="Informção sobre T.I"><li>T.I</li></a>
            <a class="link_btn" href="https://localhost/dtudo/animacao/animacao.php" target="_new" title="Pagina sobre Animes em Geral"><li>Animes</li></a>
            <a class="link_btn" href="https://localhost/dtudo/animacao/sobre.php" target="_new" title="Pagina sobre O Site e o Autor"><li>Sobre</li></a>
        </ul>
        <div class="div_btn" id="div_btn">
            <i id="icon_menu" class="fa-solid fa-bars icon_menu"></i>
        </div>
    </div>
</nav>
<script src="js/nav_barra.js"></script>