<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
      <title>Sopais</title>
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
         <img class="img-heading" src="../img/welding.png">
         <div class="section div-division flow division-top">
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
         <div class="div-wrapper flow division-top temas">
            <p class="temaSelected" id="1" onclick="mudarCarousel(18, 1);">Estampagem</p>
            <p id="2" onclick="mudarCarousel(0, 2);">Conformação de Fita</p>
            <p id="3" onclick="mudarCarousel(28, 3);">Conformação de Tubo</p>
            <p id="4" onclick="mudarCarousel(null, 4);">Apoio ao Desenvolvimento de Projetos</p>
            <p id="5" onclick="mudarCarousel(null, 5);">Soldadura</p>
         </div>
         <div class="div-wrapper">
            <video preload="metadata" autoplay muted loop id="video">
               <source src="../img/Stamping.mp4" type="video/mp4">
               </video>
            </div>
         <div class="div-wrapper texto">
            <p>Parque diversificado de prensas, mecânicas e hidráulicas, com forças compreendidas entre as 45 e as 315 toneladas.</p>
         </div>
         <img class="img-footing" src="../img/welding.png">
      </main>

      <script>
         $(document).ready(setTimeout(function() {
            window.location = "#intro";
         }, 25));

         $(document).ready(function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, {
               fullWidth: true,
               onCycleTo: function(data) {
                  var lastindex;
                  var index;
                  lastindex = index;
                  index = $(data).data('cindex');
               },
            });
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            l.set(20);
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

         function mudarCarousel(item, id) {
            var el = document.querySelector(".carousel");
            var l = M.Carousel.getInstance(el);
            if (item != null) {
               l.set(item);
            }

            var $video = $('video');

            $(".temaSelected").removeClass("temaSelected");
            $("#" + id).addClass("temaSelected");

            if (id == 1) {
               $(".texto p").html("Parque diversificado de prensas, mecânicas e hidráulicas, com forças compreendidas entre as 45 e as 315 toneladas.");
               videoSrc = $('source', $video).attr('src', "../img/Stamping.mp4");
               $video[0].load();
               $video[0].play();
            } else if (id == 2) {
               $(".texto p").html("Ao serviço da empresa temos máquinas BIHLER e técnicos com know-how especializado na afinação das mesmas.");
               videoSrc = $('source', $video).attr('src', "../img/PrecisionMetalworking.mp4");
               $video[0].load();
               $video[0].play();
            } else if (id == 3) {
               $(".texto p").html("Redução, alargamento, corte e conformação de tubo são capacidades que a SOPAIS põe à disposição dos seus clientes.");
               videoSrc = $('source', $video).attr('src', "../img/TubeForming.mp4");
               $video[0].load();
               $video[0].play();
            } else if (id == 4) {
               $(".texto p").html("Dispomos de uma equipa de especialistas prontos para ajudar o seu negócio.");
               videoSrc = $('source', $video).attr('src', "../img/SupportNewProjects.mp4");
               $video[0].load();
               $video[0].play();
            } else if (id == 5) {
               $(".texto p").html("Dispomos de uma ótima qualidade de soldadura com tecnologias MIG/MAG e soldadura por resistência.");
               videoSrc = $('source', $video).attr('src', "../img/Welding.mp4");
               $video[0].load();
               $video[0].play();
            }
         }
      </script>
      <?php
         include_once "includes/footer.php";
      ?>
   </body>
</html>
