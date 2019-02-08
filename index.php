
<?php include 'partials/_head.php'; ?>
<?php include 'partials/_navbar.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>I nostri ospiti</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="http://localhost/php-boolcrud/create/form.php" class="btn btn-primary">
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
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php include 'database.php'; ?>
      <?php foreach ($ospiti as $ospite){ ?>
        <tr>
          <td><?php echo $ospite['id']; ?></td>
          <td><?php echo $ospite['name']; ?></td>
          <td><?php echo $ospite['lastname']; ?></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
    <?php  } ?>
    </tbody>
  </table>

</div>

<?php include 'partials/_footer.php';  ?>
