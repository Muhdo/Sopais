<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
            
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140688859-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-140688859-1');
        </script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <link rel="stylesheet" href="../materialize/css/materialize.css">
      <script src="../materialize/js/materialize.min.js"></script>

      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/quefazemos.css">
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-heading" src="../img/welding.png">
            </div>
         </div>
         <div class="section div-division flow division-top" id="carousel">
            <div class="navigation" onclick="back();">
               <img src="../img/icons/arrow-bwd.png">
            </div>
            <div class="carousel carousel-slider center">
               <div class="carousel-item center" data-cindex="0">
                  <img src="../img/carousel/1.1.jpg">
               </div>
               <div class="carousel-item center" data-cindex="1">
                  <img src="../img/carousel/1.2.jpg">
               </div>
               <div class="carousel-item center" data-cindex="2">
                  <img src="../img/carousel/1.3.jpg">
               </div>
               <div class="carousel-item center" data-cindex="3">
                  <img src="../img/carousel/2.1.jpg">
               </div>
               <div class="carousel-item center" data-cindex="4">
                  <img src="../img/carousel/2.2.jpg">
               </div>
               <div class="carousel-item center" data-cindex="5">
                  <img src="../img/carousel/2.3.jpg">
               </div>
               <div class="carousel-item center" data-cindex="6">
                  <img src="../img/carousel/3.1.jpg">
               </div>
               <div class="carousel-item center" data-cindex="7">
                  <img src="../img/carousel/3.2.jpg">
               </div>
               <div class="carousel-item center" data-cindex="8">
                  <img src="../img/carousel/3.3.jpg">
               </div>
               <div class="carousel-item center" data-cindex="9">
                  <img src="../img/carousel/3.4.jpg">
               </div>
               <div class="carousel-item center" data-cindex="10">
                  <img src="../img/carousel/4.1.jpg">
               </div>
               <div class="carousel-item center" data-cindex="11">
                  <img src="../img/carousel/4.2.jpg">
               </div>
               <div class="carousel-item center" data-cindex="12">
                  <img src="../img/carousel/4.3.jpg">
               </div>
               <div class="carousel-item center" data-cindex="13">
                  <img src="../img/carousel/4.4.jpg">
               </div>
               <div class="carousel-item center" data-cindex="14">
                  <img src="../img/carousel/4.5.jpg">
               </div>
               <div class="carousel-item center" data-cindex="15">
                  <img src="../img/carousel/5.1.jpg">
               </div>
               <div class="carousel-item center" data-cindex="16">
                  <img src="../img/carousel/5.2.jpg">
               </div>
               <div class="carousel-item center" data-cindex="17">
                  <img src="../img/carousel/5.3.jpg">
               </div>
               <div class="carousel-item center" data-cindex="18">
                  <img src="../img/carousel/6.1.jpg">
               </div>
               <div class="carousel-item center" data-cindex="19">
                  <img src="../img/carousel/6.2.jpg">
               </div>
               <div class="carousel-item center" data-cindex="20">
                  <img src="../img/carousel/7.1.jpg">
               </div>
               <div class="carousel-item center" data-cindex="21">
                  <img src="../img/carousel/7.2.jpg">
               </div>
               <div class="carousel-item center" data-cindex="22">
                  <img src="../img/carousel/7.3.jpg">
               </div>
               <div class="carousel-item center" data-cindex="23">
                  <img src="../img/carousel/8.1.jpg">
               </div>
               <div class="carousel-item center" data-cindex="24">
                  <img src="../img/carousel/8.2.jpg">
               </div>
               <div class="carousel-item center" data-cindex="25">
                  <img src="../img/carousel/9.1.jpg">
               </div>
               <div class="carousel-item center" data-cindex="26">
                  <img src="../img/carousel/9.2.jpg">
               </div>
               <div class="carousel-item center" data-cindex="27">
                  <img src="../img/carousel/9.3.jpg">
               </div>
               <div class="carousel-item center" data-cindex="28">
                  <img src="../img/carousel/10.1.jpg">
               </div>
               <div class="carousel-item center" data-cindex="29">
                  <img src="../img/carousel/10.2.jpg">
               </div>
               <div class="carousel-item center" data-cindex="30">
                  <img src="../img/carousel/10.3.jpg">
               </div>
            </div>
            <div class="navigation" onclick="forward();">
               <img src="../img/icons/arrow-fwd.png">
            </div>
         </div>
         <div id="anchor">
            <div class="div-wrapper flow" id="info">
               <div class="flow division-top temas">
                  <ul>
                     <li><p class="temaSelected" id="1" onclick="mudarCarousel(18, 1);"><a href="#anchor">Estampagem</a></p></li>
                     <li><p id="2" onclick="mudarCarousel(0, 2);"><a href="#anchor">Conformação de Fita</a></p></li>
                     <li><p id="3" onclick="mudarCarousel(28, 3);"><a href="#anchor">Conformação de Tubo</a></p></li>
                     <li><p id="4" onclick="mudarCarousel(null, 4);"><a href="#anchor">Apoio ao Desenvolvimento de Projetos</a></p></li>
                     <li><p id="5" onclick="mudarCarousel(null, 5);"><a href="#anchor">Soldadura</a></p></li>
                  </ul>
               </div>
               <div class="content">
                  <video preload="metadata" autoplay muted loop id="video">
                     <source src="../img/Stamping.mp4" type="video/mp4">
                     </video>
                     <div class="texto">
                        <p>Parque diversificado de prensas, mecânicas e hidráulicas, com forças compreendidas entre as 45 e as 315 toneladas.</p>
                     </div>
               </div>
            </div>
         </div>
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-footing" src="../img/welding.png">
            </div>
         </div>
      </main>

      <script>
         $("nav a[href$='quefazemos.php']").addClass("paginaatual");

         $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
               scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
         });

         timer = setInterval(function() {
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            l.next();
         }, 3000);

         $(document).ready(function() {
            var elems2 = document.querySelectorAll('.parallax');
            var instances2 = M.Parallax.init(elems2);

            setTimeout(function() {
               var elems = document.querySelectorAll('.carousel');
               var instances = M.Carousel.init(elems, {
                  fullWidth: true
               });

               var el = document.querySelector(".carousel");
               var l = M.Carousel.getInstance(el);
            }, 100);

            var largura = $('video').width();
            $("video").height(largura * 0.4285714286);

            setTimeout(function() {
               $('html, body').animate({ scrollTop: $('#carousel').offset().top}, 500);
            }, 500);
         });

         function back() {
            clearInterval(timer);
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            l.prev();
            setInterval(timer);
         }

         function forward() {
            clearInterval(timer);
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            l.next();
            setInterval(timer);
         }

         $(window).resize(function() {
            var largura = $('video').width();
            $("video").height(largura * 0.4285714286);
         });

         function mudarCarousel(item, id) {
            clearInterval(timer);
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            if (item != null) {
               l.set(item);
            }
            setInterval(timer);

            var $video = $('video');

            $(".temaSelected").removeClass("temaSelected");
            $("#" + id).addClass("temaSelected");

            if (id == 1) {
               $(".texto p").html("Parque diversificado de prensas, mecânicas e hidráulicas, com forças compreendidas entre as 45 e as 315 toneladas.");
               $($video).fadeOut(500, function() {
                  videoSrc = $('source', $video).attr('src', "../img/Stamping.mp4");
                  $video[0].load();
                  $video[0].play();
                  $($video).fadeIn(500);
               });
            } else if (id == 2) {
               $(".texto p").html("Ao serviço da empresa temos máquinas BIHLER e técnicos com know-how especializado na afinação das mesmas.");
               $($video).fadeOut(500, function() {
                  videoSrc = $('source', $video).attr('src', "../img/PrecisionMetalworking.mp4");
                  $video[0].load();
                  $video[0].play();
                  $($video).fadeIn(500);
               });
            } else if (id == 3) {
               $(".texto p").html("Redução, alargamento, corte e conformação de tubo são capacidades que a SOPAIS coloca à disposição dos seus clientes.");
               $($video).fadeOut(500, function() {
                  videoSrc = $('source', $video).attr('src', "../img/TubeForming.mp4");
                  $video[0].load();
                  $video[0].play();
                  $($video).fadeIn(500);
               });
            } else if (id == 4) {
               $(".texto p").html("Dispomos de uma equipa de especialistas prontos para ajudar o seu negócio.");
               $($video).fadeOut(500, function() {
                  videoSrc = $('source', $video).attr('src', "../img/SupportNewProjects.mp4");
                  $video[0].load();
                  $video[0].play();
                  $($video).fadeIn(500);
               });
            } else if (id == 5) {
               $(".texto p").html("Dispomos de uma ótima qualidade de soldadura com tecnologias MIG/MAG e soldadura por resistência.");
               $($video).fadeOut(500, function() {
                  videoSrc = $('source', $video).attr('src', "../img/Welding.mp4");
                  $video[0].load();
                  $video[0].play();
                  $($video).fadeIn(500);
               });
            }
         }
      </script>
      <?php
         include_once "includes/aside.php";
         include_once "includes/footer.php";
      ?>
   </body>
</html>
