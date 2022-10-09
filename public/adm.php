<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo 2022 - Pagina do Administrador</title>
    <!-- inclusão do FONT-AWESOME -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Meu CSS local adm.css -->
    <link rel="stylesheet" type="text/css" href="css/adm.css">
    <!-- Meu favicon atual -->
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body>
    <nav class="navbar">
        <div class="navbar_content">
            <div class="bars">
                <i class="fa-solid fa-bars"></i>
            </div>
                <a href="index.php">
                <img class="logo" src="imgs/Logo-Dtudo_102x40.png" alt="Logo Dtudo"></a>
        </div>
        <div class="navbar_content">
            <div class="notification">
                <i class="fa-solid fa-bell"></i>
                <span class="number">2</span>
                <div class="dropdown_menu">
                    <div class="dropdown_content">
                        <li><img src="imgs/TI_link.png" alt="foto do usuário"></i>
                            <div class="msg_text">Aqui vai aparecer as menssagens de notificações do usuario</div>
                        </li>
                        <li><img src="imgs/TI_link.png" alt="foto do usuário"></i>
                            <div class="msg_text">A Segunda menssagens vai aparecer aqui nas notificações do usuario</div>
                        </li>
                    </div>
                </div>
            </div>
            <div class="avatar">
                <img src="imgs/TI_link.png" alt="foto do usuário">
                <div class="dropdown_menu setting">
                    <div class="item">
                        <span class="fa-solid fa-circle-user"> </span> Perfil
                    </div>
                    <div class="item">
                        <span class="fa-solid fa-gear"> </span> Configurações
                    </div>
                    <div class="item">
                        <span class="fa-solid fa-person-walking-dashed-line-arrow-right"> </span> Sair
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Inicio do conteúdo da pagina ADM -->
    <main class="main_content">
        <!-- Inicio do SIDE-BAR -->
        <div class="sidebar">
            <a href="adm.php" class="sidebar_nav active"><i class="icon fa-solid fa-table-columns"></i><span>Dashboard</span></a>
            <a href="listar_dash.php" class="sidebar_nav"><i class="icon fa-solid fa-table-list"></i><span>Listar</span></a>
            <a href="formulario_dash.php" class="sidebar_nav"><i class="icon fa-brands fa-wpforms"></i><span>Formulário</span></a>
            <a href="view_dash.php" class="sidebar_nav"><i class="icon fa-solid fa-eye"></i><span>Visualizar</span></a>
            <a href="login.php" class="sidebar_nav"><i class="icon fa-solid fa-person-walking-dashed-line-arrow-right"></i><span>Sair</span></a>
        </div>
        <!-- FIM do SIDE-BAR -->

        <!-- Inicio do conteudo do ADM -->
        <div class="wrapper">
            <div class="row">
                <div class="box box_first">
                    <span class="class=icon fa-solid fa-users"></span>
                    <span>397</span>
                    <span>Usuários</span>
                </div>
                <div class="box box_second">
                    <span class="fa-solid fa-truck-fast"></span>
                    <span>43</span>
                    <span>Entregas</span>
                </div>
                <div class="box box_third">
                    <span class="fa-solid fa-circle-check"></span>
                    <span>12</span>
                    <span>Completas</span>
                </div>
                <div class="box box_fourth">
                    <span class="fa-solid fa-triangle-exclamation"></span>
                    <span>3</span>
                    <span>Alertas</span>
                </div>
            </div>
        </div>
        <!-- FIM do conteudo do ADM -->
    </main>
    <!-- FIM do conteúdo da pagina ADM -->
<script src="js/adm.js"></script>
</body>
</html>