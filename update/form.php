<?php include '../partials/_head.php'; ?>
<?php include '../partials/_navbar.php'; ?>

<?php include '../functions.php';

  $id = $_GET['id'];
  $ospite = ospiteByID($id);
  if (empty($ospite))
  {
    die("errore ID");
  };
 ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h2>Aggiorna la scheda Ospite con ID : <?php echo $_GET['id']; ?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <form class="form-group" method="post" action="http://localhost/php-boolcrud/update/server.php">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <div class="form-group">
          <label for="name">Nome ospite</label>
          <input class="form-control" type="text" name="name" value="<?php echo $ospite['name']; ?>">
        </div>
        <div class="form-group">
          <label for="lastname">Cognome ospite</label>
          <input class="form-control" type="text" name="lastname"  value="<?php echo $ospite['lastname']; ?>">
        </div>
        <div class="form-group">
          <label for="date_of_bith">Data di nascita</label>
          <input class="form-control" type="text" name="date_of_birth" value="<?php echo $ospite['date_of_birth']; ?>">
        </div>
        <div class="form-group">
          <label for="document_type">Tipo di documento</label>
          <input class="form-control" type="text" name="document_type" value=<?php echo $ospite['document_type']; ?>">
        </div>
        <div class="form-group">
          <label for="dodcument_number">numero del documento</label>
          <input class="form-control" type="text" name="document_number" value=<?php echo $ospite['document_number']; ?>">
        </div>
        <div class="form-group">
          <input type="submit"  value="salva">
        </div>
      </form>
    </div>
  </div>
</div>

<?php include '../partials/_footer.php' ?>
