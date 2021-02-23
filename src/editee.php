<?php

  include("../src/db.php");
  if(isset($_GET['dnie'])){
    $dnie = $_GET['dnie'];
    $query = "SELECT * FROM estudiante WHERE dnie = $dnie";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) == 1){
      $row = mysqli_fetch_array($result);
      $dnie = $row['dnie']; 
      $codigoe = $row['codigoe']; 
      $nombree = $row['nombree']; 
      $direccion = $row['direcione']; 
      $notas = $row['notas']; 
      $semestre = $row['semestre'];
    }
  }
  if(isset($_POST['update'])){
    $dnie = $_GET['dnie'];
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $notas = $_POST['notas'];
    $semestre = $_POST['semestre'];

    $query = "UPDATE estudiante set codigoe='$codigo', nombree = '$nombre', direcione='$direccion', cursos='$cursos', semestre='$semestre' WHERE dnie = $dnie";
    mysqli_query($con, $query);

    $_SESSION['message'] = 'actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header("Location: ../views/estudiantes.php");
  }

?>

<?php include("../includes/header.php") ?>

  <div class="container p-4">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="car card-body">
          <form action="../src/editee.php?dni=<?php echo $_GET['dnie']; ?>" method="POST">
            <div class="form-group">
            <input type="text" name="dnie" value="<?php echo $dnie; ?>" class="form-control" placeholder="actualizar dni">
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="codigo" value="<?php echo $codigoe; ?>" class="form-control" placeholder="actualizar dni">
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="nombre" value="<?php echo $nombree; ?>" class="form-control" placeholder="actualizar dni">
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control" placeholder="actualizar dni">
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="notas" value="<?php echo $notas; ?>" class="form-control" placeholder="actualizar dni">
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="semestre" value="<?php echo $semestre; ?>" class="form-control" placeholder="actualizar dni">
            </div>
            <br>
            <button class=" btn btn-success" name="update">
              Actualizar
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>


<?php include("../includes/footer.php") ?>