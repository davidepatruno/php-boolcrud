<?php
  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $db_name);

  if ($conn->connect_error){
    echo "errore connessione" . $conn->connect_error;
  };

  $id = $_POST['id'];
  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  // da elaborare eventuale check formato data inserita
  $inputdate = $_POST['date_of_birth'];;
  $datefrstring = date_create($inputdate);
  $dateofbirth = date_format($datefrstring, "Y-m-d");
  $typedoc = $_POST['document_type'];
  $numdoc = $_POST['document_number'];

  if (empty($name) || empty($lastname) || empty($inputdate) || empty($typedoc) || empty($numdoc))
  {
    die("Errore nella compilazione dati, ricompilare il form");
  };

  $sql = "UPDATE `ospiti` SET `name` = '$name', `lastname` = '$lastname', `date_of_birth` = '$dateofbirth', `document_type` = '$typedoc', `document_number` = '$numdoc', `updated_at` = now() WHERE `id` =  $id";

  $result = $conn->query($sql);

  if ($result == true)
  {
    echo "La scheda ospite è stata aggiornata";
  }
  else {
    echo "errore nel form, ricompilare o controllare i dati inseriti";
  }

  $conn->close();
 ?>
