<?php include("../src/db.php")?>
<?php include("../includes/header.php")?>


  <div class="container p-4">
  <h1>FINESI-Estudiantes</h1>
  <div class="row">
    <div class="col-md-4">
      <?php if(isset($_SESSION['message'])){ ?>
          <div class="alert alert-<?= $_SESSION['message_type'];?>" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php session_unset(); } ?>
        <br>
      <div class="card card-body">
        <form action="../src/save_taske.php" method="POST">
          <div class="form-group">
            <input type="number" name="dnie" class="form-control" placeholder="DNI" autofocus>
          </div>
        <br>
          <div class="form-group">
            <input type="text" name="codigoe" class="form-control" placeholder="Codigo Estudiante" autofocus>
          </div>
        <br>
          <div class="form-group">
            <input type="text" name="nombree" class="form-control" placeholder="Nombre Apellidos" autofocus>
          </div>
        <br>
          <div class="form-group">
            <input type="text" name="direcione"  class="form-control" placeholder="Direccion" autofocus></input>
          </div>
        <br>
          <div class="form-group">
            <input type="number" name="notas" class="form-control" placeholder="Promedio final" autofocus>
          </div>
        <br>
          <div class="form-group">
            <input type="number" name="semestre" class="form-control" placeholder="Semestre" autofocus>
          </div>
        <br>
          <input type="submit" class="btn btn-success btn-block" name="save_taske" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <br>
        <table  class="table table-dark table-striped">
          <thead> 
            <tr>
              <th>DNI</th>
              <th>CODIGO ESTUDIANTE</th>
              <th>NOMBRE APELLIDOS</th>
              <th>DIRECCION</th>
              <th>PROMEDIO FINAL</th>
              <th>SEMESTRE</th>
              <th>ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM estudiante";
              $result_estudiante = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($result_estudiante)){ ?>
                <tr>
                  <td><?php echo $row['dnie']?></td>
                  <td><?php echo $row['codigoe']?></td>
                  <td><?php echo $row['nombree']?></td>
                  <td><?php echo $row['direcione']?></td>
                  <td><?php echo $row['notas']?></td>
                  <td><?php echo $row['semestre']?></td>
                  <td>
                    <a href="../src/editee.php?dnie=<?php echo $row['dnie']; ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                    <a href="../src/deletee.php?dnie=<?php echo $row['dnie']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>
          </tbody>
        </table>
        <a href="../src/exceLe.php" class="btn btn-primary">Exportar Excel</a>
    </div>
  </div>

  </div>
<?php include("../includes/footer.php")?>