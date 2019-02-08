<?php
  include 'env.php';

  $conn = new Mysqli($servername, $username, $password, $db_name);

  if ($conn->connect_error){
    echo "errore connessione" . $conn->connect_error;
  }

  $sql = ' SELECT * FROM `ospiti`';
  $results = $conn->query($sql);


  if ($results->num_rows > 0){

    $ospiti = [];
    while ($row = $results->fetch_assoc()) {
      $ospiti[] = $row;
    };
  };


  $conn->close();

 ?>
