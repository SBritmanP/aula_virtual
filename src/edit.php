<?php

  include("../src/db.php");
  if(isset($_GET['dni'])){
    $dni = $_GET['dni'];
    $query = "SELECT * FROM docente WHERE dni = $dni";
    $result1 = mysqli_query($con, $query);
    if(mysqli_num_rows($result1) == 1){
      $row = mysqli_fetch_array($result);
      $dni = $row['dni']; 
      $codigo = $row['codigoD']; 
      $nombre = $row['nombred']; 
      $direccion = $row['direciond']; 
      $cursos = $row['cursos']; 
    }
  }
  if(isset($_POST['update'])){
    $dni = $_GET['dni'];
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $cursos = $_POST['cursos'];

    $query = "UPDATE docente set codigoD='$codigo', nombred = '$nombre', direciond='$direccion', cursos='$cursos' WHERE dni = $dni";
    mysqli_query($con, $query);

    $_SESSION['message'] = 'actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header("Location: ../views/docentes.php");
  }

?>

<?php include("../includes/header.php") ?>

  <div class="container p-4">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="car card-body">
          <form action="../src/edit.php?dni=<?php echo $_GET['dni'];?>" method="POST">
            <div class="form-group">
            <input type="text" name="dni" value="<?php echo $dni; ?>" class="form-control" placeholder="actualizar dni">
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="codigo" value="<?php echo $codigo; ?>" class="form-control" placeholder="actualizar dni">
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="actualizar dni">
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control" placeholder="actualizar dni">
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="cursos" value="<?php echo $cursos; ?>" class="form-control" placeholder="actualizar dni">
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