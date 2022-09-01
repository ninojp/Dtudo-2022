<?php session_start();
    include 'conecta.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- AWESOME-FONTs com a CDNjs -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Link do Google Fonts (Cinzel+Decorative, Cutive+Mono, Kalam, Ubuntu)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> TESTE, acho q não é necessária -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cutive+Mono&family=Kalam:wght@300;400&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- StyleGeral.css - CSS local e geral para todas as paginas -->
    <link rel="stylesheet" type="text/css" href="css/t_i.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
    <title>Dtudo - Tecnologia da Informação</title>
</head>
<body> <!--GRID CONTEINER -->
    <?php include 'navbarra.php';
        include 'header.php';?>
<!--GRID ITEM -->
<main id="main_ti">
    <div class="row">
        <h1>Cursos, apostilas, e-books e muita Informação sobre Tecnologia da informação!</h1>
    </div>
    <div class="row">
        <section id="sect_left">
            <h2>Hardware</h2>
        </section>
        <section id="sect_right">
            <h2>Software</h2>
        </section>
    </div>
</main>
    <?php include('rodape.php'); ?>
</body>
</html>
