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
      <link rel="stylesheet" href="../css/contactos.css">

      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
      <script type="text/javascript" src="../js/map.js"></script>
   </head>
   <body>
      <?php
         include_once "includes/header.php";
      ?>
      <main>
         <div class="parallax-container">
            <div class="parallax">
               <img class="img-heading" src="../img/seguranca.png">
            </div>
         </div>
         <div class="div-wrapper">
               <div id="mapid"></div>
            <div class="div-container">
               <div class="div-content">
                  <h6>Endereço</h6>
                  <p>Eco-Parque Empresarial Estarreja<br>Rua de Canelas, nº3<br>3860-529 Estarreja, Portugal</p>
               </div>
               <div class="div-content">
                  <h6>Fale Connosco</h6>
                  <p>Telefone: (+351) 234 548 137<br>E-mail: geral@sopais.pt</p>
               </div>
            </div>
            <div class="div-container">
               <div class="div-content icons">
                  <a class="link" target="_blank" href="https://www.facebook.com/sopaislda" id="noScript">
                     <img class="social" src="../img/icons/facebookbox.png">
                  </a>
                  <a class="link" target="_blank" href="https://www.youtube.com/channel/UCUwKckOoooyihJaUKwSuMIQ" id="noScript">
                     <img class="social" src="../img/icons/youtubebox.png">
                  </a>
                  <a class="link" target="_blank" href="https://www.linkedin.com/company/sopais?trk=tyah&trkInfo=tarId%3A1397663293041%2Ctas%3Asopais%2Cidx%3A1-1-1" id="noScript">
                     <img class="social" src="../img/icons/linkedinbox.png">
                  </a>
               </div>
               <div class="div-content form">
                  <form id="formulario" name="formulario" action="../backend/send.php" method="post">
                     <p>
                        <input type="text" id="nome" name="nome" value="" placeholder="Nome" maxlength="60" required>
                     </p>
                     <p>
                        <input type="text" id="email" name="email" value="" placeholder="Email" maxlength="256" required>
                     </p>
                     <p>
                        <textarea id="mensagem" name="mensagem" rows="16" cols="80" placeholder="Mensagem" maxlength="65535" required></textarea>
                     </p>
                     <input type="submit" id="submit" name="submit" value="Enviar">
                  </form>
                  <h4 id="form-report"></h4>
               </div>
            </div>
         </div>
      </main>

      <script>
         $(document).ready(function() {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);
         });

         function Styling(input, action) {
            if (action == "Error") {
               document.getElementById(input).classList.add("form-input-erro");
            } else if (action == "Valid") {
               document.getElementById(input).classList.remove("form-input-erro");
            }

            if (document.getElementById(input).value != "") {
               document.getElementById(input).classList.add("formUsed");
            } else {
               document.getElementById(input).classList.remove("formUsed");
            }
         }

         var Timer;
         var Intervalo = 500;

         $("#nome").on("blur", function() {
            $.ajax({
               type: "POST",
               url: "../backend/validations/nome.php",
               data: {
                  nome: formulario.nome.value
               },
               success: function(output) {
                  Styling("nome", output);
               }
            });
         });
         $("#nome").on("keyup", function() {
            clearTimeout(Timer);
            Timer = setTimeout(function() {
               $.ajax({
                  type: "POST",
                  url: "../backend/validations/nome.php",
                  data: {
                     nome: formulario.nome.value
                  },
                  success: function(output) {
                     Styling("nome", output);
                  }
               });
            }, Intervalo);
         });
         $("#nome").on("keydown", function() {
            clearTimeout(Timer);
         });

         $("#email").on("blur", function() {
            $.ajax({
               type: "POST",
               url: "../backend/validations/email.php",
               data: {
                  email: formulario.email.value
               },
               success: function(output) {
                  Styling("email", output);
               }
            });
         });
         $("#email").on("keyup", function() {
            clearTimeout(Timer);
            Timer = setTimeout(function() {
               $.ajax({
                  type: "POST",
                  url: "../backend/validations/email.php",
                  data: {
                     email: formulario.email.value
                  },
                  success: function(output) {
                     Styling("email", output);
                  }
               });
            }, Intervalo);
         });
         $("#email").on("keydown", function() {
            clearTimeout(Timer);
         });

         $("#mensagem").on("blur", function() {
            $.ajax({
               type: "POST",
               url: "../backend/validations/mensagem.php",
               data: {
                  mensagem: formulario.mensagem.value
               },
               success: function(output) {
                  Styling("mensagem", output);
               }
            });
         });
         $("#mensagem").on("keyup", function() {
            clearTimeout(Timer);
            Timer = setTimeout(function() {
               $.ajax({
                  type: "POST",
                  url: "../backend/validations/mensagem.php",
                  data: {
                     mensagem: formulario.mensagem.value
                  },
                  success: function(output) {
                     Styling("mensagem", output);
                  }
               });
            }, Intervalo);
         });
         $("#mensagem").on("keydown", function() {
            clearTimeout(Timer);
         });

         $("#formulario").submit(function(e) {
         e.preventDefault();
         $.ajax({
            type: "POST",
            url: "../backend/validations/nome.php",
            data: {
               nome: formulario.nome.value
            },
            success: function(output) {
               if (output == "Error") {
                  Styling("nome", output);
               } else if (output == "Valid") {
                  $.ajax({
                     type: "POST",
                     url: "../backend/validations/email.php",
                     data: {
                        email: formulario.email.value
                     },
                     success: function(output) {
                        if (output == "Error") {
                           Styling("email", output);
                        } else if (output == "Valid") {
                           $.ajax({
                              type: "POST",
                              url: "../backend/validations/mensagem.php",
                              data: {
                                 mensagem: formulario.mensagem.value
                              },
                              success: function(output) {
                                 if (output == "Error") {
                                    Styling("mensagem", output);
                                 } else if (output == "Valid") {
                                    $.ajax({
                                       type: "POST",
                                       url: "../backend/send.php",
                                       data: {
                                          nome: formulario.nome.value,
                                          email: formulario.email.value,
                                          mensagem: formulario.mensagem.value
                                       },
                                       success: function(output) {
                                          if (output == "Sent") {
                                             $("#nome").val("");
                                             $("#email").val("");
                                             $("#mensagem").val("");

                                             $("#form-report").html("Mensagem enviada com sucesso! Responderemos em breve!");
                                          } else if (output == "Error") {
                                             $("#form-report").html("Não foi possivel enviar a mensagem! Tente novamente em uns instantes.");
                                          } else if (output == "EmailError") {
                                             $("#form-report").html("A mensagem não foi corretamente enviada! Poderemos demorar a responder!");
                                          } else {
                                             console.log(output);
                                          }
                                       }
                                    });
                                 }
                              }
                           });
                        }
                     }
                  });
               }
            }
         });
      })

      </script>
      <?php
         include_once "includes/footer.php";
      ?>
   </body>
</html>
