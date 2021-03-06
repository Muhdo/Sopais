<?php
   include_once "../backend/database.php";

   $ultimoPost = $_POST["ultimoPost"];
   $language = $_POST["language"];

   if (isset($_POST)) {
      $queryLoadNoticias = $connection->prepare("SELECT Key_Noticia, TituloPT, TituloEN, Imagem, DataPublicacao FROM Noticia ORDER BY DataPublicacao DESC LIMIT ".($ultimoPost).",6");
      $queryLoadNoticias->execute();

      if ($queryLoadNoticias->rowCount() >= 1) {
         if ($language == "PT") {
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
         } elseif ($language == "EN") {
            foreach ($queryLoadNoticias->fetchAll() as $resultado) {
               $ultimoPost++;
               if (strlen(utf8_encode($resultado["TituloEN"])) > 60) {
                  $titulo = mb_substr(utf8_encode($resultado["TituloEN"]), 0, 60)."<code>...</code>";
               } else {
                  $titulo = utf8_encode($resultado["TituloEN"]);
               }

               setlocale(LC_ALL, 'en', 'en.utf-8', 'en.utf-8', 'english');
               echo '<div class="div-content post artigo" id="'.$resultado["Key_Noticia"].'" cont="'.$ultimoPost.'">
               <div class="image-container">
               <img id="imagem" src="data:image/jpeg;base64,'.base64_encode($resultado["Imagem"]).'">
               </div>
               <h4 id="Data">'.ucfirst(utf8_encode(strftime("%d %B, %Y at %I:%M %p", strtotime($resultado["DataPublicacao"])))).'</h4>
               <h3 id="titulo">'.$titulo.'</h3>
               </div>';
            }
         }
      }
      $queryLoadNoticias->closeCursor();
   }
?>
