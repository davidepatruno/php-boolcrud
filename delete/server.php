<?php
  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $db_name);

  if ($conn->connect_error) {
    die("errore di connessione");
  }

  $id = $_POST['id'];

  $sql = "DELETE FROM `ospiti` WHERE `id` = $id";

  $result = $conn->query($sql);

  if ($result == true) {
    echo "cancellato con successo";
  }
  else {
    echo "errore l'elemento non è stato cancellato";
  }


  $conn->close();
 ?>
