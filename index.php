
<?php include 'partials/_head.php'; ?>
<?php include 'partials/_navbar.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>ELENCO OSPITI</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="http://localhost/php-boolcrud/create/form.php" class="btn blue">
          Crea nuovo ospite
        </a>
      </div>
    </div>
  </div>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>COGNOME</th>
        <th>DETTAGLI</th>
        <th>AGGIORNA</th>
        <th>RIMUOVI</th>
      </tr>
    </thead>
    <tbody>
      <?php include 'database.php'; ?>
      <?php foreach ($ospiti as $ospite){ ?>
        <tr>
          <td><?php echo $ospite['id']; ?></td>
          <td><?php echo $ospite['name']; ?></td>
          <td><?php echo $ospite['lastname']; ?></td>
          <td>
            <a href="http://localhost/php-boolcrud/show/show.php?id= <?php echo $ospite['id']; ?>" class="btn green">
              VISUALIZZA
            </a>
          </td>
          <td>
            <a href="http://localhost/php-boolcrud/update/form.php?id= <?php echo $ospite['id']; ?>" class="btn blue">
              MODIFICA
            </a>
          </td>
          <td>
            <a href="http://localhost/php-boolcrud/delete/form.php?id= <?php echo $ospite['id']; ?>" class="btn red">
              ELIMINA
            </a>
          </td>
        </tr>
    <?php  } ?>
    </tbody>
  </table>

</div>

<?php include 'partials/_footer.php';  ?>
