<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- Mensajes -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- Añadir formulario -->
      <div class="card card-body">
        <form action="guardar.php" method="POST">
          <div class="form-group">
            <input type="text" name="Codigo_dane" class="form-control" placeholder="Codigo dane" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Tipo_gobierno" class="form-control" placeholder="Tipo gobierno" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Num_poblacion" class="form-control" placeholder="Num población" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Moneda" class="form-control" placeholder="Moneda" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Num_departamentos" class="form-control" placeholder="Num departamentos" autofocus>
          </div>
          <div class="form-group">
            <textarea name="Sector_economico" rows="2" class="form-control" placeholder="Sector economico"></textarea>
          </div>
          <input type="submit" name="Enviar" class="btn btn-success btn-block" value="Enviar Formulario">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>dane
            <th>nombre</th>
            <th>Gobierno</th>
            <th>poblacion</th>
            <th>Moneda</th>
            <th>departamentos</th>
            <th>Sector</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM formulario";
          $result_formulario = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_formulario)) { ?>
          <tr>
            <td><?php echo $row['Codigo_dane']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['Tipo_gobierno']; ?></td>
            <td><?php echo $row['Num_poblacion']; ?></td>
            <td><?php echo $row['Moneda']; ?></td>
            <td><?php echo $row['Num_departamentos']; ?></td>
            <td><?php echo $row['Sector_economico']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
