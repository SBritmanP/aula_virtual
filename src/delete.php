<?php

  include("../src/db.php");

  if(isset($_GET['dni'])){
    $dni = $_GET['dni'];
    $query = " DELETE FROM docente WHERE dni = $dni";
    $result = mysqli_query($con, $query);
    if(!$result){
      die("ERROR ...  Query Failed");
    }

    $_SESSION['message'] = 'Eliminado Correctamente';
    $_SESSION['message_type'] = 'danger';
    header("Location:  ../views/docentes.php");
  }


?>