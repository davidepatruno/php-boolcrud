<?php include '../partials/_head.php'; ?>
<?php include '../partials/_navbar.php'; ?>

<?php include '../functions.php';
  $ospite = ospiteByID($_GET['id']);

  if (empty($ospite))
  {
    die("errore ID");
  }
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <span>Ospite con codice ID </span> <?php echo $ospite['id']; ?>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><span>Nome :</span> <?php echo $ospite['name']; ?></li>
          <li class="list-group-item"><span>Cognome :</span> <?php echo $ospite['lastname']; ?></li>
          <li class="list-group-item"><span>Data di nascita :</span> <?php echo $ospite['date_of_birth']; ?></li>
          <li class="list-group-item"><span>Tipo documento di riconoscimento :</span> <?php echo $ospite['document_type']; ?></li>
          <li class="list-group-item"><span>Numero del documento :</span> <?php echo $ospite['document_number']; ?></li>
          <li class="list-group-item"><span>Creato il :</span> <?php echo $ospite['created_at']; ?></li>
          <li class="list-group-item"><span>Aggiornato il :</span> <?php echo $ospite['updated_at']; ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include '../partials/footer.php' ?>
