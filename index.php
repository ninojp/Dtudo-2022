<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--temporariamente para limpar o cache no HTTP 1.0 -->
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo 2022</title>
    <!-- StyleGeral.css - CSS local e geral para todas as paginas -->
    <link rel="stylesheet" type="text/css" href="css/StyleGeral.css">
    <!-- Meu favicon atual -->
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>

<body>
    <!-- navbarra.php - Pagina externa -->
    <?php include_once('navbarra.php');
        include_once('header.php'); ?>
    <main id="main_princ">
        <!--GRID ITEM e também um GRID CONTEINER-->
        <div class="divs_link" id="div_ti">
            <h2 class="h2_titulo">Estudando e Praticando T.I.</h2>
            <a href="https://localhost/dtudo/t_i.php" target="_new" title="Pagina sobre Tecnologia da Informação">
                <img id="img_ti" class="imgs_link" src="imgs/TI_link.png" id="img_ti" alt="T.I" title="Informação sobre Tecnologia da Informação"></a>
            <p class="p_texto">Hardware ou Software, conheça o caminho certo, para quem está começando ou já está na área, mas ainda não está ganhando dinheiro na mesma. T.I. é como tudo na vida exige tempo e dedicação, mas com o rumo certo, para não gastar tempo com algo que não lhe trará retorno$.</p> 
        </div>
        <div class="divs_link" id="div_ganhar">
            <h2 class="h2_titulo">Como ganhar dinheiro com T.I.</h2>
            <a href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin">
                <img id="img_money" class="imgs_link" src="imgs/SlaveMoney.png" alt="Escravo do Dinheiro" title="Informação Sobre como ganhar dinheiro"></a>
            <p class="p_texto">Sem promessas milagrosas sem papo furado. Estudando e trabalhando com T.I. na prática. Com investimentos de baixo risco para quem pode, com estudo para quem se dedica e com esforço para quem já sabe.</p>
        </div>
        <div class="divs_link" id="div_lazer">
            <h2 class="h2_titulo">Lazer, pois a escolha é a chave, e o equilíbrio é caminho para o sucesso!</h2>
            <a href="https://localhost/dtudo/animacao/animacao.php" target="_new" title="Pagina sobre Animes em Geral">
                <img id="img_anime" class="imgs_link" src="imgs/animes_personagem_400px.png" id="img_animes" alt="Animes" title="Todos os Animes que já assisti"></a>
            <p class="p_texto">Estar motivado vai fazer você prosseguir e não desistir no meio do caminho, o que acontece com a maioria nesta área de T.I., então tenha foco saiba escolher o que mais lê interessa nesta imensa área. Aí entra o lazer, junte algo que você gosta com algo que lê traga retorno$</p>
        </div>
    </main>
    <?php include('rodape.php'); ?>
</body>

</html>