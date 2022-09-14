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
                    <span class="title_content">
                    <button class="btn_info" type="button">Listar</button></span>
                    <div class="top_list_right">
                        <button class="btn_success" type="button">Cadastrar</button>
                    </div>
                </div>
                <table class="table_list">
                    <thead class="list_head">
                        <tr>
                            <th class="list_head_content">ID</th>
                            <th class="list_head_content">Nome</th>
                            <th class="list_head_content tb_sm_none">E-mail</th>
                            <th class="list_head_content tb_sm_none">Coluna 1</th>
                            <th class="list_head_content tb_md_none">Coluna 2</th>
                            <th class="list_head_content tb_lg_none">Coluna 3</th>
                            <th class="list_head_content">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="list_body">
                        <tr>
                            <td class="list_body_content">1</td>
                            <td class="list_body_content">Cesar</td>
                            <td class="list_body_content tb_sm_none">cesar@celk.com.br</td>
                            <td class="list_body_content tb_sm_none">Coluna01</td>
                            <td class="list_body_content tb_md_none">Coluna02</td>
                            <td class="list_body_content tb_lg_none">Coluna03</td>
                            <td class="list_body_content">
                                <button class="btn_primary" type="button">Visualizar</button>
                                <button class="btn_warning" type="button">Editar</button>
                                <button class="btn_danger" type="button">Apagar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="list_body_content">2</td>
                            <td class="list_body_content">Cesar2</td>
                            <td class="list_body_content tb_sm_none">cesar2@celk.com.br</td>
                            <td class="list_body_content tb_sm_none">Coluna01</td>
                            <td class="list_body_content tb_md_none">Coluna02</td>
                            <td class="list_body_content tb_lg_none">Coluna03</td>
                            <td class="list_body_content">
                                <button class="btn_primary" type="button"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn_warning" type="button"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="btn_danger" type="button"><i class="fa-solid fa-trash-can"></i></button></td>
                        </tr>
                        <tr>
                            <td class="list_body_content">3</td>
                            <td class="list_body_content">Cesar3</td>
                            <td class="list_body_content tb_sm_none">cesar3@celk.com.br</td>
                            <td class="list_body_content tb_sm_none">Coluna01</td>
                            <td class="list_body_content tb_md_none">Coluna02</td>
                            <td class="list_body_content tb_lg_none">Coluna03</td>
                            <td class="list_body_content">
                                <div class="drop_action">
                                    <button class="drop_btn_action" onclick="actionDrop(1)">Ação</button>
                                    <div id="actionDrop1" class="drop_action_item">
                                        <a href="#">Vizualizar 1</a>
                                        <a href="#">Editar</a>
                                        <a href="#">Apagar</a>
                                    </div> 
                                </div>    
                            </td>
                        </tr>
                        <tr>
                            <td class="list_body_content">4</td>
                            <td class="list_body_content">Cesar4</td>
                            <td class="list_body_content tb_sm_none">cesar4@celk.com.br</td>
                            <td class="list_body_content tb_sm_none">Coluna01</td>
                            <td class="list_body_content tb_md_none">Coluna02</td>
                            <td class="list_body_content tb_lg_none">Coluna03</td>
                            <td class="list_body_content">
                                <div class="drop_action">
                                    <button class="drop_btn_action" onclick="actionDrop(2)">Ação</button>
                                    <div id="actionDrop2" class="drop_action_item">
                                        <a href="#">Vizualizar 2</a>
                                        <a href="#">Editar</a>
                                        <a href="#">Apagar</a>
                                    </div> 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="list_body_content">5</td>
                            <td class="list_body_content">Cesar5</td>
                            <td class="list_body_content tb_sm_none">cesar5@celk.com.br</td>
                            <td class="list_body_content tb_sm_none">Coluna01</td>
                            <td class="list_body_content tb_md_none">Coluna02</td>
                            <td class="list_body_content tb_lg_none">Coluna03</td>
                            <td class="list_body_content">
                                <div class="drop_action">
                                    <button class="drop_btn_action" onclick="actionDrop(3)">Ação</button>
                                    <div id="actionDrop3" class="drop_action_item">
                                        <a href="#">Vizualizar 3</a>
                                        <a href="#">Editar</a>
                                        <a href="#">Apagar</a>
                                    </div> 
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Inicio da paginação -->
                <div class="content_pagination">
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#" class="active">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>
                <!-- FIM da paginação -->
            </div>
        </div>
        <!-- FIM do conteudo do ADM -->
    </main>
    <!-- FIM do conteúdo da pagina ADM -->
<script src="js/adm.js"></script>
</body>
</html>