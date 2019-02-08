<?php include '../partials/_head.php'; ?>
<?php include '../partials/_navbar.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Crea un nuovo Ospite</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <form class="form-group" method="post" action="http://localhost/php-boolcrud/create/server.php">
        <div class="form-group">
          <label for="name">Nome ospite</label>
          <input class="form-control" type="text" name="name" placeholder="inserisci il nome dell'ospite">
        </div>
        <div class="form-group">
          <label for="lastname">Cognome ospite</label>
          <input class="form-control" type="text" name="lastname" placeholder="inserisci il cognome dell'ospite">
        </div>
        <div class="form-group">
          <label for="date_of_bith">Data di nascita</label>
          <input class="form-control" type="text" name="date_of_birth" placeholder="inserisci la data di nascita (aaaa-mm-gg)">
        </div>
        <div class="form-group">
          <label for="document_type">Tipo di documento</label>
          <input class="form-control" type="text" name="document_type" placeholder="inserisci il tipo di documento">
        </div>
        <div class="form-group">
          <label for="dodcument_number">numero del documento</label>
          <input class="form-control" type="text" name="document_number" placeholder="inserisci il numero del documento">
        </div>
        <div class="form-group">
          <input type="submit"  value="salva">
        </div>
      </form>
    </div>
  </div>
</div>

<?php include '../partials/_footer.php' ?>
