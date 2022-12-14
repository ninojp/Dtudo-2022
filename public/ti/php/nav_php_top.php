<?php
$_SESSION['nova_session'] = 'Conteudo da Sessao de Teste';
// testando o uso de cookies 
$nome_cookie = "teste_index";
$valor_cookie = "user_logado";
$tempo_expirar = time() + (1 * 24 * 3600); # Tempo de validade do COOKIE, +(1*24*3600) 1dia x 24horas x 3600segundos
$path = "C:\\xampp\\htdocs\\php_testes\\public"; #Só pode ser acessado por este diretório
$domain = "localhost"; #Só pode ser acessado por este Domínio
$secure = false; # true - Só pode ser acessado via HTTPS
$httponly = true; # true - para indicar que NÃO pode ser acessado via JavaScript

setcookie($nome_cookie, $valor_cookie, $tempo_expirar, $path, $domain, $secure, $httponly = false);
header("Set-cookie: $nome_cookie=$valor_cookie; SameSite=Lax; Secure");

//definindo as variaveis e o array para obter a DATA atual
$dia = date("d");
$mes = date("m");
$ano = date("Y"); //y minusculo para ano com dois algarismos
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
//definindo as variaveis para obter a HORA atual
$hora = date("H"); //H maiusculo para o formato 24h
$minuto = date("i");
$segundo = date("s");
?>
<head>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/php.css">
</head>
<nav class="container-fluid nav_top">
    <div class="row nav_row">
        <div class="text_cookie"><?php if (isset($_COOKIE['teste_index'])){echo"Cookie de Teste: ".$_COOKIE['teste_index'];}?></div>
        <div id="div_img_login">
                <a href="https://localhost/dtudo/public/index.php" target="_new" title="Index ATUAL"><img id="img_logo_peq" src="https://localhost/dtudo/public/imgs/Logo-Dtudo_30px.png" alt="Logo Dtudo" title="Logo Dtudo Pequeno"></a>
        </div>
        <div class="text_menu"><ul class="ul_menu"><li class="li_menu"><a class="a_menu" href="https://www.php.net/manual/pt_BR/index.php" target="_blank">Manual do PHP</a></li>
            <div class="dropdown">
                <a id="dropdown_joao" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" role="button" href="https://www.youtube.com/c/JLDRPT/playlists" target="_blank">João Ribeiro</a>
                <ul class="dropdown-menu ul_drop" aria-labelledby="dropdown_joao">
                    <li class="li_menu"><a class="dropdown-item" href="https://www.youtube.com/watch?v=krQj4stNu5U&list=PLXik_5Br-zO_5EGPG6_u-u0hVI_f_ThO_" target="_blank">PHP Boas Práticas 2017</a><li>
                    <li class="li_menu"><a class="dropdown-item" href="https://www.youtube.com/watch?v=jVUeF7cZdFE&list=PLXik_5Br-zO9wODVI0j58VuZXkITMf7gZ" target="_blank">PHP Curso Completo 2020</a><li>
                    <li class="li_menu"><a class="dropdown-item" href="https://www.youtube.com/watch?v=iDEuQjITm0E&list=PLXik_5Br-zO9Z8l3CE8zaIBkVWjHOboeL" target="_blank">Parte2 Curso Completo 2021</a><li>
                    <li class="li_menu"><a class="dropdown-item" href="https://www.youtube.com/watch?v=OMn8y1RE4FE&list=PLXik_5Br-zO-tsUy1lTPB8dnPGBu8n0Ee&index=3" target="_blank">PHP Loja Virtual</a></li>
                    <li class="li_menu"><a class="dropdown-item" href="https://www.youtube.com/watch?v=gsPp71nRMQk&list=PLXik_5Br-zO8vLD6X9uB-EH6BpgZL8XBH" target="_blank">PHP APIs</a></li>
                </ul>
            </div>
            <li class="li_menu"><a class="a_menu" href="https://celke.com.br/clms/home/index" target="_blank">Celke PHP Development</a></li>
            <li class="li_menu"><a class="a_menu" href="https://www.youtube.com/watch?v=F7KzJ7e6EAc&list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k&index=1" target="_blank">Curso em Video 2014</a></li>
            <li class="li_menu"><a class="a_menu" href="https://www.youtube.com/watch?v=R2KdI-DDYCc&list=PLnex8IkmReXw-QlzKS9zA3rXQsRnK5nnA&index=3" target="_blank">Edson Maia PHP7</a></li>
            <li class="li_menu"><a class="a_menu" href="https://www.youtube.com/watch?v=71dz_gaE798&list=PLx4x_zx8csUgB4R1dDXke4uKMq-IrSr4B&index=3" target="_blank">CFBCursos 2014</a></li> 
            <li class="li_menu"><a class="a_menu" href="https://www.w3schools.com/php/php_intro.asp" target="_blank">W3schools PHP</a></li>
        </ul></div>
        <div class="text_data"><?php echo $dia." de ".$meses[$mes-1]." de ".$ano; echo " - ".$hora.":".$minuto.":".$segundo;?>
        </div>
    </div>
</nav>
<script src="../../js/bootstrap.bundle.min.js"></script>
