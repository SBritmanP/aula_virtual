
<?php

include("../src/db.php");

if(isset($_POST['save_taske'])){
  $dnie = $_POST['dnie'];
  $codigoe = $_POST['codigoe'];
  $nombre = $_POST['nombree'];
  $direccion = $_POST['direcione'];
  $notas = $_POST['notas'];
  $semestre = $_POST['semestre'];

  $query = "INSERT INTO estudiante(dnie, codigoe, nombree, direcione, notas, semestre) VALUES('$dnie', '$codigoe', '$nombre', '$direccion', '$notas', '$semestre')";
  $result = mysqli_query($con, $query);
  if(!$result){
    die("query fail");
  }
  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header("Location: ../views/estudiantes.php");
}

?>