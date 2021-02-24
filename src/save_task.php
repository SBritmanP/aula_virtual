
<?php

  include("../src/db.php");

  if(isset($_POST['save_task'])){
    $dni = $_POST['dni'];
    $codigod = $_POST['codigo'];
    $nombre = $_POST['nombred'];
    $direccion = $_POST['dir'];
    $ncurso = $_POST['cursor'];

    $query = "INSERT INTO docente(dni, codigoD, nombred, direciond, cursos) VALUES('$dni', '$codigod', '$nombre', '$direccion', '$ncurso')";
    $result = mysqli_query($con, $query);
    if(!$result){
      die("query fail");
    }
    $_SESSION['message'] = 'Guardado Correctamente';
    $_SESSION['message_type'] = 'success';
    header("Location: ../views/docentes.php");
  }

?>