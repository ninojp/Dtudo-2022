<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
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
            <a href="index.php" class="sidebar_nav active"><i class="icon fa-solid fa-table-columns"></i><span>Dashboard</span></a>
            <a href="listar.php" class="sidebar_nav"><i class="icon fa-solid fa-users"></i><span>Listar</span></a>
            <a href="login.php" class="sidebar_nav"><i class="icon fa-solid fa-person-walking-dashed-line-arrow-right"></i><span>Sair</span></a>
        </div>
        <!-- FIM do SIDE-BAR -->

        <!-- Inicio do conteudo do ADM -->
        <div class="wrapper">
            <div class="row">
                <div class="top_list">
                    <span class="title_content">Listar</span>
                    <div class="top_list_right">Botão</div>
                </div>
                <table class="table_list">
                    <thead class="list_head">
                        <tr>
                            <th class="list_head_content">ID</th>
                            <th class="list_head_content">Nome</th>
                            <th class="list_head_content">E-mail</th>
                            <th class="list_head_content">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="list_body">
                        <tr>
                            <td class="list_body_content">1</td>
                            <td class="list_body_content">Cesar</td>
                            <td class="list_body_content">cesar@celk.com.br</td>
                            <td class="list_body_content">Visualizar Editar Apagar</td>
                        </tr>
                        <tr>
                            <td class="list_body_content">2</td>
                            <td class="list_body_content">Cesar2</td>
                            <td class="list_body_content">cesar2@celk.com.br</td>
                            <td class="list_body_content">Visualizar Editar Apagar</td>
                        </tr>
                        <tr>
                            <td class="list_body_content">3</td>
                            <td class="list_body_content">Cesar3</td>
                            <td class="list_body_content">cesar3@celk.com.br</td>
                            <td class="list_body_content">Visualizar Editar Apagar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- FIM do conteudo do ADM -->
    </main>
    <!-- FIM do conteúdo da pagina ADM -->
<script src="js/adm.js"></script>
</body>
</html>