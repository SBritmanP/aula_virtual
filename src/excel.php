<?php


include("../src/db.php");

$query=mysqli_query($con,"SELECT * FROM docente");
$docu = "docentes.xls";
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename='.$docu);
header('Pragma: no-cache');
header('Expires: 0');
echo '<table border=1>';
echo '<tr>';
echo '<th colspan=5>LISTA DE DOCENTES REGISTRADOS</th>';
echo '<tr> ';
echo '<tr><th>DNI</th><th>CODIGO</th><th>NOMBRE</th><th>DIRECCION</th><th>CURSOS</th></tr>';
while($row=mysqli_fetch_array($query)){
  echo '<tr>';
  echo '<td>'.$row['dni'].'</td>';
  echo '<td>'.$row['codigoD'].'</td>';
  echo '<td>'.$row['nombred'].'</td>';
  echo '<td>'.$row['direciond'].'</td>';
  echo '<td>'.$row['cursos'].'</td>';
}
echo'</table>';
?>