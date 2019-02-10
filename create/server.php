<?php

  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  // da elaborare eventuale check formato data inserita
  $inputdate = $_POST['date_of_birth'];
  $datefrstring = date_create($inputdate);
  $dateofbirth = date_format($datefrstring, "Y-m-d");
  $typedoc = $_POST['document_type'];
  $numdoc = $_POST['document_number'];

  if (empty($name) || empty($lastname) || empty($inputdate) || empty($typedoc) || empty($numdoc))
  {
    die("Errore nella compilazione dati, ricompilare il form");
  };

  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $db_name);

  if ($conn->connect_error){
    echo "errore connessione" . $conn->connect_error;
  };

  $sql = "INSERT INTO `ospiti` (`name`, `lastname`, `date_of_birth`, `document_type`, `document_number`, `created_at`) VALUES ('$name', '$lastname', '$dateofbirth', '$typedoc', '$numdoc', now())";

  $result = $conn->query($sql);

  if ($result == true){
    echo "creazione eseguita";
  }else {
    echo "errore creazione nuovo ospite";
  };

  $conn->close();
?>
