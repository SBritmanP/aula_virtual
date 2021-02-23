<?php

  include("../src/db.php");

  if(isset($_GET['dnie'])){
    $dnie = $_GET['dnie'];
    $query = " DELETE FROM estudiante WHERE dnie = $dnie";
    $result = mysqli_query($con, $query);
    if(!$result){
      die("ERROR ...  Query Failed");
    }

    $_SESSION['message'] = 'eliminado correctamente';
    $_SESSION['message_type'] = 'danger';
    
    header("Location: ../views/estudiantes.php");
  }



?>