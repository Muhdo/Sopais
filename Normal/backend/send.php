<?php
   include_once "database.php";

   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $mensagem = $_POST["mensagem"];
   $key = "";
   $a = -1;

   if (strlen($nome) < 4 || strlen($nome) > 60 || !preg_match("/^[a-záàâãäåæçèéêëìíîïðñòóôõøùúûüýþÿı ]*$/i", $nome)) {
      echo "Error";
      exit();
   } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 256) {
         echo "Error";
         exit();
      } else {
         if (strlen($mensagem) < 10 || strlen($mensagem) > 65535) {
            echo "Error";
            exit();
         } else {
            do {
               $a += 1;
               $key = KeyGenerator(4);

               $queryProcurarkey = $connection->prepare("SELECT * FROM Mensagem WHERE Key_Mensagem = :Key");
               $queryProcurarkey->bindParam(":Key", $key, PDO::PARAM_STR);
               $queryProcurarkey->execute();

               if ($queryProcurarkey->rowCount() == 0) {
                  $queryProcurarkey->closeCursor();

                  break;
               }

            } while (true);
            $queryInserir = $connection->prepare("INSERT INTO Mensagem(Key_Mensagem, Nome, Email, Mensagem) VALUES (:Key, :Nome, :Email, :Mensagem)");

            $queryInserir->bindParam(":Key", $key, PDO::PARAM_STR);
            $queryInserir->bindParam(":Nome", utf8_decode($nome), PDO::PARAM_STR);
            $queryInserir->bindParam(":Email", $email, PDO::PARAM_STR);
            $queryInserir->bindParam(":Mensagem", utf8_decode($mensagem), PDO::PARAM_STR);

            if ($queryInserir->execute()) {
               $queryInserir->closeCursor();
               $connection = null;

               echo "Sent";
            } else {
               $queryInserir->closeCursor();
               $connection = null;

               echo "Error";
               exit();
            }
            exit();
         }
      }
   }

   function KeyGenerator($len){
      $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789+/');
      shuffle($seed);
      $rand = '';
      foreach (array_rand($seed, $len) as $k) $rand .= $seed[$k];

      return $rand;
   }
?>
