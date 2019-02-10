<?php

  function ospiteByID($id)
  {
    include 'env.php';

    $ospite = [];

    $conn = new Mysqli($servername, $username, $password, $db_name);

    if ($conn->connect_error){
      return $ospite;
    };

    $id = $_GET['id'];

    $sql = "SELECT * FROM `ospiti` WHERE `id` = $id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
      $ospite = $result->fetch_assoc();
    }

    $conn->close();
    
  return $ospite;
};

?>
