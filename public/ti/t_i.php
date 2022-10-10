<?php session_start();
    include_once '../conecta.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!------ Meu CSS Local da Pagina ------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="https://localhost/dtudo/public/ti/css/t_i.css">
    <link rel="icon" sizes="128x128" href="https://localhost/dtudo/public/imgs/favicon.ico">
    <title>Dtudo - Tecnologia da Informação</title>
</head>
<body> 
<!--- Inclusão do NAVBAR e do HEADER -------------------------------------------------------->
    <?php include_once '../navbarra.php';
          include_once '../header.php';?>
<!-- MAIN GRID ITEM ------------------------------------------------------------------------->
<main id="main_ti">
    <div id="row_tit">
        <h1>Dicas, Cursos, apostilas, e-books e muita Informação sobre Tecnologia da informação!</h1>
        <p>T.i. é uma área muito extensa por isso o mais correto é você focar em algo dentro desta área que lhe interesse mais, o interesse que falo seria algo que você se identifica, que você goste, claro que para saber o que você mais se identifica você primeiro precisa fazer um contato, eu recomendo o Youtube, com vídeos na área que você acha que vai lê interessar. Abaixo vou colocar uma lista com nomes e aplicações práticas de como ganhar dinheiro dentro desta área. Inclusive vou falar de áreas de não são especificamente dentro de T.I, mas estão em alta LUCRATIVIDADE!<br>
        PRIMEIRA E MAIS IMPORTANTE DICA: Se especialize em algo, saiba muito de algo e não um pouco de tudo. Claro e obvio que conhecimento nunca é demais, mas primeiro se especialize em uma área, comece a ganhar dinheiro com a mesma, tenha FOCO e depois você pode ir expandindo e se diversificando.
        O mercado de trabalho precisa de PROFISSIONAIS, não picaretas de fazem um pouquinho de tudo, (Conserta PC, celular, MAC-Books e ainda instala câmeras, alarmes, rede Wi-fi e é programador). Você pode e deve saber e conhecer um pouquinho de tudo, MAS se especialize em algo PRIMEIRO.<br>
        Ninguém vira um profissional numa área em meses (assistindo vídeos no Youtube) leva-se ANOS. O tempo depende de quanto você se dedica para aprender (estudar) e praticar (colocar a mão na massa e fazer serviços).
        </p>
    </div>
    <div id="row_main" class="row">
        <section id="sect_left">
            <h2>Hardware</h2><hr>
            <p>Depois eu vou aprimorando, mas por enquanto a ideia é: fundo preto com as letras brancas...<br>
                Área: Manutenção e reparo de Microcomputadores, PC Desktop, All-in-One e Notebooks. Neste caso cabe também o estudo de softwares, O.S Microsoft Windows e suas ferramentas)<br>
                Área: Manutenção e reparo de Microcomputadores, Apple Inc. MAC Desktop, All-in-One e MACBooks. Neste caso também cabe o estudo de seu Sistema Operacional macOS ou Mac OS X.<br>
                Área: manutenção e reparo de smartphones e Tablets. Aqui creio eu (não atuo nesta área) que seria necessário trabalhar com as duas plataformas de hardware e software: O Android e Apple iOS, iPhone, iPad. Mesmo assim indico que comece aprendendo Android e seus adjacentes, e depois de dominar (já estiver consertando e configurando bem) passe para linha Apple.
                Área: Sistemas de Automação:<br>
                Aqui entra também IOT a internet das coisas (uma área nova mais muito promissora)<br>
                Instalação e Manutenção de alarmes e sistemas de monitoramento, Câmeras.<br>
                Instalação e manutenção de sistemas Fotovoltaico, placas de luz Solar...<br> 
                </p>
        </section>
        <section id="sect_right">
            <h2>Software</h2><hr>
            <p>Texto automatico só para preenchimanto mesmo<br>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.<br>

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </section>
    </div>
</main>
    <?php include('../rodape.php'); ?>
</body>
</html>
