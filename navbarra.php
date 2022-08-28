<head>
<!-- BOOTSTRAP CSS-->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/navStyle.css"> -->
</head>
<nav id="nav_barra">
    <div id="container">
        <div id="img_logo_peq">
            <a href="https://localhost/dtudo/index.php" target="_new" title="Index ATUAL">
                <img class="img_logo_peq" src="imgs/Logo-Dtudo_30px.png" alt="Logo Dtudo" title="Logo Dtudo Pequeno">
            </a>
            <ul id="list_login">
                <?php  if (empty($_SESSION['id'])) { ?>
                    <a href="login.php" alt="Link Log" title="Link Log">
                        <li class="li_logins">Fazer Login</li></a>
                <?php } else {
                    if($_SESSION['adm']==0) {
                    $consulta_user=$conexao->query("SELECT nome FROM usuarios WHERE id_user='$_SESSION[id]'");
                    $exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC);
                ?>
                    <a href="areaUser.php">
                        <li class="li_logins"><?php echo $exibe_user['nome']; ?></li></a>
                    <a href="sair.php">
                        <li class="li_logins">Logout</li></a>
                <?php } else { ?>
                    <a href="adm.php">
                        <li class="li_logins">NinoJP</li></a>
                    <a href="sair.php">
                        <li class="li_logins">Logout</li></a>
                <?php }
                }?>
            </ul>
        </div>
        <ul id="list_menu">
            <a class="meu_btn" href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin">
                <li>$Ganhar$</li></a>
            <a class="meu_btn" href="https://localhost/dtudo/t_i.php" target="_new" title="Informção sobre T.I">
                <li>T.I</li></a>
            <a class="meu_btn" href="https://localhost/dtudo/animacao/animacao.php" target="_new" title="Pagina sobre Animes em Geral">
                <li>Animes</li></a>
        </ul>
        <div id="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</nav>
<!-- Bliblioteca JavaScrip do BOOTSTRAP
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> -->