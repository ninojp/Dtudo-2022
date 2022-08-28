<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--temporariamente para limpar o cache no HTTP 1.0 -->
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo 2021</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/indexStyle.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/geralStyle.css"> -->
    <link rel="stylesheet" type="text/css" href="css/StyleGeral.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body>
<div class="grid-conteiner_index"><!--GRID CONTEINER -->
<?php session_start();
  	  include('conecta.php');
      include('navbarra.php');/* GRID ITEM, pagina externa navbarra.php */
?>  
<header id="header_cabec"><!-- GRID ITEM cabecalho -->
        <div id="div_text_esq">
            <img id="img_logo_grand" src="imgs/Logo_Dtudo_2022-300p.png" alt="Logo Dtudo" title="Imagem do Logo Dtudo">
        </div>
        <div id="div_img_logo">
            
        </div>
        <div id="div_text_dir">
            Mais Informações estaram aqui!<br>
            Uma breve descrição do site!
        </div>
</header>
<main id="main_princ"><!--GRID ITEM e também um GRID CONTEINER-->
<!--    <img id="img_fundo_main" src="imgs/software_1200px.jpg">-->
        <div class="divs_main" id="div_img_bitcoin" onMouseOver="mudaFoto('imgs/bitcoin_text_centro.png')" onMouseOut="mudaFoto('imgs/terra_250px.png')" >
            
        </div>
        <div class="divs_main" id="div_img_ti" onMouseOver="mudaFoto('imgs/TI_text_centro.png')" onMouseOut="mudaFoto('imgs/terra_250px.png')">
            <a href="https://localhost/dtudo/t_i.php" target="_new" title="Pagina sobre Tecnologia da Informação">
                <img src="imgs/TI_link.png" id="img_ti" alt="T.I" title="Informação sobre Tecnologia da Informação"></a>
        </div>
        <div class="divs_main" id="div_img_centro" >
            <a href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin">
            <img src="imgs/SlaveMoney.png" id="img_bitcoin" alt="Escravo do Dinheiro" title="Informação Sobre como ganhar dinheiro"></a>
        </div>
        <div class="divs_main" id="div_img_musicas" onMouseOver="mudaFoto('imgs/musica_text_centro.png')" onMouseOut="mudaFoto('imgs/terra_250px.png')">
            <a href="https://localhost/dtudo/lazer/animacao/animacao.php" target="_new" title="Pagina sobre Animes em Geral">
                <img src="imgs/animes_personagem_400px.png" id="img_animes" alt="Animes" title="Todos os Animes que já assisti"></a>
        </div>
    </main>
    <?php include('rodape.php'); ?>
<script>
//    function mudaFoto (foto) { document.getElementById("img_centro").src=foto; }
</script>
</div>
</body>
</html>