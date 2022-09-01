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
    <!-- AWESOME-FONTs com a CDNjs -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Link do Google Fonts (Cinzel+Decorative, Cutive+Mono, Kalam, Ubuntu)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> TESTE, acho q não é necessária -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cutive+Mono&family=Kalam:wght@300;400&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- StyleGeral.css - CSS local e geral para todas as paginas -->
    <link rel="stylesheet" type="text/css" href="css/StyleGeral.css">
    <!-- Meu favicon atual -->
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>

<body>
    <!-- navbarra.php - Pagina externa -->
    <?php include('navbarra.php'); ?>
    <!-- HEADER ID=header - Cabeçalho da página-->
    <header id="header">
        <div id="div_esq">
            <img id="img_logo_grand" src="imgs/Logo_Dtudo_2022-300p.png" alt="Logo Dtudo" title="Imagem do Logo Dtudo">
        </div>
        <div id="div_dir">
            <h1 id="header_h1">Dtudo T.I</h1>
            <p class="p_texto">Dtudo é um site informativo sobre Tecnologia da Informação...<br>
            Feito por um estudante de T.I a 25 anos, sobrevivendo$ com a mesma a 12...<br> 
            Um exemplo prático de que é possível sobreviver$ de T.i...<br> 
            O caminho posso tentar mostrar. Percorrer e seguir é com você.</p>
        </div>
    </header>
    <main id="main_princ">
        <!--GRID ITEM e também um GRID CONTEINER-->
        <div class="divs_link" id="div_ti">
            <h2 class="h2_titulo">Estudando e Praticando Tecnologia da Informação!</h2>
            <a href="https://localhost/dtudo/t_i.php" target="_new" title="Pagina sobre Tecnologia da Informação">
                <img id="img_ti" class="imgs_link" src="imgs/TI_link.png" id="img_ti" alt="T.I" title="Informação sobre Tecnologia da Informação"></a>
            <p class="p_texto">Hardware ou Software, conheça o caminho certo, para quem está começando ou já está na área, mas ainda não está ganhando dinheiro na mesma. T.I é como tudo na vida exige tempo e dedicação, mas com o rumo certo, para não gastar tempo com algo que não lhe trará retorno$.</p> 
        </div>
        <div class="divs_link" id="div_ganhar">
            <h2 class="h2_titulo">Como ganhar dinheiro com T.I!</h2>
            <a href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin">
                <img id="img_money" class="imgs_link" src="imgs/SlaveMoney.png" alt="Escravo do Dinheiro" title="Informação Sobre como ganhar dinheiro"></a>
            <p class="p_texto">Sem promessas milagrosas sem papo furado... Estudando e trabalhando com T.I na prática. Com investimentos de baixo risco para quem pode, com estudo para quem se dedica e com esforço para quem já sabe.</p>
        </div>
        <div class="divs_link" id="div_lazer">
            <h2 class="h2_titulo">Lazer, pois a escolha é a chave, o equilíbrio é a certeza do sucesso ou caminho para o mesmo!</h2>
            <a href="https://localhost/dtudo/animacao/animacao.php" target="_new" title="Pagina sobre Animes em Geral">
                <img id="img_anime" class="imgs_link" src="imgs/animes_personagem_400px.png" id="img_animes" alt="Animes" title="Todos os Animes que já assisti"></a>
            <p class="p_texto">Estar motivado vai fazer você prosseguir e não desistir no meio do caminho, o que acontece com a maioria nesta área de T.I, então tenha foco saiba escolher o que mais lê interessa nesta imensa área. Aí entra o lazer, junte algo que você gosta com algo que lê traga retorno$</p>
        </div>
    </main>
    <?php include('rodape.php'); ?>
</body>

</html>