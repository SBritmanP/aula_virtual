<?php include("../src/db.php")?>
<?php include("../includes/header.php")?>


  <div class="container p-4">
  <h1>FINESI-Docentes</h1>
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
        <form action="../src/save_task.php" method="POST">
          <div class="form-group">
            <input type="number" name="dni" class="form-control" placeholder="DNI" autofocus>
          </div>
        <br>
          <div class="form-group">
            <input type="text" name="codigo" class="form-control" placeholder="Codigo Docente" autofocus>
          </div>
        <br>
          <div class="form-group">
            <input type="text" name="nombred" class="form-control" placeholder="Nombre Apellidos" autofocus>
          </div>
        <br>
          <div class="form-group">
            <input type="text" name="dir"  class="form-control" placeholder="Direccion" autofocus></input>
          </div>
        <br>
          <div class="form-group">
            <input type="number" name="cursor" class="form-control" placeholder="Numero Curso" autofocus>
          </div>
        <br>
          <input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <br>
        <table  class="table table-dark table-striped">
          <thead> 
            <tr>
              <th>DNI</th>
              <th>CODIGO DOCENTE</th>
              <th>NOMBRE</th>
              <th>DIRECCION</th>
              <th>NUMERO DE CURSOS</th>
              <th>ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM docente";
              $result_docente = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($result_docente)){ ?>
                <tr>
                  <td><?php echo $row['dni']?></td>
                  <td><?php echo $row['codigoD']?></td>
                  <td><?php echo $row['nombred']?></td>
                  <td><?php echo $row['direciond']?></td>
                  <td><?php echo $row['cursos']?></td>
                  <td>
                    <a href="../src/edit.php?dni=<?php echo $row['dni'] ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                    <a href="../src/delete.php?dni=<?php echo $row['dni'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>
          </tbody>
        </table>
        <a href="../src/excel.php" class="btn btn-primary">Exportar Excel</a>
    </div>
  </div>

  </div>
<?php include("../includes/footer.php")?>