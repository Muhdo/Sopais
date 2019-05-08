<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../fullPage.js/dist/fullpage.min.css" />
      <script type="text/javascript" src="../fullPage.js/dist/fullpage.min.js"></script>

      <link rel="stylesheet" href="../materialize/css/materialize.css">
      <script src="../materialize/js/materialize.min.js"></script>

      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/index.css">
      <link rel="stylesheet" href="../css/footer.css">
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main id="fullpage">
         <div class="section fp-auto-height" id="section0">
            <video preload="metadata" data-autoplay autoplay controls muted controlsList="nodownload">
               <source src="../img/SOPAIS.mp4" type="video/mp4">
            </video>
            <h1 class="heading">Excellence tailored for your products</h1>
         </div>
         <div class="section" id="section1">
               <div class="div-division flow division-top" id="img-certs">
                  <div class="div-cert" id="1" onclick="changeText($(this).attr('id'))">
                     <img class="img-certlogo" src="../img/certs/IATF16949-E.png">
                  </div>
                  <div class="div-cert" id="2" onclick="changeText($(this).attr('id'))">
                     <img class="img-certlogo" src="../img/certs/ISO9001Qu-E.png">
                  </div>
                  <div class="div-cert" id="3" onclick="changeText($(this).attr('id'))">
                     <img class="img-certlogo" src="../img/certs/ISO14001.png">
                  </div>
                  <div class="div-cert" id="4" onclick="changeText($(this).attr('id'))">
                     <img class="img-certlogo" src="../img/certs/NP4397_OHSAS18001.png">
                  </div>

                  <b class="cert-desc"></b>
                  <div class="button">
                     <a href="qualidade.php">Saiba mais</a>
                  </div>
               </div>
         </div>
         <div class="section div-division flow division-top" id="section2">
            <div class="navigation" onclick="back();">
               <img src="../img/icons/arrow-bwd.png">
            </div>
            <div class="div-carousel flow">
               <div class="div-header">
                  <h3>O que fazemos</h3>
                  <div class="button">
                     <a href="quefazemos.php">Ver mais</a>
                  </div>
               </div>
               <div class="carousel carousel-slider center">
                  <div class="carousel-item center">
                     <img src="../img/carousel/1.1.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/1.2.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/1.3.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/2.1.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/2.2.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/2.3.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/3.1.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/3.2.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/3.3.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/3.4.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/4.1.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/4.2.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/4.3.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/4.4.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/4.5.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/5.1.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/5.2.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/5.3.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/6.1.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/6.2.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/7.1.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/7.2.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/7.3.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/8.1.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/8.2.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/9.1.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/9.2.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/9.3.jpg">
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/10.1.jpg" >
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/10.2.jpg" >
                  </div>
                  <div class="carousel-item center">
                     <img src="../img/carousel/10.3.jpg" >
                  </div>
               </div>
            </div>
            <div class="navigation" onclick="forward();">
               <img src="../img/icons/arrow-fwd.png">
            </div>
         </div>
         <div class="section" id="section3">
            <div class="div-division" id="fundo">
               <div class="div-wrapper">
                  <h5 class="div-message">A <i><b> SOPAIS </b> - Componentes Metálicos, Lda. </i> é uma empresa portuguesa, fundada em 1987 contando por isso com <b> mais de 30 anos de experiência na indústria metalomecânica. </b><br> O foco da empresa está, essencialmente, em servir o nosso cliente da melhor maneira possível garantindo a satisfação do seu cliente final.</h5>
                  <div class="button">
                     <a href="empresa.php">Saiba mais</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="section" id="section4">
            <h3>Notícias</h3>
            <div class="div-division" id="div-noticias">
               <div class="div-container flow">
                  <?php
                     include_once "../backend/database.php";

                     $contagem;
                     $ultimoPost = 0;

                     $queryVerificar = $connection->prepare("SELECT COUNT(key_Noticia) AS 'Contagem' FROM Noticia");
                     $queryVerificar->execute();

                     if ($queryVerificar->rowCount() == 0) {
                        echo "Erro de coneção com o servidor!";

                        $queryVerificar->closeCursor();
                     } else {
                        $resultado = $queryVerificar->fetch(PDO::FETCH_OBJ);
                        $contagem = $resultado->Contagem;

                        $queryVerificar->closeCursor();

                        if ($contagem >= 1) {
                           $queryLoadNoticias = $connection->prepare("SELECT Key_Noticia, TituloPT, Imagem, DataPublicacao FROM Noticia ORDER BY DataPublicacao DESC LIMIT 3");
                           $queryLoadNoticias->execute();

                           if ($queryLoadNoticias->rowCount() >= 1) {
                              foreach ($queryLoadNoticias->fetchAll() as $resultado) {
                                 $ultimoPost++;

                                 if (strlen(utf8_encode($resultado["TituloPT"])) > 60) {
                                    $titulo = mb_substr(utf8_encode($resultado["TituloPT"]), 0, 60)."<code>...</code>";
                                 } else {
                                    $titulo = utf8_encode($resultado["TituloPT"]);
                                 }

                                 setlocale(LC_ALL, 'pt_PT', 'pt_PT.utf-8', 'pt_PT.utf-8', 'portuguese');
                                 echo '<div class="div-content post artigo" id="'.$resultado["Key_Noticia"].'" cont="'.$ultimoPost.'">
                                 <div class="image-container">
                                 <img id="imagem" src="data:image/jpeg;base64,'.base64_encode($resultado["Imagem"]).'">
                                 </div>
                                 <h4 id="Data">'.ucfirst(utf8_encode(strftime("%d %B, %Y &agrave;s %H:%M", strtotime($resultado["DataPublicacao"])))).'</h4>
                                 <h3 id="titulo">'.$titulo.'</h3>
                                 </div>';
                              }
                           }
                           $queryLoadNoticias->closeCursor();
                        } else {
                           echo "Ainda não existe nenhuma notícia.";
                        }
                     }
                  ?>
               </div>
               <div class="button">
                  <a href="noticias.php">Mais notícias</a>
               </div>
            </div>
         </div>
         <div class="section fp-auto-height fp-footer" id="section5">
            <div class="footer">
               <div class="div-bar">
                  <div class="div-bar-logo" id="bg1"></div>
                  <div class="div-bar-logo" id="bg2"></div>
                  <div class="div-bar-logo" id="bg3"></div>
               </div>
               <div class="contents-outter">
                  <div class="contents">
                     <div class="div-containter vertical">
                        <h5>Menu</h5>
                        <a class="link" href="inicio.php">Inicio</a>
                        <a class="link" href="empresa.php">A Empresa</a>
                        <a class="link" href="quefazemos.php">O Que Fazemos</a>
                        <a class="link" href="qualidade.php">Qualidade</a>
                        <a class="link" href="noticias.php">Notícias</a>
                        <a class="link" href="contactos.php">Contactos</a>
                     </div>
                     <div class="div-containter vertical">
                        <h5>Contactos</h5>
                        <p class="text">Eco-Parque Empresarial</p>
                        <p class="text">Rua de Canelas, nº 3</p>
                        <p class="text">3860-529 Estarreja, Portugal</p>
                        <p class="text"><b>Telefone:</b> (+351) 234 548 137</p>
                        <p class="text"><b>E-mail:</b> geral@sopais.pt</p>
                     </div>
                  </div>
               </div>
               <div class="div-bar">
                  <p class="text">Copyright © 2019 SOPAIS - Componentes Metálicos Lda.</p>
               </div>
            </div>
         </div>
      </main>

      <?php
      include_once "includes/aside.php";
      ?>

      <script>
         $("nav a[href$='inicio.php']").addClass("paginaatual");

         $(document).ready(setTimeout(function() {
            window.location = "#video";
         }, 25));

         changeText(1);

         function changeText(id) {
            $("#img-certs").find("*").removeClass("selected");
            $("#" + id).addClass("selected");

            if (id == 1) {
               $(".cert-desc").html("Sistemas de Gestão de Qualidade para a Indústria Automóvel");
            }
            else if (id == 2) {
               $(".cert-desc").html("Sistemas de Gestão de Qualidade");
            }
            else if (id == 3) {
               $(".cert-desc").html("Sistemas de Gestão Ambiental");
            }
            else if (id == 4) {
               $(".cert-desc").html("Sistemas de Gestão de Saúde e Segurança no Trabalho");
            }
            else {
               $(".cert-desc").html();
            }
         }

         var myFullpage = new fullpage("#fullpage", {
            anchors: ["video", "certificados", "produtos", "informacoes", "noticias", "footer"],
            scrollBar: true,
            css3: true,
            scrollingSpeed: 1000,
            responsiveWidth: 888,
            easing: "easeInOutCubic"
         });

         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, {
               fullWidth: true
            });
         });

         function back() {
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            l.prev();
         }

         function forward() {
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            l.next();
         }
      </script>
   </body>
</html>
