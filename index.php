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
            <h1>Dtudo</h1>
            <h3>Dtudo um site feito por uma pessoa comum assim como a maioria...<br> Estudando T.I a 25 anos, sobrevivendo$ com a mesma a 12...<br> Um exemplo prático de que é possível sobreviver$ de T.i....<br> O caminho posso tentar mostrar. Percorrer e seguir é com você.</h3>
        </div>
    </header>
    <main id="main_princ">
        <!--GRID ITEM e também um GRID CONTEINER-->
        <div id="div_money" class="div_money">
            <a href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin">
                <img id="SlaveMoney" src="imgs/SlaveMoney.png" alt="Escravo do Dinheiro" title="Informação Sobre como ganhar dinheiro"></a>
        </div>
        <div class="divs_main" id="div_img_ti">
            <a href="https://localhost/dtudo/t_i.php" target="_new" title="Pagina sobre Tecnologia da Informação">
                <img src="imgs/TI_link.png" id="img_ti" alt="T.I" title="Informação sobre Tecnologia da Informação"></a>
        </div>
        <div class="div_" id="div_img_musicas">
            <a href="https://localhost/dtudo/animacao/animacao.php" target="_new" title="Pagina sobre Animes em Geral">
                <img src="imgs/animes_personagem_400px.png" id="img_animes" alt="Animes" title="Todos os Animes que já assisti"></a>
        </div>
    </main>
    <?php include('rodape.php'); ?>
</body>

</html>