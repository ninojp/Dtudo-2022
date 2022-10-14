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
<!-- MAIN conteiner-fluid da pagina -------------------------------------------------------------->
<main class="container-fluid main_conteiner">
    <section class="row sec_tit_row">
        <div class="div_tit_h1ti">
            <h1 class="h1_frase">Dicas, Cursos, apostilas, e-books e muita Informação sobre Tecnologia da informação!</h1>
        </div>
        <div class="div_parag1_desc1">
            <p> PRIMEIRA E MAIS IMPORTANTE DICA: Se especialize em algo, saiba muito de algo e não um pouco de tudo. Obvio que conhecimento nunca é demais, mas primeiro se especialize em uma área, tenha FOCO, comece a ganhar dinheiro com a mesma, e depois você pode ir expandindo seus horizontes. Você pode e deve saber e conhecer um pouquinho de tudo (com o tempo), MAS se especialize em algo PRIMEIRO.<br>
            O mercado de trabalho precisa de PROFISSIONAIS, não picaretas de fazem um pouquinho de tudo, (Conserta PC, celular, MAC-Books e ainda instala câmeras, alarmes, rede Wi-fi e é programador). Ninguém vira um profissional da noite para o dia, em poucos meses, (assistindo vídeos no Youtube) leva-se ANOS. O tempo depende de quanto você se dedica para aprender (estudar) e praticar (colocar a mão na massa e fazer serviços).</p>
        </div>
    </section>
    <section id="sec_hard_soft" class="row">
        <div class="col div_hard">
            <div class="accordion accordion-flush" id="accordion_hard">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="h2_hardware_pc">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#hardware_pc" aria-expanded="true" aria-controls="hardware_pc"><span id="span_hard">Hardware:</span>
                        </button>    
                    </h2>
                    <div id="hardware_pc" class="accordion-collapse collapse show" aria-labelledby="h2_hardware_pc" data-bs-parent="#accordion_hard">
                        <div class="accordion-body">
                        Como requisito básico para a área de hardware eu recomendo ler (ou assistir youtube) o básico sobre <strong>rede elétrica</strong>, saber da importância do aterramento, tomadas tripolar e tensão (110v, 220v). Saber o por que não se deve usar estabilizadores de baixa qualidade ou réguas e sim nobreaks e réguas com circuito de proteção de qualidade. Conhecer o básico de <strong>eletrônica analógica e digital</strong>, corrente, tensão (DC), potência (lei de ohm) e seus componentes, resistores, capacitores, transistores, circuitos integrados... Conhecer e saber usar instrumentos de aferimento de qualidade e da forma correta, multímetro, osciloscópio, estação de solda...
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="h2_manute_pc">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#manute_pc" aria-expanded="true" aria-controls="manute_pc">Manutenção e Reparo - PC:
                        </button>    
                    </h2>
                    <div id="manute_pc" class="accordion-collapse collapse" aria-labelledby="h2_manute_pc" data-bs-parent="#accordion_hard">
                        <div class="accordion-body">
                            <strong>Manutenção e reparo de Microcomputadores, (PC)Personal Computers Desktop, (PC)All-in-One e (PC)Notebooks.</strong> Neste caso cabe também o estudo de softwares, O.S Microsoft Windows e suas ferramentas. Recomendo primeiro se especializar na linha de (PC)Personal Computers, para depois avançar para linha de computadores Apple e seus adjacentes.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="h2_manute_apple">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#manute_apple" aria-expanded="true" aria-controls="manute_apple">Manutenção e Reparo - Apple:
                        </button>    
                    </h2>
                    <div id="manute_apple" class="accordion-collapse collapse" aria-labelledby="h2_manute_apple" data-bs-parent="#accordion_hard">
                        <div class="accordion-body">
                            <strong>Manutenção e reparo de Microcomputadores, Apple Inc. MAC Desktop, All-in-One Apple e MACBooks.</strong> Neste caso também cabe o estudo de seu Sistema Operacional macOS ou Mac OS X e suas ferramentas. Novamente recomendo primeiro se especializar na linha de computadores Apple, para depois avançar para linha de (PC)Personal Computers e seus adjacentes.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="h2_manute_mobile">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#manute_mobile" aria-expanded="true" aria-controls="manute_mobile">Manutenção e reparo de smartphones e Tablets:
                        </button>    
                    </h2>
                    <div id="manute_mobile" class="accordion-collapse collapse" aria-labelledby="h2_manute_mobile" data-bs-parent="#accordion_hard">
                        <div class="accordion-body">
                            <strong>Manutenção e reparo de smartphones e Tablets.</strong> Aqui creio eu (não atuo nesta área) que seria necessário trabalhar com as duas plataformas de software e software: O Android e Apple iOS, iPhone, iPad. Mesmo assim indico que comece aprendendo Android e seus adjacentes, e depois de dominar (já estiver consertando e configurando bem) passe para linha Apple.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="h2_manute_automacao">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#manute_automacao" aria-expanded="true" aria-controls="manute_automacao">Sistemas de Automação:
                        </button>    
                    </h2>
                    <div id="manute_automacao" class="accordion-collapse collapse" aria-labelledby="h2_manute_automacao" data-bs-parent="#accordion_hard">
                        <div class="accordion-body">
                        Aqui entra também IOT a internet das coisas (uma área nova mais muito promissora)<br>
                        Instalação e Manutenção de alarmes e sistemas de monitoramento, Câmeras.<br>
                        Instalação e manutenção de sistemas Fotovoltaico, placas de luz Solar...
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- começa a DIV do SOFTWARES com o accordion -->
        <div class="col div_soft">
        <div class="accordion accordion-flush" id="accordion_soft">
                <div class="accordion-item accordion-item2">
                    <h2 class="accordion-header" id="h2_software_pc">
                        <button class="accordion-button accordion-button2" type="button" data-bs-toggle="collapse" data-bs-target="#software_pc" aria-expanded="true" aria-controls="software_pc"><span id="span_soft">Software:</span>
                        </button>    
                    </h2>
                    <div id="software_pc" class="accordion-collapse collapse show" aria-labelledby="h2_software_pc" data-bs-parent="#accordion_soft">
                        <div class="accordion-body">
                        Como requisito básico para a área de software eu recomendo ler (ou assistir youtube) o básico sobre <strong>Sistemas Operacionais</strong>aqui vai o texto sobre SOFTWARTES <strong>Office, Word Excel e Power Point, Photoshop</strong>,...
                        </div>
                    </div>
                </div>
                <div class="accordion-item accordion-item2">
                    <h2 class="accordion-header" id="h2_office">
                        <button class="accordion-button accordion-button2" type="button" data-bs-toggle="collapse" data-bs-target="#office" aria-expanded="true" aria-controls="office">Office, Word Excel e Power Point:
                        </button>    
                    </h2>
                    <div id="office" class="accordion-collapse collapse" aria-labelledby="h2_office" data-bs-parent="#accordion_soft">
                        <div class="accordion-body">
                            <strong>Manutenção e reparo de Microcomputadores, (PC)Personal Computers Desktop, (PC)All-in-One e (PC)Notebooks.</strong> Neste caso cabe também o estudo de softwares, O.S Microsoft Windows e suas ferramentas. Recomendo primeiro se especializar na linha de (PC)Personal Computers, para depois avançar para linha de computadores Apple e seus adjacentes.
                        </div>
                    </div>
                </div>
                <div class="accordion-item accordion-item2">
                    <h2 class="accordion-header" id="h2_front_end">
                        <button class="accordion-button accordion-button2" type="button" data-bs-toggle="collapse" data-bs-target="#front_end" aria-expanded="true" aria-controls="front_end">Front End:
                        </button>    
                    </h2>
                    <div id="front_end" class="accordion-collapse collapse" aria-labelledby="h2_front_end" data-bs-parent="#accordion_soft">
                        <div class="accordion-body">
                            <strong>Programação Front End.</strong> Neste caso também cabe o estudo de seu Sistema Operacional macOS ou Mac OS X e suas ferramentas. Novamente recomendo primeiro se especializar na linha de computadores Apple, para depois avançar para linha de (PC)Personal Computers e seus adjacentes.
                        </div>
                    </div>
                </div>
                <div class="accordion-item accordion-item2">
                    <h2 class="accordion-header" id="h2_back_end">
                        <button class="accordion-button accordion-button2" type="button" data-bs-toggle="collapse" data-bs-target="#back_end" aria-expanded="true" aria-controls="back_end">Back End:
                        </button>    
                    </h2>
                    <div id="back_end" class="accordion-collapse collapse" aria-labelledby="h2_back_end" data-bs-parent="#accordion_soft">
                        <div class="accordion-body">
                            <strong>Programação Back End.</strong> Aqui creio eu (não atuo nesta área) que seria necessário trabalhar com as duas plataformas de software e software: O Android e Apple iOS, iPhone, iPad. Mesmo assim indico que comece aprendendo Android e seus adjacentes, e depois de dominar (já estiver consertando e configurando bem) passe para linha Apple.
                        </div>
                    </div>
                </div>
                
            </div>
    </section>
    <div class="col div_parag2_desc2">
        <p>T.i. é uma área muito extensa por isso o mais correto é você focar em algo dentro desta área que lhe interesse mais, o interesse que falo seria algo que você se identifica, que você goste, claro que para saber o que você mais se identifica você primeiro precisa fazer um contato, eu recomendo o Youtube, com vídeos na área que você acha que vai lê interessar. Abaixo vou colocar uma lista com nomes e aplicações práticas de como ganhar dinheiro dentro desta área. Inclusive vou falar de áreas de não são especificamente dentro de T.I, mas estão em alta LUCRATIVIDADE!</p>
    </div>
</main>
    <?php include('../rodape.php'); ?>
</body>
</html>
